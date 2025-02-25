<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExcretionsTableSeeder extends Seeder
{
    public function run()
    {
        // 大 or 小
        $kinds = ['大', '小'];
        // good, better, bad
        $evaluations = ['good', 'better', 'bad'];

        for ($i = 1; $i <= 25; $i++) {
            DB::table('excretions')->insert([
                'member_id'   => $i, 
                'date'        => Carbon::now()->subDays(rand(0, 30))->format('Y-m-d'), // 過去30日以内でランダム
                'time'        => Carbon::now()->subMinutes(rand(0, 1440))->format('H:i:s'), // 当日内でランダム
                'kind'        => Arr::random($kinds), // 大 or 小
                'evaluateion' => Arr::random($evaluations), // good, better, bad
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }

}
