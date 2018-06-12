<?php

if(!function_exists('jwt_token')) {
    function jwt_token(){
        return request()->cookie('token');
    }
}