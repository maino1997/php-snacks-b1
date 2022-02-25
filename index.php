<!-- Snack 1 -->
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name 
sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
 e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

$name= $_GET['name'] ?? "";
$mail= $_GET['mail'] ?? "";
$age= $_GET['age'] ?? "";

$message = "";



if(strlen($name) < 3 && strpos($mail , '.') && strpos($mail , '@') && is_numeric($age)){
    $message = "accesso riuscito";
} else{
    $message = "accesso negato";

}
?> 

<!-- Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 
01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php 

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys((array)$posts);

?>

<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<?php 

$randomNumbers = [];


while(count($randomNumbers) < 15){

    $randomNum = rand(1,15);
    if(!in_array($randomNum , $randomNumbers)){
        array_push($randomNumbers, $randomNum);
    }
}
?>

<!-- 
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo. -->

<?php 

$paragraph = "Da quest’anno gli automobilisti cinesi potranno beneficiare dell’agopuntura mentre guidano. E’ stato infatti 
messo in vendita uno speciale cuscino elettrico, a vibrazioni, in grado di alleviare la fatica del guidatore.

Studiato da esperti cinesi di agopuntura, questo dispositivo si è già rivelato efficace nel ridurre gli incidenti stradali 
dovuti a una eccessiva fatica o stanchezza degli automobilisti.

Il cuscino, prodotto da una ditta di Pechino, è stato diffuso in 135.000 pezzi destinati al mercato interno. Ma 
già alcune aziende francesi, tedesche e americane ne hanno chiesto la licenza per produrlo e destinarlo agli automobilisti occidentali.

Bene. Intanto osserviamo che tutte le informazioni riguardano lo stesso argomento: il cuscino elettrico.
 Notiamo poi che i pezzi sono collegati tra loro secondo un ordine di successione che, in alcuni casi, è vincolante (se invertiamo la posizione delle due frasi che compongono il primo capoverso il discorso non fila più).

Poi: alcune espressioni servono a garantire i legami tra i pezzi del discorso; per esempio infatti, questo dispositivo, il cuscino, ma. Infine: il discorso progredisce spostandosi dal piano dell’efficacia sociale e individuale (il cuscino fa bene ai guidatori e previene gli incidenti) a quello economico (si vende tanto), dalla prospettiva cinese a quella occidentale: il cuscino elettrico si sta per diffondere in Europa. 
Ecco, un buon testo giornalistico, e non solo, dovrebbe presentare queste caratteristiche. 
Sembra facile e facile non è. Naturalmente più la scaletta di partenza sarà forte e più vi sarà facile
 rispettare questi criteri di coerenza/coesione/progressione interna al testo. Tuttavia quando si passa dalla fase dell’
 ideazione a quella della stesura si possono incontrare difficoltà. Per esempio non sempre risulta agevole trascorrere da un 
 argomento all’altro, legando i pensieri (il testo risulta allora segmentato, spezzato).
 A questo proposito vi esorto a concentrarvi sulla divisione in paragrafi (o capoversi).";

 $separeted = explode(".", $paragraph);
?>



<!-- Snack 5
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$snack_5_keys = array_keys((array)$db);

$className = "";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>
<?php echo $message ?>
    </h2>

    <h2>POSTS </h2>
    <ul>
        <?php for($i = 0; $i < count($keys); $i++) : ?>

            <li> <?php echo $keys[$i]   ?> </li>

            
            <?php for($y = 0; $y < count($posts[$keys[$i]]); $y++) : ?>            
                
             <ul>

                 <li> <?php echo $posts[$keys[$i]][$y]['title']  ?> </li>
                 <li> <?php echo $posts[$keys[$i]][$y]['author']  ?> </li> 
                 <li> <?php echo $posts[$keys[$i]][$y]['text']   ?> </li> 
                 
             </ul>
                
                <?php endfor; ?>    
            <?php endfor; ?>    
    </ul>

        
    <h2>ARRAY CASUAL</h2>
    <ul>
        <?php for($i = 0; $i < count($randomNumbers); $i ++) :?> 
            <li> <?php echo($randomNumbers[$i])  ?> </li>
        <?php endfor; ?>
    </ul>

    <h2>SEPARETED TEXT</h2>
    <?php for ($i = 0; $i < count($separeted); $i++) : ?>
        <p> <?php echo $separeted[$i] ?> </p>
        <?php endfor; ?>

    
    <h2>SNACK 5</h2>



    <div class="row">
        <?php for($y=0; $y < count($snack_5_keys); $y++) :?>
            <div class= <?php if($y == 0) {
                echo "grey";
                } else{
                    echo "red";
                }
                ?>>
    
                <div class="chiave"><?php echo $snack_5_keys[$y]?></div> 
    
                <?php for ($i = 0; $i < count($db[$snack_5_keys[$y]]); $i++) : ?>
                    <div> <?php echo "{$db[$snack_5_keys[$y]][$i]['name']}   {$db[$snack_5_keys[$y]][$i]['lastname']}"?> </div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
    </body>
</html>



