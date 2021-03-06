<?php

namespace Database\Seeders;

use App\Models\AvatarObject;
use App\Models\Book;
use App\Models\Category;
use App\Models\Type;
use App\Models\UserBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Type::create(
            [                
            'name'=>"cabeza"
            ]
        );
        Type::create(
            [                
            'name'=>"cuerpo"
            ]
        );
        Type::create(
            [                
            'name'=>"mano"
            ]
        );
        Type::create(
            [                
            'name'=>"detras"
            ]
        );

        AvatarObject::create(
            [                
            'name' => "sombrero1",
            'image'=> "Isombrero1",
            'model'=> "Msombrero1",
            'type_id'=>1
            ]
        );
        AvatarObject::create(
            [                
            'name' => "cuerpo1",
            'image'=> "Icuerpo1",
            'model'=> "Mcuerpo1",
            'type_id'=>2
            ]
        );
        AvatarObject::create(
            [                
            'name' => "mano1",
            'image'=> "Imano1",
            'model'=> "Mmano1",
            'type_id'=>3
            ]
        );
        AvatarObject::create(
            [                
            'name' => "atras1",
            'image'=> "Iatras1",
            'model'=> "Matras1",
            'type_id'=>4
            ]
        );

        Category::create(
            [                
            'name' => "terror",
            'description' => "zona de terror",
            'music' => "Mterror",            
            ]
        );

        UserBook::create(
            [                
            'name'=>"Marcelo",
            'pseudonym' => 'Maru-chan',
            'headObject' => 1,
            'wearObject' => 2,
            'handObject' => 3,
            'backObject' => 4
            ]
        );


    

        Book::create(
            [
            'name' => "El Rey Peste",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1940",
            'music'=> " ",
            'portrait'=> "p1",
            'phrase'=> " Aquellas im??genes, aquellas sensaciones, aquellos obst??culos no pod??an, sin embargo, detener la carrera de hombres que, de por s?? a valientes y ardiendo de coraje y cerveza fuerte, hubieran penetrado todo lo directamente que su tambaleante condici??n lo permitiera en las mismas fauces de la muerte. /  ",
            'author'=> "Edgar Allan Poe",
            ]
        );


        Book::create(
            [
            'name' => "La Ca??da de la casa Usher",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            
            'publication'=> "",
            'music'=> " ",
            'portrait'=> "p2",
            'phrase'=> " ??No lo oyes? S??, yo lo oigo y lo he o??do. Mucho... mucho..., mucho tiempo..., muchos minutos, muchas horas, muchos d??as lo he o??do, pero no me atrev??a...",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Hombre de la multitud",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1840",
            'music'=> " ",
            'portrait'=> "p3",
            'phrase'=> "???Este viejo ???dije por fin???representa el arquetipo y el genio del profundo crimen. Se niega a estar solo. Es el hombre de la multitud. Ser??a vano seguirlo, pues nada m??s aprender?? sobre ??l y sus acciones.",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "La M??scara de la muerte roja",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1842",
            'music'=> " ",
            'portrait'=> "p4",
            'phrase'=> " En los corazones de los hombres m??s temerarios hay cuerdas que no se dejan tocar sin emoci??n. ",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Escarabajo de Oro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p5",
            'phrase'=> " ??Es la cosa m??s encantadora de la creaci??n! ?????El qu??? ??El amanecer? ?????Qu?? disparate! ??No! ??El escarabajo! Es de un brillante color dorado, aproximadamente del tama??o de una nuez, con dos manchas de un negro azabache: una, cerca de la punta posterior, y la segunda, algo m??s alargada, en la otra punta",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Coraz??n Delator",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p6",
            'phrase'=> " Sonre??, pues... ??qu?? ten??a que temer? ",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Gato Negro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p7",
            'phrase'=> " Hay algo en el generoso y abnegado amor de un animal que llega directamente al coraz??n de aquel que con frecuencia a probado la falsa amistad y la fr??gil fidelidad del hombre",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Entierro Prematuro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1844",
            'music'=> " ",
            'portrait'=> "p8",
            'phrase'=> " Los demonios deben dormir o nos devorar??n",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Cuervo",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1841",
            'music'=> " ",
            'portrait'=> "p9",
            'phrase'=> " ??P??jaro o demonio, pero al fin profeta!",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => " Los Cr??menes de la calle Morgue",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1837",
            'music'=> " ",
            'portrait'=> "p10",
            'phrase'=> "Lo que tan s??lo es complicado, se toma equivocadamente ???error muy com??n??? por profundo",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "La Narraci??n de Arthur Gordon Pym",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1838",
            'music'=> " ",
            'portrait'=> "p11",
            'phrase'=> "Es absolutamente superfluo hacer conjeturas sobre un hecho que permanecer?? eternamente envuelto en el m??s espantoso e insondable de los misterios. ",
            'author'=> "Edgar Allan Poe",
            ]
        );

    Book::create(
            [
            'name' => "El robo del elefante blanco",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1882",
            'music'=> " ",
            'portrait'=> "p12",
            'phrase'=> " Ya le dije yo que los apetitos del animal nos proporcionar??an buenas pistas.",
            'author'=> "Mark Twain",
            ]
        );


}}
