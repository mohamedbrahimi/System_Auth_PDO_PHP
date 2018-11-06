# System_Auth_PDO_PHP
# 1 le fichier config.php : pour la configurtaion de la bdd : < host name, database , password, user name>
# 2 le fichier conne.php pour montrer un simple exemple de connexion :  
   $inst  = new connectionClass();
    var_dump($inst->exsistUser('login_name', 'login_password'));
    
    elle va retourner 1 si l'authentification est bien passé 
                      0 si le login_name est introuvalbe
                     -1 si le password est incompatible
                     
# 3 le fichier class-phppass.php : regroupe les fonctions d'hachage de wordpress pour le cryptage des mots de passe


    
  
    
