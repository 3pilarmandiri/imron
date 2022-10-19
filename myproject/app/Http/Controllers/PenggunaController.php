<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    //
    function index(){
        $user = User::all();
        return $user;
    }
}
