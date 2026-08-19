<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        // 1. Email validation check
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first('email')
            ], 422);
        }

        $email = strtolower(trim($request->email));

        // 2. Check if email already exists
        if (Newsletter::where('email', $email)->exists()) {
            return response()->json([
                'status' => 'info',
                'message' => 'You are already subscribed to our newsletter.'
            ], 409);
        }

        // 3. Save subscriber to database
        Newsletter::create(['email' => $email]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for subscribing!'
        ], 200);
    }
}