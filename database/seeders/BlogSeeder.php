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
                'kategori1' => '2',
                'kategori2' => '2',
                'creator' => 'Admin',
                'foto' => 'blog4.png',
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
                'kategori1' => '2',
                'kategori2' => '2',
                'creator' => 'Admin',
                'foto' => 'blog1.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Cara Membawa Kucing ke Vet untuk suntik',
                'kategori1' => '2',
                'kategori2' => '2',
                'creator' => 'Admin',
                'foto' => 'blog2.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Penanganan Pertama Adopsi Kucing Liar',
                'kategori1' => '2',
                'kategori2' => '1',
                'creator' => 'Admin',
                'foto' => 'blog3.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Cara Menangani Anjing Sedih',
                'kategori1' => '1',
                'kategori2' => '1',
                'creator' => 'Admin',
                'foto' => 'blog5.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Cara Mengajak Anjing Introvert Jalan-Jalan',
                'kategori1' => '1',
                'kategori2' => '3',
                'creator' => 'Admin',
                'foto' => 'blog6.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Perawatan Anjing Diam',
                'kategori1' => '1',
                'kategori2' => '1',
                'creator' => 'Admin',
                'foto' => 'Blogs.jpg',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
            [
                'judul' => 'Cara Mengatasi Kucing Marah',
                'kategori1' => '2',
                'kategori2' => '3',
                'creator' => 'Admin',
                'foto' => 'kucing marah.jpeg',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum mi dui. Morbi porttitor tincidunt risus eget aliquet. Nulla non ex hendrerit risus faucibus fermentum ut sed dolor. Donec non vestibulum nunc. Praesent ac mollis orci, sit amet feugiat neque. Cras bibendum diam vel dui vehicula tincidunt et ac libero. Vivamus sit amet tincidunt sapien. Suspendisse suscipit neque non pellentesque maximus. Nunc semper pellentesque libero, vitae lacinia neque vestibulum eget. Etiam et enim fermentum, hendrerit ipsum ac, porta neque. Duis vitae luctus ligula.

                Maecenas condimentum, quam sed varius gravida, ex sem congue risus, ac gravida nisl ipsum vel tellus. Aenean eu volutpat sem, eu vehicula ipsum. Vivamus imperdiet risus et lectus dignissim, id congue lectus accumsan. Aenean nunc nibh, malesuada non pretium sit amet, rutrum a dui. Mauris ligula purus, sodales id tristique in, venenatis eu felis. Donec efficitur augue eu neque malesuada tincidunt. Mauris quis aliquam turpis. Donec tincidunt, ante vel euismod mattis, odio sem consectetur urna, in mattis mauris lacus eget tortor. Nullam non lacinia metus, in fringilla felis.
                
                Phasellus vel quam nec nisi gravida pulvinar. Pellentesque nec rhoncus arcu. Vivamus mollis tellus non libero vulputate sagittis. Cras mollis in lacus et condimentum. Phasellus ac enim consequat, rutrum nisi eget, blandit lectus. Sed maximus turpis eu ullamcorper euismod. Integer vitae lorem id purus fermentum commodo at non nunc. Cras euismod vestibulum ante eu consectetur.',
            ],
        ];

        foreach ($blog as $key => $value) {
            Blog::create($value);
        }
    }
}
