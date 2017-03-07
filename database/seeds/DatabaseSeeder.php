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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'hello@gunharth.io',
            'password' => bcrypt('123456'),
        ]);
        $this->call(ProductTableSeeder::class);
        $this->call(JobTableSeeder::class);
        // $this->call(ItemTableSeeder::class);
        // $this->call(ProductTableSeeder::class);
        // $this->call(SelectionTableSeeder::class);
    }
}
