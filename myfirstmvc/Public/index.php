<?php
//autoload classes

require_once __DIR__ . "/../vendor/autoload.php";

// web.php page tar sob data $routes variable e niye nilam
$routes = require_once __DIR__ . "/../routes/web.php";


$request = $_SERVER['REQUEST_URI'];

//$request tar modde 1st part nilam
  $request = explode("?", $request)[0] ;
 

 
//$routes variable e thaka web.php er sob data theke $request er link er datar sathe jodi mil pai
if (isset($routes[$request])){
	
//mill pawa datar j array ache, tar prothom O ditiyo ongso dui vage vag kore duita variable e nibo. jar prothom ongser kaj controller k khoja r ditiyo variable er kaj khuje sei controller er kon function ta ei page er ($request) jonn run hobe ta khoja	
	$controller = $routes[$request][0] ?? null ;
	 $action = $routes[$request][1] ?? null ;
	
	

	
	//jodi $controller ebong $action pawa jay
	if($controller && $action){
		
		$newContoller = new $controller() ;
		
		//controller k ekta variable e niye eber sei controller e dhuke (->) tar action ta run korbo. j action ta $request link er jonno define kore hoyeche 
		
		$newContoller -> $action() ;
		
	}
	
echo "ami jokhon {$request} raute e jabo tokhon {$controller} er {$action} method amake handel korbe";

	
}




?>