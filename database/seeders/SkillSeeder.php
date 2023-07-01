<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'Programer Dekstop dan Web',
        ]);
        Skill::create([
            'name' => 'Technical support komputer',
        ]);
        Skill::create([
            'name' => 'Content writer yang handal',
        ]);
        Skill::create([
            'name' => 'Teknologi jaringan',
        ]);
        Skill::create([
            'name' => 'Programer aplikasi mobile',
        ]);
        Skill::create([
            'name' => 'Ahli Dalam bidang Cloud Computing',
        ]);
    }
}
