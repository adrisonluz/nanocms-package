<?php

use Illuminate\Database\Seeder;

class GaleriasItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_galerias_itens')->insert([
            'sitename' => 'Nome do site',
        ]);
    }
}
