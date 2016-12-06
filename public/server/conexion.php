<?php 
/*yankuserver
$db = mysqli_connect("yankuserver.com","yankuser_heruser","bI}81!]$&Hbm","yankuser_hermer_mercedez");
    if(mysqli_connect_errno())
      {
        echo 'Failed to connect to MySQL: '.
        mysqli_connect_error();
      } 
    else
      {
        echo '';
      }*/  

      /*OTRO
      $db = mysqli_connect("yankuserver.com","yankuser_heruser","bI}81!]$&Hbm","yankuser_hermer_mercedez");
    if(mysqli_connect_errno())
      {
        echo 'Failed to connect to MySQL: '.
        mysqli_connect_error();
      } 
    else
      {
        echo '';
      }*/

//LOCAL
      $db = mysqli_connect('localhost', 'root', 'root', 'yankuser_hermer_mercedez');
    if(mysqli_connect_errno())
      {
        echo 'Failed to connect to MySQL: '.mysqli_connect_error();
      } 
    else
      {
        echo '';
      }


 ?>
  
