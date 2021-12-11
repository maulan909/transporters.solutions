<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageSettingController extends Controller
{
    public function index()
    {
        return view('admin.landing-page', [
            'title' => 'Landing Page Setting'
        ]);
    }
}
