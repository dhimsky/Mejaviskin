<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Brightening Gentle Cleanser',
                'step_label' => 'Langkah 1 · Pembersih',
                'description' => 'Pembersih wajah berbusa lembut yang mengangkat kotoran, sisa makeup, dan minyak berlebih tanpa membuat kulit terasa kering atau kesat. Diformulasikan untuk penggunaan harian pagi dan malam.',
                'ingredients' => 'Niacinamide, Sodium Hyaluronate, Tea Tree Oil, Ekstrak Aloevera, Ekstrak Green Tea',
                'full_ingredients' => 'Water, Sodium Hyaluronate, Coco-glucoside, Cocamidopropyl Betaine, Glycerin, Aloe barbadensis Leaf Extract, Green Tea Extract, Niacinamide, Centella asiatica Extract, Panax Gingseng Root Extract, benzyl alcohol (and), Benzoic acid, Dehidroacetic acid, Ethylenediaminetetraacetic, Jojoba Oil, Tea Tree Oil, PEG-40 Hydrogenated Castor Oil, Sodium Chlorida, Pentylene Glycol (and) Methyl Diisopropyl Propionamide, Fragrance',
                'net_volume' => '50 ml',
                'usage_note' => 'Pagi & Malam',
                'how_to_use' => "Tuangkan Mejavi Skin+ Cleanser ke tangan, kemudian aplikasikan ke seluruh wajah termasuk ke leher yang sebelumnya sudah dibasahi. Pijat wajah dengan gerakan memutar yang lembut selama 1-2 menit, bilas dengan air sampai bersih, kemudian keringkan dengan handuk lembut.",
                'benefits' => "Membersihkan wajah dari debu dan kotoran\nMembantu menjaga kelembapan kulit\nMembuat kulit tampak lebih cerah\nMengandung antioksidan yang dapat menyehatkan kulit",
                'sort_order' => 1,
            ],
            [
                'name' => 'Radiance Treatment Body Serum',
                'step_label' => 'Langkah 2 · Perawatan Tubuh',
                'description' => 'Serum tubuh dengan tekstur ringan yang menyerap cepat, membantu kulit terasa lebih halus dan tampak lebih cerah merata. Cocok digunakan setelah mandi ke seluruh tubuh.',
                'ingredients' => 'Kolagen, DNA Salmon, Niacinamide, Licorice',
                'full_ingredients' => 'Water, Sodium Acrylates Copolymer (and) Lecithin, Collagen, Panax gingseng Root Extract, Niacinamide, Ethyl Ascorbic Acid, Glycyrrhiza Glabra (Licorice) Root Extract, Aloe barbadensis Leaf Extract, Titanium Dioxide, Glycerin, Glyceryl Stearate, Cetearyl Alcohol, Capric Triglyceride / Caprylic, Neopenthyl Glycol Dicaprate/Dicaprate, Vaccinium Corymbosum (Blueberry) Fruit Water, Water (Aqua) (and) Xanthan Gum (and) Caprylyl Glycol (and) Phenoxyethanol (and) Glucose (and) Chondrus Crispus Extract (and) Ethylhexylglycerin, Tocopheryl Acetate (Vit. E), Sodium DNA, Phenoxyethanol (and) Glyceryl Laurate, Fragrance, Karmosin CI No. 14720, Biru Berlian CI No. 42090, Eritrosin CI No. 45430',
                'net_volume' => '100 ml',
                'usage_note' => 'Setelah Mandi',
                'how_to_use' => "Tuangkan body serum secukupnya, kemudian aplikasikan secara merata pada area tangan dan area badan lain yang dikehendaki dengan menggunakan tangan. Gunakan secara rutin setelah mandi untuk mendapatkan hasil yang maksimal.",
                'benefits' => "Membantu mencerahkan kulit\nMembantu mengurangi bekas kulit eksim (yang sudah kering)\nMembantu menjaga kelembapan kulit\nMengandung antioksidan yang membantu menjaga kulit dari kerusakan akibat sinar matahari",
                'sort_order' => 3,
            ],
            [
                'name' => 'Plump + Bright Serumizer',
                'step_label' => 'Langkah 3 · Perawatan Wajah',
                'description' => 'Serum tetes dengan pipet presisi, diformulasikan untuk membantu kulit tampak lebih kenyal dan cerah. Idealnya digunakan sebagai langkah perawatan inti sebelum pelembap.',
                'ingredients' => 'Niacinamide, Argireline, Prebiotik AGA',
                'full_ingredients' => 'Water, Cellulose Gum (and) Xanthan Gum (and) Inulin (and) Cellulose (and) Glucose (and) Fructose, Inulin, Niacinamide, Acetyl Hexapeptide-8, Glycerin, PEG-40 Hydrogenated Castor Oil, Sun Flower Seed Oil, Tocopheryl Acetate (Vit. E), Phenoxyethanol (and) Glyceryl Laurate, Fragrance',
                'net_volume' => '15 ml',
                'usage_note' => 'Pagi & Malam',
                'how_to_use' => "Pipet produk Mejavi Skin+ Serum secukupnya ke area wajah, ratakan atau oleskan secara merata dengan melakukan pemijatan lembut. Tunggu sampai meresap sempurna.",
                'benefits' => "Membantu melembapkan kulit\nMembantu membuat kulit terasa lebih kencang\nMembantu mencerahkan kulit\nMembantu membuat kulit terasa lembut",
                'sort_order' => 2,
            ],
            [
                'name' => 'Fresh Hydra Crème',
                'step_label' => 'Langkah 4 · Pelembap',
                'description' => 'Krim pelembap dengan tekstur segar yang mengunci kelembapan sepanjang hari, membantu menjaga skin barrier tetap kuat dan nyaman digunakan di berbagai jenis kulit.',
                'ingredients' => 'Niacinamide, Titanium Dioxide, Argireline',
                'full_ingredients' => 'Water, Sodium Acrylates Copolymer (and) Lecithin, Coco-Caprylate/Caprate, Caprylic/Capric Triglyceride, Titanium Dioxide, Inulin Niacinamide, Alpha-arbutin, 3-O-Ethyl Ascorbic Acid (and) Polyglyceryl-10 Oleate (and) Polyglyceryl-6 Laurate (and) Sorbitan Palmitate (and) Magnolol (and) Honokiol (and) Aqua, Glycerin, Water (Aqua) (and) Acetyl Hexapeptide-8 (and) Caprylyl Glycol, Water, Butylene Glycol, Glycerin, 1,2-Hexanediol, Ethyl Hexanediol, Lactobacillus Ferment, Goat Milk Extract, Glycerin (and) Water (and) Hydrolyzed Pea Protein (and) Glucose (and) Sodium Chloride (and) Sodium Succinate, Water (Aqua) (and) Xanthan Gum (and) Caprylyl Glycol (and) Phenoxyethanol (and) Glucose (and) Chondrus Crispus Extract (and) Ethylhexylglycerin, Sodium DNA, Centella Asiatica Extract, Phenoxyethanol (and) Glyceryl Laurate, Fragrance',
                'net_volume' => '20 ml',
                'usage_note' => 'Pagi & Malam',
                'how_to_use' => "Ambil Mejavi Skin+ Fresh Hydra Crème secukupnya, kemudian aplikasikan secara merata pada area wajah dengan menggunakan tangan. Gunakan secara rutin 2 kali sehari, pagi dan malam hari setelah mandi atau setelah membersihkan wajah.",
                'benefits' => "Membantu mencerahkan kulit\nMembantu meratakan warna kulit\nMembantu menjaga kelembapan kulit\nMembantu mengurangi kerutan di kulit wajah\nMembantu melindungi kulit dari sinar UV",
                'sort_order' => 4,
            ],
            [
                'name' => 'Lumière Essence Hydra Crème',
                'step_label' => 'Perawatan Intensif',
                'description' => 'Essence-crème dengan tekstur ringan yang dapat digunakan kapan saja kulit terasa kering — pagi, siang, maupun malam. Diformulasikan untuk menjaga kelembapan sekaligus membantu kulit tampak lebih cerah.',
                'ingredients' => 'Collagen, Niacinamide, Argireline, Lumicease, Lipomoist',
                'full_ingredients' => 'Water, Collagen, Niacinamide, Ethyl Ascorbic Acid, Water (Aqua) (and) Acetyl Hexapeptide-8 (and) Caprylyl Glycol, Glycerin (and) Water (and) Hydrolyzed Pea Protein (and) Glucose (and) Sodium Chloride (and) Sodium Succinate, Aloe barbadensis Leaf Extract, Water (Aqua) (and) Xanthan Gum (and) Caprylyl Glycol (and) Phenoxyethanol (and) Glucose (and) Chondrus Crispus Extract (and) Ethylhexylglycerin, Glycerin, Sodium Acrylates Copolymer (and) Lecithin, Caprylic/Capric Triglyceride, Coco Caprylate, Butylated Hydroxytoluene, Phenoxyethanol (and) Glyceryl Laurate, Fragrance',
                'net_volume' => '100 ml',
                'usage_note' => 'Pagi, Siang & Malam',
                'how_to_use' => "Oleskan secukupnya pada area yang diinginkan. Gunakan rutin pada pagi, siang, dan malam hari, atau pada saat dibutuhkan ketika kulit terasa kering.",
                'benefits' => "Membantu membuat kulit terasa lembap sepanjang hari\nMembuat kulit terasa lebih kenyal\nMembantu mengurangi kerutan\nMembuat kulit terlihat lebih cerah\nMelindungi kulit dari kerusakan akibat sinar matahari",
                'sort_order' => 5,
            ],
            [
                'name' => 'Face Mist & Brightening',
                'step_label' => 'Segera Hadir',
                'description' => 'Face mist penyegar wajah yang sedang dalam tahap pengembangan formula. Detail kandungan dan spesifikasi lengkap akan diperbarui menjelang peluncuran resmi.',
                'ingredients' => null,
                'full_ingredients' => null,
                'net_volume' => null,
                'usage_note' => null,
                'how_to_use' => null,
                'benefits' => "Membantu menjaga kelembapan kulit\nMembantu membuat kulit tampak lebih cerah\nMenjaga kesehatan skin barrier\nMembantu mengurangi kemerahan akibat iritasi pada kulit",
                'sort_order' => 6,
                'is_coming_soon' => true,
            ],
        ];

        foreach ($products as $data) {
            $data['slug'] = Product::makeUniqueSlug($data['name']);
            $data['is_active'] = true;
            $data['is_coming_soon'] = $data['is_coming_soon'] ?? false;
            Product::updateOrCreate(['name' => $data['name']], $data);
        }
    }
}