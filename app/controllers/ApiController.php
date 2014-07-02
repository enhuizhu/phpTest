<?php
   /**
   * controller for api
   **/
   //use Api;
   class ApiController extends BaseController{
    
	public function getIndex(){
	  
	    $results=Api::getUsers();
		
		echo json_encode($results);
		
		//die("index page of api");
	
	}
	
	/**
	* function to get all the hobby
	**/
	
	public function getHobby(){
	   $results=Api::getHobby();
	   echo json_encode($results);
	}
	
	
	public function addNewUser($name,$age,$hobby){
	   if(Api::addNewUser($name,$age,$hobby)){
	      $response=array("error"=>false,"message"=>"new user has been added!");
	   }else{
	      $response=array("error"=>false,"message"=>"some error happen when try to add new user to the database!");
	   }
	   echo json_encode($response);
	}
	
	public function deleteUser($id){
	   if(Api::deleteUser($id)){
	      $response=array("error"=>false,"message"=>"user has been deleted!");
	   }else{
	      $response=array("error"=>false,"message"=>"some error happen when try to add new user to the database!");
	   }
	   echo json_encode($response);
	}
	
	
	
	
   }
   
