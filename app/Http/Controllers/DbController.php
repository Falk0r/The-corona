<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{
    //
    public function addComment(Request $request)
    {
        dd($request);
        TblComment::addComment($request);
        return;
    }
}
