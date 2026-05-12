<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\JobOffer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'Taha Touil',
            'email' => 'tahatouil@gmail.com',
        ]);

        User::factory(300)->create();

        $users = User::all()->shuffle();

        for ($i = 0; $i < 20; $i++) {
            \App\Models\Employer::factory()->create([
                "user_id" => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();
        for ($i = 0; $i < 100; $i++) {
            JobOffer::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }

        foreach ($users as $user) {
            $jobOffers = JobOffer::inRandomOrder()->take(rand(1, 5))->get();

            foreach ($jobOffers as $jobOffer) {
                \App\Models\JobApplication::factory()->create([
                    'user_id' => $user->id,
                    'job_offer_id' => $jobOffer->id
                ]);
            }
        }
    }
}
