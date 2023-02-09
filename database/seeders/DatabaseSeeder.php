<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\productos;
use App\Models\Tienda;
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
        // \App\Models\User::factory(10)->create();
        $tiendaSara = new Tienda();
        $tiendaSara->name = "Zara";
        $tiendaSara->description = "Zara obtuvo el primer puesto en el ranking de las Mejores Marcas Españolas 2017, publicado por la consultora estratégica de marca global Interbrand";
        $tiendaSara->save();
        $tiendaPepe = new Tienda();
        $tiendaPepe->name = "Pepe";
        $tiendaPepe->description = "Entérate De Lo Último En Moda Y Todas Nuestras Ofertas Con La Newsletter De Pepe Jeans. Hazte Con Nuestra Colección De Prendas Atemporales Para Hombre, Mujer Y Niños.";
        $tiendaPepe->save();

        $productoCamisa = new Producto();
        $productoCamisa->id_tienda = $tiendaSara->id;
        $productoCamisa->name = "camisa";
        $productoCamisa->save();
        $productoPantalon = new Producto();
        $productoPantalon->id_tienda = $tiendaSara->id;
        $productoPantalon->name = "pantalon";
        $productoPantalon->save();

        $productoZapato = new Producto();
        $productoZapato->id_tienda = $tiendaPepe->id;
        $productoZapato->name = "Zapato";
        $productoZapato->save();
    }
}
