<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Saga;
use App\Models\Manga;
use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        $admin = User::create([
            'name'     => 'Admin MangaTekaZ',
            'email'    => 'admin@mangatekaz.com',
            'password' => bcrypt('admin123'),
            'role'     => 'admin',
        ]);

        $gohan = User::create([
            'name'     => 'Son Gohan',
            'email'    => 'gohan@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role'     => 'user',
        ]);

        $vegeta = User::create([
            'name'     => 'Vegeta',
            'email'    => 'vegeta@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role'     => 'user',
        ]);

        $bulma = User::create([
            'name'     => 'Bulma Briefs',
            'email'    => 'bulma@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role'     => 'user',
        ]);

        $db = Saga::create([
            'nombre'      => 'Dragon Ball',
            'descripcion' => 'La aventura original de Son Goku desde su infancia en la montaña Paoz. Goku conoce a Bulma y juntos buscan las 7 Bolas de Dragón. Abarca los torneos de artes marciales, el Ejército Red Ribbon y la batalla final contra Piccolo Daimaō. Publicada entre 1984 y 1988 en la revista Shōnen Jump. Autor: Akira Toriyama.',
        ]);

        $dbz = Saga::create([
            'nombre'      => 'Dragon Ball Z',
            'descripcion' => 'La continuación épica con Goku adulto. La llegada de los Saiyajin, la batalla en el Planeta Namek contra Freezer, el surgimiento de los androides y Cell, y la amenaza definitiva de Majin Boo. Incluye la mítica transformación Super Saiyajin. Publicada entre 1988 y 1995. Autor: Akira Toriyama.',
        ]);

        $dbs = Saga::create([
            'nombre'      => 'Dragon Ball Super',
            'descripcion' => 'La saga moderna ambientada después del final de Dragon Ball Z. Goku y Vegeta se enfrentan a Bills, el Dios de la Destrucción, al temible Freezer resucitado en su nueva forma dorada, y participan en el Torneo del Poder entre universos. Serializado desde 2015. Guión: Akira Toriyama. Dibujo: Toyotarou.',
        ]);

        $mangas_db = [];

        $datos_db = [
            [
                'titulo'      => 'Dragon Ball, Vol. 1: El rey mono',
                'descripcion' => 'Goku vive solo en la montaña Paoz hasta que conoce a Bulma, que busca las misteriosas Bolas de Dragón que conceden cualquier deseo. Juntos embarcan en una aventura que cambiará sus vidas para siempre. Primera aparición del mono Goku y la tortuga Umigame.',
                'isbn'        => '9781569319208',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 2: El deseo del dragón',
                'descripcion' => 'Goku y Bulma reúnen las 7 Bolas de Dragón y se enfrenta al villano Pilaf. Goku revela su secreto: se transforma en un gran mono bajo la luna llena. Primera aparición del Maestro Roshi.',
                'isbn'        => '9781569319215',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 3: El entrenamiento de Kame-Sen\'nin',
                'descripcion' => 'El Maestro Roshi acepta entrenar a Goku y Krillin en su isla para prepararlos para el 21º Torneo de Artes Marciales. Primeras apariciones de Krillin y Launch. Entrenamiento con el Kame Sennin Kame Hame Ha.',
                'isbn'        => '9781569319222',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 4: ¡Los más fuertes del mundo!',
                'descripcion' => 'Comienza el 21º Torneo de Artes Marciales. Goku y Krillin demuestran el resultado de su entrenamiento enfrentándose a rivales cada vez más poderosos. El misterioso participante "Jackie Chun" resulta ser el Maestro Roshi disfrazado.',
                'isbn'        => '9781569319239',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 5: El Ejército de la Cinta Roja',
                'descripcion' => 'Tras el torneo, Goku busca la Bola de Dragón de su abuelo Gohan. En su camino se enfrenta al implacable Ejército de la Cinta Roja, que también persigue las esferas. Goku asalta en solitario el cuartel general enemigo.',
                'isbn'        => '9781569319246',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 6: ¡Bulma vuelve!',
                'descripcion' => 'Goku visita a Bulma en Capsule Corporation y se reúne con sus amigos. El coronel Violeta del Ejército Rojo continúa la búsqueda de las esferas. Primera aparición del General Blue y su extraño poder de inmovilizar enemigos.',
                'isbn'        => '9781569319253',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 7: El tesoro pirata',
                'descripcion' => 'Goku, Krillin y Bulma buscan una Bola de Dragón en la guarida submarina de piratas. El General Blue del Ejército Rojo los persigue. Aparece por primera vez el temible asesino mercenario Tao Pai Pai.',
                'isbn'        => '9781569319260',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 8: Tao Pai Pai y el Maestro Karin',
                'descripcion' => 'Goku escala la legendaria Torre Muscle para obtener el Agua Sagrada del Maestro Karin, tras ser derrotado humillantemente por Tao Pai Pai. Un arco de superación personal que muestra la determinación inquebrantable de Goku.',
                'isbn'        => '9781569319277',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 9: La prueba de la Vieja Adivina',
                'descripcion' => 'Goku destruye el cuartel general del Ejército Rojo y busca la última Bola de Dragón con la ayuda de la Vieja Adivina Fortuneteller Baba, que pone a prueba a los combatientes antes de revelar su ubicación. Aparece el Maestro Roshi disfrazado otra vez.',
                'isbn'        => '9781569319284',
                'precio'      => 7.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 10: El regreso al torneo',
                'descripcion' => 'Goku, entrenado durante 3 años, regresa al 22º Torneo de Artes Marciales. Aparecen nuevos rivales: Tenshinhan y Chaozu, discípulos del maestro Tsuru Sennin. Una saga que marca la transición de Goku de niño a adolescente.',
                'isbn'        => '9781569319291',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 11: Los ojos de Tenshinhan',
                'descripcion' => 'La batalla final del 22º Torneo de Artes Marciales: Goku contra Tenshinhan. Una pelea épica que acaba en empate técnico. Pero cuando el torneo termina, el gran demonio Piccolo Daimaō libera su terrible poder sobre el mundo.',
                'isbn'        => '9781569319307',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 12: El rey demonio Piccolo',
                'descripcion' => 'Piccolo Daimaō siembra el terror por toda la Tierra, matando a los antiguos campeones del torneo para recuperar su plena juventud. Krillin es asesinado. Un Goku devastado jura vengar a su amigo y hacerle pagar al demonio.',
                'isbn'        => '9781569319314',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 13: El contraataque de Piccolo Daimaō',
                'descripcion' => 'Goku se enfrenta al rejuvenecido Piccolo Daimaō en una batalla a muerte. El Maestro Roshi y Chaozu dan su vida para intentar detenerlo. Solo el "Mafuba" podría sellarlo, pero Goku deberá encontrar otra forma de vencerlo.',
                'isbn'        => '9781569319321',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 14: Cielo y Tierra',
                'descripcion' => 'Con Piccolo Daimaō derrotado, su hijo y sucesor Ma Junior nace. Goku sube hasta el Palacio del Dios del planeta Tierra para entrenarse durante 3 años. Comienza el arco más importante de la era original: la preparación para el 23º Torneo.',
                'isbn'        => '9781569319338',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 15: Goku vs. Piccolo Jr.',
                'descripcion' => 'El 23º Gran Torneo de Artes Marciales. Goku, ya convertido en un joven adulto, se reencuentra con sus amigos. La gran revelación: Ma Junior es el hijo y reencarnación de Piccolo Daimaō. Comienza la batalla definitiva.',
                'isbn'        => '9781569319345',
                'precio'      => 8.95,
            ],
            [
                'titulo'      => 'Dragon Ball, Vol. 16: El más grande del mundo',
                'descripcion' => 'La batalla final del 23º Torneo: Goku vs. Piccolo en su máximo poder. El épico desenlace de la saga original de Dragon Ball. Goku se casa con Chichi. Una era termina y otra, aún más épica, está a punto de comenzar.',
                'isbn'        => '9781569319352',
                'precio'      => 8.95,
            ],
        ];

        foreach ($datos_db as $i => $data) {
            $mangas_db[] = Manga::create([
                'titulo'      => $data['titulo'],
                'autor'       => 'Akira Toriyama',
                'volumen'     => $i + 1,
                'precio'      => $data['precio'],
                'stock'       => rand(8, 35),
                'descripcion' => $data['descripcion'],
                'imagen'      => 'https://covers.openlibrary.org/b/isbn/' . $data['isbn'] . '-L.jpg',
                'sagas_id'    => $db->id,
            ]);
        }

        $mangas_dbz = [];

        $datos_dbz = [
            [
                'titulo'      => 'Dragon Ball Z, Vol. 1: El equipo más fuerte del mundo',
                'descripcion' => 'Un guerrero de otro planeta llega a la Tierra buscando a Son Goku. Revela que Goku es en realidad un Saiyajin llamado Kakarotto. Raditz, el hermano de Goku, demuestra un poder aterrador que supera todo lo conocido. Comienza la saga Z.',
                'isbn'        => '9781569319307',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 2: Vegeta',
                'descripcion' => 'Goku se entrena en el camino de la serpiente para llegar ante el Gran Rey Kai. Gohan y Krillin viajan a Namek para usar sus Bolas de Dragón. Pero dos Saiyajin de élite, Vegeta y Nappa, se dirigen hacia la Tierra con un poder devastador.',
                'isbn'        => '9781569319314',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 3: La batalla más fuerte del mundo',
                'descripcion' => 'Vegeta y Nappa llegan a la Tierra. Nappa elimina a varios guerreros Z uno a uno. Chaouzou se sacrifica. Goku llega con el Kaioken y se enfrenta a Vegeta en la batalla más intensa vista hasta el momento en la serie.',
                'isbn'        => '9781569319321',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 4: Encuentros en Namek',
                'descripcion' => 'Gohan y Krillin llegan al Planeta Namek. Vegeta también ha viajado hasta allí buscando la inmortalidad. Los tres descubren que el terrible Freezer y sus secuaces están masacrando a los Namekianos para robar sus Bolas de Dragón.',
                'isbn'        => '9781569319338',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 5: El guerrero más poderoso del universo',
                'descripcion' => 'Goku llega al Planeta Namek después de un intenso entrenamiento. Sus combates contra los Ginyu son épicos. Pero la llegada de Freezer en su segunda forma eleva el peligro a otro nivel. La muerte de Vegeta resulta conmovedora y épica.',
                'isbn'        => '9781569319345',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 6: El Super Saiyajin',
                'descripcion' => 'La batalla entre Goku y Freezer alcanza su punto culminante. La muerte de Krillin a manos de Freezer desencadena la legendaria transformación: Goku se convierte en Super Saiyajin por primera vez. Una de las escenas más icónicas del manga.',
                'isbn'        => '9781569319352',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 7: Androides',
                'descripcion' => 'Tres años después de Namek. Un misterioso joven Super Saiyajin del futuro advierte de la llegada de los Androides del Doctor Gero. El joven se revela como Trunks, el hijo de Vegeta y Bulma del futuro. Comienza la saga de los androides.',
                'isbn'        => '9781569319369',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 8: Cell',
                'descripcion' => 'El terrible Cell, un ser creado por el Doctor Gero usando el ADN de los guerreros más poderosos, emerge del subsuelo. Su objetivo es absorber a los Androides 17 y 18 para alcanzar su forma perfecta. Los guerreros Z deben detenerlo a toda costa.',
                'isbn'        => '9781569319376',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 9: El Torneo de Cell',
                'descripcion' => 'Cell alcanza su forma perfecta y convoca el Torneo de Cell. Goku entrena a su hijo Gohan dentro de la Sala del Tiempo y el Espíritu. El sacrificio de Goku y el despertar del verdadero poder de Gohan marcan el clímax de esta saga épica.',
                'isbn'        => '9781569319383',
                'precio'      => 9.95,
            ],
            [
                'titulo'      => 'Dragon Ball Z, Vol. 10: Majin Boo',
                'descripcion' => 'Siete años después del incidente con Cell. Goten y Trunks crecen y un nuevo torneo mundial comienza. Pero detrás de las sombras, el mago Babidi busca resucitar al ser más poderoso y peligroso jamás creado: Majin Boo.',
                'isbn'        => '9781569319390',
                'precio'      => 9.95,
            ],
        ];

        foreach ($datos_dbz as $i => $data) {
            $mangas_dbz[] = Manga::create([
                'titulo'      => $data['titulo'],
                'autor'       => 'Akira Toriyama',
                'volumen'     => $i + 1,
                'precio'      => $data['precio'],
                'stock'       => rand(5, 28),
                'descripcion' => $data['descripcion'],
                'imagen'      => 'https://covers.openlibrary.org/b/isbn/' . $data['isbn'] . '-L.jpg',
                'sagas_id'    => $dbz->id,
            ]);
        }

        $mangas_dbs = [];

        $datos_dbs = [
            [
                'titulo'      => 'Dragon Ball Super, Vol. 1: El Dios de la Destrucción Bills',
                'descripcion' => 'Bills, el Dios de la Destrucción, despierta de su largo sueño buscando al "Super Saiyajin Dios". Su poder supera todo lo imaginable: destruyó la mitad de un planeta con solo un golpe. Goku y sus amigos deben invocar a este ser divino.',
                'isbn'        => '9781421592541',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 2: El renacimiento de Freezer',
                'descripcion' => 'Freezer ha sido resucitado por sus secuaces y ha completado un entrenamiento de 4 meses que lo ha transformado en su nueva forma dorada. Su objetivo: vengarse de Goku y destruir la Tierra. Goku y Vegeta deben detenerlo.',
                'isbn'        => '9781421596471',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 3: El arco del Universo 6',
                'descripcion' => 'Champa, el Dios de la Destrucción del Universo 6, desafía a Bills a un torneo entre los guerreros de ambos universos. En juego: las Bolas de Dragón de los Dioses. Aparecen nuevos y poderosos rivales como Hit, el asesino intergaláctico.',
                'isbn'        => '9781421599380',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 4: El futuro de Trunks',
                'descripcion' => 'Trunks regresa del futuro huyendo de Goku Black, un ser que usa el cuerpo de Goku para el mal. Su origen es uno de los mayores misterios de la historia. Goku, Vegeta y Trunks viajan al futuro para enfrentarse a Goku Black y Zamasu.',
                'isbn'        => '9781974701407',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 5: La saga de Zamasu',
                'descripcion' => 'Goku Black revela su identidad: es Zamasu, un Kaioshin aprendiz que robó el cuerpo de Goku. La fusión entre los dos Zamasus crea al temible Merged Zamasu. Una batalla épica por el futuro de la humanidad.',
                'isbn'        => '9781974704736',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 6: El Torneo del Poder',
                'descripcion' => 'El Gran Sacerdote anuncia el Torneo del Poder: 80 guerreros de 8 universos batallan en un ring suspendido en el vacío del espacio. El universo perdedor será destruido. Goku recluta a los 10 guerreros más fuertes del Universo 7.',
                'isbn'        => '9781974705351',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 7: ¡Ultra Instinto!',
                'descripcion' => 'En el Torneo del Poder, Goku alcanza por primera vez el estado Ultra Instinto, una técnica que ni los dioses pueden dominar fácilmente. Jiren, el guerrero más poderoso del Universo 11, resulta ser un rival de una magnitud nunca vista.',
                'isbn'        => '9781974707638',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 8: La patrulla galáctica',
                'descripcion' => 'Moro, un hechicero que absorbe la energía vital de los planetas, escapa de la prisión galáctica tras 10 millones de años. La Patrulla Galáctica pide ayuda a Goku y Vegeta. Un nuevo arco que introduce el planeta Namek en peligro.',
                'isbn'        => '9781974709298',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 9: Granolah el superviviente',
                'descripcion' => 'Granolah, último superviviente de la raza Cerealiana, pide a las Bolas de Dragón convertirse en el ser más fuerte del universo para vengarse de los Saiyajins. Su camino lo lleva a enfrentarse contra Goku y Vegeta en un conflicto lleno de verdades ocultas.',
                'isbn'        => '9781974711581',
                'precio'      => 9.99,
            ],
            [
                'titulo'      => 'Dragon Ball Super, Vol. 10: El origen del mal',
                'descripcion' => 'Los Hombres Negros de Gas, Macki y Oil arremeten contra Goku, Vegeta y Granolah. Las verdades sobre el pasado de la raza Cerealiana salen a la luz. Vegeta desbloquea un poder completamente nuevo: la Destrucción del Ego.',
                'isbn'        => '9781974713509',
                'precio'      => 9.99,
            ],
        ];

        foreach ($datos_dbs as $i => $data) {
            $mangas_dbs[] = Manga::create([
                'titulo'      => $data['titulo'],
                'autor'       => 'Toyotarou / Akira Toriyama',
                'volumen'     => $i + 1,
                'precio'      => $data['precio'],
                'stock'       => rand(3, 20),
                'descripcion' => $data['descripcion'],
                'imagen'      => 'https://covers.openlibrary.org/b/isbn/' . $data['isbn'] . '-L.jpg',
                'sagas_id'    => $dbs->id,
            ]);
        }

        $pedido1 = Pedido::create([
            'user_id'      => $gohan->id,
            'precio_total' => 0,
            'estado'       => 'atendido',
        ]);
        $pedido1->mangas()->attach($mangas_db[0]->id,  ['cantidad' => 1, 'precio' => $mangas_db[0]->precio]);
        $pedido1->mangas()->attach($mangas_db[1]->id,  ['cantidad' => 1, 'precio' => $mangas_db[1]->precio]);
        $pedido1->mangas()->attach($mangas_db[2]->id,  ['cantidad' => 1, 'precio' => $mangas_db[2]->precio]);
        $pedido1->mangas()->attach($mangas_dbz[5]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[5]->precio]);
        $pedido1->update([
            'precio_total' => $mangas_db[0]->precio + $mangas_db[1]->precio + $mangas_db[2]->precio + $mangas_dbz[5]->precio,
        ]);

        $pedido2 = Pedido::create([
            'user_id'      => $vegeta->id,
            'precio_total' => 0,
            'estado'       => 'atendido',
        ]);
        $pedido2->mangas()->attach($mangas_dbz[0]->id, ['cantidad' => 2, 'precio' => $mangas_dbz[0]->precio]);
        $pedido2->mangas()->attach($mangas_dbz[1]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[1]->precio]);
        $pedido2->mangas()->attach($mangas_dbz[2]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[2]->precio]);
        $pedido2->update([
            'precio_total' => ($mangas_dbz[0]->precio * 2) + $mangas_dbz[1]->precio + $mangas_dbz[2]->precio,
        ]);

        $pedido3 = Pedido::create([
            'user_id'      => $bulma->id,
            'precio_total' => 0,
            'estado'       => 'pendiente',
        ]);
        $pedido3->mangas()->attach($mangas_dbs[0]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[0]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[1]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[1]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[2]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[2]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[5]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[5]->precio]);
        $pedido3->update([
            'precio_total' => $mangas_dbs[0]->precio + $mangas_dbs[1]->precio + $mangas_dbs[2]->precio + $mangas_dbs[5]->precio,
        ]);

        $pedido4 = Pedido::create([
            'user_id'      => $gohan->id,
            'precio_total' => 0,
            'estado'       => 'pendiente',
        ]);
        $pedido4->mangas()->attach($mangas_dbz[6]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[6]->precio]);
        $pedido4->mangas()->attach($mangas_dbz[7]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[7]->precio]);
        $pedido4->mangas()->attach($mangas_db[15]->id, ['cantidad' => 1, 'precio' => $mangas_db[15]->precio]);
        $pedido4->update([
            'precio_total' => $mangas_dbz[6]->precio + $mangas_dbz[7]->precio + $mangas_db[15]->precio,
        ]);

        $pedido5 = Pedido::create([
            'user_id'      => $vegeta->id,
            'precio_total' => 0,
            'estado'       => 'pendiente',
        ]);
        $pedido5->mangas()->attach($mangas_dbs[6]->id, ['cantidad' => 3, 'precio' => $mangas_dbs[6]->precio]);
        $pedido5->mangas()->attach($mangas_dbs[7]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[7]->precio]);
        $pedido5->update([
            'precio_total' => ($mangas_dbs[6]->precio * 3) + $mangas_dbs[7]->precio,
        ]);
    }
}
