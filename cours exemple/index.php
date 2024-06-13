<?php
require("header.php");
?>
        
        <?php 

            $logged = false;
            $signed = false;
            if($logged == true) { 
                echo "you are logged, welcome";
                
            } elseif($signed == false){
                echo "please sign up";
            }else{
                echo "please,login in";
            }

            $today= date('N');
            switch($today){
                case 1:
                    echo "Lundi";
                    break;
                case 2:
                    echo "Mardi";
                    break;
                case 3:
                    echo "Mercredi";
                    break;
                case 4:
                    echo "Jeudi";
                    break;
                case 5:
                    echo "Vendredi";
                    break;
                case 6:
                    echo "Samedi";
                    break;
                case 7:
                    echo "Dimanche";
                    break;
                    default;
        }
        echo " <br>";

        $etudiants = ["AIT SAID","BOUKRI", "LAROOP", "DADA"];
        for($i = 0; $i < count($etudiants); $i++){
            echo $etudiants[$i] . "<br>";
        }
        echo " <br>";

        $etudiants = ["AIT SAID","BOUKRI", "LAROOP", "DADA"];
        foreach($etudiants as $etudiant){
            echo $etudiant . "<br>";
        }
        echo " <br>";

        $etudiants = ["AIT SAID","BOUKRI", "LAROOP", "DADA"];
        foreach($etudiants as $index => $etudiant){
            echo $etudiant . "|". $index . "<br>";
        }
        echo "<br>";

        $post=[
            ["id"=> 1,"titre"=> "My first post","contenu"=> "bbla bla bla bla","tags"=> []],
            ["id"=> 2,"titre"=> "My second post","contenu"=> "ma ma ma ma am","tags"=> []],
            ["id"=> 3,"titre"=> "My third post","contenu"=> "koko koko koko","tags"=> []]
        ];
        var_dump($posts);

        $id = $_GET["id"];
        $posts = array_filter($posts, function($item){
            return $item["id"] == $_GET["id"];
        })

    ?>

        <div>
            <?php echo"<h1 class='test-red-300'> This is a PHP Text </h1>" ?>
        </div>
        <main class="container mx-auto px-32 w-full">

            <div class="h-64 border-gray-200 rounded-md bg-white">

                <?php if($logged == true) : ?>
                <div class="mt-4 bg-green-500 text-red-600 border border-blue">
                Welcome dear!!! 
                </div>
                <?php elseif ($signed =false ): ?>
                <div class="mt-4 bg-red-200 text-blue-600 border border-blue" >
                   please sign up
                </div>
                <?php else: ?>
                <div>
                    please login in
                </div>
                <?php endif ;?>

            </div> 
            
        </main>

    </body>

</html>