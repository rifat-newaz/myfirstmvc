<?php
namespace App\ControllersFolder;



class ProfileController extends Controller {
	
	
	public function edit() {
		
		
		
		return view("post/edit", [
		
		"message" => "Hi from controller to helper",
		"user" => "rifat"
		
		]);
		
	}
	
	
}

// ProfileController.php

/* namespace App\Controllers;

require_once __DIR__ . '/Controller.php';

class ProfileController extends Controller
{
    public function edit()
    {
        echo "Editing a profile...";
    }
}
 */


?>