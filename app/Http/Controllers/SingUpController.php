<?php


namespace App\Http\Controllers;


class SingUpController
{
    public function index() {
        return view('singUp', ["data" => 'привет']);
    }
}
