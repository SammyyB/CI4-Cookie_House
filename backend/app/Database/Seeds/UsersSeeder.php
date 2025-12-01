<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'first_name'       => 'Sheryll Anne Marie',
                'middle_name'      => 'Danao',
                'last_name'        => 'Baccay',
                'email'            => 'baccaysheryll@gmail.com',
                'password_hash'    => $password,
                'type'             => 'admin',
                'account_status'   => 1,
                'email_activated'  => 1,
                'gender'           => 'Female',
                'profile_image'    => 'uploads/profile/sheryll_admin.png',
                'created_at'       => $now,
                'updated_at'       => $now,
            ]
        ];

        $this->db->table('Users')->insertBatch($data);
    }
}
