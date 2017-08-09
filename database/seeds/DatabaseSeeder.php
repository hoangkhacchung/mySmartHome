<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            [
                'name' => str_random(10),
                'password' => bcrypt('12345'),
                'email' => str_random(10).'@gmail.com',
                'HoTen' => str_random(10),
                'DiaChi' => str_random(10),
                'SDT'   => str_random(10),
            ],
            [
                'name' => str_random(10),
                'password' => bcrypt('12345'),
                'email' => str_random(10).'@gmail.com',
                'HoTen' => str_random(10),
                'DiaChi' => str_random(10),
                'SDT'   => str_random(10),
            ],          
        ]);

        DB::table('homeinfo')->insert([
            [
                'TenNha' => str_random(10),
                'ThongTinNha'   => '',
            ],
            [
                'TenNha' => str_random(10),
                'ThongTinNha'   => '',                
            ],
        ]);

        DB::table('mqttserver')->insert([
            [
                'customername' => 'test01',
                'manageusers'   => 'hometest1',
                'passmanageusers' => 'hometest1',
                'serverulr' => 'm13.cloudmqtt.com',
                'port' => 15323,
                'topicpublish' => 'in',
                'topicsubscribe' => 'out',
            ],
            [
                'customername' => 'test02',
                'manageusers'   => 'hometest2',
                'passmanageusers' => 'hometest2',
                'serverulr' => 'm13.cloudmqtt.com',
                'port' => 12174,
                'topicpublish' => 'in',
                'topicsubscribe' => 'out',
            ],
        ]);        
    }
}
