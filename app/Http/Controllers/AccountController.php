<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function logout()
    {
        return view('forms.account.logout');
    }
}
