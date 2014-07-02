<!doctype html>
<html>
 <head>
    <title>Api Interaction</title>
 </head>
 <body>
  <h3>api url</h3>
   <ul>
     <li><a href="<?php echo action("ApiController@getIndex")?>">Get All The Users</a></li>
     <li><a href="<?php echo action("ApiController@getHobby")?>">Display Hobby</a></li>
   </ul>
   
   <h3>Add New User</h3>
   <form name="addUser" onsubmit="return submitForm()">
      <table>
	    <tr>
		   <td>uesrname</td>
		   <td><input type="text" name="username"></td>
		</tr>
	    <tr>
		   <td>age</td>
		   <td>
		     <select name="age">
		     <?php for($i=1;$i<120;$i++):?> 
		         <option value="<?php echo $i?>"><?php echo $i?></option>
			 <?php endfor;?>
			 </select>
		   </td>
		</tr>
		
		<tr>
		   <td>Hobby</td>
		   <td>
		     <select name="hobby">
		     <?php  
			    foreach($hobbies as $hobby):?> 
		         <option value="<?php echo $hobby->HobbyId?>"><?php echo $hobby->HobbyName?></option>
			 <?php endforeach;?>
			 </select>
		   </td>
		</tr>
		<tr>
		   <td colspan="2">
		      <input type="submit" value="add new user">
		   </td>
		</tr>
	 </table>
  </form>
  
  
  <h3>Edit User</h3>
  <table>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Age</th>
  <th>Hobby</th>
  </tr>
  
  <?php foreach($users as $user):?>
     <tr>
	   <th><?php echo $user->ID?></th>
	   <th><?php echo $user->Name?></th>
	   <th><?php echo $user->Age?></th>
	   <th><?php echo $user->FavorHobbyId?></th>
	   <th><button>Edit</button></th>
	 </tr>
  <?php endforeach;?>
  
  </table> 
   
   
  <script language="javascript">
      function submitForm(){
	    /**
		* check if user already input username
		**/
	    var username=document.addUser.username.value;
		if(username==""){
		   alert("username can not be empty");
		}
		var age=document.addUser.age.value;
		var hobby=document.addUser.hobby.value;
		
		console.log(username,age,hobby);
		
		/**
		* should generate the url
		**/
        var url="<?php echo url("/api/addNewUser/")?>"+"/"+username+"/"+age+"/"+hobby;;		
		location.href=url;
		return false;
	  }
  
  
  </script>
 
 
 </body>
</html>