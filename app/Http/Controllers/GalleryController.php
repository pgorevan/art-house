<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('Gallery.show');
    }
}
