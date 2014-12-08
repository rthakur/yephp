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
	   
	   
	 
	 /**
	  * GET USER IP LOCATION 
	  * 
	  * @param string
	  * 
	  * @return Object
	  */ 
	  public static function getIpLocation($ip){
			
			try{
				 return json_decode(file_get_contents('http://www.telize.com/geoip/'.$ip));
				
				}catch(Exception $e){
				
				return FALSE;
			  };
		  } 
	   
	   
	/**
	 * Timezone name
	 * 
	 * @param  sting  $offset
	 * 
	 * @return timezone name
	 */	
	 public static function tzOffsetToName($offset)
		{
				$offset *= 3600; // convert hour offset to seconds
				$abbrarray = timezone_abbreviations_list();
				foreach ($abbrarray as $abbr)
						{
							foreach ($abbr as $city)
								{
									if ($city['offset'] == $offset)
									{
										return $city['timezone_id'];
									}
								}
						}
				return FALSE;
		}
	   
}
	
