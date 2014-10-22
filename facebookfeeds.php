<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

function fetchUrl($url){

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 // You may need to add the line below
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

 $feedData = curl_exec($ch);
 curl_close($ch); 

 return $feedData;

}


$json_object = fetchUrl("https://graph.facebook.com/v2.1/252175674875211/feed?key=value&access_token=979366645412371|31336bf1baa8a42462325e4ab572debd");
$arraydata = json_decode($json_object);
$arrayfeeds= $arraydata->data;
foreach ($arrayfeeds as $row)
{
   $fromfeed = $row->from;
	   if($fromfeed->id == 252175674875211){
	    echo  "Message:  ".$row->message;
	    echo"</br>";
	    echo  "Picture URL:  ".$row->picture;
	    echo"</br>";
	    echo  "Link:  ".$row->link;
	    echo"</br>";
	    echo  "ID:  ".$row->id;
	    echo"</br>";
	    echo"--------------------------------------------------------------------------------------------------------------------------------"; 
	    echo"</br>";
	}
 
}
?>
