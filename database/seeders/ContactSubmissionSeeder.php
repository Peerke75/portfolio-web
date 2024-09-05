<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactSubmission;

class ContactSubmissionSeeder extends Seeder
{
    public function run()
    {
        ContactSubmission::create([
            'name' => 'Peter Parker',
            'email' => 'peter@hotmail.com',
            'subject' => 'sollicitatie',
            'message' => 'wil je op een sollicitatie gesprek komen .'
        ]);

        ContactSubmission::create([
            'name' => 'Johan gebak',
            'email' => 'johan@outlook.com',
            'subject' => 'Gesprek',
            'message' => 'wil je een gesrpek voeren met mij.'
        ]);
    }
}
