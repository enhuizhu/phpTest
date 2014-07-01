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
	
	
	
   }
   
