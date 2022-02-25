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
    var_dump($randomNum);
    if(!in_array($randomNum , $randomNumbers)){
        array_push($randomNumbers, $randomNum);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </body>
</html>



