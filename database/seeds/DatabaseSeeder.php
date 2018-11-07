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
    	// untuk run factory user
    	factory(App\User::class, 50)->create();
    	// untuk run user seeder
        // $this->call(UserSeeder::class);
    }
}