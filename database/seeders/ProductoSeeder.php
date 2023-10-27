<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            array( 
                'nombre' =>  "Café Caramel con Chocolate",
                'precio' => 59.9,
                'imagen' => "cafe_01",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Frio con Chocolate Grande",
                'precio' => 49.9,
                'imagen' => "cafe_02",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Latte Frio con Chocolate Grande",
                'precio' => 54.9,
                'imagen' => "cafe_03",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Latte Frio con Chocolate Grande",
                'precio' => 54.9,
                'imagen' => "cafe_04",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Malteada Fria con Chocolate Grande",
                'precio' => 54.9,
                'imagen' => "cafe_05",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Mocha Caliente Chico",
                'precio' => 39.9,
                'imagen' => "cafe_06",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Mocha Caliente Grande con Chocolate",
                'precio' => 59.9,
                'imagen' => "cafe_07",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Caliente Capuchino Grande",
                'precio' => 59.9,
                'imagen' => "cafe_08",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Mocha Caliente Mediano",
                'precio' => 49.9,
                'imagen' => "cafe_09",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Mocha Frio con Caramelo Mediano",
                'precio' => 49.9,
                'imagen' => "cafe_10",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Mocha Frio con Chocolate Mediano",
                'precio' => 49.9,
                'imagen' => "cafe_11",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Espresso",
                'precio' => 29.9,
                'imagen' => "cafe_12",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Capuchino Grande con Caramelo",
                'precio' => 59.9,
                'imagen' => "cafe_13",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Café Caramelo Grande",
                'precio' => 59.9,
                'imagen' => "cafe_14",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 donas de Chocolate",
                'precio' => 39.9,
                'imagen' => "donas_01",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 donas Glaseadas",
                'precio' => 39.9,
                'imagen' => "donas_02",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona de Fresa",
                'precio' => 19.9,
                'imagen' => "donas_03",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona con Galleta de Chocolate",
                'precio' => 19.9,
                'imagen' => "donas_04",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona glass con Chispas Sabor Fresa",
                'precio' => 19.9,
                'imagen' => "donas_05",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona glass con Chocolate",
                'precio' => 19.9,
                'imagen' => "donas_06",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona de Chocolate con MÁS Chocolate",
                'precio' => 19.9,
                'imagen' => "donas_07",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 donas de Chocolate",
                'precio' => 39.9,
                'imagen' => "donas_08",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 donas con Vainilla y Chocolate",
                'precio' => 39.9,
                'imagen' => "donas_09",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 6 Donas",
                'precio' => 69.9,
                'imagen' => "donas_10",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 Variadas",
                'precio' => 39.9,
                'imagen' => "donas_11",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona Natural con Chocolate",
                'precio' => 19.9,
                'imagen' => "donas_12",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 3 Donas de Chocolate con Chispas",
                'precio' => 39.9,
                'imagen' => "donas_13",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Dona Chocolate y Coco",
                'precio' => 19.9,
                'imagen' => "donas_14",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete Galletas de Chocolate",
                'precio' => 29.9,
                'imagen' => "galletas_01",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete Galletas de Chocolate y Avena",
                'precio' => 39.9,
                'imagen' => "galletas_02",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de Muffins de Vainilla",
                'precio' => 39.9,
                'imagen' => "galletas_03",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete de 4 Galletas de Avena",
                'precio' => 24.9,
                'imagen' => "galletas_04",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Galletas de Mantequilla Variadas",
                'precio' => 39.9,
                'imagen' => "galletas_05",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Galletas de sabores frutales",
                'precio' => 39.9,
                'imagen' => "galletas_06",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa Sencilla",
                'precio' => 59.9,
                'imagen' => "hamburguesas_01",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa de Pollo",
                'precio' => 59.9,
                'imagen' => "hamburguesas_02",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa de Pollo y Chili",
                'precio' => 59.9,
                'imagen' => "hamburguesas_03",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa Queso y Pepinos",
                'precio' => 59.9,
                'imagen' => "hamburguesas_04",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa Cuarto de Libra",
                'precio' => 59.9,
                'imagen' => "hamburguesas_05",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hamburguesa Doble Queso",
                'precio' => 69.9,
                'imagen' => "hamburguesas_06",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Hot Dog Especial",
                'precio' => 49.9,
                'imagen' => "hamburguesas_07",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Paquete 2 Hot Dogs",
                'precio' => 69.9,
                'imagen' => "hamburguesas_08",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "4 Rebanadas de Pay de Queso",
                'precio' => 69.9,
                'imagen' => "pastel_01",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Waffle Especial",
                'precio' => 49.9,
                'imagen' => "pastel_02",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Croissants De la casa",
                'precio' => 39.9,
                'imagen' => "pastel_03",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pay de Queso",
                'precio' => 19.9,
                'imagen' => "pastel_04",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pastel de Chocolate",
                'precio' => 29.9,
                'imagen' => "pastel_05",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Rebanada Pastel de Chocolate",
                'precio' => 29.9,
                'imagen' => "pastel_06",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Spicy con Doble Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_01",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Jamón y Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_02",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Doble Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_03",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Especial de la Casa",
                'precio' => 69.9,
                'imagen' => "pizzas_04",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Chorizo",
                'precio' => 69.9,
                'imagen' => "pizzas_05",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Hawaiana",
                'precio' => 69.9,
                'imagen' => "pizzas_06",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Tocino",
                'precio' => 69.9,
                'imagen' => "pizzas_07",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Vegetales y Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_08",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Pepperoni y Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_09",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Aceitunas y Queso",
                'precio' => 69.9,
                'imagen' => "pizzas_10",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Pizza Queso, Jamón y Champiñones",
                'precio' => 69.9,
                'imagen' => "pizzas_11",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];
        DB::table('productos')->insert($datos);
    }
}
