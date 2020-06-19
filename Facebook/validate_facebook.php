<?php
// Include FB config file && User class
require_once 'fbconfig.php';

if(isset($accessToken))
{
    if(isset($_SESSION['facebook_access_token']))
    {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    else
    {
    // Token de acceso de corta duración en sesión
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        // Controlador de cliente OAuth 2.0 ayuda a administrar tokens de acceso
        $oAuth2Client = $fb->getOAuth2Client();
        // Intercambia una ficha de acceso de corta duración para una persona de larga vida
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        
        // Establecer token de acceso predeterminado para ser utilizado en el script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    // Redirigir el usuario de nuevo a la misma página si url tiene "code" parámetro en la cadena de consulta
    if(isset($_GET['code']))
    {
        header('Location: ./');
    }
    
    // Obtener información sobre el perfil de usuario facebook
    try 
    {
        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email');
        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
    } 
    catch(FacebookResponseException $e) 
    {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        // Redirigir usuario a la página de inicio de sesión de la aplicación
        header("Location: ./");
        exit;
    }
    catch(FacebookSDKException $e) 
    {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    // Inicializar clase "user"
    //$user = new User();
    
    // datos de usuario que iran a  la base de datos
    $fbUserData = array(
        'oauth_provider'=> 'facebook',
        'oauth_uid'     => $fbUserProfile['id'],
        'first_name'    => $fbUserProfile['first_name'],
        'last_name'     => $fbUserProfile['last_name'],
        'email'         => $fbUserProfile['email']
    );

    echo json_decode($fbUserData);
}