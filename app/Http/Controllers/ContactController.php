<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontend.lienhe'); // Trang bạn gửi
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email'   => 'required|email',
            'message' => 'required|string|min:5',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'message' => $request->message,
        ]);

        return back()->with('success', '✅ Gửi liên hệ thành công! Chúng tôi sẽ phản hồi sớm nhất.');
    }
}
