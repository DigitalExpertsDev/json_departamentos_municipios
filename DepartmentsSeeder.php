<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    private $departments;

    public function __construct()
    {
        /*
          set the default seeds array departamens
        */
        $this->departments =  [
            [
                'id' => 1,
                'name' => 'Antioquia'
            ],
            [
                'id' => 2,
                'name' => 'Atlántico'
            ],
            [
                'id' => 3,
                'name' => 'Bolívar'
            ],
            [
                'id' => 4,
                'name' => 'Boyacá'
            ],
            [
                'id' => 5,
                'name' => 'Caldas'
            ],
            [
                'id' => 6,
                'name' => 'Caquetá'
            ],
            [
                'id' => 7,
                'name' => 'Cauca'
            ],
            [
                'id' => 8,
                'name' => 'Cesar'
            ],
            [
                'id' => 9,
                'name' => 'Córdoba'
            ],
            [
                'id' => 10,
                'name' => 'Cundinamarca'
            ],
            [
                'id' => 11,
                'name' => 'Chocó'
            ],
            [
                'id' => 12,
                'name' => 'Huila'
            ],
            [
                'id' => 13,
                'name' => 'La Guajíra'
            ],
            [
                'id' => 14,
                'name' => 'Magdalena'
            ],
            [
                'id' => 15,
                'name' => 'Meta'
            ],
            [
                'id' => 16,
                'name' => 'Nariño'
            ],
            [
                'id' => 17,
                'name' => 'Norte de Santander'
            ],
            [
                'id' => 18,
                'name' => 'Quindío'
            ],
            [
                'id' => 19,
                'name' => 'Risaralda'
            ],
            [
                'id' => 20,
                'name' => 'Santander'
            ],
            [
                'id' => 21,
                'name' => 'Sucre'
            ],
            [
                'id' => 22,
                'name' => 'Tolima'
            ],
            [
                'id' => 23,
                'name' => 'Valle del Cauca'
            ],
            [
                'id' => 24,
                'name' => 'Arauca'
            ],
            [
                'id' => 25,
                'name' => 'Casanare'
            ],
            [
                'id' => 26,
                'name' => 'Putumayo'
            ],
            [
                'id' => 27,
                'name' => 'San Andrés y Providencia'
            ],
            [
                'id' => 28,
                'name' => 'Amazonas'
            ],
            [
                'id' => 29,
                'name' => 'Guainía'
            ],
            [
                'id' => 30,
                'name' => 'Guaviare'
            ],
            [
                'id' => 31,
                'name' => 'Vaupés'
            ],
            [
                'id' => 32,
                'name' => 'Vichada'
            ],
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->departments as $department) {
            Department::create([
                'id' => $department['id'],
                'name' => $department['name'],
            ]);
        }
    }
}
