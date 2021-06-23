<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BoardTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_templates')->insert([
            [
                'header_bg_color'   => '#000000',
                'header_text_color' => '#FFFFFF',
                'background_color'  => '#491313',
                'background_image'  => 'board_template/bt-1.jpg',
                'created_at'        => '2021-06-23 01:09:00'
            ],
            [
                'header_bg_color'   => '#FFFFFF',
                'header_text_color' => '#000000',
                'background_color'  => '#CCCCCC',
                'background_image'  => 'board_template/bt-2.jpg',
                'created_at'        => '2021-06-23 01:09:00'
            ],
            [
                'header_bg_color'   => '#1a491b',
                'header_text_color' => '#FFFFFF',
                'background_color'  => '#FFFFFF',
                'background_image'  => 'board_template/bt-3.jpg',
                'created_at'        => '2021-06-23 01:09:00'
            ]
        ]);
    }
}
