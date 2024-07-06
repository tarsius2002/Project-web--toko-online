<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'description' => "One-Stop Shop untuk semua kebutuhan Anda. Nikmati produk berkualitas, harga terjangkau, dan layanan pelanggan terbaik. Bergabunglah dengan komunitas kami dan temukan penawaran menarik setiap hari!",
            'short_des' => "Temukan segala kebutuhan Anda dengan koleksi terbaik kami. Belanja mudah, aman, dan nyaman untuk gaya hidup Anda.",
            'photo' => "image.jpg",
            'logo' => 'logo.jpg',
            'address' => "Universitas Medan Area",
            'email' => "olshop@gmail.com",
            'phone' => "+62 813 7017 2339",
        ];

        DB::table('settings')->insert($data);
    }
}
