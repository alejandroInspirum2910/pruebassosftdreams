<?php

class Sign{
    public $accesToken ="845458468w4r84e684ef5458f4e58t4t58ht4h86t4";

  	public $host = "https://soft-dreams-development.azurewebsites.net";
    // public $host = "https://soft-dreams.azurewebsites.net";
    
    public $host2="https://softdreamsmediauploader.azurewebsites.net/api/upload";
    
    //http://prueba-development.azurewebsites.net
    function signAuth(){
        
        $timestamp = time();
        $str = $timestamp.$this->accesToken;
        $auth=md5($str);
        $sign =$timestamp.'-'.$auth;
        
        return $sign;          

    }

    function getHost(){


    	return $this->host;
    }

    function getHost2(){


        return $this->host2;
    }
}