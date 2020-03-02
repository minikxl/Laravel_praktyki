<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name'=>'ELECTRONICS',
            'lft'=>1,
            'rgt'=>20
        ]);

        DB::table('category')->insert([
            'name'=>'TELEVISIONS',
            'lft'=>2,
            'rgt'=>9
        ]);

        DB::table('category')->insert([
            'name'=>'TUBE',
            'lft'=>3,
            'rgt'=>4
        ]);

        DB::table('category')->insert([
            'name'=>'LCD',
            'lft'=>5,
            'rgt'=>6
        ]);
        
        DB::table('category')->insert([
            'name'=>'PLASMA',
            'lft'=>7,
            'rgt'=>8
        ]);

        DB::table('category')->insert([
            'name'=>'PORTABLE ELECTRONICS',
            'lft'=>10,
            'rgt'=>19
        ]);

        DB::table('category')->insert([
            'name'=>'MP3 PLAYERS',
            'lft'=>11,
            'rgt'=>14
        ]);

        DB::table('category')->insert([
            'name'=>'FLASH',
            'lft'=>12,
            'rgt'=>13
        ]);
        
        DB::table('category')->insert([
            'name'=>'CD PLAYERS',
            'lft'=>15,
            'rgt'=>16
        ]);

        DB::table('category')->insert([
            'name'=>'2 WAY RADIOS',
            'lft'=>17,
            'rgt'=>18
        ]);

    }
}
