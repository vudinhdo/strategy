<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Images;
use App\Models\Tag;
class ImageController extends Controller
{
    public function list(Request $request)
    {
        $tags = Tag::all();
        $images = Images::with('tag')->get();
        return view("index", ["images" => $images, "tags"=> $tags]);
    }

    public function detail($slug)
    {
        $image = Images::with('tag')->where('slug', $slug)->firstOrFail();
        return view('portfolio-details', [
            'image' => $image,
            'tag' => $image->tag
        ]);
    }
}
