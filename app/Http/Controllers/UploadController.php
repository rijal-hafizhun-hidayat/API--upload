<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function submit(Request $request){

        return $request->gambar;
    }
}
