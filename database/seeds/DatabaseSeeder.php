<?php

use App\Memo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class)->create([
            'email' => 'ishrhnn19@gmail.com'
        ]);
        factory(Memo::class, 50)->create([
            'user_id' => $user->id
        ]);
    }
}
