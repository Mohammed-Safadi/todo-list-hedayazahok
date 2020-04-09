<!DOCTYPE html>
<html>
<head>
	<title>To-do</title>
    <meta charset="utf-8">
    <style type="text/css">
    	.main{

    		padding-left: 300px;
    		padding-top: 80px;

    	}
    	.input{
    		display: inline-block;


    	}


		a:link {
		  text-decoration: none;
		}

		input[type=text] {
  width: 20%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}







    
	    ul {
		  
		   list-style-type: none;
		   padding-top: 10px;
		   padding-left: 10px;
		   padding-right: 100px;


		}

		li{
			border-bottom:1px solid #D3D3D3;
			padding-top:10px;
			padding-bottom: 20px;

		}


		ul li:hover {
			border-bottom:2px solid #5F9EA0;
			padding-top: 10x;
			padding-bottom:20px;

		}




		
		.left{
			padding-left: 800px;
		}

.btn {
    display: none;
}
    
a:hover + .btn {
    display: inline-block;
}








		

    </style>
</head>
<body>
	<div class="main">
	
	<h1>My To-do's List</h1>
	<div>
	<form>
	<input type="text" name="newTask" placeholder="New Task"> 
	<input class="=btn-primary" type="submit" value="Add to list">
	</form>
    </div>
	<div class="card">
  <ul>
    <li>

    		<form>
    	<a href="">Learn Html</a>
    	<div class="btn">
        <input class="btn1" type="button" value="Mark as done" style="padding-left: 650px;border: none;background:none;color: #5F9EA0;">
	    <input class="btn2" type="button" value="Delete"style="padding-right: 10px;;border: none;background:none;color: #8B0000">
	    </div>
	</form>
    </li>
    
    <li>

    		<form>
    	<a href="">Learn CSS</a>
    	<div class="btn">
       <input class="btn1" type="button" value="Mark as done" style="padding-left: 655px;border: none;background:none;color: #5F9EA0;">
	    <input class="btn2" type="button" value="Delete"style="padding-right: 10px;;border: none;background:none;color: #8B0000;">
	    </div>

	</form>
    </li>
   
    <li>

    		<form>
    	<a href="">Learn JS</a>
    	<div class="btn">

        <input class="btn1" type="button" value="Mark as done" style="padding-left: 667px;border: none;background:none;color: #5F9EA0;">
	    <input class="btn2" type="button" value="Delete"style="padding-right: 10px;;border: none;background:none;color: #8B0000;">
	</div>

	</form>
    </li>
    
    <li>

    		<form>
    	<a href="">Learn PHP</a>
    	<div class="btn">
        <input class="btn1" type="button" value="Mark as done" style="padding-left: 655px;border: none;background:none;color: #5F9EA0;">
	    <input class="btn2" type="button" value="Delete"style="padding-right: 10px;;border: none;background:none;color: #8B0000;">
	</div>

	</form>
    </li>
    	

    </ul>
</div>
</div>


</body>
</html>

