<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        University::truncate();

        $csvFile = fopen(base_path("database/csv/seeder.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (!$firstline) {
                University::create([
                    "university_id" => $data['0'],
                    "university_name" => $data['1'],
                    "university_acronym" => $data['2'],
                    "university_address" => $data['3'],
                    "university_acreditation" => $data['4'],
                    "university_website" => $data['5'],
                    "user_id" => $data['6']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
