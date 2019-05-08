<?php 

/**
 * User Class
 */
class User 
{
	
	/**
	 * This function will create a User
	 * params: name
	 * return: bool value
     */

	public function create($name){

		$userExist = $this->checkUserDuplicacy($name);
		if($userExist){
			return "user already in use";
		} else {
			// write a file
			//or
			// write in db
		}

	}

	public function retrieve(){

	}

	/**
	 * This function will retrieve all Users
	 * params: 
	 * return: array of users
     */

	public function retrieveAllUsers(){
		$file = fopen("user_file.csv","r");
		$users = fgetcsv($file);
		fclose($file);
		return $users;
	}


	public function update(){

	}

	public function delete(){

	}

	/**
	 * This function will retrieve all Users
	 * params: name 
	 * return: bool value
     */

	public function checkUserDuplicacy($name){

		$file = fopen("user_file.csv","r");
		$users = fgetcsv($file);
		fclose($file);
		if (in_array($name, $users)) {
			return true;

		} else {
			return false;
		}

	}

}


?>