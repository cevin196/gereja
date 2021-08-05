<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jemaat;
use App\Models\Keluarga;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        // \App\Models\Jemaat::factory(50)->create();
        \App\Models\Keluarga::factory(3)
        ->has(
            Jemaat::factory()
                    ->count(3)
                    ->state(function (array $attributes, Keluarga $keluarga) {
                        return ['keluarga_id' => $keluarga->id];
                    })
        )
        ->create();
    }
}

