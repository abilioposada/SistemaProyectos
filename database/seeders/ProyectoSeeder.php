<?php namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Proyecto::factory( 25 )->create();
    }
}
