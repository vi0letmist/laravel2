<?php
use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		'nama'	=> 'Lorem Ipsum',
    		'username' => 'loremipsum',
    		'email'	=> 'lorem@ipsum.com',
    		'password'	=> bcrypt('rahasia')
    	];
        User::create($data);
        echo "data berhasil dimasukkan";
    }
}