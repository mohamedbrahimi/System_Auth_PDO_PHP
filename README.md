# System_Auth_PDO_PHP
# 1 le fichier config.php < host name, database , password, user name>
# 2 le fichier conne.php ou il'y a  l'instruction 
   $inst  = new connectionClass();
    var_dump($inst->exsistUser('login_name', 'login_password'));
    
    elle va retourner 1 si l'authentification est bien passé 
                      0 si le login_name est introuvalbe
                     -1 si le password et incompatible
                     
# 3 le fichier class-phppass.php ou il'y les fonctions d'hachage de wordpress pour le cryptage de des passwords 


    
  
    
