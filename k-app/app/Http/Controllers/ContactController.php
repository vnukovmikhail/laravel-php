<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    // public function submit(Request $request) {
    //     // return dd($request->input('name'));
    //     // $validation = $request->validate([
    //     //     'name' => 'required|min:3|max:50',
    //     //     'email' => 'required|min:3|max:30',
    //     //     'message' => 'required|min:10|max:500'
    //     // ]);
    // }
    public function submit(ContactRequest $request) {
        
    }

}
