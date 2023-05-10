<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{

    /**
     * Function that returns the basic data of a user
     * @param $id User's ID
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function user($id) {

        $user = User::find($id);

        return response([
            "name" => $user->name,
            "lastname_first" => $user->lastname_first,
            "lastname_second" => $user->lastname_second,
            "username" => $user->username,
        ], 200);
    }
}
