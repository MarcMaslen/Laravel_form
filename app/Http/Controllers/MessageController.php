<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request) { 
    $message = $request->message;

    // You can store the message in the database here however for the purpose of this project we will just return the message back to the form

    // Send response back to form to show message
    return response()->json(['message' => $message], 200);
}
}
