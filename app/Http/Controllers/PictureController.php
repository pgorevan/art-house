<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function show($id)
    {

        $picture = Picture::find($id);
        return view('Pictures.show', ['picture' =>  $picture]);
    }
}
