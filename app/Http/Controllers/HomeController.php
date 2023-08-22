<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function register()
    {
        return view('homeRegister');
    }

    /**
     * Show home page.
     *
     * @return Renderable
     */
    public function execute()
    {
        return view('home', [
            'info' => Contact::get()
        ]);
    }

}
