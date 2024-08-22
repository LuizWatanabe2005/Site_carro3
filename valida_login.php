<!DOCTYPE html>
<html lang="en">

    <head> 
        <meta charset="utf-8" />
        <title>Olper Motors</title>
    </head>

<body> 

    <?php

    
    session_start();
    $_SESSION['X']='Seção oficialmente aberta';
    print_r($_SESSION['X']);
    echo '<hr>';

        $usuario_autenticator=false; 

            $usuarios_app= array(
                array( 
                    'email' => 'beker@gmail.com',
                    'senha' => '123456'
                ),
                array(
                    'email' => 'olp@gmail.com',
                    'senha' => '1234567'
                )
            );
            
            foreach ($usuarios_app as $user){ 
                if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                    $usuario_autenticator=true;
                 }
            } 

            if($usuario_autenticator) {
                echo "Usuario Autenticado";
                $_SESSION['autenticado'] = 'SIM';
                header('Location: tela_inicial.php');
            }
            else{ 
                $_SESSION['autenticado'] = 'NAO';
                header('Location: login.php?login=erro');
            }

    ?>
</body>
    
</html>