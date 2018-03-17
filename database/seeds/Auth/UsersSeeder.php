<?php

use Database\traits\TruncateTable;
use Database\traits\DisableForeignKeys;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('users');

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin.laravel@labs64.com',
                'password' => bcrypt('admin'),
                'active' => true,
                'confirmation_code' => \Ramsey\Uuid\Uuid::uuid4(),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Demo',
                'email' => 'demo.laravel@labs64.com',
                'password' => bcrypt('demo'),
                'active' => true,
                'confirmation_code' => \Ramsey\Uuid\Uuid::uuid4(),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('users')->insert($users);



        $products = [
            [
                'merchant_id' => 1,
                'name' => 'urbano_novanta_minuti'
            ],
            [
                'merchant_id' => 1,
                'name' => 'urbano_settimale'
            ],
            [
                'merchant_id' => 2,
                'name' => 'biglietto_normale'
            ],
            [
                'merchant_id' => 2,
                'name' => 'biglietto_speciale'
            ]
        ];

        DB::table('products')->insert($products);



        $merchants = [
            [
                'name' => 'ATM',
                'alias' => 'ALIAS_WEB_00005085',
                'secret' => 'AJKY7UZJQ9GHLLS57QAMO0NUCIPQZUVR'
            ], 
            [
                'name' => 'The Space Cinema',
                'alias' => 'ALIAS_WEB_00005085',
                'secret' => 'AJKY7UZJQ9GHLLS57QAMO0NUCIPQZUVR'
            ], 
        ];

        DB::table('merchants')->insert($merchants);




        $this->enableForeignKeys();
    }
}
