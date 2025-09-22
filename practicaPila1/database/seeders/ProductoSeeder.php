<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Laptop HP',
                'descripcion' => 'Laptop HP con 8GB RAM y 256GB SSD',
                'precio' => 899.99,
                'stock' => 10,
                'categoria' => 'Electrónicos',
                'activo' => true
            ],
            [
                'nombre' => 'Camiseta Nike',
                'descripcion' => 'Camiseta deportiva de algodón',
                'precio' => 29.99,
                'stock' => 50,
                'categoria' => 'Ropa',
                'activo' => true
            ],
            [
                'nombre' => 'Mesa de Centro',
                'descripcion' => 'Mesa de centro de madera',
                'precio' => 199.99,
                'stock' => 5,
                'categoria' => 'Hogar',
                'activo' => true
            ],
            [
                'nombre' => 'Balón de Fútbol',
                'descripcion' => 'Balón oficial FIFA',
                'precio' => 39.99,
                'stock' => 25,
                'categoria' => 'Deportes',
                'activo' => true
            ],
            [
                'nombre' => 'El Quijote',
                'descripcion' => 'Libro clásico de Cervantes',
                'precio' => 15.99,
                'stock' => 100,
                'categoria' => 'Libros',
                'activo' => true
            ]
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}