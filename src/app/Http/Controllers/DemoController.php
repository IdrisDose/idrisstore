<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;

class DemoController extends Controller
{
    //

    public function demouser(Request $request){
        $user = User::inRandomOrder()->first();
        UserResource::withoutWrapping();
        return new UserResource($user);
    }
}
