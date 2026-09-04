<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private const KEYS = [
        'company_name',
        'brand_name',
        'contact_address',
        'contact_email',
        'contact_phone_display',
        'whatsapp_number',
        'operational_hours',
        'footer_tagline',
    ];

    public function edit()
    {
        $settings = collect(self::KEYS)->mapWithKeys(fn ($key) => [$key => Setting::get($key)]);

        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'company_name' => ['nullable', 'string', 'max:150'],
            'brand_name' => ['nullable', 'string', 'max:150'],
            'contact_address' => ['nullable', 'string', 'max:300'],
            'contact_email' => ['nullable', 'email', 'max:150'],
            'contact_phone_display' => ['nullable', 'string', 'max:50'],
            'whatsapp_number' => ['nullable', 'string', 'max:20'],
            'operational_hours' => ['nullable', 'string', 'max:150'],
            'footer_tagline' => ['nullable', 'string', 'max:300'],
        ]);

        foreach ($data as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.settings.edit')->with('status', 'Pengaturan berhasil disimpan.');
    }
}
