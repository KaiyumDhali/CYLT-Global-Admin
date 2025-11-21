<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contactform;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactReceived;

class ContactformController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'message' => 'required|string',
            // 'recaptcha_token' => 'nullable|string' // যদি ব্যবহার করো
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = $request->userAgent();

        $contact = Contactform::create($validated);

        // Optional: send notification email to admin (queue recommended)
        // Mail::to(config('mail.from.address'))->queue(new NewContactReceived($contact));
         Mail::to('nrbsoftwareit@gmail.com')->send(new ContactFormMail($validated));
        return response()->json([
            'status' => 'success',
            'message' => 'Message received',
            'data' => $contact
        ], 201);
    }
}
