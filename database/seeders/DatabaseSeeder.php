<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('keluargas')->insert([
            'nama' => '-',
            'alamat' => '-',            
        ]);
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

