<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Pilihan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::create([
            "nama" => "18inchi (Blonde)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163926/binacipta/18inchi_blonde_jfzh8c.png",
            "kategori" => "7",
            "namagambar" => "18inchi_blonde_jfzh8c",
            "deskripsi" => "Rambut panjang berwarna blonde ukuran 18 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "20inchi (Blonde)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163924/binacipta/20inchi_blonde_vex5h7.png",
            "kategori" => "2",
            "namagambar" => "20inchi_blonde_vex5h7",
            "deskripsi" => "Rambut panjang berwarna blonde ukuran 20 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "26inchi (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163924/binacipta/26inchi_hitam_u0iksn.png",
            "kategori" => "4",
            "namagambar" => "26inchi_hitam_u0iksn",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 26 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "10cm (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163922/binacipta/10cm_kaulfm.png",
            "kategori" => "8",
            "namagambar" => "10cm_kaulfm",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 10 cm",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "28inchi (Blonde)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163921/binacipta/28inchi_blonde_cerwd6.png",
            "kategori" => "3",
            "namagambar" => "28inchi_blonde_cerwd6",
            "deskripsi" => "Rambut panjang berwarna blonde ukuran 28 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "28inchi (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163914/binacipta/28inchi_hitam_bvz2yj.png",
            "kategori" => "3",
            "namagambar" => "28inchi_hitam_bvz2yj",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 28 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "9cm (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163913/binacipta/9cm_ra8oge.png",
            "kategori" => "6",
            "namagambar" => "9cm_ra8oge",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 9 cm",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "26inchi (Blonde)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163912/binacipta/26inchi_blonde_il4kcx.png",
            "kategori" => "4",
            "namagambar" => "26inchi_blonde_il4kcx",
            "deskripsi" => "Rambut panjang berwarna blonde ukuran 26 inchi",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "7cm (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163912/binacipta/7cm_kbsrko.png",
            "kategori" => "5",
            "namagambar" => "7cm_kbsrko",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 7 cm",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Product::create([
            "nama" => "8cm (Hitam)",
            "url" => "https://res.cloudinary.com/dufcqrw3r/image/upload/v1666163910/binacipta/8cm_ntx69b.png",
            "kategori" => "1",
            "namagambar" => "8cm_ntx69b",
            "deskripsi" => "Rambut panjang berwarna hitam ukuran 8 cm",
            "hargajual" => "0",
            "hargabeli" => "0",
            "stokgudang" => "0",
            "stoktoko" => "0",
        ]);
        Kategori::create([
            "kategori" => "8cm",
        ]);
        Kategori::create([
            "kategori" => "20inchi",
        ]);
        Kategori::create([
            "kategori" => "28inchi",
        ]);
        Kategori::create([
            "kategori" => "26inchi",
        ]);
        Kategori::create([
            "kategori" => "7cm",
        ]);
        Kategori::create([
            "kategori" => "9cm",
        ]);
        Kategori::create([
            "kategori" => "18inchi",
        ]);
        Kategori::create([
            "kategori" => "10cm",
        ]);
        User::create([
            "name" => "Admin",
            "email" => "binacipta@gmail.com",
            "password" => Hash::make("BCadmin@2022")
        ]);
    }
}