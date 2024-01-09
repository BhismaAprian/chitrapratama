<?php

namespace Database\Seeders;

use App\Models\Halaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Halaman::create([
            'title' => 'Sejarah',
            'slug' => str()->slug('Sejarah'),
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio nostrum sequi accusamus molestias quisquam ad, repudiandae optio, quod iste fugiat alias! Quam ipsam id, placeat a et libero cum, corporis culpa, quis voluptates at deserunt commodi labore laudantium sint recusandae atque quisquam illo veniam. Alias perspiciatis cupiditate fuga at beatae eius. Eos veniam voluptas ipsa sint magnam tempore perferendis a nostrum quas suscipit quibusdam maxime vitae labore quisquam quis corrupti recusandae, itaque dolorem iste sit aliquid at! Consequuntur alias eos, cumque officia quis nobis soluta atque rem debitis facere ut delectus est, dicta esse nemo! Autem numquam architecto corporis praesentium.'
        ]);

        Halaman::create([
            'title' => 'Keorganisasian',
            'slug' => str()->slug('Keorganisasian'),
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio nostrum sequi accusamus molestias quisquam ad, repudiandae optio, quod iste fugiat alias! Quam ipsam id, placeat a et libero cum, corporis culpa, quis voluptates at deserunt commodi labore laudantium sint recusandae atque quisquam illo veniam. Alias perspiciatis cupiditate fuga at beatae eius. Eos veniam voluptas ipsa sint magnam tempore perferendis a nostrum quas suscipit quibusdam maxime vitae labore quisquam quis corrupti recusandae, itaque dolorem iste sit aliquid at! Consequuntur alias eos, cumque officia quis nobis soluta atque rem debitis facere ut delectus est, dicta esse nemo! Autem numquam architecto corporis praesentium.'
        ]);
    }
}
