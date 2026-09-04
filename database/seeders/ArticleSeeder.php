<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'category' => 'Sains Kulit',
                'title' => 'Niacinamide, Kolagen, dan Licorice: kenapa ketiganya sering muncul bersama?',
                'excerpt' => 'Tiga bahan aktif ini jadi andalan dalam rangkaian Mejavi Skin+. Kami bahas cara kerjanya di kulit, dan kenapa kombinasi ini masuk akal secara sains — bukan sekadar tren pemasaran.',
                'content' => "<p>Kalau kamu perhatikan label di banyak produk perawatan kulit — termasuk rangkaian Mejavi Skin+ — tiga nama ini cenderung muncul berulang: niacinamide, kolagen, dan licorice (akar manis). Bukan kebetulan. Ketiganya bekerja di jalur yang berbeda, tapi saling melengkapi satu sama lain, dan kombinasi ini sebenarnya cukup umum dipakai dalam formulasi skincare modern karena alasan yang cukup masuk akal secara sains.</p>
<h2>Niacinamide: penjaga keseimbangan kulit</h2>
<p>Niacinamide, atau vitamin B3, dikenal luas karena membantu memperkuat lapisan pelindung kulit (skin barrier) sekaligus membantu meratakan tampilan warna kulit. Karena sifatnya yang cenderung ringan dan tidak mengiritasi, bahan ini umumnya cocok digunakan hampir semua jenis kulit, termasuk yang sensitif maupun berminyak.</p>
<p>Selain membantu menjaga skin barrier, niacinamide juga sering dikaitkan dengan kemampuannya membantu mengontrol produksi minyak berlebih dan meredakan tampilan pori-pori yang terlihat besar. Karena manfaatnya yang luas dan risiko iritasinya yang relatif rendah, niacinamide menjadi salah satu bahan aktif yang paling sering dijadikan \"fondasi\" dalam sebuah formula — bahan lain ditambahkan di atasnya untuk memperkuat efeknya.</p>
<h2>Kolagen: menjaga struktur dari luar</h2>
<p>Kolagen adalah protein yang secara alami menyusun struktur kulit agar tetap kenyal dan elastis. Produksi kolagen alami tubuh cenderung menurun seiring waktu, sehingga banyak formula skincare menambahkan kolagen dari luar sebagai bagian dari rutinitas perawatan.</p>
<p>Saat diaplikasikan secara topikal, molekul kolagen umumnya bekerja di permukaan kulit — membantu melembapkan dan memberi sensasi kulit yang terasa lebih kenyal dan halus saat disentuh. Meski tidak menggantikan kolagen di lapisan dalam kulit, penggunaan rutin dapat membantu kulit terasa lebih terhidrasi dan nyaman sepanjang hari.</p>
<h2>Licorice: meratakan tampilan warna kulit</h2>
<p>Licorice atau akar manis sudah lama dikenal dalam pengobatan tradisional maupun skincare modern karena kandungan senyawa aktifnya yang membantu meratakan tampilan warna kulit. Bahan ini sering menjadi pilihan bagi kulit yang ingin tampak lebih cerah merata, tanpa efek yang terlalu keras seperti sebagian bahan pencerah lainnya.</p>
<h3>Kenapa dikombinasikan dalam satu formula?</h3>
<ul>
<li>Niacinamide menjaga skin barrier tetap kuat, sehingga bahan aktif lain dapat bekerja lebih optimal dan risiko iritasi dapat ditekan.</li>
<li>Kolagen memberi sensasi kenyal dan lembap dari lapisan luar kulit, melengkapi efek niacinamide yang lebih fokus pada keseimbangan kulit.</li>
<li>Licorice melengkapi dengan membantu tampilan warna kulit tampak lebih merata, sehingga hasil akhirnya terasa lebih menyeluruh.</li>
</ul>
<p>Inilah alasan mengapa Radiance Treatment Body Serum dari Mejavi Skin+ menggabungkan ketiganya sekaligus — bukan untuk menumpuk klaim di label produk, tapi karena masing-masing bahan punya peran yang saling melengkapi dalam satu rutinitas perawatan kulit. Kombinasi seperti ini memungkinkan satu produk menjawab beberapa kebutuhan kulit sekaligus, tanpa harus menumpuk banyak produk berbeda dalam satu rutinitas.</p>
<h2>Bagaimana cara memaksimalkan manfaatnya?</h2>
<p>Agar hasil terasa optimal, penggunaan produk yang mengandung kombinasi ini sebaiknya dilakukan secara rutin dan konsisten — bukan sesekali. Perubahan pada kulit umumnya membutuhkan waktu beberapa minggu pemakaian teratur sebelum terlihat perbedaannya. Selain itu, pastikan juga untuk selalu menggunakan tabir surya di siang hari, karena kulit yang terjaga barrier-nya akan lebih rentan bila tidak dilindungi dari paparan sinar matahari secara langsung.</p>",
                'is_featured' => true,
                'published_at' => Carbon::parse('2026-08-12'),
            ],
            [
                'category' => 'Rutinitas',
                'title' => 'Urutan pemakaian yang benar: cleanser, serum, lalu krim',
                'excerpt' => 'Salah urutan bisa membuat bahan aktif tidak bekerja optimal. Ini panduan sederhana yang bisa langsung kamu terapkan mulai hari ini.',
                'content' => "<p>Banyak orang sudah punya produk skincare yang tepat, tapi hasilnya terasa kurang maksimal — dan sering kali penyebabnya bukan pada produknya, melainkan pada urutan pemakaiannya. Urutan yang keliru dapat membuat bahan aktif tidak terserap dengan baik, atau bahkan saling menghalangi satu sama lain.</p>
<h2>Prinsip dasar: dari yang paling ringan ke paling kental</h2>
<p>Aturan umum yang mudah diingat adalah memulai dari tekstur paling ringan dan cair, lalu secara bertahap menuju tekstur yang lebih kental dan berat. Prinsip ini memastikan setiap lapisan produk dapat menyerap ke kulit sebelum ditutup oleh lapisan berikutnya, sehingga tidak ada bahan aktif yang \"terjebak\" di permukaan tanpa sempat bekerja.</p>
<h2>Langkah 1 — Bersihkan wajah lebih dulu</h2>
<p>Semua rutinitas skincare dimulai dari kulit yang bersih. Gunakan cleanser untuk mengangkat kotoran, sisa makeup, keringat, dan minyak berlebih yang menumpuk sepanjang hari maupun semalaman saat tidur. Kulit yang bersih memberi \"kanvas\" yang siap menyerap produk-produk berikutnya secara maksimal.</p>
<p>Pastikan cleanser yang digunakan tidak membuat kulit terasa kesat atau tertarik setelah dibilas — sensasi seperti itu justru menandakan skin barrier sedang terganggu, bukan tanda kulit sudah benar-benar \"bersih\".</p>
<h2>Langkah 2 — Lanjutkan dengan serum</h2>
<p>Setelah kulit bersih dan sedikit lembap, inilah waktu terbaik untuk mengaplikasikan serum. Tekstur serum yang ringan dan cair memungkinkan bahan aktif di dalamnya — seperti niacinamide, argireline, atau prebiotik — meresap lebih dalam ke lapisan kulit dibandingkan jika diaplikasikan di atas krim yang lebih tebal.</p>
<p>Bila menggunakan lebih dari satu serum, urutkan dari yang teksturnya paling encer ke yang paling kental. Beri jeda singkat beberapa detik di antara lapisan agar masing-masing produk sempat menyerap.</p>
<h2>Langkah 3 — Kunci dengan pelembap</h2>
<p>Langkah terakhir adalah mengaplikasikan krim pelembap. Fungsinya bukan hanya melembapkan, tetapi juga \"mengunci\" seluruh kandungan aktif dari langkah-langkah sebelumnya agar tidak mudah menguap dan lebih optimal bekerja sepanjang hari atau malam.</p>
<h3>Ringkasan urutan harian</h3>
<ul>
<li>Pagi hari: Cleanser → Serum → Pelembap → Tabir surya (jangan dilewati, bahkan saat cuaca mendung).</li>
<li>Malam hari: Cleanser → Serum → Pelembap, tanpa perlu tabir surya.</li>
</ul>
<h2>Kesalahan umum yang perlu dihindari</h2>
<p>Selain urutan, ada beberapa kebiasaan yang sering tanpa sadar mengurangi efektivitas rutinitas skincare: mengaplikasikan produk dalam jumlah terlalu sedikit sehingga bahan aktif tidak cukup untuk bekerja optimal, terlalu terburu-buru berpindah ke langkah berikutnya sebelum produk sebelumnya benar-benar menyerap, atau mengganti-ganti produk terlalu sering sehingga kulit tidak sempat beradaptasi dan menunjukkan hasil yang konsisten.</p>
<p>Konsistensi adalah kunci utama. Sebagus apa pun kandungan sebuah produk, hasilnya baru akan terlihat jika digunakan secara rutin dengan urutan yang tepat.</p>",
                'is_featured' => false,
                'published_at' => Carbon::parse('2026-08-05'),
            ],
            [
                'category' => 'Kandungan Aktif',
                'title' => 'Mengenal Argireline, "peptide" andalan untuk kulit tampak lebih kencang',
                'excerpt' => 'Bahan ini sering disebut alternatif topikal yang lebih lembut dibanding perawatan invasif. Apa sebenarnya cara kerjanya, dan siapa yang cocok menggunakannya?',
                'content' => "<p>Di antara berbagai bahan aktif yang ramai dibicarakan dalam dunia skincare beberapa tahun terakhir, argireline menjadi salah satu nama yang cukup sering muncul — terutama dalam produk-produk yang menyasar tampilan kulit yang lebih halus dan kencang. Namun tidak sedikit yang masih bingung apa sebenarnya argireline itu, dan bagaimana cara kerjanya di kulit.</p>
<h2>Apa itu Argireline?</h2>
<p>Argireline adalah nama dagang untuk sejenis peptide sintetis yang tersusun dari rangkaian asam amino pendek. Secara sederhana, peptide adalah \"pecahan kecil\" dari protein, dan tubuh — termasuk kulit — merespons peptide dengan cara yang berbeda-beda tergantung jenis dan strukturnya.</p>
<p>Argireline termasuk dalam kelompok peptide yang bekerja dengan cara membantu meredakan intensitas gerakan otot-otot wajah yang halus, mirip dengan prinsip kerja perawatan injeksi tertentu — namun dengan mekanisme yang jauh lebih lembut dan hanya bekerja di permukaan kulit, bukan menembus ke lapisan otot.</p>
<h2>Kenapa disebut alternatif yang lebih lembut?</h2>
<p>Karena cara kerjanya yang topikal dan tidak invasif, argireline sering disandingkan sebagai pilihan bagi mereka yang ingin merawat tampilan garis-garis halus di wajah tanpa harus menjalani prosedur yang lebih ekstrem. Tentu saja, hasil yang diberikan bersifat bertahap dan lebih ringan dibandingkan prosedur medis — namun risikonya pun jauh lebih rendah dan bisa menjadi bagian dari rutinitas perawatan harian.</p>
<h2>Bagaimana cara kerjanya secara sederhana?</h2>
<p>Gerakan berulang otot-otot wajah — seperti saat mengernyitkan dahi atau tersenyum — dari waktu ke waktu dapat berkontribusi pada terbentuknya garis-garis halus di permukaan kulit. Argireline bekerja dengan membantu meredakan intensitas kontraksi otot-otot kecil tersebut secara topikal, sehingga tekanan berulang pada kulit di area itu dapat berkurang.</p>
<p>Efek ini bersifat sementara dan membutuhkan pemakaian rutin untuk terus mempertahankan hasilnya — berbeda dengan prosedur medis yang efeknya bisa bertahan lebih lama tanpa aplikasi berulang.</p>
<h2>Siapa yang cocok menggunakan argireline?</h2>
<ul>
<li>Mereka yang mulai memperhatikan garis-garis halus di area dahi, sekitar mata, atau sekitar bibir.</li>
<li>Mereka yang ingin merawat kulit secara preventif sebelum tanda-tanda penuaan lebih terlihat jelas.</li>
<li>Mereka yang mencari alternatif perawatan yang bisa dilakukan sendiri di rumah, tanpa prosedur klinis.</li>
</ul>
<h2>Kombinasi dengan bahan lain</h2>
<p>Argireline umumnya dipadukan dengan bahan aktif lain seperti niacinamide untuk menjaga skin barrier, atau prebiotik untuk mendukung keseimbangan mikrobioma kulit. Kombinasi semacam ini membuat manfaatnya lebih menyeluruh — tidak hanya fokus pada satu aspek saja, melainkan turut menjaga kesehatan kulit secara keseluruhan.</p>
<p>Seperti bahan aktif lainnya, hasil optimal dari argireline membutuhkan konsistensi pemakaian dalam jangka waktu tertentu. Kesabaran dan rutinitas yang teratur tetap menjadi kunci utama dalam perawatan kulit apa pun.</p>",
                'is_featured' => false,
                'published_at' => Carbon::parse('2026-07-28'),
            ],
            [
                'category' => 'Sains Kulit',
                'title' => 'Apa itu skin barrier, dan kenapa jangan asal eksfoliasi',
                'excerpt' => 'Skin barrier yang rusak bisa bikin kulit makin sensitif, mudah kemerahan, dan susah menyerap manfaat skincare. Kenali tanda-tandanya lebih awal sebelum semakin parah.',
                'content' => "<p>Istilah \"skin barrier\" mungkin sudah sering kamu dengar, tapi tidak semua orang benar-benar memahami apa fungsinya dan kenapa menjaganya jauh lebih penting daripada mengejar hasil instan dari eksfoliasi berlebihan. Artikel ini membahas dasar-dasarnya secara sederhana.</p>
<h2>Skin barrier itu apa, sebenarnya?</h2>
<p>Skin barrier, atau lapisan pelindung kulit, adalah lapisan terluar kulit yang tersusun dari sel-sel kulit mati dan lipid alami yang tersusun rapi seperti \"batu bata dan semen\". Lapisan ini berfungsi sebagai benteng pertahanan pertama kulit — menjaga kelembapan agar tidak mudah menguap, sekaligus melindungi dari paparan polusi, bakteri, dan iritan dari luar.</p>
<p>Ketika skin barrier dalam kondisi sehat, kulit umumnya terasa kenyal, lembap, dan tidak mudah bereaksi berlebihan terhadap produk atau perubahan cuaca. Sebaliknya, ketika barrier ini terganggu, kulit menjadi jauh lebih rentan terhadap berbagai masalah.</p>
<h2>Tanda-tanda skin barrier sedang terganggu</h2>
<ul>
<li>Kulit terasa kering, kasar, atau bahkan mengelupas meski sudah rutin memakai pelembap.</li>
<li>Muncul rasa perih atau menyengat saat mengaplikasikan produk yang biasanya tidak menimbulkan reaksi apa pun.</li>
<li>Kulit tampak kemerahan atau lebih sensitif dari biasanya, terutama di area pipi.</li>
<li>Jerawat atau iritasi kecil muncul lebih sering meski rutinitas skincare tidak berubah.</li>
</ul>
<h2>Kenapa eksfoliasi berlebihan jadi penyebab umum?</h2>
<p>Eksfoliasi memang bermanfaat untuk mengangkat sel kulit mati dan membantu regenerasi kulit. Namun, banyak orang tergoda untuk melakukannya terlalu sering dengan harapan hasil yang lebih cepat terlihat — padahal justru sebaliknya. Eksfoliasi yang terlalu agresif atau terlalu sering dapat mengikis lapisan lipid pelindung kulit lebih cepat daripada kemampuan kulit untuk memperbaikinya sendiri.</p>
<p>Ketika hal ini terjadi berulang kali, skin barrier tidak sempat pulih sepenuhnya sebelum \"diserang\" lagi oleh sesi eksfoliasi berikutnya. Akibatnya, kulit menjadi semakin tipis, sensitif, dan justru lebih sulit menyerap manfaat dari produk skincare lain yang digunakan setelahnya.</p>
<h2>Bagaimana cara eksfoliasi yang lebih aman?</h2>
<ul>
<li>Batasi frekuensi eksfoliasi sesuai jenis kulit — umumnya cukup 1 hingga 2 kali dalam seminggu untuk kulit normal, bahkan lebih jarang untuk kulit sensitif.</li>
<li>Perhatikan respons kulit setelah eksfoliasi. Jika muncul kemerahan atau rasa perih yang bertahan lama, kurangi frekuensinya.</li>
<li>Selalu gunakan pelembap dan tabir surya setelah eksfoliasi, karena kulit dalam kondisi lebih terbuka dan rentan pada saat itu.</li>
<li>Hindari menggabungkan beberapa produk eksfoliasi sekaligus dalam satu rutinitas, karena efeknya bisa saling menumpuk tanpa disadari.</li>
</ul>
<h2>Fokus pada pemulihan, bukan hanya pencegahan</h2>
<p>Jika kamu mulai melihat tanda-tanda skin barrier yang terganggu, langkah pertama bukan menambah lebih banyak produk aktif, melainkan menyederhanakan rutinitas terlebih dahulu. Kembali ke rutinitas dasar — cleanser yang lembut, pelembap yang cukup, dan tabir surya — dapat memberi waktu bagi kulit untuk memperbaiki dirinya sendiri sebelum kembali memperkenalkan bahan aktif secara bertahap.</p>",
                'is_featured' => false,
                'published_at' => Carbon::parse('2026-07-20'),
            ],
            [
                'category' => 'Berita Perusahaan',
                'title' => 'Mejavi Skin+ perluas kerja sama distribusi ke pasar internasional',
                'excerpt' => 'Langkah awal PT Satu Satunya membuka peluang kemitraan lintas negara di tahun ini, sebagai bagian dari strategi pertumbuhan jangka panjang perusahaan.',
                'content' => "<p>PT Satu Satunya, perusahaan di balik Mejavi Skin+, mengumumkan langkah strategis untuk memperluas jangkauan distribusi produknya ke sejumlah pasar internasional. Langkah ini menjadi bagian dari visi jangka panjang perusahaan untuk menjadi penyedia solusi kesehatan dan kecantikan yang tepercaya, tidak hanya di pasar domestik tetapi juga secara global.</p>
<h2>Latar belakang ekspansi</h2>
<p>Sejak diluncurkan, Mejavi Skin+ telah membangun basis pelanggan yang loyal di pasar domestik berkat pendekatannya yang berfokus pada formula berbasis sains dan bahan-bahan yang teruji. Melihat respons positif tersebut, tim manajemen memutuskan sudah saatnya membuka peluang kemitraan yang lebih luas, termasuk menjajaki kerja sama distribusi dengan mitra di luar negeri.</p>
<p>Proses ini dilakukan secara bertahap, dimulai dari penjajakan kerja sama dengan sejumlah calon mitra distribusi yang memiliki rekam jejak baik di industri kecantikan dan perawatan kulit di kawasan regional.</p>
<h2>Fokus pada kualitas dan konsistensi</h2>
<p>Salah satu prioritas utama dalam proses ekspansi ini adalah memastikan standar kualitas produk tetap konsisten di setiap pasar yang dimasuki. Tim riset dan pengembangan produk terus memastikan bahwa formula yang didistribusikan ke pasar internasional tetap melalui proses uji keamanan dan kualitas yang sama ketatnya dengan yang diterapkan di pasar domestik.</p>
<p>Selain itu, perusahaan juga tengah menyiapkan penyesuaian pada aspek kemasan dan dokumentasi produk agar sesuai dengan regulasi di masing-masing negara tujuan, tanpa mengubah formula inti yang sudah terbukti diterima baik oleh pelanggan domestik.</p>
<h2>Peluang kemitraan terbuka lebih luas</h2>
<p>Sejalan dengan langkah ekspansi ini, PT Satu Satunya turut membuka peluang kemitraan bagi pihak-pihak yang tertarik menjadi distributor resmi Mejavi Skin+ di wilayah mereka masing-masing — baik untuk pasar domestik yang belum terjangkau maupun pasar internasional yang menjadi target ekspansi berikutnya.</p>
<h3>Bagi pihak yang tertarik menjajaki kerja sama, perusahaan membuka beberapa jalur kemitraan, di antaranya:</h3>
<ul>
<li>Distribusi produk untuk wilayah atau negara tertentu secara eksklusif maupun non-eksklusif.</li>
<li>Kemitraan retail untuk toko kecantikan, klinik, maupun apotek.</li>
<li>Kolaborasi khusus untuk kebutuhan white-label atau formula yang disesuaikan dengan kebutuhan pasar tertentu.</li>
</ul>
<h2>Langkah selanjutnya</h2>
<p>Manajemen menyatakan bahwa proses ekspansi ini akan terus dievaluasi secara berkala untuk memastikan setiap langkah yang diambil sejalan dengan nilai inti perusahaan: menghadirkan produk yang nyata, aman, dan efektif bagi penggunanya, di mana pun mereka berada. Informasi lebih lanjut terkait peluang kemitraan dapat diperoleh dengan menghubungi tim melalui halaman Kontak di situs resmi Mejavi Skin+.</p>",
                'is_featured' => false,
                'published_at' => Carbon::parse('2026-07-10'),
            ],
            [
                'category' => 'Kandungan Aktif',
                'title' => 'DNA Salmon dalam skincare — istilah rumit, manfaat sederhana',
                'excerpt' => 'Namanya terdengar ekstrem, tapi fungsinya cukup mudah dipahami. Kami jelaskan apa itu DNA salmon, dari mana asalnya, dan kenapa bahan ini semakin sering dipakai dalam skincare.',
                'content' => "<p>Ketika pertama kali mendengar istilah \"DNA salmon\" dalam sebuah produk skincare, reaksi banyak orang biasanya sama: terdengar aneh, bahkan sedikit menyeramkan. Namun di balik nama yang terdengar rumit ini, cara kerjanya di kulit sebenarnya cukup sederhana untuk dipahami — dan bahan ini sudah cukup lama dipakai dalam dunia kecantikan dan medis estetika.</p>
<h2>Apa sebenarnya DNA salmon itu?</h2>
<p>DNA salmon yang digunakan dalam skincare merupakan bahan yang diekstraksi dari sel-sel ikan salmon, khususnya bagian yang mengandung polinukleotida — struktur yang membentuk materi genetik. Setelah melalui proses ekstraksi dan pemurnian yang ketat, bahan ini kemudian diolah menjadi bentuk yang aman dan stabil untuk digunakan pada kulit manusia.</p>
<p>Meski namanya menyertakan kata \"DNA\", bahan ini tidak mengubah atau memengaruhi materi genetik penggunanya. Fungsinya jauh lebih sederhana: bekerja di permukaan dan lapisan luar kulit untuk membantu proses hidrasi dan regenerasi sel.</p>
<h2>Manfaat yang sering dikaitkan dengan DNA salmon</h2>
<ul>
<li>Membantu meningkatkan kadar kelembapan kulit, sehingga kulit terasa lebih kenyal dan lembap sepanjang hari.</li>
<li>Mendukung proses regenerasi sel kulit, yang berperan penting dalam menjaga tampilan kulit tetap segar.</li>
<li>Membantu meredakan tampilan kulit yang tampak lelah atau kusam akibat kurang istirahat maupun paparan lingkungan.</li>
</ul>
<p>Kombinasi manfaat ini membuat DNA salmon banyak dipilih sebagai bahan pendukung dalam produk perawatan tubuh dan wajah, terutama yang menyasar hidrasi mendalam dan tampilan kulit yang lebih segar.</p>
<h2>Apakah aman digunakan?</h2>
<p>Karena telah melalui proses pemurnian yang ketat sebelum digunakan dalam formula skincare, DNA salmon pada umumnya tergolong aman untuk kebanyakan jenis kulit. Meski begitu, seperti bahan aktif lainnya, ada baiknya melakukan uji tempel (patch test) terlebih dahulu bagi kamu yang memiliki riwayat kulit sangat sensitif atau alergi terhadap produk hewani tertentu.</p>
<h2>Kenapa sering dipadukan dengan bahan lain?</h2>
<p>Dalam formula seperti Radiance Treatment Body Serum, DNA salmon umumnya tidak berdiri sendiri, melainkan dipadukan dengan bahan aktif lain seperti kolagen, niacinamide, dan licorice. Kombinasi ini dirancang agar manfaat hidrasi dari DNA salmon dapat saling melengkapi dengan fungsi bahan lain — mulai dari menjaga elastisitas kulit hingga meratakan tampilan warna kulit.</p>
<p>Pada akhirnya, di balik nama yang terdengar rumit, DNA salmon adalah salah satu contoh bagaimana bahan-bahan yang terdengar asing di telinga awam sebenarnya memiliki fungsi yang cukup sederhana dan bermanfaat ketika digunakan dengan formulasi dan dosis yang tepat.</p>",
                'is_featured' => false,
                'published_at' => Carbon::parse('2026-06-30'),
            ],
            [
                'category' => 'Sains Kulit',
                'title' => 'Mengenal Skala Fitzpatrick: 6 Tipe Kulit dan Reaksinya Terhadap Matahari',
                'excerpt' => 'Tahu tipe kulitmu bisa membantu menentukan seberapa hati-hati kamu perlu melindungi kulit dari sinar matahari. Kenali keenam tipenya di sini.',
                'content' => "<p>Tidak semua kulit bereaksi sama terhadap paparan sinar matahari. Ada yang mudah terbakar hanya dalam beberapa menit, ada pula yang jarang mengalami reaksi apa pun. Untuk memahami perbedaan ini, dunia dermatologi mengenal sebuah sistem klasifikasi bernama skala Fitzpatrick — cara sederhana untuk mengelompokkan kulit berdasarkan bagaimana ia merespons sinar UV.</p>
<h2>Apa itu skala Fitzpatrick?</h2>
<p>Skala Fitzpatrick membagi kulit manusia ke dalam enam tipe, dari tipe I hingga tipe VI, berdasarkan tingkat sensitivitas terhadap sinar matahari dan seberapa besar kemungkinan kulit tersebut berubah warna (menjadi lebih gelap) setelah terpapar. Semakin rendah angkanya, umumnya semakin sensitif kulit tersebut terhadap sinar UV.</p>
<h3>Enam tipe kulit menurut skala Fitzpatrick</h3>
<ul>
<li><strong>Tipe I</strong> — Mudah terbakar, warna kulit tidak pernah berubah menjadi gelap (tergolong sangat sensitif).</li>
<li><strong>Tipe II</strong> — Mudah terbakar, warna kulit berubah sedikit kecoklatan (sensitif).</li>
<li><strong>Tipe III</strong> — Mudah terbakar, namun kulit berangsur-angsur menjadi gelap (tergolong normal).</li>
<li><strong>Tipe IV</strong> — Sedikit terbakar, warna kulit cenderung selalu kecoklatan (coklat sedang).</li>
<li><strong>Tipe V</strong> — Jarang terbakar, warna kulit cenderung coklat tua (tidak sensitif).</li>
<li><strong>Tipe VI</strong> — Tidak pernah terbakar, dengan warna kulit gelap alami.</li>
</ul>
<h2>Kenapa penting untuk mengetahui tipe kulitmu?</h2>
<p>Mengetahui tipe kulit menurut skala ini bukan sekadar informasi menarik — ada manfaat praktisnya. Kulit dengan tipe I dan II umumnya memerlukan perlindungan dari sinar matahari yang lebih ekstra, seperti penggunaan tabir surya dengan SPF lebih tinggi dan waktu paparan matahari yang lebih dibatasi, karena risiko kerusakan kulit akibat sinar UV cenderung lebih tinggi pada kelompok ini.</p>
<p>Sebaliknya, kulit dengan tipe V dan VI meski cenderung lebih jarang terbakar, tetap membutuhkan perlindungan dari sinar matahari untuk mencegah masalah kulit jangka panjang lainnya, seperti hiperpigmentasi atau penuaan dini akibat paparan UV yang terus-menerus.</p>
<h2>Bagaimana cara mengetahui tipe kulitmu?</h2>
<p>Cara paling sederhana adalah dengan memperhatikan bagaimana kulitmu bereaksi ketika terpapar sinar matahari langsung selama beberapa waktu tanpa perlindungan — apakah cenderung memerah dan terasa perih, ataukah cenderung berubah gelap secara bertahap tanpa reaksi berlebihan. Dari situ, kamu bisa memperkirakan masuk ke tipe yang mana berdasarkan enam kategori di atas.</p>
<p>Apa pun tipe kulitmu, satu hal tetap berlaku untuk semua: penggunaan tabir surya secara rutin adalah langkah pencegahan yang tidak boleh dilewatkan dalam rutinitas skincare harian, khususnya bila kamu juga menggunakan produk dengan bahan aktif pencerah seperti niacinamide, licorice, atau alpha-arbutin, yang membuat kulit sedikit lebih sensitif terhadap paparan matahari selama masa perawatan.</p>",
                'is_featured' => false,
                'published_at' => \Illuminate\Support\Carbon::parse('2026-08-22'),
            ],
            [
                'category' => 'Rutinitas',
                'title' => 'Usia Berapa Sebaiknya Mulai Menggunakan Skincare?',
                'excerpt' => 'Semakin muda usia mulai memakai skincare kini jadi tren, tapi apakah semua produk aman untuk segala usia? Ini panduan sederhananya.',
                'content' => "<p>Pertanyaan \"usia berapa sebaiknya mulai pakai skincare\" semakin sering muncul, terutama di kalangan remaja yang mulai penasaran dengan dunia perawatan kulit. Jawabannya sebenarnya tidak sesederhana satu angka pasti — tergantung pada jenis produk dan kebutuhan kulit masing-masing.</p>
<h2>Patokan umum berdasarkan kandungan aktif</h2>
<p>Sebagai patokan umum, jika sebuah produk skincare mengandung bahan aktif dengan konsentrasi normal hingga tinggi — seperti niacinamide dosis tinggi, acid eksfoliasi, atau retinol — maka penggunaannya sebaiknya menunggu usia minimal 15 tahun. Di usia sebelum itu, kulit masih dalam tahap perkembangan dan cenderung lebih sensitif terhadap bahan aktif dengan konsentrasi tinggi.</p>
<p>Ini bukan berarti anak-anak atau remaja di bawah 15 tahun tidak boleh merawat kulit sama sekali. Perawatan dasar seperti membersihkan wajah dan menggunakan pelembap ringan umumnya tetap aman dan bahkan dianjurkan sebagai kebiasaan baik sejak dini.</p>
<h2>Bagaimana jika sudah mengalami masalah kulit seperti jerawat?</h2>
<p>Bagi remaja yang sudah mulai mengalami masalah kulit seperti jerawat meski usianya belum genap 15 tahun, sebaiknya pilihan produk difokuskan pada yang membantu mengontrol produksi minyak berlebih (oil control) dengan formula yang lembut, dibanding langsung menggunakan produk dengan bahan aktif berkonsentrasi tinggi yang berisiko membuat kulit justru semakin iritasi.</p>
<h3>Rutinitas dasar yang aman untuk segala usia</h3>
<ul>
<li>Membersihkan wajah dengan cleanser yang lembut, dua kali sehari.</li>
<li>Menggunakan pelembap ringan sesuai kebutuhan kulit.</li>
<li>Menggunakan tabir surya di siang hari, terutama bagi yang banyak beraktivitas di luar ruangan.</li>
</ul>
<h2>Kesimpulan</h2>
<p>Tidak ada salahnya mulai mengenal skincare sejak usia muda, selama dimulai dari rutinitas dasar yang aman dan produk dengan formula yang sesuai usia. Penggunaan bahan aktif dengan konsentrasi lebih tinggi sebaiknya ditunda hingga usia yang lebih matang, atau dikonsultasikan lebih dulu bila ada kondisi kulit tertentu yang memerlukan penanganan khusus.</p>",
                'is_featured' => false,
                'published_at' => \Illuminate\Support\Carbon::parse('2026-08-18'),
            ],
            [
                'category' => 'Rutinitas',
                'title' => '4 Tanda Skincare-mu Benar-Benar Bekerja',
                'excerpt' => 'Sering merasa ragu apakah rutinitas skincare-mu sudah membuahkan hasil? Ini tanda-tanda yang bisa kamu perhatikan sendiri di rumah.',
                'content' => "<p>Salah satu tantangan terbesar dalam merawat kulit adalah kesabaran — hasil dari sebuah rutinitas skincare jarang terlihat dalam semalam. Karena itu, penting untuk tahu tanda-tanda apa saja yang menunjukkan bahwa produk yang kamu gunakan sebenarnya sudah mulai bekerja, meski perubahannya belum terlalu drastis.</p>
<h2>1. Kulit terasa lebih lembap</h2>
<p>Salah satu tanda paling awal yang biasanya muncul adalah perubahan pada tingkat kelembapan kulit. Jika kulit yang sebelumnya terasa kering atau kasar mulai terasa lebih lembap dan nyaman sepanjang hari, ini menandakan produk pelembap dan serum yang kamu gunakan mulai bekerja sebagaimana mestinya.</p>
<h2>2. Kulit tampak lebih cerah</h2>
<p>Tampilan kulit yang mulai terlihat lebih cerah dan tidak sekusam sebelumnya adalah tanda lain yang cukup mudah diperhatikan, terutama bila kamu menggunakan produk dengan bahan aktif pencerah seperti niacinamide, alpha-arbutin, atau licorice. Perubahan ini biasanya terlihat lebih jelas di area yang mendapat paparan sinar matahari langsung, seperti pipi dan dahi.</p>
<h2>3. Kulit terasa lebih kenyal</h2>
<p>Selain lembap, tekstur kulit yang mulai terasa lebih kenyal dan halus saat disentuh juga menjadi indikasi positif. Ini sering dikaitkan dengan bahan aktif seperti kolagen atau peptide yang bekerja mendukung struktur dan elastisitas kulit dari waktu ke waktu.</p>
<h2>4. Perubahan mulai konsisten setelah beberapa minggu</h2>
<p>Perlu diingat, hasil dari penggunaan skincare umumnya baru mulai terlihat secara konsisten setelah minimal 3 hingga 4 minggu pemakaian rutin. Jika di minggu-minggu awal kamu belum melihat perubahan signifikan, itu adalah hal yang wajar — bukan berarti produknya tidak bekerja.</p>
<h3>Yang perlu diperhatikan jika tidak ada tanda-tanda ini</h3>
<p>Jika setelah lebih dari sebulan pemakaian rutin belum ada perubahan sama sekali, atau justru muncul reaksi negatif seperti kemerahan dan iritasi, ada baiknya mengevaluasi kembali rutinitas yang digunakan — baik dari sisi urutan pemakaian, kecocokan bahan aktif dengan jenis kulit, maupun konsistensi penggunaannya sehari-hari.</p>",
                'is_featured' => false,
                'published_at' => \Illuminate\Support\Carbon::parse('2026-08-16'),
            ],
            [
                'category' => 'Sains Kulit',
                'title' => 'Hiperpigmentasi: Kenali Penyebab dan Gejalanya Sejak Dini',
                'excerpt' => 'Bercak gelap atau flek di wajah bisa jadi tanda hiperpigmentasi. Kenali penyebab dan gejalanya supaya bisa ditangani lebih awal.',
                'content' => "<p>Hiperpigmentasi menjadi salah satu masalah estetika kulit yang cukup umum dialami, baik oleh perempuan maupun laki-laki. Kondisi ini ditandai dengan munculnya bercak atau bintik gelap di kulit, membuat warna kulit menjadi tidak merata dan sering kali memengaruhi rasa percaya diri penderitanya.</p>
<h2>Apa itu hiperpigmentasi?</h2>
<p>Secara sederhana, hiperpigmentasi adalah kondisi ketika sebagian area kulit memproduksi melanin (pigmen kulit) secara berlebihan dibandingkan area kulit di sekitarnya, sehingga muncul bercak yang tampak lebih gelap. Kondisi ini bisa terjadi pada siapa saja, tanpa memandang jenis kulit.</p>
<h2>Apa saja penyebab hiperpigmentasi?</h2>
<ul>
<li><strong>Faktor genetik</strong> — kecenderungan mengalami hiperpigmentasi bisa diturunkan dalam keluarga.</li>
<li><strong>Masalah pada kulit</strong> — seperti bekas jerawat atau luka bakar yang meninggalkan bekas gelap setelah proses penyembuhan.</li>
<li><strong>Paparan sinar matahari</strong> — salah satu pemicu paling umum, karena sinar UV merangsang produksi melanin berlebih.</li>
<li><strong>Gangguan pada kelenjar adrenal</strong> — beberapa kondisi medis, seperti penyakit Addison, dapat menyebabkan munculnya flek hitam pada kulit.</li>
<li><strong>Efek samping obat-obatan tertentu</strong> — misalnya beberapa jenis pil KB yang dapat membuat kulit lebih sensitif terhadap paparan matahari, sehingga sel penghasil melanin (melanosit) lebih mudah terganggu.</li>
</ul>
<h2>Tanda atau gejala yang perlu diperhatikan</h2>
<ul>
<li>Munculnya bercak gelap (flek) berwarna coklat, hitam, abu-abu, atau kemerahan pada permukaan kulit.</li>
<li>Letak flek biasanya muncul di area kulit yang paling sering terpapar sinar matahari, seperti pipi, hidung, dan dahi.</li>
<li>Ukuran bercak bervariasi — umumnya berdiameter kurang dari 2 cm, namun berpotensi membesar dan meluas seiring waktu apabila tidak ditangani atau dicegah lebih lanjut.</li>
</ul>
<h2>Langkah pencegahan yang bisa dilakukan</h2>
<p>Karena paparan sinar matahari menjadi salah satu pemicu utama, penggunaan tabir surya secara rutin adalah langkah pencegahan paling mendasar. Selain itu, penggunaan bahan aktif yang membantu meratakan warna kulit — seperti niacinamide, licorice, atau alpha-arbutin — secara konsisten dapat membantu mengurangi tampilan bercak gelap yang sudah ada, sekaligus mencegah munculnya bercak baru.</p>
<p>Bila hiperpigmentasi yang dialami cukup signifikan atau tidak kunjung membaik dengan perawatan rumahan, ada baiknya berkonsultasi dengan dokter kulit untuk mendapatkan penanganan yang lebih tepat sesuai kondisi kulit masing-masing.</p>",
                'is_featured' => false,
                'published_at' => \Illuminate\Support\Carbon::parse('2026-08-14'),
            ],
            [
                'category' => 'Kandungan Aktif',
                'title' => 'Apa Itu Skin Lightening Agent, dan Bagaimana Cara Kerjanya?',
                'excerpt' => 'Istilah ini sering muncul di label skincare pencerah. Kami jelaskan apa artinya dan bagaimana bahan-bahan ini bekerja meratakan warna kulit.',
                'content' => "<p>Jika kamu pernah membaca deskripsi produk skincare yang mengklaim dapat mencerahkan kulit secara bertahap, kemungkinan besar produk tersebut mengandung apa yang disebut sebagai skin lightening agent — sekumpulan bahan aktif yang bekerja membantu meratakan warna kulit dari dalam.</p>
<h2>Definisi sederhana</h2>
<p>Skin lightening agent adalah istilah umum untuk bahan-bahan aktif yang digunakan dalam produk skincare dengan tujuan membantu mencerahkan kulit secara perlahan. Cara kerjanya adalah dengan membantu menghambat produksi melanin berlebih — pigmen alami kulit yang jika diproduksi secara berlebihan, terutama akibat paparan sinar ultraviolet (UV), dapat membuat kulit terlihat lebih kusam atau muncul bercak gelap tidak merata.</p>
<h2>Bagaimana cara kerjanya secara umum?</h2>
<p>Ketika kulit terpapar sinar UV, sel-sel penghasil pigmen (melanosit) akan terpicu untuk memproduksi melanin lebih banyak sebagai bentuk perlindungan alami kulit. Namun, produksi melanin yang berlebihan dan tidak merata inilah yang kemudian menyebabkan munculnya area kulit yang tampak lebih gelap dibanding sekitarnya.</p>
<p>Skin lightening agent bekerja dengan menghambat salah satu tahap dalam proses produksi melanin tersebut, sehingga produksi pigmen dapat lebih terkontrol dan warna kulit secara keseluruhan tampak lebih merata dari waktu ke waktu.</p>
<h2>Contoh bahan yang tergolong skin lightening agent</h2>
<ul>
<li><strong>Niacinamide</strong> — selain menjaga skin barrier, juga membantu menghambat transfer melanin ke permukaan kulit.</li>
<li><strong>Alpha-arbutin</strong> — membantu mencerahkan kulit serta membantu mengatasi tampilan kulit gelap dan flek hitam.</li>
<li><strong>Ekstrak licorice</strong> — dikenal membantu meratakan warna kulit secara alami.</li>
<li><strong>Vitamin C (termasuk turunannya seperti ethyl ascorbic acid)</strong> — berperan sebagai antioksidan sekaligus membantu mencerahkan tampilan kulit.</li>
</ul>
<h2>Yang perlu diperhatikan saat menggunakan produk pencerah</h2>
<p>Karena bekerja pada proses produksi melanin, kulit yang sedang dalam masa perawatan dengan skin lightening agent umumnya menjadi sedikit lebih sensitif terhadap paparan sinar matahari. Oleh karena itu, penggunaan tabir surya di siang hari menjadi keharusan, bukan sekadar anjuran, agar hasil perawatan tidak justru terhambat oleh paparan UV yang tidak terlindungi.</p>
<p>Hasil dari penggunaan bahan-bahan ini juga bersifat bertahap — konsistensi pemakaian dalam beberapa minggu hingga bulan biasanya diperlukan sebelum perubahan pada warna kulit mulai terlihat jelas.</p>",
                'is_featured' => false,
                'published_at' => \Illuminate\Support\Carbon::parse('2026-08-10'),
            ],
        ];

        foreach ($articles as $data) {
            $data['slug'] = Article::makeUniqueSlug($data['title']);
            $data['author_name'] = 'Tim Riset Mejavi';
            Article::updateOrCreate(['title' => $data['title']], $data);
        }
    }
}
