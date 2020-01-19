<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use UserService;

class UserController extends Controller
{
    public function index()
    {
        Log::debug('START');

        $users = UserService::getUsers();

        Log::debug('END');

        return view('user.home', compact('users'));
    }
}
