<?php
/*
Plugin Name: Ye Old Pirate
Plugin URI: http://www.github.com/captain-sensible
Description: tweaks text in existing posts  & adds pirate speak 
to them,this is a very basic plugin & uses basic concepts seen in the Hello Dolly 
plugin & easy to understand native PHP
Author: Andy Brookes
Version: 1.0
Licence:GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/




function replace($text)
{
$tofilter = $text;


$andy = array(
		"the"=>"Ye olde   ",
		"yes"=>"aye ",
		"stagnant"=> "addle",
		"hey"=> "ahoy",
		"call"=>"hail" ,
		"crew"=>"hands",
		"clothes","togs",
		"work shy"=> "Abbey Llubber",
		"beggers"=>"Abraham Men ",
		"afraid"=>"AFEARD",
		"hang"=>"Short Drop and a  quick stop",
		"stop"=>"Avast",
		"cover"=>"Batten Down", 
		"minion"=>"Before the mast",
		);



foreach ($andy as $key => $value) {
 


$tofilter= preg_replace("/\b$key\b/u", $value, $tofilter);



}

return $tofilter;

}

add_filter( 'the_content', 'replace' );



