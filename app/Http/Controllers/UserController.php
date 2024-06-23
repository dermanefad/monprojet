<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    //
    public function liste_des_utlisateurs(){
        //$users = User::all();
        return 'Toutes les utlisateur';
    }
}
