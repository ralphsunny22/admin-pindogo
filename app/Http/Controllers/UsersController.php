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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
