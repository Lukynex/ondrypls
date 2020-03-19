<html>
   <head>
      <title>Minecraft</title>
       <link rel="stylesheet" type="text/css" href="css/css.css">
   </head>
   <body bgcolor="aqua">

       <h1>Popis</h1>
       <p>hra se odehrava v kostickovem svete</p>
       <h2>Mapa</h2>
       <p>Mapa je velka a cim dal je clovek od spawnu tim vic se hra laguje<br>
       Dovednostni strom obsahuje tri typy</p>
      <b>hodnoceni 11/10</b>
      <i>Hra je opravdu super</i>
           <p><span style="color:red"> hra bezi plynule </span></p>
           <p> <img src="obrazek1.jpg" height="215" width="460"/></p>
           <a href="https://www.minecraft.net/en-us/">Hlavni stranka minecraftu</a>
       <br>
           <a href="https://www.seznam.cz/">seznam</a>

       <ol>
             <li> Klasicky svet</li>
             <li> End </li>
             <li> Nether </li>
       </ol>
             <hr>

       <ul>
                 <li>Predmety</li>
                 <li>Loot</li>
                 <li>Nepratele</li>
       </ul>

       <dl>
           <dd>Skin1</dd> Steve 
           <dd>Skin2</dd> Alex

       </dl>
       <table border="100">

           <tr>
               <td width="100">Delka hry</td>
               <td width="30">Predmety</td>
               <td width="20">achievementy</td>
           </tr>
           <tr>
               <td width="20">Doba hratelnosti je dokud ma clovek fantazii</td>
               <td width="200">Jsou zde predmety a kazdy slouzi k necemu jinemu</td>
               <td width="20">Je zde hodne lehkych a par tezsich achievementu</td>
           </tr>
       </table>
       <a href="https://www.ssemi.cz/" target="_blank"><img src="obrazek2.jpg" height="225" width="225"></a>
       <form method="get" action="index.html">
           <input type="text" name="firstname" value="Vase jmeno">
           <input type="sumbit" value="Kolik mate hodin?"><br>
           <input type="text" size="10" name="textik" value="">Prezdivka<br>
           <input type="password" size="10" name="heslo" value="">Heslo<br>
           <input type="radio"  value="prvni">zena
           <input type="radio"  value="druha">muz<br>
           <input type="checkbox" name="souhlas" value="0">souhlas
           <input type="checkbox" name="souhlas" value="0">nesouhlas<br>
           <input type="sumbit" onclick="location.href='http://gmail.com';" value="gmail" /><br>
           <input type="file" name="cokoliv">
           <select size="2">
               <option value="odesilana_hodnota">Diky za vyplneni</option>
           </select>
       </form>

   </body>

    <?PHP

       echo "Ahoj";
       echo "<br>";

       print_r ("Ahoj");
       echo "<br>";


       var_dump ("Ahoj");
       echo "<br>";

       echo  "\$nazdarek";
       echo "<br>";

       echo "<a href=\"index.php\"> Domovska stranka </a>";
       echo "<br>";

       $a = 20;
       $b = 30;
       $c = 89;

       var_dump($a === $b);
       echo "<br>";
       var_dump($a === $c);
       echo "<br>";
       var_dump($a == $b);
       echo "<br>";
       var_dump($a == $c);
       echo "<br>";
       var_dump($a.$c);
       echo "<br>";
       var_dump($a+$c);
       echo "<br>";
       var_dump($a || $b);
       echo "<br>";

       $cena1 = 12;
       $cena2 = 13;

       if ($cena1 > $cena2) {
           echo "je vetsi";
       }else{
           echo "je mensi";
       }

       echo "<br>";


    $cislo1 = 50;
    $cislo2 = 20;
    if ($cislo2 > $cislo1){
        echo "je vetsi";
    }else{
        echo "neni vetsi";
    }
    echo "<br>";

    $cislo3 = 20;
    $cislo4 = 64;
    $cislo5 = 29;
    if ($cislo4 != $cislo5)
        if ($cislo4 > $cislo5)
            echo "je vetsi";
        echo "<br>";

        $zelenina = array("rajce", "brambory", "brambory", 'kvetak', 'celer', 'petrzel','paprika', 'cesnek','lilek','kapie');
        echo "<br>";
        var_dump($zelenina);
        echo"<br>";
       
        echo "<br>";

        foreach ($zelenina as $key => $value){
            echo $value."<br>";

        }
        echo "<br>";
        echo "<table border=1>";
         foreach($zelenina as $key => $value) {
             echo "<tr><td>$key</td>
               <td>$value</td>
               </tr>";
         }
         echo "</table>";
         $count  = 10;
         $count2 = 5;

         echo "<br>";

         echo "<table border='1'>";

         for ($index = 1; $index < $count+1; $index++){
             echo "<tr>";
              for ($index2 = 1; $index2 < $count2+1; $index2++){
                 echo "<td>".$index."-".$index2."</td>";
                 echo "<td>".$index."</td>";

             }
             echo "</tr>";


         }
         echo "</table>"


        ?>

<?php

     
class Zdroj {
    public $napeti;


    public function getNapeti(){


    }


      }

      $zdroj = new Zdroj ();
      $zdroj -> napeti = 12;
      $zdroj -> getNapeti();
     var_dump ($zdroj);



     class User {
          private $firstname;
          private $lastname;
          private $ulice;
          private $fullname;
          public $phone;
          public $email;



          public function __construct($data){
              $this->firstname = $data['firstname'];
              foreach ($data as $key => $value){
                  $this -> $key = $value;
              }


          }
     }
     



    $data ['firstname'] = "bara";
    $data ['lastname'] = "novakova";


     $user = new User($data);
     $user ->phone = 911;
    


     var_dump($user);
     