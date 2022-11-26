<?php

use Illuminate\Database\Seeder;
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
        //
        DB::table('productos')->truncate();
      
        DB::table('productos')->insert(
            array(
                'nombre' => 'Aretes clásicos con caída',
                'descripcion' => 'Aretes elaborados en plata esterlina (brillante, hipoalergénica y resistente). Estilo clásico.',
                'impuesto' => 'No aplica',
                'image' => 'aretesclasicos.PNG',
                'categoryid' => 2
            )    );
            DB::table('productos')->insert(
            array(
                'nombre' => 'Aretes Ear cuffs estrella',
                'descripcion' => 'Elaborados en plata esterlina, aretes estilo piercing (a presión, no requiere perforación).',   
                'impuesto' => 'No aplica',
                'image' => 'aretes.PNG',
                'categoryid' => 2
            ));
            DB::table('productos')->insert(
            array(
                'nombre' => "Anillo de promesa 'Original'",
                'descripcion' => 'Anillo elaborado en plata esterlina 925. Comúnmente, el anillo de promesa se entrega durante el noviazgo y cada pareja le da un significado, desde un compromiso de permanecer juntos, hasta una promesa de un futuro matrimonio.',       
                'impuesto' => '+IVA',
                'image' => 'anillopromesa.PNG' ,
                'categoryid' => 1
            ));
            DB::table('productos')->insert(
                array(
                    'nombre' => "Anillo tallado de hombre",
                    'descripcion' => 'Elaborado en plata esterlina 925.',       
                    'impuesto' => '+IVA',
                    'image' => 'anillo.png' ,
                    'categoryid' => 1
                ));
            DB::table('productos')->insert(
                array(
                    'nombre' => "Brazalete doble con corazones",
                    'descripcion' => 'Brazalete de lujo elaborado en plata esterlina 925. Resistente, brillante, despreocúpate de quitártelo cuando estés en contacto con agua. Mide 16.25 cm ajustable hasta 18.75 cm.',       
                    'impuesto' => '+IVA',
                    'image' => 'brazalete.PNG' ,
                    'categoryid' => 3
                ));    
            DB::table('productos')->insert(
                array(
                    'nombre' => "Brazalete con corazón",
                    'descripcion' => 'Brazalete de lujo elaborado en plata esterlina 925.  Resistente, brillante, despreocúpate de quitártelo cuando estés en contacto con agua. Mide 15 cm ajustable a 17.5 cm.',       
                    'impuesto' => '+IVA',
                    'image' => 'brazaletecorazon.PNG' ,
                    'categoryid' => 3
                ));    
                DB::table('productos')->insert(
                    array(
                        'nombre' => "Brazalete con corazón",
                        'descripcion' => 'Brazalete de lujo elaborado en plata esterlina 925.  Resistente, brillante, despreocúpate de quitártelo cuando estés en contacto con agua. Mide 15 cm ajustable a 17.5 cm.',       
                        'impuesto' => '+IVA',
                        'image' => 'brazaletecorazon.PNG' ,
                        'categoryid' => 3
                    )); 
                DB::table('productos')->insert(
                    array(
                        'nombre' => "Gafas cat eye",
                        'descripcion' => 'Cada par de gafas incluyen su funda.',       
                        'impuesto' => '+IVA',
                        'image' => 'gafas.PNG' ,
                        'categoryid' => 4
                    )); 
        
    
    }
    
}
