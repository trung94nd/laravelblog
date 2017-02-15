<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(categoriesSeeder::class);
    }
}
/**
*
*/
class categoriesSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'World News','description' => ''],
            ['name' => 'News of the day','description' => ''],
            ['name' => 'Football news','description' => ''],
        ]);
    }
}