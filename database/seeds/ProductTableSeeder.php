<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // ('20" TV',3),
        // ('36" TV',3),
        // ('Super-LCD 42"',4),
        // ('Ultra-Plasma 62"',5),
        // ('Value Plasma 38"',5),
        // ('Power-MP3 5gb',7),
        // ('Super-Player 1gb',8),
        // ('Porta CD',9),
        // ('CD To go!',9),
        // ('Family Talk 360',10);

        DB::table('product')->insert([
            'name'=>'20" TV',
            'category_id'=>3
        ]);

        DB::table('product')->insert([
            'name'=>'26" TV',
            'category_id'=>3
        ]);

        DB::table('product')->insert([
            'name'=>'Super-LCD 42"',
            'category_id'=>4
        ]);

        DB::table('product')->insert([
            'name'=>'Ultra-Plasma 62"',
            'category_id'=>5
        ]);
        
        DB::table('product')->insert([
            'name'=>'Ultra-Plasma 38"',
            'category_id'=>5
        ]);

        DB::table('product')->insert([
            'name'=>'Power-MP3 5gb',
            'category_id'=>7
        ]);
        
        DB::table('product')->insert([
            'name'=>'Super-Player 1gb',
            'category_id'=>8
        ]);
        
        DB::table('product')->insert([
            'name'=>'Porta CD',
            'category_id'=>9
        ]);

        DB::table('product')->insert([
            'name'=>'CD To go!',
            'category_id'=>9
        ]);
        
        DB::table('product')->insert([
            'name'=>'Family Talk 360',
            'category_id'=>10
        ]);
    }
}
