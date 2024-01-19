<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return response()->json($users);

    }

    public function detail($id) 
    {
        $users = User::find($id);
        return response()->json($users);

    }
}
