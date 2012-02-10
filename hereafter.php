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
      <li><a href="hereafter.php">Hereafter & The Unseen</a></li>
      <li><a href="#">Language & Science</a></li>
      <li><a href="bio.php">Biography & History</a></li>
    </ul>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
  
<!-- div-1 for first book-->
<div class="book_content">
	<div class="main_heading"> Book of the End - Great Trials & Tribulations </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Book Of The End.jpg" alt="" /></div>
    	<div class="main_details">
        <p>Price: </p> 
		<p>By: Al-Hafiz Ibn Katheer Dimashqi</p>
		<p>Translator: Faisal Shafiq</p>
		<p>Pages: 748</p>
		<p>Binding: Hardback</p>
		<p>Size: 6x9" (15x22 cm) </p>
		<p>Publisher: Dar-us-Salam</p>
        </div>
    </div>
    <div class="main_description">
    
Like everything, the present universe will also come to an end, and it is a part of our faith to believe in the Last Day. The signs of the Day of Judgment have been foretold by our Prophet (S). Ibn Kathir has collected all the prophesies of the Prophet (S) in his book Al-Bidaayah wan-Nihaayah.
In this volume, we have presented from them the signs of the Hour and the events that are yet to take place, although mentioning very few examples of those prophesies that have already been realized.


    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> Description of Paradise in the Glorious Qur'an </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Description of Paradise.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Abdul-Halim As-Salafi</p>
	<p>Size: 6x9" (15x22 cm)</p> 
	<p>Publisher: Dar-us-Salam</p>

        </div>
    </div>
    <div class="main_description">
    
Writing about Paradise is of great importance in view of its significance in the belief of a Muslim. This belief makes him eligible for enjoyment of the bliss and the happiness of the Hereafter. It is not a belief that is limited to the life of this finite and ephemeral world only as compared to the everlasting Hereafter. Rather, it is great creed that links the life of man in this world to that of hereafter so that his vision will not be restricted to this world alone but extends to the Hereafter

    </div> 
</div>

<div class="book_content">
	<div class="main_heading">End of the World</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/End of the World.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p> 
	<p>By: Dr. Muhammad Al Areefi</p>
	<p>Pages: 425</p>
	<p>Size: 6x9" (14x21 cm) </p>
	<p>Publisher: Dar-us-Salam</p>
    
        </div>
    </div>
    <div class="main_description">
 In recent times things have become very confusing and we have begun to see in book stores and on websites speculations about future events, based on ayah and hadeeths which refer to these future events concerning the signs of the Hour.
Sometimes you hear about the appearance of the Mahdi, sometimes you hear that the final battle between the Good and the Evil is close at hand, other time you hear some thing happening in the East or in the West.
So, learn about the Final hour and it signs by reading this book which is backed by proofs from Quran and Hadith.


    </div> 
</div>

<div class="book_content">
	<div class="main_heading">Funerals - Regulations & Exhortations</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Funerals.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Muhammad al-Jibaly & Nasir ud-Din al-Albani</p>
	<p>Pages: 312</p>
	<p>Binding: Hardback</p>
	<p>Size: 7x10" (17x24 cm) </p>
	<p>Edition: 2nd</p>
	<p>Publisher: Al-Kitab & As-Sunnah</p>
    
        </div>
    </div>
    <div class="main_description">
We inevitably go through the journey starting in this life, and extending into the grave, before our final abode in the hereafter. In the process, we pass through stages of sickness, death, and the intermediate life in the grave (al-Barzakh). These are the subjects with which "The Inevitable Journey" deals over a sequence of four titles: : I. Sickness: Regulations & Exhortations II. The Islamic Will & Testament III. Funeral Regulations IV. Life in al-Barzakh. This book is the third in the series. It deals with the actual occurrence of death, and all lessons and regulations relating to it. It includes a close-to-complete translation of al-Albani's Ahkaam ul-Janaa'iz. In addition, it contains extensive supplementary material, and an enhanced presentation with tables and diagrams, making it a useful handbook, reference, and source of admonishment concerning death. We believe that this is the first book in English presenting this material, based on purely authentic evidence, to this level of depth, breadth, and practicality. Indeed, we offer praise and thanks to Allah (SWT) for facilitating this.

    </div> 
</div>
   
<div class="book_content">
	<div class="main_heading">Jinn & Human Sickness</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Jinn And The Human Sickness.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Dr. Abu'l-Mundhir Khaleel ibn Ibrahim Ameen
	<p>Translator: Nasiruddin Al-Khattab / Editor: Dr. Abdul Ahad (Alig.)</p>
	<p>Pages: 376</p>
	<p>Binding: Hardback</p>
	<p>Size: 6x9" (15x22 cm) </p>
	<p>Publisher: Dar-us-Salam</p>

        </div>
    </div>
    <div class="main_description">
The subject of the jinn is one which is of interest to many people. Folk stories abound, and many superstitious practices have arisen in Muslim cultures with regard to protection against the jinn. Many myths surround the ideas of the evil eye and envy, and there are many strange notions surrounding illnesses such as epilepsy and mental illness, which are often thought of as being caused by the jinn.
This book cuts through all the confusion and identifies correct Islamic teachings on all these subjects. The jinn are real and they can indeed harm humans, but this book will teach you how to protect yourself in the manner taught by the Prophet (peace be upon him).
Break free from fear, superstition and fairy stories, and familiarize yourself with the teachings of Islam on these important aspects of spirituality which the author presents here, drawing on the texts of the Qur'an and Sunnah and the writings of the respected scholars of Islam.


    </div> 
</div>
      
<div class="book_content">
	<div class="main_heading">Interpretation of Dreams</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Interpretation of Dreams.jpg" alt=""/></div>
    	<div class="main_details">
<p>Price: </p>
<p>By: Ibn Raashid Al-Bakri Al-Qafsi</p>
<p>Pages: 488</p>
<p>Binding: Hardback</p>
<p>Size: 6x9" (15x23 cm) </p>
<p>Format: 2 Color Printing</p>
<p>Publisher: Dar-us-Salam</p>
  
        </div>
    </div>
    <div class="main_description">
The present book tackles the issue of the interpretation of dreams in the light of the Qur'an and the Sunnah, based on the Prophet's hadeeth in which he said, "The dream of a Muslim is one of the forty-six parts of prophethood." In this book, the author provides a definition of the word 'dream', discusses the various types of dreams, mentions some dreams that were interpreted by the Prophet (peace and blessings be upon him), etiquette to be observed by the person who has a dream and the person who interprets it , and provides the interpretation of a large number of dreams, among some other issues related to the subject.
The author is the well-known erudite scholar Sheikh Muhammad ibn Abd-Allah ibn Raashid al-Bakri (d. 736 AH/1336 CE). The English reader will definitely find this book highly interesting and thought-provoking.


    </div> 
</div>

<div class="book_content">
	<div class="main_heading">Life in al-Barzakh - From Death till Resurrection</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Life In Al - Barzakh.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Muhammad al-Jibaly</p>
	<p>Pages: 245</p>
	<p>Binding: Hardback</p>
	<p>Size: 7x10x0.8" (17x24.5x2 cm) </p>
	<p>Publisher: Al-Kitab & As-Sunnah</p>
   
        </div>
    </div>
    <div class="main_description">
This book is the fourth in the 'The Inevitable Journey' series. It deals with many important matters that have always perplexed the human minds, but that, as is shown in this book, have been clearly explained in the authentic Texts from Allah's Book and His Messenger's Sunnah.


    </div> 
</div>   
  
<div class="book_content">
	<div class="main_heading">Life is a Fading Shadow</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Life is A fading Shadow.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price:  </p>
	<p>By: Abdul Malik Al-Qasim</p>
	<p>Pages: 80</p>
	<p>Binding: Paperback</p>
	<p>Size: 5.5x8" (14x20 cm) </p>
	<p>Publisher: Dar-us-Salam</p>	
   
        </div>
    </div>
    <div class="main_description">
This is a very enlightening booklet concerning the life of this world. This world is nothing but a passageway. About this fact here are the opinions of our Salaf.
Ali (R) described this life in these words: "Its allowed aspects lead to being reckoned and its forbidden aspects lead to the Fire."
Al-Hasan said: "O son of Adam! Life is only days, so if your day passes, your life becomes shorter.
Al-Hasan Al-Basari said about this life: "I am amazed at those who were order to take provisions (fear from Allah) and were told that the journey will commence soon (to the Hereafter), yet they play."


    </div> 
</div>

<div class="book_content">
	<div class="main_heading">Road to Paradise</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Road to Paradise.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>Compiler: Dr. Muhammad Muhsin Khan</p>
	<p>Pages: 192</p>
	<p>Binding: Paperback</p>
	<p>Size: 5.5x8" (14x20 cm) </p>
	<p>Format: Full Color</p>
	<p>Publisher: Dar-us-Salam</p>
    
        </div>
    </div>
    <div class="main_description">
The beautiful full-color book includes Ayahs (verses) from the Noble Quran about Paradise with supporting Hadith of the Prophet (S) and their explanations.
"The description of Paradise which the Muttaqun (the pious believers of Islamic Monotheism) have been promised (is that) in it are rivers of water the taste and smell of which are not changed, rivers of milk of which the taste never changes, rivers of wine delicious to those who drink, and rivers of clarified honey (clear and pure); therein for them is every kind of fruit, and forgiveness from their Lord. (Are these) like those who shall dwell forever in the Fire and be given to drink boiling water so that it cuts up their bowels?" [(V47:15) The Noble Qur'an]
    </div> 
</div>

<div class="book_content">
	<div class="main_heading">Signs of The Hour</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Signs Of The Hour.jpg" alt=""/></div>
    	<div class="main_details">
<p>Price: </p>
<p>By: Muhammad bin 'Ali Al-Arfaj</p>
<p>Pages: 32</p>
<p>Binding: Paperback</p>
<p>Size: 4.7x6.7" (11.7x17 cm) </p>
<p>Format: Full Color</p>
<p>Publisher: Dar-us-Salam</p>

        </div>
    </div>
    <div class="main_description">
Faith in the Last Day and what it contains of rewards and punishments, is one of the pillars of Islam and its great foundations. Allah has placed before the Final Hour certain signs that indicate how close it actually is.
Indeed, our Prophet considered the approaching of the Final Hour as something very great, such that whenever he mentioned it, his cheeks would become red, his voice would rise and his irritation would intensify. He would always speak of it and give reminders concerning it. The Companions would often reflect upon the matter of the Final Hour.
   </div> 
</div>



<div class="book_content">
	<div class="main_heading">Smaller Signs of The Day</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Signs Of The Day.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Muhammad bin Bayyumi</p>
	<p>Pages: 128</p>
	<p>Binding: Hardback</p>
	<p>Size: 6x9" (15x22 cm) </p>
	<p>Publisher: Dar-us-Salam</p>
 
        </div>
    </div>
    <div class="main_description">
The Day of Judgment in sure to come, but when it will be, it is a matter known only to Allah the Great.
But the Prophet Muhammad (S) has told us about some signs that indicate that the Day is coming nearer and nearer. Such signs are of three types: The first type of signs have already come to pass. The second type of signs are those that appear gradually with the passage of time. The third type is of the signs that appear just very near to the Day- these are called the Greater Signs of the Day. In this book we have dealt with the first two types of the signs that are known to be the Smaller Signs of the Day.

    </div> 
</div>

<div class="book_content">
	<div class="main_heading">Silent Moments</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/Silent Moments.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price: </p>
	<p>By: Abdul-Malik Al-Qasim</p>
	<p>Translator: Jalal Abualrub</p>
	<p>Pages: 126</p>
	<p>Binding: Paperback</p>
	<p>Size: 5.5x8" (14x20 cm) </p>
	<p>Publisher: Dar-us-Salam</p>
     
        </div>
    </div>
    <div class="main_description">


    </div> 
</div>

<div class="book_content">
	<div class="main_heading">World of the Jinn and Devils</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my/Hereafter & The Unseen/World Of Jinn.jpg" alt=""/></div>
    	<div class="main_details">
	<p>Price:</p>
	<p>By: Dr. Umar Sulaiman al-Ashqar</p>
	<p>Translator: Nasiruddan al-Khattab</p>
	<p>Pages: 238</p>
	<p>Binding: Hardback</p>
	<p>Size: 5.5x8" (14x20 cm) </p>
	<p>Publisher: IIPH</p>
      
        </div>
    </div>
    <div class="main_description">
About the Book From the Introduction:
Some people think that writing this topic is writing about a topic that is from the periphery of knowledge. They approve of humans going over this topic in the quickest of fashions and not giving it too much thought. They think that the benefits that accrue from such a study are very limited. Furthermore, they believe that being ignorant of this topic is not harmful at all.
However, I am not delving into something distant. Humans today spend billions of dollars with which they could build cities or countries and end poverty in the farthest reaches of the world -- and, instead, they spend that money on research to discover if there is life or if life is possible on nearby planets. Scientists spend a great deal of their time and resources on such a question. What about an existence that is known to be living and thinking, and that lives right here with us on our earth? They live in our houses and they eat and drink with us. In fact, they even spoil our thoughts and our hearts. They drive us to destroy our own selves and to spill each others' blood.
No price can be put on the importance of the texts of the Qur'an and authentic hadith that have reached us, giving us knowledge of this matter.
Those texts uncover for us the secrets of that existence: the world of the jinn.

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

