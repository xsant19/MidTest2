<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          =>  'Anton',
                'email'         =>  'anton@gmail.com',
                'phone'       =>  '081234555678',
                'order' => '1',
                'product'    =>  'Mobil',
                'reason'    =>  'Keren dan sebagai Mobil Dinas',
                'subject'    =>  'None',
                'tell'    =>  'Saya Sangat Senang Bergabung Dengan Perusahaan Ini',
                'created_at' => Time::now()
            ],
            [
                'name'          =>  'Rahmad',
                'email'         =>  'Rahmad@gmail.com',
                'phone'       =>  '081234555888',
                'order' => '2',
                'product'    =>  'Mobil',
                'reason'    =>  'Cash',
                'subject'    =>  'Hitam Silver',
                'tell'    =>  'Saya Sangat Senang Membeli Di Toko Ini',
                'created_at' => Time::now()
            ],
        ];
        $this->db->table('customer')->insertBatch($data);
    }
}
