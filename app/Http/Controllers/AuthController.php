<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118054',
                'name' => 'Elfando Pratama',
                'gender' => 'Laki - laki',
                'phone' => '+62 856-0120-1928',
                'class' => 'XII RPL 2'];
    }
}
