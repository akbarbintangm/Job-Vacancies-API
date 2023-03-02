<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class JobVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobDescription = '
            <p>
                <b>Tanggung Jawab:</b>
                <br>
                Bertanggung jawab menyelesaikan code berbasis web sesuai spesifikasi yang ditentukan oleh analis. Teknologi yang digunakan sebagian besar adalah PHP dan Node.js
                <br>
                <br>Kualifikasi :<br>
                <li>Berpengalaman mengembangkan web application menggunakan teknologi modern javascript dengan framework VueJs dan ReactJs untuk frontend dan ExpressJs dan NestJs untuk backend.</li>
                <li>Berpengalaman mengembangkan web menggunakan framework Laravel dan CI untuk PHP.</li>
                <li>Memahami konsep API dan microservices.</li>
                <li>Memahami pengembangan web app dengan responsive design menggunakan framework Bootstrap atau Tailwind untuk frontend developer.</li>
                <li>Memahami SQL query menggunakan MySQL.</li>
                <li>Berpengalaman menggunakan ORM merupakan nilai plus untuk backend developer.</li>
                <li>Berpengalaman menggunakan repository seperti github serta mengetahui tentang gitflow.</li>
                <li>Berpengalaman menggunakan Postman merupakan nilai plus.</li>
                <li>Berpengalaman menggunakan docker merupakan nilai plus.</li>
                <li>Mampu berkomunikasi dengan baik dan menjadi team player.</li>
            </p>
        ';

        DB::table('job_vacancies')->insert([
            'name' => 'Full Stack Developer',
            'description' => $jobDescription,
            'degree' => 'Strata S1',
            'date_open' => Carbon::now(),
            'date_close' => Carbon::now()->subdays(120),
            'quota' => 50,
            'status' => 1,
            'created_by' => 2,
            'updated_by' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
