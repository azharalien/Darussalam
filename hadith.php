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
	<div class="main_heading">  110 Hadith Qudsi
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\110 Hadith.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Compiler: S. Masood-ul-Hasan</p>
<p>Pages: 128</p>
<p>Binding: Hardback</p>
<p>Size: 6x9" (15x22 cm) </p>
<p>Format: Arabic-English</p>
<p>Publisher: Dar-us-Salam


</p>        
        </div>
    </div>
    <div class="main_description">
    
Ahadith are the sayings, deeds and approvals of the Prophet (S) under Divine guidance and are generally traced back to the Prophet (S) as regards to their authority. But some Ahadith hold a distinct place and are termed as Ahadith Qudsi (Sacred Ahadith) and the authority in these Ahadith is attributed to Allah through the Prophet (S). It is a collection of 110 such Ahadith relating to the important aspects of daily life so that the readers may get benefited from it for the success in this life as well as in the Hereafter.

 

    </div> 
</div>



<div class="book_content">
	<div class="main_heading">  Al-Lulu Wal Marjan - Perals & Corals (2 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Pearls & Corals (Al-Lu'lu' Wal-Marjan).jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Dr. Muhammad Muhsin Khan</p> 
<p>Compiler: Fu'wad Abdul Baqi</p> 
<p>Pages: 1015</p> 
<p>Binding: Hardback</p> 
<p>Size: 7x10" (17x24 cm) </p> 
<p>Format: Arabic-English</p> 
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
A collection of agreed upon Ahadith from Al-Bukhari and Muslim, which have been titled as diamonds and pearls due to the value and authenticity of the ahadith. A master piece book translated into very simple English language for every kind of reader. It should be a part of personal collection of books of each Muslim.
 

    </div> 
</div>



<div class="book_content">
	<div class="main_heading">  Collection from Riyad-us-Saliheen (Standard Size)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Collections From Riyad us Saliheen.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>By: Safi-ur-Rahman Mubarakpuri</p>
<p>Translator: Dr. Muhammad Amin</p>
<p>Compiler: Imam Al-Nawawi (631 AH)</p>
<p>Pages: 558</p>
<p>Binding: Hardback</p>
<p>Size: 6x9" (15x22 cm) </p>
<p>Format: Arabic-English+Commentary</p>
<p>Edition: First, August 2002</p>
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
This edition of Riyad-us-Saliheen has selected hadith from the full 2 volume edition. It has Arabic text followed by English translation and commentary below those.
Imam Nawawi was a great scholar of Hadith and Fiqh of his time. He compiled Riyad-us-Saliheen which acclaimed an important position in the Hadith Collections. It is an extremely popular and useful compilation of authentic hadith. Commentaries on the Ahadith were added by Hafiz Salahuddin Yusuf 
Keeping in view the problems of our times, we wished to print a concise volume of Riyad-us-Saliheen. For this volume, Sheikh Safi-ur-Rahman Mubarakpuri has made the selection of Ahddith.


 

    </div> 
</div>



<div class="book_content">
	<div class="main_heading">  Commentary on the Forty Hadith of Al-Nawawi (2 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Forty Hadith 2-Vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>By: Jamaal al-Din M. Zarabozo</p> 
<p>Pages: 1710</p> 
<p>Binding: Hardback</p> 
<p>Size: 9.75x7" </p> 
<p>Publisher: Al-Basheer 


</p>        
        </div>
    </div>
    <div class="main_description">
    
For the first time in English, a comprehensive work consisting of 2 Volumes commenting on al-Nawawi's Forty Hadith. If you enjoyed He came to teach you your religion, then you will certainly love to see the latest work Commentary on the Forty Hadith of al-Nawawi by Jamaal al-Din M. Zarabozo with an Introduction by Prof. Jaafar Sheikh Idris.
Here are just a few excerpts from Prof. Jaafar Sheikh Idris's comments to the work. The reader will not be studying explanations of the hadith in a narrow sense; the reader will, in fact, be introduced to many branches of the Islamic sciences: the different sciences of hadith, the science of textual interpretation, the science of jurisprudence, law, and even Arabic language. This is a great commentary on a great book. Brother Jamaal Zarabozo is to be congratulated for producing such a scholarly book. -- Prof. Jaafar Sheikh Idris


 

    </div> 
</div>




<div class="book_content">
	<div class="main_heading">  Forty Hadith (Pocketsize)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Nawawi Forty Hadith-.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Nasiruddin al-Khattab (Canada)</p>
<p>Compiler: Imam An- Nawawi</p>
<p>Pages: 144</p>
<p>Binding: Paperback</p>
<p>Size: 3.3x4.7" (8.4x12 cm)</p> 
<p>Format: Arabic-English</p>
<p>Publisher: Dar-us-Salam


</p>        
        </div>
    </div>
    <div class="main_description">
This small book contains 40 renowned Ahadith collected by Imam An-Nawawi which gained popularity through centuries

 

    </div> 
</div>




<div class="book_content">
	<div class="main_heading">  Jami' At-Tirmidhi (6 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Jami At-Tirmidhi 6vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Abu Khaliyl (USA)</p>
<p>Compiler: Imam Hafiz Abu Eisa Mohammad Ibn 'Eisa At-Tirmidhi</p>
<p>Pages: ~575/book</p>
<p>Binding: Hardback</p>
<p>Size: 6x9x6.5" (15x22 cm) </p>
<p>Format: Arabic-English+Commentary</p>
<p>Publisher: Dar-us-Salam


</p>        
        </div>
    </div>
    <div class="main_description">
    
For the first time ever in English, after years of painstaking efforts at Dar-us-Salam, Jami' At-Tirmidhi is now available complete in 6 volumes! Like the other translations of the six books of hadith, Dar-us-Salam, has taken great care in correct translation, simple and clear modern English language and high quality publishing.
Jami At-Tirmidhi is one of the classical books of hadith that was compiled by 279AH when it's compiler and the great Muhadith, Muhammad ibn Isa ibn Surah At-Tirmidhi (209-279AH), passed away. He was a special student of the great scholar of hadith, Imam Bukhari. He, like other great muhaditheen of our salaf, traveled a lot and quoted from many shuyukh. With 3956 ahadith, Jami' At-Tirmidi is an invaluable addition to any person's library of hadith collection.
Imam Abu Ismail `Abdullah bin Muhammad Al-Ansari in Harrah said about this book: `To me, his book is better than the book of Al-Bukhari and that of Muslim. Because only one who is an expert in knowledge can arrive at the benefit of the books of Al-Bukhari and Muslim, whereas in the case of the book of Abu `Eisa, every one of the people can reach its benefit."
In Jami`Al-Usul, Ibn Al-Athir said: "(It) is the best of the books, having the most benefit, the best organization, with the least repetition. It contains what others do not contain; like mention of the different Madhhabs (views), angles of argument, and clarifying the circumstances of the Hadith being authentic, weak, Gharib (odd), as well as disparaging and endorsing remarks (regarding narrators)."


 

    </div> 
</div>





<div class="book_content">
	<div class="main_heading">  Riyad-us-Saliheen (2 Vol. Set HB)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Riyad-us-Saliheen 2vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>By: Hafiz Salahuddin Yusuf (commentary)</p>
<p>Compiler: Imam Al-Nawawi</p>
<p>Pages: 1455</p>
<p>Binding: Hardback</p>
<p>Size: 6x9" (15x22 cm)</p> 
<p>Format: Arabic-English+Commentary</p>
<p>Publisher: Dar-us-Salam


</p>        
        </div>
    </div>
    <div class="main_description">
An extremely popular and useful compilation of authentic hadith. Covering every aspect of Islamic belief and moral conduct, it selects approximately 2000 hadith from the six major collections: Bukhari, Muslim, Abu Dawood, Tirmidhi, An-Nisai and Ibn Majah. It serves as an excellent hadith primer and daily reader. Wide range of topics: sincerity of purpose, spending in the way of Allah, rules of fasting, seeking knowledge, attending funerals and safeguarding the Quran. Arabic text as well as English translation are presented here in this handsome hardcover two volume set.
Riyadh us Salihen comprises of about 2000 ahadiths in 372 Chapters and 19 Sections: The Book of Good Manners - The Book about the Etiquette of Eating - The Book of Dress -The Book of the Etiquette of Sleeping, Lying and Sitting, etc.- The book of Greetings - The Book of Visiting the Sick - The Book of Etiquette of Traveling - The Book of Virtues - The Book of I'tikaf - The Book of Hajj - The Book of Jihad - The Book of Knowledge - The Book of Praise and Gratitude to Allah - The Book of Supplicating Allah to Exalt the Mention of Allah's Messenger (PBUH) - The Book of the Remembrance of Allah - The Book of Du'a (Supplications) - The Book of the Prohibited Actions - The Book of Miscellaneous Ahadith of Significant values - and The Book of Forgiveness.


 

    </div> 
</div>




<div class="book_content">
	<div class="main_heading"> Sahih Al-Bukhari (9 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Sahih Al-Bukhari 9volssssssssss.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Dr. Muhammad Muhsin Khan</p> 
<p>Pages: 4050</p> 
<p>Binding: Hardback</p> 
<p>Size: 6x9x9" (15x22 cm) </p> 
<p>Format: Arabic-English</p> 
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
Generally regarded as the single most authentic collection of Ahadith, Sahih Al-Bukhari covers almost all aspects of life in providing proper guidance from the messenger of Allah. This 9-Volume Bukhari is the work of over 16 years by Imam Bukhari who before writing any Hadith in this book performed two Rakat prayer of guidance from Allah and when he was sure of the Hadith's authenticity, he wrote it in the book. Tremendous amounts of errors exist in the translations by other translators. To eliminate the problem Dar-us-Salam spent over 3 years in the publication of this book and presented a book which is translated into English in a very easy & simple language, so that all readers can understand it without difficulty.
This is the unabridged version consisting of 7563 ahadith (about 4000 pages) which are presented neatly in smaller books format and printed on fine paper. Each book (subtopics in each volume categorized by very broad topics such as the Book of As-Salat) contains many chapters which represent one logical unit of Ahadith. Each book contains anywhere from one to 150 chapters with each chapter containing several Ahadith. This book will be a great addition to your library while giving you a true perspective on the traditions of the Prophet (PBUH).
In Imam Bukhari's 'Al-Jami-al-Sahih' (Sahih Al Bukhari) the Imam had recorded all the Sayings of the Prophet which he found to be genuine after thorough examination and scrutiny. He spent sixteen years in research and examined more than sixty thousand Sayings from which he selected only sayings whose genuineness and accuracy he established beyond the slightest doubt. Deducting duplicates, the Imam's collection contain about four thousand distinct Sayings.


 

    </div> 
</div>







<div class="book_content">
	<div class="main_heading">  Sahih Muslim (7 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Sahih Muslim 7vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Nasiruddin al-Khattab (Canada)</p>
<p>Compiler: Imam Abul Hussain Muslim Ibn Al-Hajjaj</p>
<p>Pages: ~4000</p>
<p>Binding: Hardback</p>
<p>Size: 6x9x8.5" (15x22 cm) </p>
<p>Format: Arabic-English</p>
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
Sahih Muslim is the most authentic book of Hadith after Sahih Al-Bukhari and contains 7,563 Ahadith. The Muslim Scholars have agreed that all of the Ahadith in Sahih Muslim are authentic. Thus, Darussalam realized the great benefit of publishing the full version of Sahih Muslim in the English language in the best presentation. Much care has been taken in rendering these Ahadith into a clear and simple style of modern English.
This fine-quality edition of Sahih Muslim has been verified by Dar-us-Salam Publications extensively. Its translation has been checked several times as not only to avoid mistranslating but also to avoid misinterpreting the ahadith as done by many translators of the current times in order to rush the product to market or to their lack of understanding of the Arabic language. Unlike other publishers which leave you wondering about the meaning of the ahadith, the unclear wording has been explained in the brackets. There are also footnotes on bottom of some of the pages, when the term cannot be explained in the brackets. This edition of Dar-us-Salam is nice in that it starts off by drawing a life sketch of Imam Muslim. Then, it goes on to the introduction of Sahih Muslim by Imam Muslim himself where he explains the difference between different narrators and level of trustworthiness.
This edition is also different from other publishers in that the text is side by side with Arabic so you have access to both English and Arabic at the same time. Furthermore, the book regarding reporting from the trustworthy narrators have been placed first while other books follow it. Moreover, the Arabic text contains full chain of narrators while the English only mentions the companion. Lastly, in keeping with the tradition of high quality printing, this edition of Sahih Muslim by Dar-us-Salam Publications is second to none other & made to last a long time, Insha Allah.

 

    </div> 
</div>


<div class="book_content">
	<div class="main_heading"> Science of Hadith (An Introduction)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\An Introduction to the Science of Hadith.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>By: Dr. Suhaib Hasan</p>
<p>Pages: 64</p>
<p>Binding: Paperback</p>
<p>Size: 5.5x8" (14x20 cm) </p>
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
The Muslims in general believe that the Qur'an has been preserved intact and pure by Allah Himself. But what is often forgotten by many is that this preservation necessarily includes the Sunnah of the Prophet Muhammad (S), the practical example of the implementation of the Qur'an.
Hadith is Sunnah in record. How the immense wealth of Hadith literature has been left to us by the Muhaddiths (scholars of Hadith) is an extremely wide, complex study.
We publish this short treatise on "the science of Hadith" by the learned Suhaib Hasan with English readers in mind. It is part of our scheme to introduce various aspects of Islam to English readers. May Allah accept it as a good work.

 

    </div> 
</div>


<div class="book_content">
	<div class="main_heading">  Summarized Sahih Al-Bukhari (Large Size)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Summarized Sahih Al-Bukhari-Large.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Dr. Muhammad Muhsin Khan</p>
<p>Compiler: Imam Bukhari</p>
<p>Pages: 1096</p>
<p>Binding: Hardback</p>
<p>Size: 7x10" (17x24 cm) </p>
<p>Format: Arabic-English</p>
<p>Publisher: Dar-us-Salam
</p>        
        </div>
    </div>
    <div class="main_description">
    
Sahih Al-Bukhari covers almost all aspects of life in providing proper guidance from the messenger of Allah. Translated into English in a very easy & simple language, so that all readers can understand it without difficulty. This summarized edition of Sahih Al-Bukhari has Arabic text with corresponding English translation side by side.
All Muslim Scholars agree that Sahih Al-Bukhari is the most authentic book after the Qur'an. The Summarized Bukhari is condensed into about 1000 pages by selecting a few Ahadith from the original 9-Volume which has about 4000 pages. This book contains about 2220 Ahadith. Most of the duplicate hadith from different chains (with slight variations) have been removed and only one has been kept.
In Imam Bukhari's 'Al-Jami-al-Sahih' (Sahih Al Bukhari) the Imam had recorded all the Sayings of the Prophet which he found to be genuine after thorough examination and scrutiny. He spent sixteen years in research and examined more than sixty thousand Sayings from which he selected some 7,275 Sayings whose genuineness and accuracy he established beyond the slightest doubt. Deducting duplicates, the Imam's collection contain about four thousand distinct Sayings.

 

    </div> 
</div>



<div class="book_content">
	<div class="main_heading">  Summarized Sahih Muslim (2 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Summarized Sahih_Muslim.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Compiler: Al-Hafiz Zakiuddin Abdul-Azim Al-Mundhiri</p>
<p>Pages: 1208</p>
<p>Binding: Hardback</p>
<p>Size: 6x9" (15x22 cm) </p>
<p>Format: Arabic-English</p>
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
Muslims believe that Sahih Muslim is the most authentic book of Hadith after Sahih Al-Bukhari. The Muslim Scholars have agreed that all of the Ahadith in Sahih Muslim are authentic. Thus, Darussalam realized the great benefit of publishing Al-Hafiz Al-Mundhiri's summarized version of Sahih Muslim in the English language. Much care has been taken in rendering these Ahadith into a clear and simple style of modern English. May Allah accept our work.
Summarized Sahih Muslim contains 2179 Hadith with 70 categories (referred as books). Both volumes combined contain 1208 pages with index and appendix.

 

    </div> 
</div>



<div class="book_content">
	<div class="main_heading"> Sunan Abu Dawood (5 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Sunan Abu Dawud.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Abu Ammar Yasir Qadhi</p>
<p>Compiler: Imam Hafiz Abu Dawud Sulaiman bin Ash'ath</p>
<p>Pages: ~660/book</p>
<p>Binding: Hardback</p>
<p>Size: 6x9x6.3" (15x22 cm) </p>
<p>Format: Arabic-English+Commentary</p>
<p>Publisher: Dar-us-Salam

</p>        
        </div>
    </div>
    <div class="main_description">
    
New edition of Sunan Abu Dawood in 5 volumes by Dar-us-Salam with commentary after each hadith. Unlike other prints, this edition has crisp and clear printing in deluxe 6x9" bounding. Like the other translations of the six books of hadith, Dar-us-Salam Publications, has taken great care in correct translation, simple and clear modern English language, and high quality publishing.
Ahadith in the book are followed by comments to explain issues and to help readers derive lessons. To aid readers further, Dar-us-Salam, has added several features like section on how to benefit from Sunan Abi Dawud, about the Arabic and technical terms used, information about the hadith compilations and a glossary of Islamic terms in the last volume.
Each hadith is also followed by its status in regards to the authenticity. The status is explained more in detail in the Arabic text. The chain is also complete in the Arabic text while it is removed from the English to reduce the length and not being of much benefit to the English readers.

 

    </div> 
</div>


<div class="book_content">
	<div class="main_heading">  Sunan An-Nasa'i (6 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Sunan-Nasai 6vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Nasiruddin Al-Khattab</p>
<p>Compiler: Imam Hafiz An-Nasai</p>
<p>Pages: ~500/book</p>
<p>Binding: Hardback</p>
<p>Size: 6x9x6.5" (15x22 cm) </p>
<p>Format: Arabic-English+Commentary</p>
<p>Publisher: Dar-us-Salam</p>

        </div>
    </div>
    <div class="main_description">
    

For the first time ever in English, after years of painstaking efforts at Dar-us-Salam, Sunan An-Nasa'iis now available, complete in 6 volumes! Like the other translations of the six books of hadith, Dar-us-Salam, has taken great care in correct translation, simple and clear modern English language and high quality publishing.
Sunan An-Nasai has the fewest weak ahadith after the two Sahih collections. This Sunan is one of the six is al-Mujtaba or as-Sunan as-Sughara, which is a synopsis of a large collection of ahadith which he considered to be fairly reliable. In the smaller collection, only those ahadith which he considered to be reliable have been included.
It was compiled by the great scholar of hadith, Abu Abdur-Rahman Ahmad bin Shu'aib bin Bahr An-Nasai (Nasa' of Khurasan) (214-303AH). Imam An-Nasai, like other great scholars of hadith traveled to Baghdad, Ash-Sham, Egypt, Mecca, and many other cities to seek knowledge. He received the praises of many scholars including Ad-Daraqutni who said about him: "He is given preference over all others who are mentioned with this knowledge from the people of his time". Some scholars consider his compilation to have the least number of defective or weak narrations among the four Sunan. This great book of his contains 5761 ahadith, making it as an invaluable addition to anyone's library.

 

    </div> 
</div>

<div class="book_content">
	<div class="main_heading">  Sunan Ibn Majah (5 Vol. Set)
 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Sunan Ibn Majah 5vols.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code:</p>
<p>Price:</p>
<p>Translator: Nasiruddin al-Khattab (Canada)</p>
<p>Compiler: Imam Muhammad Bib Yazeed ibn Majah Al-Qazwini</p>
<p>Pages: 2678</p>
<p>Binding: Hardback</p>
<p>Size: 6x9x6" (15x22 cm) </p>
<p>Publisher: Dar-us-Salam
</p>        
        </div>
    </div>
    <div class="main_description">
    
Sunan Ibn Majah is one of the six most authentic collections of the Ahadith and contains 4,341 total Ahadith. Like the other translations of the six books of hadith, Dar-us-Salam Publications, has taken great care in correct translation, simple and clear modern English language, and high quality publishing.
Ahadith in the book are followed by comments to explain issues and to help readers derive lessons. To aid readers further, Dar-us-Salam, has added several features like section on how to benefit from Sunan Ibn Majah, about the Arabic and technical terms used, information about the hadith compilations and a glossary of Islamic terms in the last volume.
Each hadith is also followed by its status in regards to the authenticity. The status is explained more in detail in the Arabic text. The chain is also complete in the Arabic text while it is removed from the English to reduce the length and not being of much benefit to the English readers.
 

    </div> 
</div>
<div class="book_content">
	<div class="main_heading">Thulaathiyyaat from Musnad Imam Ahamd bin Hanbal

 </div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Thulaathiyyaat from Musnad Imam Ahamd.jpg" width="151" height="201" /></div>
    	<div class="main_details">
        <p>Code: </p>
<p>Price: </p>
<p>Translator: Nasiruddin Al-Khattab (Canada)</p>
<p>Pages: 411</p>
<p>Binding: Hardback</p>
<p>Size: 6.5x9.5" (16x23 cm) </p>
<p>Publisher: Dar-us-Salam
 </p>        
        </div>
    </div>
    <div class="main_description">
   Amongst the countless blessings which Almighty Allah has bestowed upon the Muslims is that He has preserved their religion for them and provided the appropriate means for Islam to be safeguarded and preserved, in that He has raised erudite scholars through whom the Sunnah of the Noble Prophet, Muhammad ibn Abdullaah (S), the seal of the prophets, has been preserved. Thus the Book of Allah and the Sunnah of the Prophet (S) provide evidence against mankind. One of the scholars through whom Allah preserved the Sunnah was Imaam Ahmad ibn Hanbal (Rahimahullah), and one of the books that he wrote to preserve the Sunnah is al-Musnad, which is one of the major collections of the noble Sunnah.
Muslim scholars, particularly hadeeth scholars, were keen on ahaadeeth with few narrators between the hadeeth reporter and the Prophet (S). In fact, Imaam Ahmad reported more than three hundred "thulaathiyyaat", ahaadeeth with only three narrators between him and the Prophet (S). These ahaadeeth were collected from al-Musnad by Shaikh Muhammad ibn Ahmad ibn Saalim as-Saffaareenee al-Hanbalee (Rahimahullah) in a separate book.
This example clearly points to the great care shown by hadeeth scholar to the Prophet's Sunnah, as they were keen to compile the Sunnah with the soundest chains of narrators (isnaad) and convey it in the easiest manner possible, from leading scholars of hadeeth who were of extremely good character and who approached the reports with accuracy and deep knowledge, in compliance with to the Prophet's instructions: "Convey [whatever you learn] from me. even if it is just one verse." (Narrated by al-Bukhaaree)


    </div> 
</div>
   
   

<div class="book_content">
	<div class="main_heading">
	  <p><strong>Usool Al-Hadeeth</strong></p>
	</div>
    <div class="main_container">
    	<div class="main_image"><!--the image height:200px width:150px--><img src="my\Hadith & Sunnah\Usool Al-Hadeeth.jpg" width="151" height="201" /></div>
    	
    	
    	 
<div class="main_details">
<p> Publisher:&nbsp;<strong>IIPH</strong></p>
<p>Code:</p>
    	 <p> Price:&nbsp;</p>
    	 <p> By:&nbsp;<strong>Dr.  Abu Ameenah Bilal Philips</strong></p>
    	  <p>Pages:&nbsp;<strong>246</strong></p>
    	 <p> Binding:&nbsp;<strong>Hardback</strong></p>
    	  <p>Size:&nbsp;<strong>6x9&quot;</strong>&nbsp;<strong>(15x22 cm)</strong></p>
      </div>
    </div>
    <div class="main_description">
      <p>The science of hadeeth terminology  and assessment is a particularly difficult field of study. Dr. Bilal Philips  has managed in this text to simplify this topic and to make it quite relevant  to our times by addressing some of the most challenging questions raised by  those who question the validity of hadeeth literature in general.<br>
        Although this book was designed as a  teaching text for the Bachelors in Islamic Studies (BAIS) programs which Dr.  Bilal set up in the UAE and Qatar, it is suitable for the layman as well as for  students of Islamic Studies at the high school level. There are only a few  works available in English on this very technical subject and this is definitely  one which must be read.</p>
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

