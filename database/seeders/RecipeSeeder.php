<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            'name'=> '肉じゃが',
            'description'=> '母の味の定番料理！',
            'calories' => 400
        ]);

        Recipe::create([
            'name'=> 'カルボナーラ',
            'description'=> 'とてもクリーミーな料理',
            'calories' => 800
        ]);

        Recipe::create([
            'name'=> '明太子パスタ',
            'description'=> 'きざみ海苔を足せばより美味しくなります',
            'calories' => 650
        ]);
        
    }
}
