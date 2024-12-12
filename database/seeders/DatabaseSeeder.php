<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Word;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Word::factory()->count(220)->state(new Sequence(['boat' => false], ['boat' =>true],['car' => false], ['car' =>true],['airplane' => false], ['airplane' =>true],['animal' => false], ['animal' =>true]))->create();
    }
}
