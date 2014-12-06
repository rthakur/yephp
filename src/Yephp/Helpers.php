<?php namespace Yephp;

class Helpers{

	/**
	 * Create random String
	 *
	 * @param  int  $length
	 * 
	 * @return string
	 */	 	 
	 public static function randString($length){
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			return substr(str_shuffle($chars),0,$length);
	   }
	   
	   
	   
	   
	   
	   
}
	
