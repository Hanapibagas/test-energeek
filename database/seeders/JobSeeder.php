<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Web Developer',
        ]);
        Job::create([
            'name' => 'UI/UX Designer',
        ]);
        Job::create([
            'name' => 'IT Support',
        ]);
        Job::create([
            'name' => 'IT Maintenance',
        ]);
        Job::create([
            'name' => 'Software Developer',
        ]);
        Job::create([
            'name' => 'Programmer',
        ]);
        Job::create([
            'name' => 'AI/ML Engineer',
        ]);
        Job::create([
            'name' => 'Game Developer',
        ]);
        Job::create([
            'name' => 'Network Administrator',
        ]);
        Job::create([
            'name' => 'Information Security Specialist',
        ]);
        Job::create([
            'name' => 'Mobile App Developer',
        ]);
    }
}
