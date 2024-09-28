<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 国語、数学、英語を追加
        DB::table('users')->insert([
            ['over_name' => '佐藤',
            'under_name' => '陽翔',
            'over_name_kana' => 'サトウ',
            'under_name_kana' => 'ハルト',
            'mail_address' => 'Haruto_Sato@com',
            'sex' => '1',
            'birth_day' => '2004-02-29',
            'role' => '4',
            'password' => bcrypt('Atlas001')],
            ['over_name' => '鈴木',
            'under_name' => '紬',
            'over_name_kana' => 'スズキ',
            'under_name_kana' => 'ツムギ',
            'mail_address' => 'Tsumugi_Suzuki@com',
            'sex' => '2',
            'birth_day' => '1996-05-03',
            'role' => '4',
            'password' => bcrypt('Atlas002')],
            ['over_name' => '高橋',
            'under_name' => '澪',
            'over_name_kana' => 'タカハシ',
            'under_name_kana' => 'ミオ',
            'mail_address' => 'Mio_Takahashi@com',
            'sex' => '4',
            'birth_day' => '1990-01-01',
            'role' => '1',
            'password' => bcrypt('Atlas003')]
        ]);

    }
}
