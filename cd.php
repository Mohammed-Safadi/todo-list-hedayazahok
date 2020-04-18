



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

    .hover-enabled{display: inline-block;float: right;}





      #btn{display:none;}


      input[type=text] {
  width: 20%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=button] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#done{
      border: none;
      background:none;
      color: #5F9EA0;

    }

#delete{
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
<div class="main">

<h1>My To-do's List</h1>
<div>
<input type='text' id='idea' placeholder="New Task">

<input type="button" id="add" value="Add New" class="btn-primary">
    <script src = 'bower_components/jquery/dist/jquery.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>




<script>


      document.getElementById("add").onclick  = function() {

    
    var ul = document.getElementById("list");
var li = document.createElement("li");

 li.setAttribute("id", "li");

 var text = document.getElementById("idea").value;
 var textnode=document.createTextNode(text);
 var btn=""



 li.appendChild(textnode); 
 ul.appendChild(li);


var span = document.createElement("span");
 span.setAttribute("id", "btn");

 var button1 = document.createElement("button");
 button1.setAttribute("id", "done");
 var textnode1=document.createTextNode('Mark as done');
  var btn=""
   button1.appendChild(textnode1); 
   span.appendChild(button1); 

 var button2 = document.createElement("button");
 button2.setAttribute("id", "delete");

 var textnode2=document.createTextNode('Delete');
  var btn=""
   button2.appendChild(textnode2); 
   span.appendChild(button2); 
     li.appendChild(span); 



 
$(document).ready(function() 
{


 $("#list #li").hover(function() { 
           $(this).find('span').css("display", "inline-block");
            $(this).find('span').css("float", "right");

            }, function() { 
        $(this).find('span').hide();
            }); 

 


$( "#list li #done" ).one( "click", function(event ) {
                $(this).closest('#li').css("color", "green");
                 $(this).hide();
                

        }); 
 

   $('#list li #delete').click(function() {
   	       	
     $(this).closest('#li').remove();
});

});
}




</script>
</div>
	<div class="card" >
 
<ul id='list'>
    	
	</ul></div>

	

</body>
</html>

 