<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function landing()
    {
        // $user = User::where(['account_type' => 'user'])->count();
        // $verified_user = User::where(['account_type' => 'user'])->whereNotNull('email_verified_at')->count();
        $totalUsersCount = DB::table('users')->count();
        $activeUsersCount = DB::table('users')->whereNotNull('email_verified_at')->where('status',1)->count();
        $bannedUsersCount = DB::table('users')->where('status',0)->count();

        $totalUsersCount = Helpers::shortenNumber($totalUsersCount);
        $activeUsersCount = Helpers::shortenNumber($activeUsersCount);
        $bannedUsersCount = Helpers::shortenNumber($bannedUsersCount);

        return view('landing', compact('totalUsersCount', 'activeUsersCount', 'bannedUsersCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
