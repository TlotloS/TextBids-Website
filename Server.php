        <?php
        
        //connection variables
            $l_host = 'localhost';
            $l_user = 'root';
            $l_password = '';

            //create mysql connection
             $mysqli = new mysqli($l_host,$l_user,$l_password);
             if ($mysqli->connect_errno)
             {
                printf("Connection failed: %s\n", $mysqli->connect_error);
                die();
             }

            session_start();

            $host = 'localhost' ;
            $username = 'root';
            $passwd = '';
            $dbname = 'textbidsdb';

            $_SESSION['message'] = '';
            $mysqli = new mysqli($host, $username, $passwd, $dbname);
            
            if ( isset($_POST['Register'])) 
            {   
                header('location : Login.php');
                print_r( $_POST );
                #printf("Connection failed: %s\n", $mysqli->connect_error);
                
                
                if($_POST['Password'] == $_POST['ConfirmPassword'])
                {
                    $dbEmail = $mysqli->real_escape_string($_POST['InputEmail1']);
                    $Password = md5($_POST['Password']); // md5 hash password security
                    //$avatar_path = $mysqli->
                    print_r( $_POST );
                }
  
            }
            

  
  ?>
        