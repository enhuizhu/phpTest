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
      
	 /**
     * function to add new user 
     **/	  
	  
	 public static function addNewUser($name,$age,$hobbyId){
         return DB::insert("insert into users (Name,Age,FavorHobbyId) values (?,?,?)",array($name,$age,$hobbyId));
	 }

     /**
	 * function to delete user
	 **/
	 public static function deleteUser($id){
	    return DB::delete("delete from users where ID=?",array($id));
	 }
      	  
	 /**
	 * get all the hobby
	 **/
     public static function getAllHobby(){
	    return DB::select("select * from hobbies");
	 }
     
   
   
   
   }
   
   
   
