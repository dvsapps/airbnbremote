<?php
include_once('geoip.inc');
function getUserIP() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    { $ip = $client;  } 
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    { $ip = $forward; } else { $ip = $remote; } 
    return $ip; 
}  
$ip = getUserIP();
if((strpos($ip, ":") === false)) {
    //ipv4
    $gi = geoip_open("geoip/GeoIP.dat",GEOIP_STANDARD);
    $country = geoip_country_name_by_addr($gi, $ip);
}
else {
    //ipv6
    $gi = geoip_open("geoip/GeoIPv6.dat",GEOIP_STANDARD);
    $country = geoip_country_name_by_addr_v6($gi, $ip);
}