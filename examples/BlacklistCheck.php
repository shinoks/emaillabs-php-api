<?php

//First you should set AppKey and SecretKey value inside
//EmailLabsConfig.php

//Including autoloader
require_once( '../autoload.php' );

//Init BlacklistCheck action
//This action will check if address is blacklisted
$blacklist = new \Shinoks\Actions\BlacklistCheck();
$blacklist->setEmail( 'test_email@example.com' );

//Send request and get response from server
var_dump( $blacklist->getResult() );

//Get errors if exists
if( count( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() ) > 0 ){
    var_dump( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() );
}