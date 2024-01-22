<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->name = "kratos";
        $user->email = "Kre@gmail.com";
        $user->password = bcrypt("D10sd3lapaz");

        $user->save();

        $user2 = new User;

        $user2->name = "pablo";
        $user2->email = "Palcowd@gmail.com";
        $user2->password = bcrypt("D784004");

        $user2->save();

        $user3 = new User;

        $user3->name = "Galan";
        $user3->email = "hargal@gmail.com";
        $user3->password = bcrypt("pazColombia");

        $user3->save();
    }
}
