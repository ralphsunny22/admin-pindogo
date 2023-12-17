<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allUsers()
    {
        $allUsers = DB::table('users')->orderBy('id','DESC')->get();
        
        return view('backend.pages.users.allUsers', compact('allUsers'));
    }

    public function activeUsers()
    {
        $allUsers = DB::table('users')->where('status', 1)->orderBy('id','DESC');

        //status-chart
        $activeCount = $allUsers->count();
        $pendingCount = DB::table('users')->where('status', 0)->count();
        $bannedCount = DB::table('users')->whereNotNull('no_of_banned_days')->count();
        $allUsers = $allUsers->get();
        
        return view('backend.pages.users.activeUsers', compact('allUsers', 'activeCount', 'pendingCount', 'bannedCount'));
    }

    public function pendingUsers()
    {
        $allUsers = DB::table('users')->where('status', 0)->orderBy('id','DESC');

        //status-chart
        $activeCount = DB::table('users')->where('status', 1)->count();
        $pendingCount = $allUsers->count();
        $bannedCount = DB::table('users')->whereNotNull('no_of_banned_days')->count();
        $allUsers = $allUsers->get();
        
        return view('backend.pages.users.pendingUsers', compact('allUsers', 'activeCount', 'pendingCount', 'bannedCount'));
    }

    public function bannedUsers()
    {
        $allUsers = DB::table('users')->whereNotNull('no_of_banned_days')->orderBy('id','DESC');

        //status-chart
        $activeCount = DB::table('users')->where('status', 1)->count();
        $pendingCount = DB::table('users')->where('status', 0)->count();
        $bannedCount = $allUsers->count();
        $allUsers = $allUsers->get();
        
        return view('backend.pages.users.bannedUsers', compact('allUsers', 'activeCount', 'pendingCount', 'bannedCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function singleUser($userId)
    {
        $user = DB::table('users')->where('id',$userId)->first();
        if (!isset($user)) {
            abort(404);
        }
        $followingsCount = DB::table('matchings')->where('follower_id', $userId)->count();
        $followersCount = DB::table('matchings')->where('user_id', $userId)->count();

        $followingsCount = Helpers::shortenNumber($followingsCount);
        $followersCount = Helpers::shortenNumber($followersCount);

        return view('backend.pages.users.singleUser', compact('user', 'followingsCount', 'followersCount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function editUser($userId)
    {
        $user = DB::table('users')->where('id',$userId)->first();
        if (!isset($user)) {
            abort(404);
        }
        $userOccupation = isset($user->occupation_id) ? DB::table('occupations')->where('id',$user->occupation_id)->first() : NULL;
        $occupations = DB::table('occupations')->get();

        $social_media = $user->social_media ? json_decode($user->social_media) : NULL;
        $facebook = $social_media?->facebook ? $social_media->facebook : NULL;
        $instagram = $social_media?->instagram ? $social_media->instagram : NULL;
        $twitter = $social_media?->twitter ? $social_media->twitter : NULL;
        $telegram = $social_media?->telegram ? $social_media->telegram : NULL;
        
        return view('backend.pages.users.editUser', compact('user', 'userOccupation', 'occupations', 'social_media', 'facebook', 'instagram', 'twitter', 'telegram'));
    }

    /**
     * Display the specified resource.
     */
    public function editUserPost(Request $request, string $userId)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }
        $data = $request->all();

        $social_media = [];
        $social_media['facebook'] = !empty($request->facebook) ? $request->facebook : NULL;
        $social_media['instagram'] = !empty($request->instagram) ? $request->instagram : NULL;
        $social_media['twitter'] = !empty($request->twitter) ? $request->twitter : NULL;
        $social_media['telegram'] = !empty($request->telegram) ? $request->telegram : NULL;

        $user->name = !empty($request->name) ? $request->name : NULL;
        $user->username = !empty($request->username) ? $request->username : NULL;
        $user->dob = !empty($request->dob) ? $request->dob : NULL;
        $user->email = !empty($request->email) ? $request->email : NULL;
        $user->gender_id = !empty($request->gender_id) ? $request->gender_id : NULL;
        $user->occupation_id = !empty($request->occupation_id) ? $request->occupation_id : NULL;
        $user->country = !empty($request->country) ? $request->country : NULL;
        $user->state = !empty($request->state) ? $request->state : NULL;
        $user->city = !empty($request->city) ? $request->city : NULL;
        $user->social_media = $social_media;

        //$user->interest = !empty($request->interest) ? $request->interest : NULL; //arr
        
        $user->about = !empty($request->about) ? $request->about : NULL;

        if ($request->has('picture')) {
            $picture_image_name = Helpers::upload('users/', 'png', $request->file('picture'));
            $user->picture = 'users/'.$picture_image_name;
        }
        if ($request->has('cover_picture')) {
            $cover_image_name = Helpers::upload('images/users/covers/', 'png', $request->file('cover_picture'));
            $user->cover_picture = 'images/users/covers/'.$cover_image_name;
        }

        $user = (array) $user;
        
        //$user->save();
        DB::table('users')->where('id', $userId)->update($user);

        return back()->with('success', 'User Updated Successfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function banUser($userId, $days)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }

        // Get current date (yyyy-mm-dd format)
        $currentDate = date('Y-m-d');

        // Calculate ban_end as current date plus $days
        $ban_start = $currentDate;
        $ban_end = date('Y-m-d', strtotime("+$days days", strtotime($currentDate)));

        // Update user with ban_start and ban_end dates
        DB::table('users')
            ->where('id', $userId)
            ->update([
                'status' => 0,
                'no_of_banned_days' => $days,
                'ban_start' => $ban_start,
                'ban_end' => $ban_end,
            ]);

        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function stopBan($userId)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }

        // Update user with ban_start and ban_end dates
        DB::table('users')
            ->where('id', $userId)
            ->update([
                'status' => 1,
                'no_of_banned_days' => NULL,
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function softDelete($userId)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }

        DB::table('users')
            ->where('id', $userId)
            ->update([
                'status' => 0,
                'no_of_banned_days' => NULL,
            ]);
        return back();
    }

    public function activateUser($userId)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }

        DB::table('users')
            ->where('id', $userId)
            ->update([
                'status' => 1,
                'no_of_banned_days' => NULL,
            ]);
        return back();
    }

    //permanent delete
    public function forceDelete($userId)
    {
        $user = DB::table('users')->where('id', $userId)->first();
        if (!isset($user)) {
            abort(404);
        }

        DB::table('stories')->where('user_id', $userId)->delete(); //stories
        DB::table('posts')->where('user_id', $userId)->delete(); //posts
        DB::table('saved_posts')->where('user_id', $userId)->delete(); //saved_posts
        DB::table('saved_reels')->where('user_id', $userId)->delete(); //saved_reels
        DB::table('reels')->where('user_id', $userId)->delete(); //reels
        DB::table('chat_users')->where('user_id', $userId)->delete(); //chat_users
        DB::table('group_chat_users')->where('user_id', $userId)->delete(); //group_chat_users
        DB::table('groups')->where('user_id', $userId)->delete(); //groups

        Helpers::removeFile('users/', $user->picture);
        Helpers::removeFile('images/users/covers/', $user->cover_picture);

        DB::table('users')->where('id', $userId)->delete();

        //return back()->with('success', 'User Deleted Successfully');
        return redirect()->route('allUsers')->with('success', 'User Deleted Successfully');
    }

    public function usersAnalytics()
    {
        //gender-chart
        $malesCount = DB::table('users')->where('gender_id', '1')->count();
        $femalesCount = DB::table('users')->where('gender_id', '2')->count();

        $webUsersCount = DB::table('users')->where('platform', 'web')->count();
        $mobileUsersCount = DB::table('users')->where('platform', 'mobile')->count();

        //status-chart
        $activeCount = DB::table('users')->where('status', 1)->count();
        $pendingCount = DB::table('users')->where('status', 0)->count();
        $bannedCount = DB::table('users')->whereNotNull('no_of_banned_days')->count();

        $userCountsByCountry = $this->usersByCountry();
        $monthlyCounts = $this->userRegistrationsByMonth();
        $yearlyCounts = $this->userRegistrationsByYear();


        return view('backend.pages.users.usersAnalytics', compact('malesCount', 'femalesCount', 'webUsersCount', 'mobileUsersCount', 'activeCount', 'pendingCount', 'bannedCount', 
        'userCountsByCountry', 'monthlyCounts', 'yearlyCounts'));
    }

    public function usersByCountry()
    {
        // Fetch user counts by country
        $userCountsByCountry = DB::table('users')
            ->select('country', DB::raw('COUNT(*) as user_count'))
            ->groupBy('country')
            ->orderBy('user_count', 'DESC')
            ->get();

        return $userCountsByCountry;
    }


    public function userRegistrationsByMonth()
    {
        // Fetch user registration counts for each month of the year
        $yearlyData = DB::table('users')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', now()->year)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck('count', 'month');

        // Initialize an array to hold user counts for each month (initially set to zero)
        $monthlyCounts = array_fill(1, 12, 0);

        // Replace zero counts with actual counts if available
        foreach ($yearlyData as $month => $count) {
            $monthlyCounts[$month] = $count;
        }

        return $monthlyCounts;
    }

    public function userRegistrationsByYear()
    {
        // Fetch the earliest and latest registration years from the users table
        $earliestYear = DB::table('users')->min(DB::raw('YEAR(created_at)'));
        $latestYear = DB::table('users')->max(DB::raw('YEAR(created_at)'));

        // Fetch user registration counts for each year in the range
        $yearlyData = DB::table('users')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as count'))
            ->whereBetween(DB::raw('YEAR(created_at)'), [$earliestYear, $latestYear])
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->pluck('count', 'year');

        // Initialize an array to hold user counts for each year (initially set to zero)
        $yearlyCounts = [];

        // Loop through the range of years and replace zero counts with actual counts if available
        for ($year = $earliestYear; $year <= $latestYear; $year++) {
            $yearlyCounts[$year] = $yearlyData[$year] ?? 0;
        }

        return $yearlyCounts;
    }

}
