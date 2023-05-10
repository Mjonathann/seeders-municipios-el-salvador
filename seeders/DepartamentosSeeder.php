<?php

namespace Database\Seeders;

use App\Models\Departamentos;
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
        $createMultipleDepartamentos = [
            ['id' => 1, 'nombre' => 'Ahuachapán'],
            ['id' => 2, 'nombre' => 'Cabañas'],
            ['id' => 3, 'nombre' => 'Chalatenango'],
            ['id' => 4, 'nombre' => 'Cuscatlán'],
            ['id' => 5, 'nombre' => 'LaLibertad'],
            ['id' => 6, 'nombre' => 'LaPaz'],
            ['id' => 7, 'nombre' => 'LaUnión'],
            ['id' => 8, 'nombre' => 'Morazán'],
            ['id' => 9, 'nombre' => 'SanMiguel'],
            ['id' => 10, 'nombre' => 'SanSalvador'],
            ['id' => 11, 'nombre' => 'SanVicente'],
            ['id' => 12, 'nombre' => 'SantaAna'],
            ['id' => 13, 'nombre' => 'Sonsonate'],
            ['id' => 14, 'nombre' => 'Usulután'],
        ];

        Departamentos::insert($createMultipleDepartamentos);
    }
}