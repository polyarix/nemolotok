<?php

if(!function_exists('jwt_token')) {
    function jwt_token(){
       return Request::session()->get('token');
    }
}