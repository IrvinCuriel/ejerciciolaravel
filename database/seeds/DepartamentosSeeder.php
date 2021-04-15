<?php

use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departamentos')->insert([
          'nombre' => 'Recursos Humanos',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('departamentos')->insert([
          'nombre' => 'Sistemas IT',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('departamentos')->insert([
          'nombre' => 'Contabilidad',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('departamentos')->insert([
          'nombre' => 'Mantenimiento',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('departamentos')->insert([
          'nombre' => 'Finanzas',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
