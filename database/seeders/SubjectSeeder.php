<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubjectModel;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectModel::firstOrCreate([
            'subject_name' => 'General'
        ]);
    }
}
