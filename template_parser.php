<?php 
/*
URL (HTML) into string 
*/
function get_url_html($site_url){  
    $ch = curl_init();     
    curl_setopt($ch,CURLOPT_URL, $site_url);     
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);     
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 10);     
    $html = curl_exec($ch);     
    curl_close($ch);   
    return  filter_var($html,FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);  
}

?>    