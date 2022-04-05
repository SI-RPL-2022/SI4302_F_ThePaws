<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = [
            [
                'judul' => 'Penyebab Dan Cara Mengobati Kucing Jika Muntah',
                'kategori1' => '1',
                'kategori2' => '2',
                'creator' => 'Admin',
                'foto' => 'muntah.jpg',
                'deskripsi' => 'Kucing adalah hewan yang cukup sensitif pada bagian pencernaannya. Ada beberapa penyakit yang bisa menyerang kucing melalui pencernaan.
            Salah satu gejala yang bisa menjadi penyebab kucing sakit keras adalah kucing muntah busa. Apakah kamu pernah melihat kondisi seperti ini? Kondisi dimana kucing muntah berbusa dengan intensitas yang cukup sering.
           Segera ketahui beberapa penyebab dan cara mengobati kucing yang sudah mengalami kondisi seperti ini sebelum penyakitnya merambat menjadi yang lebih berat.
           
           Berikut ini beberapa hal yang bisa menyebabkan kondisi kucing muntah busa bisa terjadi terus menerus.
           1. Kucing Telat Makan
           Seperti yang dilansir dari petMD, kucing merupakan hewan yang akan mengeluarkan empedu, cairan lambung dan asam klorida ketika akan memasuki jam makan mereka.
           Proses ini sudah umum terjadi pada semua kucing. Namun, ketika kamu tidak tepat waktu memberi makan mereka, perut yang sudah kosong tersebut akan mengalami iritasi yang beresiko kucing akan muntah busa putih.
           
           2. Menelan Bulu Rontok (Hairballs)
           Kucing suka menjilati bagian bulu mereka. Bulu rontok yang terjadi pada setiap hewan memungkinkan untuk masuk ke dalam perut kucing. Bila hal ini terus terjadi, maka akan ada kondisi hairball, dimana bulu yang ada di dalam perut kucing sudah menggumpal terlalu besar.
           Gumpalan tersebut akan menyebabkan saluran pencernaan kucing tersumbat sampai akhirnya memuntahkan busa sebagai efek dari sakitnya.
           
           3. Infeksi Cacing
           Layaknya anak kecil, kucing muda yang mengalami kondisi muntah beriringan dengan diare, dapat didiagnosa sebagai adanya infeksi cacing atau parasit pada sistem pencernaannya.',
            ],
            [
                'judul' => 'Cara merawat anak anjing tanpa induk',
                'kategori1' => '1',
                'kategori2' => '2',
                'creator' => 'Admin',
                'foto' => 'blog1.png',
                'deskripsi' => 'blablabla',
            ],
        ];

        foreach ($blog as $key => $value) {
            Blog::create($value);
        }
    }
}
