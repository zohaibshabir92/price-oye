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
        
        DB::table('categories')->insert([
            'title'         => "Salary",
            'description'     => "Employee Salary Category",
            'created_at'   => date("Y-m-d h:i:s")
        ]);
    }
}
