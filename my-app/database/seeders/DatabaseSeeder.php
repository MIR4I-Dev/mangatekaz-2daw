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
            'name' => 'Admin MangaTekaZ',
            'email' => 'admin@mangatekaz.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        $gohan = User::create([
            'name' => 'Son Gohan',
            'email' => 'gohan@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        $vegeta = User::create([
            'name' => 'Vegeta',
            'email' => 'vegeta@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        $bulma = User::create([
            'name' => 'Bulma Briefs',
            'email' => 'bulma@mangatekaz.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        $db = Saga::create([
            'nombre' => 'Dragon Ball',
            'descripcion' => 'La aventura original de Son Goku desde su infancia en la montaña Paoz. Goku conoce a Bulma y juntos buscan las 7 Bolas de Dragón. Abarca los torneos de artes marciales, el Ejército Red Ribbon y la batalla final contra Piccolo Daimaō. Publicada entre 1984 y 1988 en la revista Shōnen Jump. Autor: Akira Toriyama.',
        ]);

        $dbz = Saga::create([
            'nombre' => 'Dragon Ball Z',
            'descripcion' => 'La continuación épica con Goku adulto. La llegada de los Saiyajin, la batalla en el Planeta Namek contra Freezer, el surgimiento de los androides y Cell, y la amenaza definitiva de Majin Boo. Incluye la mítica transformación Super Saiyajin. Publicada entre 1988 y 1995. Autor: Akira Toriyama.',
        ]);

        $dbs = Saga::create([
            'nombre' => 'Dragon Ball Super',
            'descripcion' => 'La saga moderna ambientada después del final de Dragon Ball Z. Goku y Vegeta se enfrentan a Bills, el Dios de la Destrucción, al temible Freezer resucitado en su nueva forma dorada, y participan en el Torneo del Poder entre universos. Serializado desde 2015. Guión: Akira Toriyama. Dibujo: Toyotarou.',
        ]);


        $mangas_db = [];
        $datos_db = [
            [
                'titulo' => 'Son Gokū y sus amigos',
                'descripcion' => 'Bulma, una joven genio, encontró una Dragon Ball en su sótano, luego de conocer la leyenda de estos artefactos construye un Radar para encontrarlos, encuentra unas segunda Dragon Ball con facilidad pero la tercera ya tiene dueño, Son Gokū, quien la cuida como un recuerdo de su abuelo. Bulma logra convencer a Gokū para que la acompañe y buscar el resto de las Dragon Balls. Empezando su viaje se encuentran una tortuga marina muy adentrada en la montaña y deciden ayudarla a llegar al mar, la tortuga trae a su dueño, Kame Sen\'nin, quien le regala a Gokū la Nube Kinto por haber ayudado; Bulma se da cuenta de que el anciano tiene una Dragon Ball y logra convencerlo de que se la regale. La siguiente Dragon Ball la encuentran en una aldea que es aterrorizada por el monstruo Oolong, Gokū lo vence y recibe la Dragon Ball como agradecimiento, el monstruo en realidad es un pequeño cerdo transformista que aprovecha su habilidad para engañar a la gente, por esta habilidad Bulma lo obliga a acompañarlos. En camino a la próxima Dragon Ball se encuentran con Yamcha y su compañero Puar, Yamcha vence fácilmente a un hambriento Gokū pero huye cuando ve a Bulma, ya que Yamcha le teme a las mujeres. Yamcha intenta volver a atacar pero es fácilmente vencido por Gokū, pero al haberse dado cuenta de la existencia de las Dragon Balls decide seguirlos y robárselas cuando tengan las 7. La siguiente Dragon Ball se encuentra en el Monte Frypan, el hogar de Gyūmaō.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Momento crítico para las Dragon Balls',
                'descripcion' => 'Gyūmaō reconoce el Nyoibō de Gokū como el perteneciente al anciano Son Gohan, el abuelo de Gokū, y le pide que vaya a buscar a Kame Sen\'nin, para que apague el fuego de su montaña. En el camino, Gokū conoce a Chichi, la hija de Gyūmaō, quien le hace prometer que Gokū se casará con ella en el futuro. Kame Sen\'nin usa su legendario Kame Hame Ha para apagar el fuego, aunque termina destruyendo la montaña por accidente. Buscando en los escombros, Bulma encuentra otra Dragon Ball. Mientras, Gokū, al ver el Kame Hame Ha, trata de copiarlo y al primer intento lo logra, aunque le sale muy débil. El Maestro, al ver el potencial de Gokū, le ofrece entrenarlo cuando éste termine su búsqueda. Buscando la última Dragon Ball, Gokū y los demás llegan a la Aldea del Jefe Conejo, un lunático que convierte a la gente en zanahoria al tocarla. Aunque convierte a Bulma, Gokū se deshace de él y sus esbirros, mandándolos a la Luna. Cuando están a punto de llegar al lugar donde se encuentra la última Dragon Ball son atacados por Shū, quien les roba todas la Dragon Balls excepto la que Gokū llevaba consigo, Shū lleva las Dragon Balls al castillo de Pilaf, Gokū y compañía lo siguen pero son atrapados y Pilaf logra convocar a Shenlong, aunque su deseo es robado por Oolong, quien en desea unas bragas. Pilaf, furioso, los encierra de nuevo pero en una prisión más fuerte y con un techo de vidrio, por lo que el sol del desierto los cocinara cuando amanezca, pero Gokū mira la luna llena y se convierte en Ōzaru, con lo que destruye el castillo. Luego de cortarle la cola a Gokū, con lo que vuelve a la normalidad, Bulma y Yamcha decide volver a la ciudad, ya que sus deseos se ha cumplido sin necesidad de las Dragon Balls, son acompañados por Puar y Oolong; por su lado Gokū decide ir a Kame House, a entrenar con Kame Sen\'nin, cuando llega el anciano le pide que le traiga una mujer bonita para poder entrenar con él.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Comienza el Tenkaichi Budōkai!',
                'descripcion' => 'Gokū que no distingue géneros, le trae al maestro una gorda fea y una sirena, pero con la ayuda de un monje llegado al lugar para también ser entrenado por el maestro llamado Krilin finalmente una chica amable y pacífica llamada Lunch, que al estornudar se vuelve rubia y adopta una personalidad violenta. Como fase inicial del entrenamiento, Gokū y Krilin deben hacer repartición de leche y arar con las manos, todo llevando a sus espaldas un caparazón de tortuga de 20 kilos, que luego pasa a uno que pesa el doble. Para el torneo, se anotan Gokū, Krilin y el maestro Kame Sen\'nin, que se disfraza y se anota como Jackie Chun, para vencer a sus alumnos y así evitar que se confíen y dejen de entrenar. Los tres se encuentran con que Yamcha también esta en el torneo, y logran pasar las eliminatorias. Llega el primer combate, en el cual Krilin vence a Baterian y pasa a las semifinales.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '"La gran final',
                'descripcion' => 'Continúan las peleas, en el segundo combate Jackie Chun se enfrenta a Yamcha y lo vence fácilmente. En el tercer combate Namu vence a Ranfan y en el cuarto combate Gokū vence a Giran. Cuando las dos semifinales esta decididas, Jackie Chun contra Krilin y Gokū contra Namu, le hacen una entrevista a los dos alumnos de Kame Sen\'nin. En las semifinales, Jackie vence fácilmente a Krilin y Son Gokū logra vencer a Namu luego de una difícil pelea. Luego comienza la gran final con un intercambio de todo tipo de técnicas entre Jackie Chun y Gokū.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El terror de Muscle Tower',
                'descripcion' => 'Continua la pelea entre Gokū y Jackie Chun, este último estaba a punto de ganar cuando el joven ve la luna llena y se convierte en Ōzaru. Al ver la destrucción que estaba siendo causada, Jackie Chun destruye la luna con un Kame Hame Ha, y el joven vuelva a la normalidad. Una vez Gokū vestido de nuevo ambos luchan hasta el cansancio y al final Jackie Chun logra ganar. Al finalizar el torneo Gokū decide ir a buscar la Dragon Ball de su abuelo, usando el Dragon Radar llega al lugar donde un ejército ya busca el artefacto en la zona, al tener un mejor radar, el joven encuentra fácilmente la Liù Xīngqiú y vence a los oficiales que intentan quitársela. Continuando su viaje Gokū toma un avión que lo lleva a la tierra del Norte, allí ataca una torre del ejército, allí, luego de varios soldados, se enfrenta con el Sargento Metallic hasta que a este se le agotan las baterías. En el siguiente piso se enfrenta al Sargento Mayor Murasaki, quien lo intenta vencer con sus trucos ninja.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡El gran error de Bulma!',
                'descripcion' => 'Son Gokū logra vencer al Sargento Mayor Murasaki, como acto desesperado libera al Androide #10, pero el androide ayuda a Gokū y lo guía hasta el último piso. El General White los espera en el centro de comando y los hace caer al quinto piso donde se enfrentan a Buyon, una vez que lo vencen suben de nuevo al sexto piso y vencen al General. El androide le entrega a Gokū la Èr Xīngqiú que guardaba, al día siguiente Gokū se marcha a buscar a Bulma para que arregle el radar. Luego de arreglar el radar Bulma decide acompañar a Gokū, ahí se encuentran con otro grupo del Ejército Red Ribbon y se dan cuenta de que la Dragon Ball está bajo el agua. Gokū y Bulma van a pedirle prestado un submarino a Kame Sen\'nin y Krilin se les une. Mientras tanto el grupo del ejército se divide, unos siguen a Gokū y compañía y el resto atacan Kame House.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Persecución! General Blue',
                'descripcion' => 'Gokū y compañía bajan a una vieja cueva de piratas, donde Gokū lucha contra el Robot Guardián y luego contra el General Blue, el joven estaba a punto de perder pero la cueva se comienza a derrumbar. Gokū y compañía regresan a Kame House pero son atacados por Blue, los ata a una bomba, y se va. Son liberados por Lunch y Gokū persigue a Blue hasta Villa Pingüino, donde Blue es vencido por Arale, mientras tanto Turbo le fabrica a Gokū otro radar para recuperar el que Blue le robó. Gokū logra ubicar otra Dragon Ball en la tierra sagrada de Karin, donde salva a un niño llamado Upa del Coronel Yellow.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Son Gokū al ataque',
                'descripcion' => 'Bora le da a Gokū la Sì Xīngqiú por salvar a su hijo. Mientras tanto, el General Blue llega al Cuartel General, pero el Commandante Red, quien ha contrato a Tao Pai Pai para que mate a Gokū, lo manda a matar por su fallo. Tao Pai Pai llega al lugar y asesina a Bora sin ninguna dificultad. Cuando Gokū lo ataca, Tao Pai Pai le dispara un Dodompa al corazón, dejándolo aparentemente sin vida. Gokū sobrevive ya que llevaba la Sì Xīngqiú en el lugar del impacto, y Upa le indica que para hacerse más fuerte debe subir a la Torre de Karin, para beber el Chōseisui. Luego de escalar la Torre de Karin, Gokū consigue atrapar a Karin en dos días, pero al tomarla se da cuenta de que es agua común y corriente, y que el entrenamiento de perseguir a Karin es lo que lo fortalece. Gokū baja a Tierra y se vuelve a enfrentar a Tao Pai Pai y lo vence. Mientras tanto, en el Cuartel General, la Coronel Violet le entrega a Red otra Dragon Ball, y Gokū se dirige hacia ellos en busca de las Dragon Balls que le faltan. Durante el ataque de Gokū, el asistente Black descubre que el Commandante solo quiere las Dragon Balls para hacerse más alto, así que lo mata y se autoproclama Comandante del Ejército Red Ribbon. Gokū llega donde Black buscando las Dragon Balls y el militar lo ataca con un robot, pero Gokū lo vence.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Cuando estés preocupado, Uranai Baba',
                'descripcion' => 'Al reunirse con sus amigos, Bulma le dice a Goku que la última Dragon Ball es imposible de encontrar por razones desconocidas y Kame Sen\'nin le dice que su hermana, Uranai Baba, puede encontrarla. Goku, Yamcha, Krilin y Puar se encuentran con Uranai Baba, quien les explica que tienen que vencer a sus cinco guerreros para decirles donde esta la dragon ball restante, a menos que tengan un millón de dólares. Puar y Upa derrotan al Conde Drácula haciendo señales de las debilidades de los vampiros, y luego Yamcha derrota al Hombre Invisible usando la hemorragia nasal de Kame Sen\'nin para revelarlo. El siguiente luchador es la Momia, que derrota a Yamcha, pero luego es derrotado por Goku, quien luego derrota al Diablo. El Diablo usa su rayo para hacer explotar el mal en el corazón de Goku, pero el ataque falla cuando se revela que Goku no tiene ningún mal en su corazón. La última pelea es contra un anciano enmascarado, que es el abuelo fallecido de Goku, Son Gohan. Después de una pelea prolongada, Gohan desiste y confiesa que solo quería ver a su nieto. Los dos comparten un momento emotivo y luego Gohan regresa al más allá. Mientras tanto, Pilaf planea tomar las Dragon Balls.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El 22.º Tenkaichi Budōkai',
                'descripcion' => 'Como recompensa por derrotar a los cinco guerreros, Uranai Baba revela la ubicación de la última Dragon Ball y Goku va a buscarla. Se enfrenta a Pilaf y sus soldados, y tras derrotarlos, Goku obtiene la Dragon Ball. Goku luego convoca a Shenlong y desea revivir a Bora. Tres años después, Goku se reúne con sus amigos y entra en el nuevo Tenka\'ichi Budōkai. También conoce al rival de Kame Sen\'nin, Tsuru-Sen\'nin, el Ermitaño Grulla, que ha llevado a sus dos alumnos a luchar, Ten Shin Han y Chaozu. El primer combate es entre Yamcha y Ten Shin Han. Después de una pelea violenta, Ten Shin Han le rompe la pierna izquierda a Yamcha y gana. Yamcha es trasladado al hospital con heridas que ponen en peligro su vida. En el segundo combate, Jackie Chun derrota fácilmente al "Hombre-Lobo" y en el tercero, Krilin se enfrenta a Chaozu. Mientras ambos usan sus técnicas, Goku descubre que Tsuru-Sen\'nin es el hermano de Tao Pai Pai y este quiere vengarse del asesinato de Tao Pai Pai.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡¡La mejor superbatalla bajo el cielo!!',
                'descripcion' => 'Krilin logra derrotar a Chaozu por su falta de conocimientos en matemáticas, y luego Goku derrota fácilmente a su oponente, el ocho veces campeón Pamput. La semifinal comienza entre Ten Shin Han y Jackie Chun. Impresionado por las habilidades de Ten Shin Han, Jackie Chun le dice que podría usar sus poderes para el bien y luego le revela su verdadera identidad. En la otra semifinal, Goku derrota a Krilin. Comienzan las finales y Goku lucha contra Ten Shin Han. Ambos luchan al mismo nivel, pero como Goku tiene la delantera, Tsuru-Sen\'nin le ordena a Chaozu que lo paralice. Ten Shin Han le dice a Chaozu que no lo haga y Kame-Sen\'nin ataca a Tsuru-Sen\'nin, echándolo del torneo. Ten Shin Han y Chaozu deciden renunciar a ser los pupilos de Tsuru-Sen\'nin, y Ten Shin Han renuncia a su sueño de convertirse en el mayor asesino. Los dos comienzan a pelear justamente.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡El terrible Piccolo Daimaō!',
                'descripcion' => 'Ten Shin Han destruye el campo de batalla usando su técnica kikōhō y ambos continúan luchando en el aire. Cuando Goku está a punto de ganar, es atropellado por un camión y cae primero, lo que hace que Ten Shin Han gane el torneo. Más tarde, Goku encuentra a Krilin muerto e inmediatamente va a buscar al asesino que se llevó una dragon ball. Kame-Sen\'nin descubre que el planificador del asesinato es un demonio llamado Piccolo. Goku encuentra al asesino de Krilin, un descendiente de Piccolo llamado Tambourine, pero no puede derrotarlo porque está muy cansado. Mientras Goku se recupera, conoce a un espadachín llamado Yajirobe que odia a Goku por robarle el pescado, y ambos derrotan a Tambourine. Luego se enfrentan a Piccolo pero Goku no puede infligirle ningún daño y es derrotado, Yajirobe escapa con él.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¿¡Son Gokū contraataca!?',
                'descripcion' => 'Kame-Sen\'nin rastrea a Piccolo y decide que arriesgará su vida para matarlo. Utilizando la técnica prohibida Mafū-ba, Kame-Sen\'nin intenta encarcelar a Piccolo en una olla, pero falla y muere. Piccolo convoca a Shenlong y desea volver a ser joven, después de matar a Chaozu, quien intentó interrumpirlo. Piccolo recupera su juventud y mata a Shenlong y comienza a conquistar el mundo. Mientras tanto, Yajirobe lleva a Goku a la Torre Karin para curarlo, Karin le hace beber un agua sagrada que se rumorea que está envenenada para hacerlo más fuerte y Goku lográ sobrevivir. Ten Shin Han intenta sellar a Piccolo como Kame-Sen\'nin, pero falla y es derrotado por su descendiente, Drum. Goku llega y mata a Drum. Luego se enfrenta a Piccolo y logra dominarlo.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Hacia una nueva aventura',
                'descripcion' => 'Goku continúa enfrentándose a Piccolo, y le hace un agujero en el abdomen, pero Piccolo tiene un hijo, que también es conocido como Piccolo. Luego, Goku es rescatado por Yajirobe, quien lo lleva al Santuario Karin. Karin le dice que Shenlong fue destruido por Piccolo, pero su creador, Dios, puede restaurarlo. Goku asciende a la Torre Karin y llega al Templo Sagrado para encontrarse con Dios. Primero conoce al Sr. Popo, el asistente de Dios, y se revela que el Sr. Popo es más fuerte que Goku, por lo que no puede ver a Dios. Enojado, Goku exige entrenamiento para ver a Dios, pero el Sr. Popo le permite a Goku ver a Dios debido a su persistencia. "Dios" es más conocido como Kami-sama, quien se revela como el lado bueno de Piccolo y acepta revivir a Shenlong, para que puedan revivir los que fueron asesinados por Piccolo. Una vez que todos vuelven a la vida, Goku le dice a Kami que lo entrene para que pueda derrotar al último descendiente de Piccolo que nació antes de que él muriera. Tres años después, un Goku más alto se reúne con sus amigos para participar en el nuevo Tenka\'ichi Budōkai. Una mujer sale y golpea a Goku por olvidar su promesa. Luego, los ocho mejores comienzan, incluidos Goku, Krilin, Piccolo, la chica anónima, Ten Shin Han, un Tao Pai Pai convertido en cyborg, Yamcha y Shen.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Poderosos rivales!',
                'descripcion' => 'En la primera pelea, Ten Shin Han lucha y derrota a Tao Pai Pai. En la segunda pelea, Goku derrota fácilmente a Chi-Chi, la mujer desconocida, quien estaba enojada porque no la reconoció, por lo que Goku accede a casarse con ella como le prometio en su infancia. En la siguiente pelea, Krilin se enfrenta a Piccolo, y cuando este último lo supera, Krilin se rinde. En el cuarto combate, Yamcha lucha contra un hombre llamado Shen, que en realidad es Kami que lo posee. Yamcha pierde y comienza la semifinal entre Goku y Ten Shin Han. Ten Shin Han utiliza una nueva técnica para dividir su cuerpo en cuatro. Sin embargo, Goku descubre que su poder también estaba dividido y logra derrotarlo. Comienza la segunda semifinal y Kami lucha contra Piccolo',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Duelo de titanes!',
                'descripcion' => 'Kami intenta encarcelar a Piccolo en una botella, pero Piccolo contraataca y sella a Kami. Piccolo gana la pelea y se come la botella para que Kami no lo moleste. Luego, comienza la final entre Goku y Piccolo y ambos intercambian ataques. Mientras Piccolo transforma su cuerpo en un gigante, Goku entra en su boca y Piccolo vomita la botella. Kami es liberado por Krilin, lo que enoja a Piccolo. Piccolo vuelve a su estado normal y usa su técnica más fuerte para hacer explotar toda el área. Aunque siguen débiles por el ataque, Goku y Piccolo siguen luchando. Piccolo logra herir gravemente a Goku, pero como cree que ha ganado, Goku arroja a Piccolo fuera de la arena y gana. Goku decide dejar a Piccolo con vida ya que si este muere Kami también morirá y las Dragon Ball dejaran de existir, y se va con Chi-Chi.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ]
        ];

        foreach ($datos_db as $i => $data) {
            $mangas_db[] = Manga::create([
                'titulo' => $data['titulo'],
                'autor' => 'Akira Toriyama',
                'volumen' => $i + 1,
                'precio' => $data['precio'],
                'stock' => rand(8, 35),
                'descripcion' => $data['descripcion'],
                'imagen' => "/storage/covers/dragonball/" . ($i + 1) . ".jpg",
                'sagas_id' => $db->id,
            ]);
        }

        $mangas_dbz = [];

        $datos_dbz = [
            [
                'titulo' => 'Luchando contra el terror',
                'descripcion' => 'Cinco años después, Gokū está casado con Chi-Chi y tienen a Gohan. Raditz, un Saiyajin, revela ser hermano de Gokū. Secuestra a Gohan y desafía a Gokū a matar 100 personas. Piccolo y Gokū unen fuerzas: Gohan ayuda a herir fatalmente a Raditz con un Makankōsappō, sacrificando la vida de Gokū. Raditz advierte que dos Saiyajins más fuertes llegarán en un año.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Son Gohan y Piccolo Daimao',
                'descripcion' => 'Piccolo entrena a Gohan en la Tierra mientras Gokū entrena en el Otro Mundo con Kaiō-sama. Nappa y Vegeta llegan a la Tierra con un ejército Saiyajin y secuestran a Gohan. Se enfrentan a los Guerreros Z: Krilin, Yamcha, Chaoz, Tenshinhan. Yamcha muere, Krilin y Piccolo destruyen a los Saibamen. Finalmente, solo Nappa y Vegeta quedan en pie.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Adelante Son Goku!',
                'descripcion' => 'Ten Shin Han y Chaoz se sacrifican para detener a Nappa, sin éxito. Goku regresa y derrota a Nappa fácilmente. Vegeta aparece, matándolo. Goku lucha contra Vegeta, pero es superado. Piccolo sacrifica su vida para salvar a Gohan de Nappa. Vegeta se mantiene derrotado, a la espera de Gokū.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡La superbatalla decisiva!',
                'descripcion' => 'Goku enfrenta a Vegeta; usa Kaiō-ken x3, pero Goku queda debilitado. Vegeta crea una luna artificial, se convierte en Gran Simio y presiona a Goku. Gohan, Krilin y Yajirobe llegan y logran cortarle la cola a Vegeta, regresándolo a humano. Vegeta sigue luchando, Goku envía genkidama, Vegeta la esquiva, pero Gohan regresa el ataque y logra que Vegeta sobreviva. Justo cuando Vegeta iba a matar a los Guerreros Z, la cola Saiyan de Gohan aparece: él se transforma en Gran Simio y casi destruye a Vegeta, salvo que le cortan la cola a tiempo.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Objetivo: Planeta Namek!',
                'descripcion' => 'Tras la derrota de Vegeta, Bulma y los demás deciden usar las Dragon Balls Namekianas para revivir a los Guerreros Z muertos. Construyen una nave y viajan al planeta Namek, hogar de Piccolo y Kami. Gokū se recupera con frijoles Senzu y también parte hacia Namek. En Namek, Gohan y Krilin enfrentan a los humanos de Freezer, mientras Vegeta llega con el mismo propósito y planea enfrentarlo.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'La resistencia de los Namekuseijin',
                'descripcion' => 'En Namek, Gohan y Krilin ayudan a un joven Namek llamado Dende. Dodoria, uno de los secuaces de Freezer, ataca, pero Vegeta lo asesina tras confirmar la destrucción del planeta Vegeta. Vegeta busca las Dragon Balls. Dende lleva a Krilin al Gran Patriarca para pedir deseos. Vegeta lucha contra Zarbon, quien se transforma en monstruo y derrota a Vegeta.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El Terrible escuadrón especial Ginyu',
                'descripcion' => 'Las fuerzas especiales Ginyu llegan a Namek. Goku se entrena en la Sala del Tiempo. En Namek, Ginyu ataca; Vegeta acaba con Gurdo pero es derrotado por Rikum. Freezer mata al Gran Patriarca cuando pide deseos. Los Guerreros Z pelean contra los aliados de Ginyu; Vegeta interviene contra ellos. Goku sale de la Sala del Tiempo y enfrenta a Jizu y Būta (los dos miembros que quedaban), derrotándolos. Ginyu se prepara para intervenir.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¿¡Goku o Ginyu!?',
                'descripcion' => 'Goku lucha contra Jis y Būta, dejando a Būta fuera de combate. Ginyu finalmente se enfrenta a Goku y lo supera, pero Vegeta mata a Rikum, librando a Goku. Ginyu intenta intercambiar cuerpos con Vegeta, pero Goku lo contrarresta. Luego Ginyu intercambia cuerpos con Gokū involuntariamente, dejando a ambos guerreros fuera de control. Vegeta aprovecha para escapar y Gohan y Krilin siguen luchando contra Ginyu.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡La super transformación de Freezer!',
                'descripcion' => 'Vegeta derrota a Jis y queda listo contra Ginyu. Freezer llega e intercambia golpes con Gokū, pero picado por la masacre de sus hombres, libera su segunda transformación y derrota a Krilin. Dende convoca a Porunga, deseando revivir a Piccolo (para recuperar a Kami y las Dragon Balls de la Tierra). Piccolo regresa fusionándose con Nail, y ahora con nuevo poder enfrenta a Freezer.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Son Goku en acción!',
                'descripcion' => 'Freezer utiliza su segunda transformación, superando a Piccolo. Gohan acude en su ayuda. Vegeta obliga a Krilin a herirlo para aumentar su poder (usando Dende para curarlo). Mientras Vegeta se cura, Freezer libera su forma final. Mata a Dende para evitar curas adicionales. Vegeta intenta luchar, pero pierde. Goku, recuperado, aparece y derrota con facilidad a Nappa, quien ya había sido matado por Vegeta anteriormente. Goku va tras Freezer, quien mata a Vegeta antes de pelear. Goku logra empezar el combate con Freezer.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El legendario Súper sayajin',
                'descripcion' => 'Goku usa una Mega Genkidama (Tamaño 3) contra Freezer y Vegeta, pero Goku queda exhausto. Vegeta lucha y derrota momentáneamente a Freezer, pero éste absorbe al androide Número 18 para alcanzar su forma perfecta. Trunks interviene con un Super Saiyajin más poderoso que Vegeta y derriba a Freezer, dejando paso al torneo celular anunciado.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El joven del futuro',
                'descripcion' => 'Freezer ataca Namek, pero es interrumpido por un misterioso Super Saiyajin adolescente. Este chico resulta ser Trunks, el hijo de Bulma y Vegeta del futuro, quien anuncia que Freezer fue destruido y que dos androides llegarán en tres años. Trunks regresa a su tiempo. En el presente, Gokū y los demás descubren la llegada de los androides y se preparan para enfrentarlos.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Goku, Derrotado!',
                'descripcion' => 'Goku se separa del grupo para enfrentar a los androides #19 y #20. Yamcha es atacado y Gokū llega justo a tiempo para detener al #19. Sin embargo, Gokū se ve debilitado por una enfermedad del corazón (como advirtió Trunks). Vegeta derrota a #19 fácilmente. El androide Número 20 (Dr. Gero) huye a su laboratorio, seguido por los Guerreros Z, donde libera a los androides #17 y #18.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Un mal presentimiento',
                'descripcion' => 'Los androides #17 y #18 son despertados por el Dr. Gero. Vegeta y Trunks enfrentan a los androides: Vegeta captura a #17, #18 derrota a Vegeta. #17 y #18 derrotan al resto de los Guerreros Z, excepto a Krilin. Piccolo pide la fusión con Kami para derrotar a los androides. Luego aparece un misterioso monstruo llamado Celula, que absorbe a personas con su poder. Piccolo (fusionado) lo enfrenta, pero Cell domina la situación y escapa para volverse más fuerte.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'La amenaza de Cell',
                'descripcion' => 'La criatura se presenta como Cell, creación del Dr. Gero con células de varios guerreros. Explica haber venido del futuro tras vencer a los androides. Se enfrenta a Piccolo (renacido) y lo domina, obligando a huir. Cell se vuelve más fuerte en la oscuridad.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡¡Cell, la forma perfecta lograda!!',
                'descripcion' => 'Gokū rescata a Ten Shin Han y Piccolo, llevándolos al Palacio de Kami. Trunks y Vegeta regresan y luchan contra Cell. Vegeta revela haber mejorado su transformación a Super Saiyajin. Vegeta derrota a Cell momentáneamente, pero permite que Cell absorba al androide #18, convirtiéndolo en su forma perfecta. Trunks irrumpe con un nuevo Super Saiyajin más poderoso que Vegeta.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Los juegos de Cell comienzan',
                'descripcion' => 'Trunks, en su nuevo estado, vence a Cell, pero Cell lo derrota porque esta transformación lo ralentiza. Cell anuncia un torneo (los Juegos de Cell) donde cualquiera puede retarlo. Gokū y Gohan salen de la Sala del Espíritu y se enteran del anuncio. Deciden entrenar juntos, controlando su poder en forma de Super Saiyajin. Goku recluta a Dende para recrear las Dragon Balls en la Tierra para revivir a los caídos y prepararse para Cell.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'El guerrero que superó a Goku',
                'descripcion' => 'Goku enfrenta a Cell, ambos liberan todo su poder. Goku se rinde y le pide a Gohan que luche en su lugar. Gohan pierde el control, Cell enoja a Gohan atacando a sus amigos. El androide #16 intenta detener a Cell, pero su cuerpo es destruido. Cell crea a los “Cell Juniors” y ataca a los amigos de Gohan. El corazón de #16, aún funcionando, insta a Gohan a luchar. Gohan se transforma en un Súper Saiyajin y derrota fácilmente a los Cell Juniors.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Adiós, guerreros!',
                'descripcion' => 'Gohan abruma a Cell, obligándolo a expulsar al androide #18 y volverse semiperfecto. Cuando Cell intenta autodestruirse para destruir la Tierra, Goku lo teletransporta al planeta del Kaio. Goku muere junto a Bubbles y #17. Cell se regenera, vuelve a la Tierra y mata a Trunks. Gohan, ayudado por Goku desde el otro mundo, derrota a Cell con un Kamehameha. Goku elige permanecer muerto y encomienda a Gohan la protección de la Tierra. Trunks es revivido y regresa al futuro para derrotar a los androides.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Nace un nuevo héroe!',
                'descripcion' => 'Varios años después, Gohan es un adolescente que lucha contra el crimen como “Gran Saiyaman”. Videl, compañera de clase e hija de Mr. Satán, descubre su identidad y lo obliga a inscribirse en el próximo Tenkaichi Budōkai enseñándole a volar. En el torneo, Goku regresa a la Tierra y compite con otros: Vegeta, Krilin, Número 18 y Piccolo. Gohan presenta a su hermano Goten. Goten y Trunks compiten en la división infantil, mientras los adultos participan en paralelo, incluyendo a Mr. Satán en el torneo de adultos.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Un plan se pone en marcha',
                'descripcion' => 'En el torneo infantil, Trunks vence a Goten y gana el derecho de retar a Mr. Satán (prueba de coraje). En el torneo adulto, Goten y Trunks se disfrazan y derrotan a Mighty Mask. Piccolo es derrotado por Kaiō-shin. Videl pelea contra Spopovich y es superada; él y Yamu roban energía a los luchadores. Kaiō-shin advierte que el mago Babidi planea despertar a Majin Buu absorbiendo energía de guerreros fuertes.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'Un combate predestinado, Son Goku contra Vegeta',
                'descripcion' => 'Goku y los demás llegan a la base de Babidi y derrotan a sus guardias. Durante el torneo, Majin Vegeta (controlado por Babidi) derrota a Gokū en un duro combate. Mientras Gohan lucha contra Dabra, Majin Buu es liberado del santuario. Vegeta permite el control de Babidi para volverse más fuerte, iniciando el combate final con Gokū.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Adiós, guerrero orgulloso!',
                'descripcion' => 'Majin Buu despierta y derrota a Goku. Dabra intenta atacarlo, pero Buu lo mata y se lo come. Vegeta, poseído, destruye a Trunks y Goten para salvar la Tierra, pero Goku y Mr. Satán distraen al “gordo” Buu. Vegeta se sacrifica matándolo, pero Buu se regenera. Babidi y Buu buscan a Piccolo, Goten y Trunks, matando civiles. Goku regresa para enseñar a Goten y Trunks la fusión. Gohan es llevado con Kaiō-shin a entrenar con la Espada Z.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => 'La última arma secreta del ejército de la Tierra',
                'descripcion' => 'Goku se fusiona con Vegeta (de regreso a la Tierra) formando a Vegetto, derrotando a Buu en su cuerpo, y deja que Buu lo absorba para liberar a Gohan y los demás. Cuando entran en el cuerpo de Buu, la fusión desaparece. Buu se transforma en una versión “pura” infantil y mata a Gohan, Goten, Trunks y Piccolo. Goku y Vegeta escapan al planeta de Kaiō-shin. Vegeta ordena a Dende restaurar la Tierra con Porunga. Goku se recupera para enfrentarse al joven Buu, usando la Super Genkidama con ayuda de Buu gordo y Mr. Satán. Tras destruir a Buu, Goku regresa a vivir en la Tierra. Diez años después, compite en el torneo final contra Oob (reencarnación de Buu), decidiendo entrenarlo para el futuro.',

                'precio' => round(mt_rand(900, 1300) / 100, 2)
            ],
            [
                'titulo' => '¡Ánimo, Súper-Gotenks!',
                'descripcion' => 'El nuevo Boo encuentra el palacio de Kami-sama y se enfrenta a Gotenks en la Sala del Espíritu y el Tiempo. Gotenks comienza a realizar técnicas débiles para hacer que la batalla sea dramática, lo que hace que Piccolo destruya la puerta de la Habitación. Boo crea un agujero en la dimensión y regresa a casa de Kami-sama, donde convierte a todos en chocolate antes de asesinarlos. Gotenks logra escapar junto a Piccolo y continúa enfrentándose a Boo. Luego puede dominar a Boo, pero antes de que pueda derrotarlo, la fusión termina. Gohan regresa y lucha contra Boo. Gohan es capaz de abrumar a Boo, quien se autodestruye y se regenera más tarde. Gotenks intenta enfrentarse a Boo nuevamente, pero es absorbido junto con Piccolo. Habiendo absorbido a Gotenks, Boo ahora puede superar a Gohan. El viejo Kaiō-shin le da la energía vital que le queda a Goku, junto con dos aretes que le permitirán fusionarse con Gohan. Goku intenta darle un arete a Gohan, pero Gohan es absorbido por Boo antes de que él y Goku puedan fusionarse.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡Adiós, Mundo Dragón!',
                'descripcion' => 'Goku se fusiona con Vegeta, a quien se le ha permitido regresar a la Tierra. Forman un poderoso guerrero llamado Vegetto que derrota fácilmente a Boo, pero le permite a Boo absorberlo para poder liberar a Gohan y los demás. Cuando entra en el cuerpo de Boo, la fusión desaparece y vuelven Goku y Vegeta, encuentran y liberan a Gohan, Goten, Trunks y Piccolo. Mientras también liberan al obeso Boo, el Boo actual sufre una nueva transformación que lo convierte en un Boo infantil. El nuevo Boo procede a destruir la Tierra, matando a Gohan, Goten, Trunks y Piccolo. Sin embargo, Goku y Vegeta pueden escapar al planeta de Kaiō-shin junto con Dende y Mr. Satán. Goku se prepara para enfrentar al nuevo Boo, quien se regenera y se teletransporta al planeta Kaiō-shin. Sin embargo, Goku es incapaz de controlar sus poderes, y Vegeta y el obeso Boo distraen al Boo actual para darle tiempo a Goku para recuperarse. Vegeta le dice a Dende que use a Porunga para restaurar la Tierra y revivir a todos sus habitantes, lo que permitirá a Goku absorber sus energías para realizar una Super Genki-Dama. Con la ayuda del obeso Boo y Mr. Satán, Goku puede preparar la Super Genki-Dama y la usa para matar a Boo de una vez por todas. Luego, Goku regresa a vivir con su familia y amigos. 10 años después, ingresa en el 28.º Tenka\'ichi Budokai. Allí, se enfrenta a la reencarnación de Boo, un joven llamado Oob. Goku, impresionado por el poder de Oob, decide entrenarlo para que algún día se convierta en el reemplazo de Goku como protector de la Tierra.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ]
        ];


        foreach ($datos_dbz as $i => $data) {
            $mangas_dbz[] = Manga::create([
                'titulo' => $data['titulo'],
                'autor' => 'Akira Toriyama',
                'volumen' => $i + 1,
                'precio' => $data['precio'],
                'stock' => rand(5, 28),
                'descripcion' => $data['descripcion'],
                'imagen' => "/storage/covers/dragonballz/" . ($i + 1) . ".jpg",
                'sagas_id' => $dbz->id,
            ]);
        }

        $mangas_dbs = [];
        $datos_dbs = [
            [
                'titulo' => 'Los guerreros del sexto universo',
                'descripcion' => 'Goku y sus amigos participan en un torneo de artes marciales entre el universo 6 y el 7, donde aparecen Beerus y Champa liderando a sus guerreros.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡¡Se proclama el universo campeón!!',
                'descripcion' => 'Finaliza el torneo del universo 6 donde Goku y Vegeta luchan contra los guerreros de Champa; tras la victoria, Future Trunks aparece con un mensaje de auxilio desde el futuro.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El plan cero humanos',
                'descripcion' => 'Trunks del Futuro llega con Goku Black, revelando el malvado “Plan Cero Humanos” de Zamasu que amenaza con destruir la Tierra.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Última oportunidad para la esperanza',
                'descripcion' => 'La batalla contra Goku Black alcanza su clímax; Goku y sus aliados luchan contra el fusión Zamasu para salvar la realidad del futuro.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡Batalla final! Adiós, Trunks',
                'descripcion' => 'Continúa la épica confrontación contra el poderoso Zamasu fusionado; Goku y Trunks luchan juntos en la batalla final que pondrá fin a la amenaza.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡Reuníos, Superguerreros!',
                'descripcion' => 'Con Zamasu derrotado, Goku entrena en la Sala del Espíritu. Los guerreros se reúnen de nuevo al saber del próximo torneo de poder que está por comenzar.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡Empieza el torneo del poder por la supervivencia del universo!',
                'descripcion' => 'Da inicio el Torneo del Poder, donde el universo 7 debe luchar contra otros universos por la supervivencia; Goku se enfrenta a combatientes temibles como Jiren.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El "presagio" del despertar de Son Goku',
                'descripcion' => 'Durante el Torneo del Poder, Goku muestra señales del Ultra Instinto mientras continúa la lucha intensa; Kale y otros guerreros del universo 6 destacan en la batalla.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Fin y conclusión',
                'descripcion' => 'Goku domina el Ultra Instinto y logra que el universo 7 gane el Torneo del Poder. Poco después, hace acto de presencia Moro, un nuevo enemigo que devora planetas.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El deseo de Moro',
                'descripcion' => 'Se revela que Moro se ha escapado y tiene planes oscuros de absorber la energía de los planetas. Goku y los guerreros Z se preparan para enfrentarlo mientras Moro comienza su búsqueda de poder.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'La gran evasión',
                'descripcion' => 'Moro escapa de la cárcel galáctica y causa estragos en varios mundos. Los héroes deben unirse para detener su avance, mientras Bulma, Gohan y Goten buscan las Bolas de Dragón en secreto.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'La verdadera identidad de Merus',
                'descripcion' => 'El guerrero-ángel Merus entrena a Goku y Vegeta para vencer a Moro. Se revela la verdadera identidad de Merus, aumentando la tensión antes de la batalla final.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Batallas por doquier',
                'descripcion' => 'Goku domina el Ultra Instinto y derrota a Moro con la ayuda de sus amigos. Sin embargo, un nuevo guerrero llamado Granola emerge, ansioso de venganza por el sufrimiento de su pueblo.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Son Goku, patrullero galáctico',
                'descripcion' => 'Goku se une a la Patrulla Galáctica y sigue entrenando junto a Merus. Mientras tanto, comienza a vislumbrarse el enfrentamiento inminente con Granola y su familia.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Moro, el devorador de planetas',
                'descripcion' => 'Con Moro derrotado, reaparecen los Heeters: Granola, el último superviviente de la raza Cerealiana, busca venganza contra los Saiyans por la destrucción de su pueblo.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El mejor guerrero del universo',
                'descripcion' => 'Granola alcanza el máximo poder como el guerrero más fuerte del universo. Goku y Vegeta luchan para detener los planes de los Heeters y proteger los secretos de su comunidad.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El poder de un Dios de la destrucción',
                'descripcion' => 'Vegeta alcanza un nuevo nivel de poder, usando la fuerza de un Dios de la Destrucción. Él y Goku enfrentan juntos a Granola en la batalla decisiva para proteger su universo.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Bardock, el padre de Goku',
                'descripcion' => 'Se relatan los orígenes de Bardock, padre de Goku, y se revela la historia detrás de Gas, el enemigo de Granola. La batalla entre Bardock y Gas alcanza un punto crítico.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El orgullo de un pueblo',
                'descripcion' => 'Bardock lidera la defensa de su tierra junto a Goku, enfrentando las fuerzas de Gas. La determinación del pueblo cerealiano y el valor de los Saiyans se unen en esta batalla final.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Guerra sin cuartel',
                'descripcion' => 'Comienza la saga de la Prisión Galáctica: Son Gohan se enfrenta al peligroso Cell Max mientras nuevos héroes emergen, listos para defender la Tierra contra Red Ribbon.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Contra el doctor Hedo',
                'descripcion' => 'La Patrulla Galáctica enfrenta al villano Dr. Hedo, creador de nuevos androides. Goku y los demás luchan contra el resurgimiento del ejército Red Ribbon.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'El maestro y el discípulo más poderosos',
                'descripcion' => 'Gohan se entrena con determinación para proteger a la humanidad. El rescate de Pan y la aparición de nuevos guerreros afianzan el vínculo entre maestro y discípulo.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => '¡El superdespertar de Son Gohan!',
                'descripcion' => 'Gohan alcanza su máximo potencial en la lucha contra los androides rebeldes. Con la ayuda de aliados inesperados, Goku y Gohan defienden la Tierra de una amenaza creciente.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
            [
                'titulo' => 'Legado al Futuro',
                'descripcion' => 'Saga en desarrollo: nuevos enfrentamientos y misterios se revelan, incluyendo una confrontación entre Goku y Gohan y la aparición de los Saiyaman en acción.',
                'precio' => round(mt_rand(900, 1300) / 100, 2),
            ],
        ];

        foreach ($datos_dbs as $i => $data) {
            $mangas_dbs[] = Manga::create([
                'titulo' => $data['titulo'],
                'autor' => 'Toyotarou / Akira Toriyama',
                'volumen' => $i + 1,
                'precio' => $data['precio'],
                'stock' => rand(3, 20),
                'descripcion' => $data['descripcion'],
                'imagen' => "/storage/covers/dragonballsuper/" . ($i + 1) . ".jpg",
                'sagas_id' => $dbs->id,
            ]);
        }

        $pedido1 = Pedido::create([
            'user_id' => $gohan->id,
            'precio_total' => 0,
            'estado' => 'atendido',
        ]);
        $pedido1->mangas()->attach($mangas_db[0]->id, ['cantidad' => 1, 'precio' => $mangas_db[0]->precio]);
        $pedido1->mangas()->attach($mangas_db[1]->id, ['cantidad' => 1, 'precio' => $mangas_db[1]->precio]);
        $pedido1->mangas()->attach($mangas_db[2]->id, ['cantidad' => 1, 'precio' => $mangas_db[2]->precio]);
        $pedido1->mangas()->attach($mangas_dbz[5]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[5]->precio]);
        $pedido1->update([
            'precio_total' => $mangas_db[0]->precio + $mangas_db[1]->precio + $mangas_db[2]->precio + $mangas_dbz[5]->precio,
        ]);

        $pedido2 = Pedido::create([
            'user_id' => $vegeta->id,
            'precio_total' => 0,
            'estado' => 'atendido',
        ]);
        $pedido2->mangas()->attach($mangas_dbz[0]->id, ['cantidad' => 2, 'precio' => $mangas_dbz[0]->precio]);
        $pedido2->mangas()->attach($mangas_dbz[1]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[1]->precio]);
        $pedido2->mangas()->attach($mangas_dbz[2]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[2]->precio]);
        $pedido2->update([
            'precio_total' => ($mangas_dbz[0]->precio * 2) + $mangas_dbz[1]->precio + $mangas_dbz[2]->precio,
        ]);

        $pedido3 = Pedido::create([
            'user_id' => $bulma->id,
            'precio_total' => 0,
            'estado' => 'pendiente',
        ]);
        $pedido3->mangas()->attach($mangas_dbs[0]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[0]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[1]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[1]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[2]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[2]->precio]);
        $pedido3->mangas()->attach($mangas_dbs[5]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[5]->precio]);
        $pedido3->update([
            'precio_total' => $mangas_dbs[0]->precio + $mangas_dbs[1]->precio + $mangas_dbs[2]->precio + $mangas_dbs[5]->precio,
        ]);

        $pedido4 = Pedido::create([
            'user_id' => $gohan->id,
            'precio_total' => 0,
            'estado' => 'pendiente',
        ]);
        $pedido4->mangas()->attach($mangas_dbz[6]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[6]->precio]);
        $pedido4->mangas()->attach($mangas_dbz[7]->id, ['cantidad' => 1, 'precio' => $mangas_dbz[7]->precio]);
        $pedido4->mangas()->attach($mangas_db[15]->id, ['cantidad' => 1, 'precio' => $mangas_db[15]->precio]);
        $pedido4->update([
            'precio_total' => $mangas_dbz[6]->precio + $mangas_dbz[7]->precio + $mangas_db[15]->precio,
        ]);

        $pedido5 = Pedido::create([
            'user_id' => $vegeta->id,
            'precio_total' => 0,
            'estado' => 'pendiente',
        ]);
        $pedido5->mangas()->attach($mangas_dbs[6]->id, ['cantidad' => 3, 'precio' => $mangas_dbs[6]->precio]);
        $pedido5->mangas()->attach($mangas_dbs[7]->id, ['cantidad' => 1, 'precio' => $mangas_dbs[7]->precio]);
        $pedido5->update([
            'precio_total' => ($mangas_dbs[6]->precio * 3) + $mangas_dbs[7]->precio,
        ]);
    }
}
