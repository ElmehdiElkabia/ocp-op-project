<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login');
  }
}