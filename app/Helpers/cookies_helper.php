<?php
// Function: used to convert a string to revese in order
if (!function_exists("setMyCookie")) {
    function setMyCookie($name,$value,$time,$params = array()){
        if (empty($params)){
            $config = config('App');
    
            $params = array(
                'expires'   => $time,
                'path'      => $config->cookiePath,
                'domain'    => $config->cookieDomain,
                'secure'    => $config->cookieSecure,
                'httponly'  => $config->cookieHTTPOnly,
                'samesite'  => $config->cookieSameSite,
            );
        }
    
        set_cookie($name,$value,$time);
    }
}

if (!function_exists("getCurrentLocal")) {
    function getCurrentLocal(){
        return service('request')->getLocale();
    }
}