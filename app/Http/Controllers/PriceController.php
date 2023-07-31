<?php


namespace App\Http\Controllers;


class PriceController
{
    public function index() {
        return view('price', ["data" => 'привет2']);
    }
}
