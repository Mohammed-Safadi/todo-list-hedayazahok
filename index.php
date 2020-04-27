<!DOCTYPE html>
<html>
<head>
	<title>To do</title>
<style type="text/css">
	    	 .main{

        padding-left: 300px;
        padding-top: 80px;

      }


 a {
    display: none;
}

ul li:hover a {
			display: inline-block;
			float: right;


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

.edit_btn{
      border: none;
      background:none;
      color: #5F9EA0;

    }

.del_btn{
  padding-right: 10px;
  border: none;
  background:none;
  color: #8B0000;
}








</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>
	<?php 

session_start();
	$db = mysqli_connect('localhost', 'root', '', 'tasks');

	$title = "";
	$completed = 0;
	if (isset($_POST['submit'])) {
       $title = $_POST['title'];

		mysqli_query($db, "INSERT INTO lists (title, completed)VALUES ('".$title."', 0)"); 
		$_SESSION['message'] = "title saved"; 
		header('location: index.php');
	}



	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$completed=1;
    mysqli_query($db, "UPDATE lists SET completed = $completed WHERE listID=$id");
    $_SESSION['message'] = "Address updated!"; 
    header('location: index.php');

		}


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM lists WHERE listID=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}




	 ?>


<?php if (isset($_SESSION['message'])): ?>
	
	<div class="msg">
		
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>

	</div>

<?php endif ?>


	

<div class="main">

<h1>My To-do's List</h1>






<div>
	<form method="post" action="index.php">
<input type='text' name="title" id='idea' placeholder="New Task">

<input type="submit" name="submit" id="add" value="Add New" class="btn-primary">
</form>



</div>



	<div class="card" >
		    <?php $results = mysqli_query($db, "SELECT * FROM lists"); ?>

<ul id='list'>

<?php while ($row = mysqli_fetch_array($results)) { ?>
				
				<?php if ($row['completed'] == 1): ?>

			<li style="color: green;">
				<?php echo $row['title']; ?>
				<a href="index.php?del=<?php echo $row['listID']; ?>" class="del_btn">Delete</a>
               <?php else: ?>
               	<li>
				<?php echo $row['title']; ?>

               	<a href="index.php?edit=<?php echo $row['listID']; ?>"class="edit_btn" >Edit </a>

				<a href="index.php?del=<?php echo $row['listID']; ?>" class="del_btn">Delete</a>
			<?php endif ?>
				
			</li>
	           <?php } ?>


	    	
	</ul>
</div>
</tr>


</body>

</html>