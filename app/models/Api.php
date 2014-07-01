<?php
   
   class Api extends Eloquent{
      /**
	  * function to get all users
	  **/
	  public static function getUsers(){
         $results = DB::select('select * from users');
		 return $results;
	  }
	  
	  
	  /**
	  * function to get user hobby
	  **/
     public static function getHobby(){
	    $results=DB::select('select a.Name,b.HobbyName as Hobby from users as a left join hobbies as b on a.FavorHobbyId=b.HobbyId');
		return $results;
	 
	 }
      
	  
   
   
   }
   
   
   
