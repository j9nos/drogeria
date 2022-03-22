<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfume;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Adidas', 'type'=>'ferfi', 'price'=>'1000'],
            ['name'=>'Nike', 'type'=>'noi', 'price'=>'2000'],
            ['name'=>'Decathlon', 'type'=>'ferfi', 'price'=>'3000'],
            ['name'=>'Haribo', 'type'=>'ferfi', 'price'=>'4000'],
            ['name'=>'Milka', 'type'=>'uni', 'price'=>'5000'],
        ];
        foreach($data as $element)
        {
            Perfume::create($element);
        }
    }
}
