<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Respond;
//use App\Http\Middleware\CheckAge;

class UserController extends Controller
{
    public function show($id)
    {
        //$str = "Age".$request->age;
        return "Hello User with id : $id";
    }
}

