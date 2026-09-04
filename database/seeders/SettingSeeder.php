<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'company_name' => 'PT Satu Satunya',
            'brand_name' => 'Mejavi Skin+',
            'contact_address' => 'Jl. Kebun Sirih No. 1, Jakarta Pusat, DKI Jakarta, Indonesia',
            'contact_email' => 'hello@mejaviskin.id',
            'contact_phone_display' => '+62 21 1234 5678',
            'whatsapp_number' => '6282112345678',
            'operational_hours' => 'Senin – Jumat, 09.00 – 17.00 WIB',
            'footer_tagline' => 'Diproduksi oleh PT Satu Satunya. Perawatan kulit yang nyata, aman, dan efektif — lahir dari sains dan alam.',
        ];

        foreach ($defaults as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
