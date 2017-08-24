<?php

use Illuminate\Database\Seeder;

class OpenTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokens')->insert([
            'email' => 'example@example.com',
        ]);
    }
}
