<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Homepage;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class LandingPageSettingController extends Controller
{
    public function index()
    {
        return view('admin.landing-page.index', [
            'title' => 'Landing Page Setting',
            'data' => Homepage::find(1)
        ]);
    }

    public function update(Request $request, Homepage $homepage)
    {
        $validatedData = $request->validate([
            'hero_image' => 'max:255',
            'hero_title' => 'required|max:255',
            'hero_subtitle' => 'max:255',
            'font_color' => 'max:8',
            'cta_button' => 'max:255',
            'secondary_button' => 'max:255',
            'about_image' => 'max:255',
            'about_content' => 'required',
            'service_image' => 'max:255',
        ]);
        if ($request->hero_image !== $homepage->hero_image) {
            if ($homepage->hero_image !== 'hero-default.jpg') {
                Storage::delete($homepage->hero_image);
            }
        }
        if ($request->about_image !== $homepage->about_image) {
            if ($homepage->about_image !== 'about-default.jpg') {
                Storage::delete($homepage->about_image);
            }
        }
        if ($request->service_image !== $homepage->service_image) {
            if ($homepage->service_image !== 'service-default.jpg') {
                Storage::delete($homepage->service_image);
            }
        }
        if (Homepage::where('id', 1)->update($validatedData)) {
            return redirect()->route('landing-setting')->with('landing', 'Landing page has been updated.')->with('type', 'success');
        } else {
            return redirect()->route('landing-setting')->with('landing', 'Landing page update failed.')->with('type', 'danger');
        }
    }
}
