<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class News extends Seeder{
    public function run() {

        $faker = Faker/Factory::create();

        $data = [
            'title' => $faker->title,
            'body' => $faker->text(400),
            'slug' => $faker->slug,
            'data' => $faker->dateTime()

        ];
        $this->db->table('news')->insert($data);

    }
}