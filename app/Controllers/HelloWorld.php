<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index(): string
    {
        return view('halloworld');
    }
}
