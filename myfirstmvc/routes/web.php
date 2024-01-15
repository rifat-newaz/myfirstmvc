<?php 

use App\ControllersFolder\ProfileController ;



return [

"/myfirstmvc/users/profile" => [ProfileController::class, "edit"],

"/myfirstmvc/users/profile/edit" => [ProfileController::class, "edit"],



];



/* "/myfirstmvc/users/profile" => ["App\ControllersFolder\ProfileController", "edit"],

"/myfirstmvc/users/profile/edit" => ["ProfileController", "edit"], */

?>