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
                'email' => 'admin@admin.com',
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


        $this->truncate('products');
        $this->truncate('merchants');
        $products = [
             [
                 'merchant_id' => 1,
                'name' => 'urbano_novanta_minuti',
               'price' => 1.5
           ],
           [
               'merchant_id' => 1,
               'name' => 'urbano_settimale',
               'price' => 14
           ],
           [
               'merchant_id' => 2,
                'name' => 'biglietto_normale',
                'price' => 7
            ],
            [
                'merchant_id' => 2,
                'name' => 'biglietto_speciale',
                'price' => 10
          ],
             [
                 'merchant_id' => 3,
                 'name' => 'parcheggio_ore',
                 'price' => 1
             ],
             [
                 'merchant_id' => 4,
               'name' => 'benzina',
                 'price' => '0'
             ]
         ]
         DB::table('products')->insert($products)
        $merchants = [
             [
                 'name' => 'ATM',
               'alias' => 'ALIAS_RICO_00005086',
                 'secret' => 'QDUUZFXRG6SEZ26OY81CJDES73U3Y5',
             ], 
             [
                 'name' => 'The Space Cinema',
                 'alias' => 'ALIAS_RICO_00005086',
                 'secret' => 'QDUUZFXRG6SEZ26OYSE81CJDES73U3Y5'
             ], 
             [
                 'name' => 'parking',
                 'alias' => 'ALIAS_RICO_00005086',
                 'secret' => 'QDUUZFXRG6SEZ26OYSE81CJDES73U3Y5'
             ],
             [
                 'name' => 'GAS',
                 'alias' => 'ALIAS_RICO_00005086',
               'secret' => 'QDUUZFXRG6SEZ26OYSE81CJDES73U3Y5'
             ], 
         ];
        DB::table('merchants')->insert($merchants);




        $this->enableForeignKeys();
    }
}
