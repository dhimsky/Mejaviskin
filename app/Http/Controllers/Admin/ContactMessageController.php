<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(15);

        return view('admin.messages.index', compact('messages'));
    }

    public function show(ContactMessage $pesan)
    {
        if (! $pesan->is_read) {
            $pesan->update(['is_read' => true]);
        }

        return view('admin.messages.show', ['message' => $pesan]);
    }

    public function destroy(ContactMessage $pesan)
    {
        $pesan->delete();

        return redirect()->route('admin.messages.index')->with('status', 'Pesan berhasil dihapus.');
    }
}
