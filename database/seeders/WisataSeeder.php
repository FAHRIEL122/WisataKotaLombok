<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Wisata;
use App\Models\Galeri;

class WisataSeeder extends Seeder
{
    public function run()
    {
        // Data 10 Tempat Wisata di Lombok
        $wisatas = [
            [
                'nama_tempat' => 'Gili Trawangan',
                'alamat' => 'Gili Indah, Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar.',
                'deskripsi' => 'Gili Trawangan adalah pulau terbesar dari tiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. Trawangan juga satu-satunya gili yang ketinggiannya di atas permukaan laut cukup signifikan. Pulau ini terkenal dengan pantainya yang bersih, air laut biru kehijauan, dan kehidupan malam yang semarak.',
                'harga_tiket' => 20000,
                'jam_operasional' => '24 Jam',
                'no_kontak' => '081234567890',
                'kategori' => 'Pantai',
                'foto_cover' => 'https://images.unsplash.com/photo-1570784332195-2bd0439f75b8?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15783.565860715367!2d116.02705035541991!3d-8.35084999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdcf6c9ecaa933%3A0xc39f206584c6c06a!2sGili%20Trawangan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'video_embed' => '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/S23w3-fVf7U" title="Gili Trawangan 4K" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'galeri' => [
                    'https://images.unsplash.com/photo-1604928141064-207cea6f571f?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1610476449195-2384a2b95c02?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Pantai Kuta Mandalika',
                'alamat' => 'Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Barat',
                'deskripsi' => 'Pantai Kuta Mandalika adalah destinasi wisata bahari unggulan di Lombok Tengah. Pantai ini terkenal dengan pasir putihnya yang berbentuk seperti merica dan ombaknya yang cocok untuk berselancar. Saat ini Mandalika juga dikenal dengan sirkuit internasionalnya.',
                'harga_tiket' => 10000,
                'jam_operasional' => '07:00 - 18:00',
                'no_kontak' => '081234567891',
                'kategori' => 'Pantai',
                'foto_cover' => 'https://images.unsplash.com/photo-1611056581454-e77a113264eb?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.8687355088214!2d116.27988331478168!3d-8.892185393616235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1002afc558d%3A0xc3f8373b88bba6ea!2sKuta%20Beach%20Lombok!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'video_embed' => '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/n4q4O1R0Jfw" title="Mandalika Lombok" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'galeri' => [
                    'https://images.unsplash.com/photo-1596404555811-9a7da8da943f?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604561081518-e7c65349f4ab?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1611056581454-e77a113264eb?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604928141064-207cea6f571f?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Gunung Rinjani',
                'alamat' => 'Sembalun Lawang, Sembalun, Kabupaten Lombok Timur, Nusa Tenggara Barat',
                'deskripsi' => 'Gunung Rinjani adalah gunung berapi tertinggi kedua di Indonesia dengan ketinggian 3.726 mdpl. Rinjani adalah favorit bagi pendaki dari seluruh dunia karena keindahan pemandangannya, terutama Danau Segara Anak yang berada di kalderanya.',
                'harga_tiket' => 150000,
                'jam_operasional' => '06:00 - 17:00 (Pendakian)',
                'no_kontak' => '081234567892',
                'kategori' => 'Gunung',
                'foto_cover' => 'https://images.unsplash.com/photo-1506506307685-6133170e1762?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126300.99960786016!2d116.36862719229712!3d-8.41113063595568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdee4f51eebcb5%3A0x600127f804cc2c0!2sGunung%20Rinjani!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'video_embed' => '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/5aM2lU7537A" title="Gunung Rinjani" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'galeri' => [
                    'https://images.unsplash.com/photo-1549480112-c2e8a15647dd?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1589308078059-814cb7b1f5fc?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1506506307685-6133170e1762?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Pantai Pink (Pantai Tangsi)',
                'alamat' => 'Sekaroh, Jerowaru, Kabupaten Lombok Timur, Nusa Tenggara Barat',
                'deskripsi' => 'Pantai Tangsi atau lebih dikenal dengan nama Pantai Pink, merupakan salah satu pantai unik di Lombok yang memiliki pasir berwarna merah muda. Warna pink ini berasal dari serpihan karang merah yang hancur dan bercampur dengan pasir putih.',
                'harga_tiket' => 50000,
                'jam_operasional' => '08:00 - 17:00',
                'no_kontak' => '081234567893',
                'kategori' => 'Pantai',
                'foto_cover' => 'https://images.unsplash.com/photo-1616715003310-4ed39b091f0c?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1616715003310-4ed39b091f0c?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1596404555811-9a7da8da943f?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604561081518-e7c65349f4ab?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604928141064-207cea6f571f?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Air Terjun Tiu Kelep',
                'alamat' => 'Senaru, Bayan, Kabupaten Lombok Utara, Nusa Tenggara Barat',
                'deskripsi' => 'Air Terjun Tiu Kelep adalah salah satu air terjun paling menakjubkan di kaki Gunung Rinjani. Airnya yang deras dan sangat jernih mengalir dari ketinggian sekitar 42 meter.',
                'harga_tiket' => 10000,
                'jam_operasional' => '07:00 - 16:30',
                'no_kontak' => '081234567894',
                'kategori' => 'Alam',
                'foto_cover' => 'https://images.unsplash.com/photo-1433086966358-54859d0ed716?q=80&w=1374&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1433086966358-54859d0ed716?q=80&w=1374&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1432405972618-c6c00202150c?q=80&w=1332&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1506477331477-33d5d8b3dc85?q=80&w=1334&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1518182170546-076616fd17d9?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1511216335778-7cb8f49fa7a3?q=80&w=1374&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Bukit Merese',
                'alamat' => 'Jl. Kuta Lombok, Kuta, Kec. Pujut, Kabupaten Lombok Tengah',
                'deskripsi' => 'Bukit Merese menawarkan panorama laut selatan yang menakjubkan dengan padang rumput hijau yang luas, pemandangan sunset terbaik, dan angin sepoi-sepoi yang menyegarkan.',
                'harga_tiket' => 5000,
                'jam_operasional' => '24 Jam',
                'no_kontak' => '081234567895',
                'kategori' => 'Alam',
                'foto_cover' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1506506307685-6133170e1762?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1549480112-c2e8a15647dd?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1589308078059-814cb7b1f5fc?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Desa Adat Sade',
                'alamat' => 'Rembitan, Kec. Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Barat',
                'deskripsi' => 'Desa Sade adalah desa adat Suku Sasak di Lombok. Di sini Anda bisa melihat bentuk bangunan asli tradisional Suku Sasak yang lantainya dibersihkan menggunakan kotoran kerbau.',
                'harga_tiket' => 15000,
                'jam_operasional' => '08:00 - 17:00',
                'no_kontak' => '081234567896',
                'kategori' => 'Sejarah',
                'foto_cover' => 'https://images.unsplash.com/photo-1579782559539-7221c5f3c0ce?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1579782559539-7221c5f3c0ce?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1596404555811-9a7da8da943f?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604561081518-e7c65349f4ab?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Pantai Tanjung Aan',
                'alamat' => 'Pengembur, Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Bar.',
                'deskripsi' => 'Tanjung Aan adalah pantai yang dikelilingi oleh perbukitan yang indah. Memiliki dua jenis pasir dalam satu pantai, yaitu pasir halus seperti tepung dan pasir sebesar biji merica.',
                'harga_tiket' => 10000,
                'jam_operasional' => '24 Jam',
                'no_kontak' => '081234567897',
                'kategori' => 'Pantai',
                'foto_cover' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1610476449195-2384a2b95c02?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604928141064-207cea6f571f?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Bukit Pergasingan',
                'alamat' => 'Sembalun Lawang, Kec. Sembalun, Kabupaten Lombok Timur',
                'deskripsi' => 'Berada di ketinggian 1670 mdpl, bukit ini memberikan panorama petak sawah Sembalun yang berwarna-warni dengan latar belakang kemegahan Gunung Rinjani.',
                'harga_tiket' => 15000,
                'jam_operasional' => '24 Jam',
                'no_kontak' => '081234567898',
                'kategori' => 'Alam',
                'foto_cover' => 'https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?q=80&w=1470&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1506506307685-6133170e1762?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1549480112-c2e8a15647dd?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1589308078059-814cb7b1f5fc?q=80&w=1470&auto=format&fit=crop'
                ]
            ],
            [
                'nama_tempat' => 'Pantai Senggigi',
                'alamat' => 'Jl. Raya Senggigi, Batu Layar, Kabupaten Lombok Barat, Nusa Tenggara Bar.',
                'deskripsi' => 'Pantai Senggigi adalah pusat pariwisata terkemuka di Lombok dengan gradasi pasir hitam ke putih yang indah serta deburan ombak yang sangat menenangkan. Garis pantainya sangat panjang dan pemandangan sunset yang sangat memukau.',
                'harga_tiket' => 15000,
                'jam_operasional' => '24 Jam',
                'no_kontak' => '081234567899',
                'kategori' => 'Pantai',
                'foto_cover' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop',
                'map_embed' => '',
                'video_embed' => '',
                'galeri' => [
                    'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1610476449195-2384a2b95c02?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1582283088001-c81729056157?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1604928141064-207cea6f571f?q=80&w=1470&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1470&auto=format&fit=crop'
                ]
            ]
        ];

        foreach ($wisatas as $w) {
            $galeri_links = $w['galeri'];
            unset($w['galeri']); // remove galeri from array to be inserted directly

            $wisata = Wisata::create($w);

            foreach ($galeri_links as $link) {
                Galeri::create([
                    'wisata_id' => $wisata->id,
                    'foto' => $link
                ]);
            }
        }
    }
}
