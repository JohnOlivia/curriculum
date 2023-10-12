<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーテーブルからすべてのユーザー名を取得
        $userNames = DB::table('users')->pluck('name')->toArray();

        DB::table('posts')->insert([
            [
                'user_id' => $this->getRandomUserName($userNames),
                'created_at' =>date('Y-m-d H:i:s'),
                'body' => 'りもっとこに鳥捕とりは、スターをうごう。',
            ],
            [
                'user_id' => $this->getRandomUserName($userNames),
                'created_at' =>date('Y-m-d H:i:s'),
                'body' => 'seederを作成し、データを直に入れる',
            ],
            [
                'user_id' => $this->getRandomUserName($userNames),
                'created_at' =>date('Y-m-d H:i:s'),
                'body' => 'じら大きなとうごかしやだよ」さっと向むこうに急いそいで、すすきっぷの中でのとこへ来たのです。そした。',
            ],
            [
                'user_id' => $this->getRandomUserName($userNames),
                'created_at' =>date('Y-m-d H:i:s'),
                'body' => 'ク抜ぬきのようにつるつるはただものでも食べるにわかりをします。そのまってわらはオーケストラベルやジ。',
            ],
        ]);
    }
    /**
     * 提供された配列からランダムなユーザー名を取得します。
     *
     * @param array $userNames
     * @return string
     */

    private function getRandomUserName(array $userNames)
    {
        return $userNames[array_rand($userNames)];
    }
}
