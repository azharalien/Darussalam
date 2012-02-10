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
      <li><a href="aqidah.php">Aqidah</a></li>      
      <li><a href="quran.php">Holy Qur'an</a></li>
      <li><a href="fiqh.php">Fiqh</a></li>
      <li><a href="hadith.php">Hadith & Sunnah</a></li>
      <li><a href="#">Hereafter & The Unseen</a></li>
      <li><a href="#">Language & Science</a></li>
      <li><a href="bio.php">Biography & History</a></li>
    </ul>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
  
<!-- div-1 for first book-->
<div class="book_content">
	<div class="main_heading">  Meaning of The Noble Quran (Word-for-Word) (A/E) (3 Vol.Set) / Aftab Alam Khan	
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Holy Qur'an\MEANING-QURAN-WORD-FOR-WORD-.jpg" alt=""/></div>
    	<div class="main_details">
        <p>Code: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact :</p>
        <p>Email id: </p>        
        </div>
    </div>
    <div class="main_description">
    
This set contains three volumes: vol 1,2 and 3 in which Volume-1 contains Part 1-10, Volume-2 contains Part 11-20, Volume-3 contains Part 21-30. This set is written to overcome the difficulty and to convey to the people the accurate meaning of the Qur'anic verses. This book is producing the word-for-word translation of the meanings of the Noble Qur'an and also the idiomatic translation in order to allow the readers to see the word-for-word translation. 

    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> Holy Quran, The (A/E) (PB) / Trans. by A.Y. Ali </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Holy Qur'an\The Holy Quran.jpg" alt=""/></div>
    	<div class="main_details">
        <p>Item: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact : .</p>
        <p>Email id: </p>
        </div>
    </div>
    <div class="main_description">
    
'The Holy Qur'an' has English Translation With Original Arabic Text, Written By Abdullah Yusuf Ali. Size = 18X12 Total Pages = 752 Format = Paper Back Language = Arabic/English Layout = 1 Color 

    </div> 
</div>

<div class="book_content">
	<div class="main_heading">The Holy Quran Roman, (A/E/R) (1 col. /Paster) 
Trans. by A.Y. Ali & Transliteration by M. A.H. Eliyasee

 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Holy Qur'an\THE-HOLY-QURAN.jpg" alt=""/></div>
    	<div class="main_details">
        <p>Item: </p>
        <p>Price:</p>
        <p>Pages:</p>
        <p>To Buy, Contact : .</p>
        <p>Email id: </p>        
        </div>
    </div>
    <div class="main_description">
   Trans. by A.Y. Ali & Transliteration by M. A.H. Eliyasee

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
</div><!--Content-->
</div> <!--End of container-->


<div class="footer">
 
    <center>This is a site created and maintained by |Azar & Co.|Katsun|Levi's Inc.|Benju DigiArt</center>
    
    <!-- end .footer --></div>
</body>
</html>

