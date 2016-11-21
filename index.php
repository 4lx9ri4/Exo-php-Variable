<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exos php Variables</title>
  </head>
  <body>
      <?php
      //Exo1
        $moi = "Alex";
        echo "Bonjour ".$moi."<br/>";
      //Exo2
        $nom = "Tuil";
        $prenom = "Alexandre";
        $age = 27;
        echo "Bonjour ".$nom." ".$prenom."tu as ".$age." ans!<br/>";
      //Exo3
        $klm = 1;
        echo "La valeur en kilomètre est de : ".$klm."<br/>";
        $klm = 3;
        echo "Maintenant sa valeur est de ".$klm."<br/>";
        $klm = 125;
        echo "Oula! Gaff aux radars t'es passé à ".$klm." !<br/>";
      //Exo4
        $var_str = "ça test le php!";
        $var_int = 10;
        $var_float = 1.5;
        $trufal = true;
        echo "Type string : $var_str<br/>
              Type int : $var_int<br/>
              Type float : $var_float<br/>
              Type booléan = $trufal<br/>";
      //Exo5
        function exo5(){
          $i; //non initialisé retourne 0.
          echo "$i";
          $i += 10;
          echo "$i<br/>";
        }
        exo5();
      //Exo8
        function exo8(){
          $num1 = 3 + 4;
          $num2 = 5 * 20;
          $num3 = 45 / 5;
          echo "3 + 4 = $num1<br/>
                5 x 20 = $num2<br/>
                45 / 5 = $num3<br/>";
        }
        exo8();
      ?>
  </body>
</html>
