<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KontakController extends Controller
{

    public function showForm(): View
    {
        return view('kontak', ['title' => "Kontak"]);
    }

    public function submitForm(Request $request)
    {

        $messages = [
            'full-name.required' => 'Kolom nama harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'email.email' => 'Email tidak valid',
            'message.required' => 'Kolom pesan harus diisi',
            'phone_number.required' => 'Nomor telepon wajib diisi!',
            'phone_number.regex' => 'Format nomor telepon tidak valid. Gunakan format Indonesia yang benar!',
        ];

        $request->validate([
            'full-name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255',
            'phone_number' => [
                'required',
                'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'
            ],
            'message' => 'required'
        ], $messages);

        return back()->with('success', 'Form submitted successfully!');
    }
}
