<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = null)
    {
        $message = $id;
        if (!$id)
        {
            $message = "Пользователь не зарегистрирован!";
        }
        return view('users.user')->with(['message' => $message]);
    }
}
