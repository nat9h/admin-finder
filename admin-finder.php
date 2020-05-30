<?php

// Recoded by iNathX 


echo " \033[93m

			 _     __      _   _    __  __
			(_) /\ \ \__ _| |_| |__ \ \/ /
			| |/  \/ / _` | __| '_ \ \  / 
			| / /\  / (_| | |_| | | |/  \ 
			|_\_\ \/ \__,_|\__|_| |_/_/\_\
                              

          [ Admin Finder Recoded by iNathX  ]

";

echo "\033[91m Url Target : ";
$target = trim(fgets(STDIN));
$list 	= "wordexploit.txt";
//$list = trim(fgets(STDIN));
if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
	$targets = "http://$target";
}else{
	$targets = $target;
}

$buka 	= fopen("$list","r");
$ukuran = filesize("$list");
$baca 	= fread($open,$size);
$lists 	= explode("\r\n",$read);

foreach($lists as $login){
	$admins = "$targets/$login";
	
	$ch = curl_init("$log");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	if($httpcode == 200){
		echo "\n\n \033[92m Cek $log => Ditemukan!\n";
	}else{
		echo "\n \033[94m Cek $log => Tidak di ditemukan ~";
	}
}