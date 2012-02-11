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
      <li><a href="#">Hadith & Sunnah</a></li>
      <li><a href="#">Hereafter & The Unseen</a></li>
      <li><a href="#">Language & Science</a></li>
      <li><a href="bio.php">Biography & History</a></li>
    </ul>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
  
<!-- div-1 for first book-->
<div class="book_content">
	<div class="main_heading"> 
Affection and Aversion (Al-Walaa and Al-Baraa)	
</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Affection Aversion.jpg" alt=""/></div>
    	<div class="main_details">
        <p>Code: </p>
        <p>Price: Rs.55/-</p>
        <p>Pages: 32 -   </p>
        <p>Size: 4.7x6.7" (11.7x17 cm) </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
    The subject of Walaa' (affection) for believers and Baraa' (aversion) with disbelievers is one of the most important religious issues which is related to the Articles of Faith. Lack of this matter will certainly lead to coming out of the fold of Islam.
Unfortunately, the majority of Muslims nowadays follow and imitate disbelievers in customs, rituals and traditions which are against the teachings of Islam. It will be useful if they follow them in the field of technology and science.
This book sheds light on this topic to implant the spirit of joining and supporting the believers and warns them against the bad consequences of copying the same style of life of disbelievers.
We hope that Muslims will get benefited from it and adopt the necessary measures to act upon the orders of our religion.

    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> Al-'Aqidah Al-Wasitiyyah (2 Vol. Set) </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Aqidah Wasitiyyah.jpg" alt=""/></div>
    	<div class="main_details">
        <p>Code </p>
        <p>Price: Rs.975/-</p>
        <p>Pages: 1155  </p>
        <p>Size: 6x9x2.3" (15x22x6 cm) </p>
        <p>Publisher: Dar-us-Salam</p>
        </div>
    </div>
    <div class="main_description">
    A detailed commentary/explanation of the famous writing of Shaikh Al-Islam Ibn Taymiyyah, al-Aqeedatul-Wasitiyah, done by the noble Shaykh, Muhammad Ibn Saalih al-'Uthaymeen (Rahimahumullaah).
Two large deluxe volumes contain a detailed study/explanation on the topic of creed/aqeedah (belief in oneness of Allah). Each volume has golden color page edges.

    </div> 
</div>

<div class="book_content">
	<div class="main_heading"> Authentic Creed and Invalidators of Islam	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Authentic Creed.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.65/-</p>
        <p>Pages: 48</p>
        <p>Size: 5.5x8" (14x20 cm) </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
    The most important matter for every Muslim is the correctness of his beliefs. Islam established on the basis of sound creed and it opposes all false superstitions and erroneous systems of belief. Thus, it is essential for every Muslim to make certain that his beliefs are correct and in accordance with the Quran and authentic Sunnah of the Prophet (S). This small but important book covers all basic information and we hope that readers will recognize the importance of this treaties by Shaikh Ibn Baz.
    Contents:
Belief in Allah, His Angels, His Books, His Messengers, the Last Day, & in the Divine Destiny, and Invalidators of Islam.

    </div> 
</div>
   <div class="book_content">
	<div class="main_heading"> At-Tawassul (Using a Means to Seek Allah's Help) 	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\At Tawassul.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.55/-</p>
        <p>Pages:40 </p>
        <p>Size: 4.7x6.7" (11.7x17 cm) </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
    Actually, the topic of Tawassul (using a means to seek Allah's help) is one of the controversial issues among Muslim nation that has not been understood in its due perspective, and which proved hostility and hatred among different groups.
Muslims are supposed to rely on the understanding of Salaf (Prophet and his Companions, the second generation after them, and the third generation after). These are the best generations as the Prophet (S) told us.


    </div> 
</div>
<div class="book_content">
	<div class="main_heading">
Book  of  Tawheed (Oneness of Allah)
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Book Tawheed.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.260/-</p>
        <p>Pages:159 -   </p>
        <p>Size: 6x9" (15x22 cm)  </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
   Allah, the Exalted, has brought the Creation into existence for the purpose of worshiping Him. Proper worship depends mainly on the soundness of the Aqeedah of Tawheed, or the belief in the Oneness of Allah. Understanding the concept of Tawhid (Monotheism), on the other hand, helps the Muslim know his Rubb better, this knowledge makes him more conscious and fearful of Allah, and more hopeful of His Mercy.
This book defines the concept of Tauhid, and exposes dubious beliefs and improper rituals that are conducive to Shirk, the gravest of all sins which condemns man to eternal torment in Hell. It also discusses the status of the Prophet (S) and the incumbency of loving and reverting him. In brief, this book is a must for every Muslim.



    </div> 
</div>
  <div class="book_content">
	<div class="main_heading">
Concise Collection on Creed and Tauhid (Large) (Oneness of Allah)
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Creed  Tauhid.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.325/-</p>
        <p>Pages:341    </p>
        <p>Size: 6x9" (15x22 cm)  </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
  An easily usable reference on the topic of Tauhid which contains important works on Tauhid as well as questions and answers and emphasis on explaining the truth about certain common misunderstandings.
In this collection we have included the following titles:
1.	Kitab At-Tauhid by Shaikhul-Islam Muhammad bin 'Abdul-Wahhab
2.	Religious Fundamentals by Shaikhul-Islam Muhammad bin 'Abdul-Wahhab
3.	The Virtue of Tauhid and a Warning Against What Contradicts it, compiled by the Research Division of Darussalam
4.	The Authentic Creed and Invalidators of Islam, by the great scholar Shaikh 'Abdul-'Aziz bin 'Abdullah bin Baz
5.	Islamic Creed, by Shaikh Muhammad bin Jamil Zino
6.	50 Questions and Answers on Islamic Monotheism, compiled by the Research Division of Darussalam



    </div> 
</div>
 <div class="book_content">
	<div class="main_heading">

	The Delight of Faith

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Delight Faith.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: </p>
        <p>Pages:117 -     </p>
        <p>Size: 6x9" (15x22 cm)  </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
  The purpose of this book is to present the most basic knowledge of Islamic Creed (Aqidah). This type of knowledge is never optional, because unless your creed is in accordance with the Noble Qur'an & Sunnah of Prophet Muhammad (PBUH) your good deeds can be at risk. Purity of intention, how to believe and what to believe, and love of Allah -- are all matters of belief of creed, whereas the acts of worship like Zakat, Salat, Hajj and Fasting are deeds that may be counted positively only if the belief aspect is correct.





    </div> 
</div>
<div class="book_content">
	<div class="main_heading">
A Summary of the Creed of As-Salaf  As-Salih 

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Creed Salaf Salih.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.55/-

</p>
        <p>Pages:40 -      </p>
        <p>Size: 4.7x6.7" (11.7x17 cm)  </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
  A creed is a set of fundamental beliefs and guiding principles of a religion. A religion or sect differs from another if its beliefs and principles are different. At the present time we find many religions and numerous sects of each religion in this world, while the Creator of this world has prescribed a simple and straight forward religion for us. He sent many Messengers and Prophets to various nations at different times to propagate His Message to mankind. But the people after those Messengers and Prophets changed their beliefs, thus deviating from the original religion. This went on until Allah sent his Last Messenger (S) to mankind.
 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
Faith in Predestination (Qada Wa Qadar)

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Faith Predestination.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.45/-

</p>
        <p>Pages:16 -        </p>
        <p>Size: 5.5x8" (14x20 cm)   </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
  Belief in predestination (Qada wa Qadar) is an undisputed article of faith in Islam. For some people, this belief leads to contentment and satisfaction, even in the face of hardship and adversity. But for others, it provides justification for their wrongdoing: how often do we hear 
people arguing that they should not be blamed for their disobedience since it has already be decreed by Allah that they will sin?

 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	Festivals & Celebrations in Islam

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Festivals & Clelebrations in Islam.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.600/--

</p>
        <p>Pages:245 -       </p>
        <p>Size: 7x10x0.6" (17x24x1.7 cm)   </p>
        <p>Publisher: Al-Kitab & As-Sunnah </p>        
        </div>
    </div>
    <div class="main_description">
  Festivals and celebrations are occasions of joy and happiness. They have their distinctive spirit in all socities and cultures, and are eagerly awaited and heartily welcomed by everyone.
The feeling of excitement associated with these occasions, however, causes people to introduce uncommon, strange or even bizarre practices during them.
Islam regulates the occasions to be celebrated and the methods of celebrating them. It maintains their atmosphere of happiness, while redirecting
This book discusses the two annual Islaamic festivals: Eid ul-Fitr and Eid ul-Adhaa as well as the weekly Jumu'ah. It presents the Islaamic guidelines for celebration according to the Quraan and Sunnah, and warns against innovated occasions and un-Islaamic festivals.
In addition to topics that are standard to 'Id celebration, such as the 'Id prayer and khutbah, and 'Id pastimes, this book discusses zakat-ul-fitr, the sacrifice, the blessed days of the month of Thul-Hijjah, and numerous other 'Id-related issues.
The broad and thorough discussions in this book make it an important manual and complete reference on festivals and celebrations in Islam. Indeed, from Allah (swt) we seek help and acceptance.

 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	The Many Shades of Shirk	
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\The Many Shades of Shirk.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.65/-

</p>
        <p>Pages:64 -       </p>
        <p>Size: 5.5x8" (14x20 cm)  </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
  In Islam, Shirk (polytheism) is the grievous sin that can not be forgiven until man turns to Allah in repentance sincerely and ask His pardon. This book deals with shirk thoroughly and highlights its various forms prevelent among the Muslims and non-Muslims. Its aim is to arouse mass awareness against the shirk and invite them to Islamic Monotheism based on the Quran and Sunnah.
 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	Virtue of Tawheed and a Warning Against What Contradicts it
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\VirtueTawheed.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.65/-

</p>
        <p>Pages: 32-       </p>
        <p>Size: 4.7x6.7" (11.7x17 cm)   </p>
        <p>Publisher: Dar-us-Salam </p>        
        </div>
    </div>
    <div class="main_description">
 
 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	
Kitab At-Tauhid
The Book of Monotheism

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\KitabTauhid.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.65/-

</p>
        <p>Pages: 1922-       </p>
        <p>6x9" (15x22 cm)    </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
 Kitab At-Tauhid is one of the best books on the subject of Tawheed (Tauheed, Tawhid - Monotheism) and ranks high in authenticity. In this book all the relevant verses of the Qur'an have been discussed reasonably, rationally, and sincerely. The essence of the Qur'an and Sunnah is placed in a very simple manner in this book.

 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	
Taqwiyat-ul-Iman (Strengthening of The Faith)

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Taqwiyat-Ul-Iman.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:

</p>
        <p>Pages: 151        </p>
        <p>6x9" (15x22 cm)    </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
 The author refers to the Quranic verses and Ahadith by interpreting them in a very simple and comprehensible style, and also brings to light the true status of all the unlawful customs and rituals which are commonly practiced in the society and are detrimental to the faith of Tauhid. Tauhid (Oneness of Allah) is the basis of the Islamic religion.

 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	The Right Way	
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\The Right Way.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:

</p>
        <p>Pages: 192      </p>
        <p>6x9" (15x22 cm)     </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
The author has presented the Islamic guidelines as regards to issues like celebrating religious festivals, going to the graves, making supplications, offering prayers, the acts of worship etc. A summarized version is being presented.
 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	
Sharh Al-Aqeedat-il-Wasitiyah (Explanation of the Creed)
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Sharah Aqeedat-il-Wasitiyah.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.260/-

</p>
        <p>Pages: 222   </p>
        <p>6x9" (15x22 cm)     </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
Sheikh-ul-Islam's book Al-Aqeedah Al-Wasitiyah deals with the perfect and undefiled Islamic Faith and Creed of the As-Salaf-As-Salih (the pious predecessors) particularly in regards to Allah's names and attributes, with solid arguments in brief words and terminology. The book is highly appreciated by the scholars for its brevity as well as comprehensiveness; and for its contents produced perfectly in line with the Qur'an and Sunnah in an appealing and manifest manner.
The eminent scholar of Islam, Sheikh-ul-Islam Imam Ibn Taimiyah, discusses the real & original faith of Islam according to the Qur'an & Sunnah. The real faith in Allah and his religion Islam is to follow the Qur'an and Sunnah strictly. Any scholar who adds or attributes or alters any basic fundamental of Islam is wrong & deviates from the teachings of Islam. Every Muslim must read this book to get the real light of Faith.

 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	

Pillars of  Islam and Iman (HB)

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Pillars of Islam & Iman.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.325/-

</p>
        <p>Pages: 264    </p>
        <p>6x9" (15x22 cm)     </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
Besides being a great scholar, Sheikh Muhammad bin Jamil Zino is also the author and compiler of many books directly related to the fundamentals of Islam. He holds the honor to have a place in the rank of those authors of present time whose works have been widely accepted & attributed.
This is his first ranking work. In this Book, the learned writer discussed the fundamental constituents of Islam: Salat (prayer), Saum (fasting), Hajj and Zakat etc., in a lucid and impressive manner. The discussion regarding Faith and Belief in the first part is and added value to the book.


 </div> 
</div>
<div class="book_content">
	<div class="main_heading">
	

Pillars of  Islam 

	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Pillars Of Islam.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.325/-

</p>
        <p>Pages: 223 -     </p>
        <p>6x9" (15x22 cm)     </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
Islam is the greatest favor of Allah with which He has distinguished the mankind and Jinn. It is only a Deen which Allah made the last of all religions. He says: "Today, I have completed your deen for you, and perfected my favor upon you, and accepted Islam as a deen for you." (5:3) He also said: "And whoever seeks a religion other than Islam. It will never be accepted of him, and in the Hereafter he will be one of the losers." (3:85) Hence, It is the duty of every Muslim to value this divine favor by adhering to it. This could not be accomplished without understanding all the aspects of the religion which should be based on the Qur'an and the Sunnah.
It is for this reason we have chosen this book, "The Pillars of Islam" which explains the basic fundamentals of Islam i.e., the two Testimonies, the Prayer, the Zakat, the Fast and the Hajj. It is prepared by some research schollars of knowledge of the religion. This is a very important subject to acquire knowledge of as it is practiced by the tongue, the limbs, the heart and with one's wealth.

 </div> 
</div>
  <div class="book_content">
	<div class="main_heading">
	

	The Many Shades of Shirk	

	 </div><div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\The Many Shades of Shirk.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.65/-

</p>
        <p>Pages: 64     </p>
        <p>5.5x8" (14x20 cm)    </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
In Islam, Shirk (polytheism) is the grievous sin that can not be forgiven until man turns to Allah in repentance sincerely and ask His pardon. This book deals with shirk thoroughly and highlights its various forms prevelent among the Muslims and non-Muslims. Its aim is to arouse mass awareness against the shirk and invite them to Islamic Monotheism based on the Quran and Sunnah.
 </div> 
</div>
 <div class="book_content">
	<div class="main_heading">
	
Faith in Predestination (Qada Wa Qadar)
	 </div><div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Faith Predestination.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.45/-

</p>
        <p>Pages:16  </p>
        <p>5.5x8" (14x20 cm)   </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
Belief in predestination (Qada wa Qadar) is an undisputed article of faith in Islam. For some people, this belief leads to contentment and satisfaction, even in the face of hardship and adversity. But for others, it provides justification for their wrongdoing: how often do we hear 
people arguing that they should not be blamed for their disobedience since it has already be decreed by Allah that they will sin?

</div>
</div>
<div class="book_content">
	<div class="main_heading">
	
	Islamic Beliefs	
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Islamic Beliefs.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price: Rs.390/-

</p>
        <p>Pages: 247 -   </p>
        <p>6x9" (15x22 cm)   </p>
        <p>Publisher: IIPH </p>        

</div>
    </div>
    <div class="main_description">
At this time of confusion, heresy and division, it is essential for the Muslim to check on his belief and his approach to Islam, so that he may be certain that he is following the path of the Prophet (BPUH) and the early generation of Muslims (the salaf). Without this checking, a Muslim may live his whole life, following a deviant, heretic path, thinking that he is doing the right thing, only to find out — when it is too late — that this path only leads to Hell.
Many books have been written by the scholars explaining, in great detail, the path of the Prophet (BPUH) and the path of the early generation of Islam. Many of these books are lengthy and written in a complex and difficult style that is only understood by those who have a great deal of knowledge about the deviant sects and their ideas, which puts them beyond the reach of most ordinary readers. In contrast, this book Islamic Beliefs — A Brief Introduction to the 'Aqeedah of the Righteous Salaf, is written in a straightforward style, distilling the knowledge of the scholars and making it accessible to the ordinary Muslim. It touches on the main points of 'aqeedah and explains the main features of the path of the Prophet (BPUH) and the early generation, with brief references to the deviant groups in order to show the contrast between the path of the Prophet (BPUH) and the paths of the deviant groups, between light and darkness, guidance and misguidance. The straightforward approach of this book will allow the reader to follow its arguments and develop a clear picture of the proper approach to and interpretation of the Qur'an and Sunnah.


</div></div>
<div class="book_content">
	<div class="main_heading">
		Destination of the Seeker of Truth - Kitab At-Tauhid	
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Interpratation of KitabTauhid.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.395/-

</p>
        <p>Pages: 325 -   </p>
        <p>6x9" (15x22 cm)    </p>
        <p>Publisher: Dar-us-Salam </p>        

</div>
    </div>
    <div class="main_description">
Interpretation of Kitab At-Tauhid - Ghayatul-Murid (The Destination of the Seeker of Truth)       By the Noble Shaikh: Salih bin 'Abdul-'Aziz bin Muhammad bin Ibraheem Aali Shaikh
Here is a sample chapter from the book without Arabic verses. Due to the OCR there may be some typographical errors.


</div></div>
<div class="book_content">
	<div class="main_heading">
		Concise Collection on Creed and Tauhid (Large)
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Creed  Tauhid.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.325/-

</p>
        <p>Pages:341   </p>
        <p>6x9" (15x22 cm)   </p>
        <p>Publisher: Dar-us-Salam</p>        

</div>
    </div>
    <div class="main_description">
An easily usable reference on the topic of Tauhid which contains important works on Tauhid as well as questions and answers and emphasis on explaining the truth about certain common misunderstandings.
In this collection we have included the following titles:
1.	Kitab At-Tauhid by Shaikhul-Islam Muhammad bin 'Abdul-Wahhab
2.	Religious Fundamentals by Shaikhul-Islam Muhammad bin 'Abdul-Wahhab
3.	The Virtue of Tauhid and a Warning Against What Contradicts it, compiled by the Research Division of Darussalam
4.	The Authentic Creed and Invalidators of Islam, by the great scholar Shaikh 'Abdul-'Aziz bin 'Abdullah bin Baz
5.	Islamic Creed, by Shaikh Muhammad bin Jamil Zino
6.	50 Questions and Answers on Islamic Monotheism, compiled by the Research Division of Darussalam


</div></div>
<div class="book_content">
	<div class="main_heading">
		Commentary on the Three Fundamental Principles of Islam
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\Three Fundamentals.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.325/-

</p>
        <p>Pages:260 -     </p>
        <p>6x9" (15x22 cm)   </p>
        <p>Publisher: Dar-us-Salam</p>        

</div>
    </div>
    <div class="main_description">
This book is a clear explanation of that which we should all know about our religion. In fact it is a detailed answer to the three questions that we will all be asked in our graves, as such this book will prove to be beneficial for everyone. The author has firmly based his book upon the Qur'an and Sunnah.
This work is the English translation of Sharh Thalaathatul-Usool, which is an explanation of the booklet Thalaathatul-Usool (The Three Fundamental Principles) written by Shaykh Muhammad ibn Abdul-Wahhaab.

</div></div>
<div class="book_content">
	<div class="main_heading">
	The Beautiful Names and Attributes of Allah
	 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Aqidah\The Beautiful Names.jpg" alt=""/></div>
    	<div class="main_details">
        <p>code: </p>
        <p>Price:Rs.325/-

</p>
        <p>Pages:194 -       </p>
        <p>6x8.5" (14.5x21.5 cm)    </p>
        <p>Publisher: Dar-us-Salam</p>        

</div>
    </div>
    <div class="main_description">
The pristine beliefs of the early Muslims are preserved in this vitally important masterpiece written by one of the most outstanding scholars of our time, Shaykh Muhammad Ibn Saalih al Uthaymeen. This new revised edition by Dar-us-Salam has been printed in full color with hardback bounding for an excellent presentation.
Seven clear principles and their evidences from the Book and the Sunnah guide the reader through the confusion and false claims of the ignorant to the clarity of belief in Allah's Names accomplished by the righteous early scholars of Islam. Principle 6 contains the shaikh's compilation of the ninety-nine (99) names of Allah. The names have been compiled into 2 categories: first from the Book of Allah & second from the Sunnah of the Prophet (S). All the names have been printed in Arabic with transliteration and English translation. Each name is printed beautifully in a square box with 6 boxes on a page.
Seven more principles and their evidences follow, giving the reader firm understanding of the correct beliefs about Allah's Attributes. Four more principles outline the correct approach in studying the related proofs and evidences.

</div></div>
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

