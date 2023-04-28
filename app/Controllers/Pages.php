<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('template/header');
    
    }
    public function dasboardu()
    {
        return view('users/dasboardUser');
      
    }

}
