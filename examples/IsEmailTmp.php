<?php

//First you should set AppKey and SecretKey value inside
//EmailLabsConfig.php

//Including autoloader
require_once( '../autoload.php' );

//Init IsEmailTmp action
//This action will check if email address is templorary like yopmail.com
$tmpMail = new \Shinoks\Actions\IsEmailTmp();

//Add email address to check
$tmpMail->setEmail( 'teat_address@example.com' );

//Send request and get response from server
var_dump( $tmpMail->getResult() );

//Get errors if exists
if( count( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() ) > 0 ){
    var_dump( \Shinoks\Tools\EmailLabsErrorHandler::getErrors() );
}