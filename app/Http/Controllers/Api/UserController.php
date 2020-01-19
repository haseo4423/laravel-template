<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use UserService;

class UserController extends Controller
{
    public function getUsers()
    {
        Log::debug('START');

        $result = UserService::getUsers();

        Log::debug('END');

        return response()->json($result);
    }
}
