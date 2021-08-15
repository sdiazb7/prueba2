<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'id' => 1,
            'product_name' => 'Zapatilla Adidas Advantage Base',
            'description' => 'Las zapatillas Adidas Advantage Base se inspiran en las canchas de tenis para que las uses por cualquier calle. Confeccionadas en su exterior con cuero sintético, poseen las 3 Tiras de Adidas perforadas en sus laterales.',
            'price' => 280000,
            'product_image' => 'Adidas_Advantage_Base.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 2,
            'product_name' => 'Zapatilla Adidas Copa Sense',
            'description' => 'Los botines Adidas Copa Sense.4 TF están confeccionados en cuero sintético y con un diseño anatómico para un calce perfecto.',
            'price' => 230000,
            'product_image' => 'Adidas_Copa_Sense.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 3,
            'product_name' => 'Zapatilla Adidas Courtpoint',
            'description' => 'Un diseño estilizado con un look atemporal. Estas zapatillas adidas Courtpoint de inspiración tenística presentan un diseño moderno con un exterior de cuero sintético.',
            'price' => 250000,
            'product_image' => 'Adidas_Courtpoint.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 4,
            'product_name' => 'Zapatilla Adidas Futureflow',
            'description' => 'Diseñadas e inspiradas en el mundo del running, las Zapatillas adidas Futureflow son perfectas para tus actividades diarias o deportivas.',
            'price' => 350000,
            'product_image' => 'Adidas_Futureflow.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 5,
            'product_name' => 'Zapatilla Adidas Runfalcon',
            'description' => 'La parte interna acolchada te garantiza comodidad y ajuste para que tengas libertad de movimiento, además los detalles reflectantes te harán visible en condiciones de poca luz.',
            'price' => 450000,
            'product_image' => 'Adidas_Runfalcon.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 6,
            'product_name' => 'Zapatilla Adidas Ultraboost',
            'description' => 'Las zapatillas adidas Ultraboost 21 Primeblue está confeccionadas con Primeblue, un tejido reciclado de alto rendimiento creado con Parley Ocean Plastic..',
            'price' => 680000,
            'product_image' => 'Adidas_Ultraboost.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 7,
            'product_name' => 'Zapatilla Asics Gel-Cumulus',
            'description' => 'Las zapatillas Asics Gel-Cumulus 22 están confeccionadas en su parte superior de malla de una pieza combinada con un diseño en impresión en 3D sin costuras para mejorar la sujeción y comodidad alrededor del pie.',
            'price' => 550000,
            'product_image' => 'Asics_Gel_Cumulus.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 8,
            'product_name' => 'Zapatila Asics Gel-kayano',
            'description' => 'Las Zapatillas Asics Gel-Kayano 27 Tokyo están compuestas por una malla técnica que mantendrá tus pies frescos, mientras que la suela flexible potencia una transición natural entre cada una de las fases de la pisada..',
            'price' => 600000,
            'product_image' => 'Asics_Gel_kayano.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 9,
            'product_name' => 'Zapatilla Puma Eternity',
            'description' => 'Las zapatillas Puma Eternity Nitro están confeccionadas en su parte superior con tecnología runGUIDE para un mejor soporte, gracias a su ajuste OPTIFIT adaptable con envoltura en la parte media del pie para un bloqueo seguro..',
            'price' => 490000,
            'product_image' => 'Puma_Eternity.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 10,
            'product_name' => 'Zapatilla Under Armour Sonic',
            'description' => 'Las zapatillas Under Armour HOVR Sonic 3 están confeccionadas con materiales sintéticos, un sistema de ajuste con cordones y una suela de goma para mayor durabilidad y tracción sobre la superficie..',
            'price' => 390000,
            'product_image' => 'Under_Armour_Sonic.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 11,
            'product_name' => 'Zapatilla Under Armour Flow',
            'description' => 'Las zapatillas Under Armour Flow Velociti Wind nacieron para que alcances nuevos desafíos mientras corres. Confeccionadas con estructuras fuertes que se flexionan al momento de aplicar presión para un soporte más reactivo.',
            'price' => 450000,
            'product_image' => 'Under_Armour_Flow.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        \DB::table('products')->insert([
            'id' => 12,
            'product_name' => 'Zapatilla Under Armour Charged',
            'description' => 'Para tus días de running son perfectas las Zapatillas Under Armour Charged Pursuit 2 por su diseño te harán rendir mejor en entrenamiento y carrera.',
            'price' => 420000,
            'product_image' => 'Under_Armour_Charged.jpg',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
