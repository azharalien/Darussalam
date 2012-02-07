<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<link href="../WebPro/general.css" rel="stylesheet" type="text/css">
<link href="../WebPro/comments.css" rel="stylesheet" type="text/css">
<link href="../WebPro/dragdrop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="slider.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){  
    $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate",8500, true);  
});  

$(function() {

$(".submit").click(function() {

var name = $("#name").val();
var email = $("#email").val();
	var comment = $("#comment").val();
    var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment;
	
	if(name=='' || email=='' || comment=='')
     {
    alert('Please Give Valide Details');
     }
	else
	{
	$("#flash").show();
	$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading Comment...</span>');
$.ajax({
	type: "POST",
    url: "commentajax.php",
    data: dataString,
    cache: false,
    success: function(html){
 
  $("ol#update").append(html);
  $("ol#update li:last").fadeIn("slow");
  document.getElementById('email').value='';
   document.getElementById('name').value='';
    document.getElementById('comment').value='';
	$("#name").focus();
 
  $("#flash").hide();
	
  }
 });
}
return false;
	});



});


</script>

</head>

<body>
<div class="container">
  
  <div class="header">
 
<div id="centeredmenu">
   <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Cart</a></li>
      <li><a href="#">Login</a></li>
   </ul>
</div>
    
    
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="example.php">Hereafter and Unseen</a></li>      <li><a href="#">Revelations</a></li>
      <li><a href="#">Advanced books</a></li>
      <li><a href="#">Recent</a></li>
    </ul>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
  
<!-- div-1 for first book-->
<div class="book_content">
	<div class="main_heading"> This the Heading Of the book </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="" alt=""/></div>
    	<div class="main_details">
        <p>Item: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact :machi fill Shop phone no. here...</p>
        <p>Email id: </p>        
        </div>
    </div>
    <div class="main_description">
    This is the description of the book...
    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> This the Heading Of the book </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="" alt=""/></div>
    	<div class="main_details">
        <p>Item: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact : machi fill Shop phone no. here...</p>
        <p>Email id: </p>
        </div>
    </div>
    <div class="main_description">
    This is the description of the book...
    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> This the Heading Of the book </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="" alt=""/></div>
    	<div class="main_details">
        <p>Item: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact : machi fill Shop phone no. here...</p>
        <p>Email id: </p>        
        </div>
    </div>
    <div class="main_description">
    This is the description of the book...
    </div> 
</div>
   

  
<div id="main">
<div style="font-family:'Georgia', Times New Roman, Times, serif; font-size: 16px; margin-bottom:20px; margin-left:20px; ">
Post Your Comments:
</div>
<ol  id="update" class="timeline">
</ol>
<div id="flash" align="left"  ></div>

<div style="margin-left:10px">
<form action="#" method="post">
<input type="text" name="title" id="name"/><span class="titles">Name</span><span class="star">*</span><br />

<input type="text" name="email" id="email"/><span class="titles">Email</span><span class="star">*</span><br />

<textarea name="comment" id="comment"></textarea><br />

<input type="submit" class="submit" value="Post" />
</form>
</div>
</div>
</div> <!--End of container-->


<div class="footer">
 
    <center>This is a site created and maintained by |Azar & Co.|Katsun|Levi's Inc.|Benju DigiArt</center>
    
    <!-- end .footer --></div>
</body>
</html>

