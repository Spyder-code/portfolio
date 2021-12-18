<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Laravel',
            'Codeigniter',
            'Bootsrap',
            'Tailwind',
            'JQuery',
            'React',
            'Vue',
            'Unity',
            'HTML',
            'CSS',
            'JavaScript'
        ];

        foreach ($data as $item ) {
            Label::create(['name'=>$item]);
        }
    }
}
