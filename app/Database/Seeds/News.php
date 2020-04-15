<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;


class News extends Seeder{
    public function run() {

        $faker = Factory::create();

        $data = [
            'title' => $faker->title,
            'body' => $faker->text(400)
        ];
        $this->db->table('news')->insert($data);

    }
}