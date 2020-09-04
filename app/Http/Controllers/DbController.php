<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblComment;

class DbController extends Controller
{
    //
    public function addComment(Request $request)
    {
        TblComment::addComment($request);
        return;
    }
}
