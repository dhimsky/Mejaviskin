<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'perusahaan' => ['nullable', 'string', 'max:150'],
            'topik' => ['nullable', 'string', 'max:150'],
            'pesan' => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create($validated);

        $waNumber = Setting::whatsappNumber();

        $text = "Halo Mejavi Skin+, saya ingin menghubungi tim Anda.\n\n"
            ."Nama: {$validated['nama']}\n"
            ."Email: {$validated['email']}\n"
            .(! empty($validated['perusahaan']) ? "Perusahaan: {$validated['perusahaan']}\n" : '')
            .(! empty($validated['topik']) ? "Topik: {$validated['topik']}\n" : '')
            ."Pesan: {$validated['pesan']}";

        $waUrl = 'https://wa.me/'.$waNumber.'?text='.rawurlencode($text);

        return redirect()->away($waUrl);
    }
}
