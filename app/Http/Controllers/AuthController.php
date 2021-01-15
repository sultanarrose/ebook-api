<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function me(){
    	return [
    		'nis' => '3103118129', 'name' => 'Sultan Arrose', 'gender' => 'Male', 'phone' => '081714442', 'class' => 'XII RPL 4'
    	];
    }
}
