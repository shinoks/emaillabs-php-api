<?php

//First you should set AppKey and SecretKey value inside
//EmailLabsConfig.php

//Including autoloader
require_once( '../autoload.php' );

//Init BlacklistDelete action
//This action will delete address from blacklist
$blacklist = new \Shinoks\Actions\BlacklistDelete();
$blacklist->setEmail( 'test_email@example.com' );

//Send request and get response from server
var_dump( $blacklist->getResult() );

//Get errors if exists
if( count( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() ) > 0 ){
    var_dump( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() );
}