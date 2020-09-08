<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblComment;

class DbController extends Controller
{
    //
    public function addComment(Request $request)
    {
        if (!isset($request->person_name)){
            return back()->with('error', 'Note ton nom bouffon.');
        };
        if (!isset($request->person_message)){
            return back()->with('error', 'Putain mais t\'es trop con mets un message bordel!!!.');
        };
        $validateCommentForm = $request->validate([
            'person_name' => 'bail|required',
            'person_email' => 'bail|required',
            'person_message' => 'bail|required',
            'news_id' => 'required',
        ]);
        TblComment::addComment($validateCommentForm);
        return back()->with('info', 'Super, on s\'en branle de ton avis. Mais bon...');
    }
}
