<?php

class Transantiago{

	static $format = "json";

	static function predictor($codParadero, $codServicio = ""){
		$url = "http://www.transantiago.cl/predictor/prediccion?codsimt=" . $codParadero . "&codser=" . $codServicio;
		return self::get($url);
	}

	static function paraderosCercanos($lat, $lng){
		$url = "http://www.transantiago.cl/restservice/rest/getpuntoparada?lat=" . $lat . "&lon=" . $lng . "&bip=1";
		return self::get($url);
	}

	static function recorrido($codServicio){
		$url = "http://www.transantiago.cl/restservice/rest/getrecorrido/" . $codServicio;
		return self::get($url);
	}

	private static function  get($url){
		$data = file_get_contents($url);
		if(self::$format=="json"){
			return $data;
		}
		$data = json_decode($data, true);
		return $data;
	}

}
