<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        // validate the incoming request data before sending to database
        $validated = $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'phone' => [
                'required',
                'string',
                'max:50',
            ],

            'company' => [
                'nullable',
                'string',
                'max:255',
            ],

            'message' => [
                'required',
                'string',
            ],

            'privacy' => [
                'accepted',
            ],

        ]);

        // if success, go to this
        Quote::create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'phone' => $validated['phone'],

            'company' => $validated['company'] ?? null,

            'message' => $validated['message'],

        ]);


        return back()->with(
            'success',
            'Your quote request has been submitted successfully.'
        );
    }
}
