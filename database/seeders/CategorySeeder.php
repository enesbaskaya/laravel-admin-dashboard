<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryName = ['Kurumsal Kimlik', 'Grafik Tasarım', 'Web Tasarım', 'Sosyal Medya Yönetimi', 'One Page Site'];
        foreach ($categoryName as $name){
            DB::table('categories')->insert([
                'name'=>$name,
                'slug'=>Str::slug($name,'-')
            ]);

        }

    }
}
