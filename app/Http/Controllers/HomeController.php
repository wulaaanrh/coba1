<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sejarah()
    {
        return view('homepartials.sejarahblog', [
            'title' => 'Sejarah',
            'active' => 'Sejarah'
        ]);
    }

    public function webprogramming()
    {
        return view('homepartials.webprogramming', [
            'title' => 'Webprogramming',
            'active' => 'webprogramming'
        ]);
    }

    public function webdesain()
    {
        return view('homepartials.webdesain', [
            'title' => 'Webdesain',
            'active' => 'webdesain'
        ]);
    }

    public function personal()
    {
        return view('homepartials.personal', [
            'title' => 'Personal',
            'active' => 'personal'
        ]);
    }

    public function aboutme()
    {
        return view('homepartials.aboutme', [
            'title' => 'Aboutme',
            'active' => 'aboutme'
        ]);
    }
}
