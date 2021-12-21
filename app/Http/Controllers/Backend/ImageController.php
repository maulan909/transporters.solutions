<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $image = str_replace('data:image/' . $request->extension . ';base64,', '', $request->image);
        $image = str_replace(' ', '+', $image);
        $randomName = Str::random(40);
        Storage::disk('public')->put('web-images/' . $randomName . '.' . $request->extension, base64_decode($image));
        return response()->json([
            'fileName' => 'web-images/' . $randomName . '.' . $request->extension,
        ]);
    }
}
