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
        return view('backend.pages.users.singleUser', compact('user'));
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
