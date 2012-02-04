<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>IslamicBookspot.com</title>
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
      <li><a href="#">Children Books</a></li>
      <li><a href="#">Revelations</a></li>
      <li><a href="#">Advanced books</a></li>
      <li><a href="#">Recent</a></li>
    </ul>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
  
  <!--  Content Slider starts  -->
  		<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/image1-small.jpg" alt="" /><span>Book1</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/image2-small.jpg" alt="" /><span>Book2</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/image3-small.jpg" alt="" /><span>Book3</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/image4-small.jpg" alt="" /><span>Book4</span></a></li>
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
        <div class="heading" style="">
        <h2>Book-1</h2>
        <p>Author....</p></div>
        <div class="img"><!--Picture anchor--> <img src="img/2.jpg" alt="Islamic Book"/><br>recent release!</br></div>
        <div class="description"> 
         </p>This is the description of the book...
        <a href="#" >read more<!-- link to book page--></a></p> 
        </div> 
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/3.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Book2-Title</a></h2>
				<p>Book2-Description...<a href="#" >read more<!-- link to book page--></a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/4.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Book3-Title</a></h2>
				<p>Book3-Description...<a href="#" >read more<!-- link to book page--></a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/5.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Book4-Title</a></h2>
				<p>Book4-Description...<a href="#" >read more<!-- link to book page--></a></p>
	         </div>
	    </div>

  </div> <!--End of content slider feature div-->
  
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

