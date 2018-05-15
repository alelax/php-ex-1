<?php
   /*
      ESERCIZIO 1
      Parametri inseriti da terminale invocando il comando:
      php index.php $argv[1] $argv[2];
   */
   // $name = $argv[1];
   // $surname = $argv[2];
?>

<?php
   /*
      ESERCIZIO 2
      Parametri GET inseriti da URL
   */
   // $name = $_GET["name"];
   // $surname = $_GET["surname"];
   //
   // echo 'Ciao ' .  $name . ' ' . $surname;
?>



<?php
   /*
   ESERCIZIO 3
   Il parametro GET intercetta la badword, la quale viene ricercata
   nella porzione di testo inserita e sostituita da 3 asterischi
   */
   $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum";

   $badword = $_GET["badword"];

   $test = "ciao a tutti";
   $censure = "***";

   $text_length = strlen($text);

   // var_dump($badword);

?>
<h3> Il testo è lungo  <?php echo $text_length; ?>  caratteri.</h3>
<p> <?php  echo str_replace($badword, $censure, $text); ?> </p>
