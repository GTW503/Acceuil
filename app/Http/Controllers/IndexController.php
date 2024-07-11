<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $site_settings = [
            'title' => config('site.title'),
            'description' => config('site.description')
        ];

        return view('home', [
            'site_settings' => $site_settings
        ]);
    }
}
