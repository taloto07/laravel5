<?php

namespace App\Http\Controllers;

use Invisnik\LaravelSteamAuth\SteamAuth;

class SteamController extends Controller {

    /**
     * @var SteamAuth
     */
    private $steam;

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    public function getLogin()
    {

        if( $this->steam->validate()){
            
            return  $this->steam->getSteamId();  //returns the user steamid
        }else{
            // var_dump('fail');
            return  $this->steam->redirect(); //redirect to steam login page
        }
    }

    public function checkSteam(){
        
    }
}