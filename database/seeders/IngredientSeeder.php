<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    public function run(): void
    {
        $ingredients = [
            ['name' => 'Niacinamide (Vitamin B3)', 'description' => 'Membantu mencerahkan warna kulit yang kusam akibat efek penuaan dini.', 'icon' => 'sparkle'],
            ['name' => 'Tea Tree Oil', 'description' => 'Sebagai anti bakteri yang kuat sehingga membantu mengurangi bau badan dan munculnya jerawat.', 'icon' => 'leaf'],
            ['name' => 'Sodium Hyaluronate', 'description' => 'Membantu menjaga kelembapan kulit sepanjang hari.', 'icon' => 'droplet'],
            ['name' => 'Sodium PCA', 'description' => 'Membantu memperkuat skin barrier dan menjaga kelembapan kulit.', 'icon' => 'shield'],
            ['name' => 'Argireline (Acetyl Hexapeptide-8)', 'description' => 'Peptide yang membantu meredakan garis halus dan membuat kulit tampak lebih kencang.', 'icon' => 'molecule'],
            ['name' => 'Titanium Dioxide', 'description' => 'Membantu melindungi kulit dari sinar UV dan membuat kulit tampak lebih cerah.', 'icon' => 'shield'],
            ['name' => 'Prebiulin AGA (Inulin)', 'description' => 'Bekerja sebagai prebiotik yang membantu menjaga kelembapan dan keseimbangan mikrobioma kulit.', 'icon' => 'leaf'],
            ['name' => 'Ekstrak Licorice (Glycyrrhiza Glabra)', 'description' => 'Membantu mencerahkan kulit sehingga tampak lebih bersih dan merata.', 'icon' => 'leaf'],
            ['name' => 'Hydrolized Collagen', 'description' => 'Membantu menjaga elastisitas kulit sehingga mengurangi tampilan kerutan.', 'icon' => 'molecule'],
            ['name' => 'DNA Salmon', 'description' => 'Membantu meregenerasi sel kulit dan memperbaiki tekstur kulit.', 'icon' => 'molecule'],
            ['name' => 'Actiphyte Blueberry', 'description' => 'Bersifat anti-inflamasi dan anti-aging, dengan kandungan fiber tinggi yang membantu meningkatkan kekenyalan kulit.', 'icon' => 'sparkle'],
            ['name' => 'NIO-VCS (Vitamin C)', 'description' => 'Membantu mencerahkan kulit serta membantu mengatasi tampilan flek hitam.', 'icon' => 'sparkle'],
            ['name' => 'Lacto-FT Ultramilk', 'description' => 'Bekerja sebagai probiotik yang turut membantu melembapkan kulit.', 'icon' => 'droplet'],
            ['name' => 'Alpha-arbutin', 'description' => 'Membantu mencerahkan kulit serta membantu mengatasi kulit gelap dan flek hitam.', 'icon' => 'sparkle'],
            ['name' => 'Lumicease', 'description' => 'Membantu mencerahkan kulit sekaligus membantu melindungi kulit dari paparan sinar matahari.', 'icon' => 'shield'],
            ['name' => 'Lipomoist™ 2013', 'description' => 'Membantu melembapkan kulit dan mendukung penyerapan nutrisi lebih optimal ke dalam kulit.', 'icon' => 'droplet'],
        ];

        foreach ($ingredients as $i => $data) {
            $data['sort_order'] = $i + 1;
            $data['is_active'] = true;
            Ingredient::updateOrCreate(['name' => $data['name']], $data);
        }
    }
}