<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(UserTypesTableSeeder::class);
         $this->call(AccountsTableSeeder::class);
         $this->call(AccountUsersTableSeeder::class);
         $this->call(VendorTypesTableSeeder::class);
    }
}
