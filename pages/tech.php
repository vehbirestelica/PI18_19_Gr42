<!doctype Html>
<html>
<head>
    <style>
 * { box-sizing: border-box; }

body { 
    font-family: sans-serif; 
    background-image: url(images/tek.jpg);
    background-size: cover;
        
        }


.permbajtja {
  margin: 40px 0;
  position: relative;
  width: 210px;
  height: 140px;
  margin: 40px auto;
  perspective: 1000px;
}

.karosel {
  width: 100%;
  height: 100%;
  position: absolute;
  transform: translateZ(-288px);
  transform-style: preserve-3d;
  transition: transform 1s;
}

.karosel1 {
  background-image: url(images/apple..png);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
.karosel2 {
  background-image: url(images/microsoft.gif);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel4 {
  background-image: url(images/hp.png);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel5 {
  background-image: url(images/intel.gif);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel6 {
  background-image: url(images/microsoft.gif);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel7 {
  background-image: url(images/vmware.jpg);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel8 {
  background-image: url(images/apple..png);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel3 {
  background-image: url(images/apple..png);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}
        .karosel9 {
  background-image: url(images/intel.gif);
  background-size: cover;
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.karosel1:nth-child(1) { transform: rotateY(  0deg) translateZ(288px); 
        }
.karosel2:nth-child(2) { transform: rotateY( 40deg) translateZ(288px); }
.karosel3:nth-child(3) { transform: rotateY( 80deg) translateZ(288px); }
.karosel4:nth-child(4) { transform: rotateY(120deg) translateZ(288px); }
.karosel5:nth-child(5) { transform: rotateY(160deg) translateZ(288px); }
.karosel6:nth-child(6) { transform: rotateY(200deg) translateZ(288px); }
.karosel7:nth-child(7) { transform: rotateY(240deg) translateZ(288px); }
.karosel8:nth-child(8) { transform: rotateY(280deg) translateZ(288px); }
.karosel9:nth-child(9) { transform: rotateY(320deg) translateZ(288px); }
        
#teksti{
    position: relative;
    top:23px;
    background-color:black;
    color: whitesmoke;
        }

    
    </style>
    <script>
function goBack() {
    window.history.back()
}
</script>
    <link rel="stylesheet" href="styless2.css">
    <title>Tech</title>
    </head>
<body>
    <p id="Fillimi"></p>
    <hr>
    <nav>
    <ul>
        <li><button id="teksti"onclick="goBack()">&laquo <i class="fas fa-home"> Home </i></button></li>
        <li><a href="sports.html">Sports &nbsp&nbsp&nbsp |</a></li>
        <li><a href="stanlee.php">Lifestyle &nbsp&nbsp&nbsp |</a></li>
        <li><a href="tech.php">Tech &nbsp&nbsp&nbsp |</a></li>
        <li><a href="longtextlink.html">Long text link &nbsp&nbsp&nbsp |</a></li>
        <li><a href="contact.html">Contact Us &nbsp&nbsp&nbsp |</a></li>
        <li><a href="#">More Options</a>
            <ul>
            <li><a href="sistemi%20diellor.html">Sistemi Diellor</a></li>
        	<li><a href="signup.html"> Sign Up </a></li>
        	<li><a href="login.html"> Log In </a></li>
            </ul></li></ul>
    </nav><br>
    <div class="permbajtja">
  <div class="karosel">
    <div class="karosel1"></div>
    <div class="karosel2"></div>
    <div class="karosel3"></div>
    <div class="karosel4"></div>
    <div class="karosel5"></div>
    <div class="karosel6"></div>
    <div class="karosel7"></div>
    <div class="karosel8"></div>
    <div class="karosel9"></div>
  </div>
</div> 
    <?php
    $file = "./write.txt";
    $write = "Ky eshte nje tekst i qfardoshem qe e vendosim ne write.txt";
    
    file_put_contents($file, $write, FILE_APPEND);
    
    ?>
   <h2><b>$$$$--Top Tech Companies--$$$$</b></h2><br><br>
    <div id="hyrja">
    <table>
  <tr>
      <td rowspan="2" id="cell1" style=""><a href="https://thenextweb.com/plugged/2019/01/04/marshalls-kilburn-ii-is-a-star-performer-among-wireless-speakers/"><p id="t1">Marshall’s Kilburn II is a star performer among wireless speakers</p></a> </td>
      <td id="cell2"><a href="https://www.apple.com/iphone-xs/"><p id="t2">iPhone X[S]</p></a></td></tr>
      <tr><td id="cell3"><a href="https://www.apple.com/apple-music/"><p id="t2">Lose yourself in 
50 million songs.</p></a></td></tr>
        </table>
    </div>
    <p id="aple"></p>
    <h1>1.Apple</h1>
    <div class="fig kolona"><img src="images/apple1.png"></div>
    <div class="apple kolona">
        <p><b>
        
            <?php
            $file = "./document.txt";
            $document = file_get_contents($file);
            
            $lines = explode('\n',$document);
            
            foreach ($lines as $newline){
                
                echo $newline;
            }
            
            ?>
            <?php
$number = 1977;
$str1 = "Apple";
$txt = sprintf("in January %u, and sales of its computers, including the %s II, grew quickly.",$number,$str1);
echo $txt;
?> 
            Within a few years, Jobs and Wozniak had hired a staff of computer designers and had a production line. Apple went public in 1980 to instant financial success.Apple is well known for its size and revenues. Its worldwide annual revenue totaled $265 billion for the 2018 fiscal year. Apple is the world's largest information technology company by revenue and the world's third-largest mobile phone manufacturer after Samsung and Huawei.</b></p></div>
   <h1 style="padding-top: 35%;">2.Google (#8 overall, 4.4 rating)</h1><br>
    <div class="fig2 kolona1"><img src="images/google.jpg"></div>
    <div class="fig3"><img src="images/company.jpg"></div>
    <div class="google">
        <p><b>
            <?php
            $str2= "Apple is an American multinational technology";
            $new_str = substr_replace($str2,'Google',0,5);
            echo $new_str;
    ?>
    <?Php
echo strlen('Strelen funksioni');
?>
            company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four of technology (alternatively "Four Horsemen") along with Amazon, Apple and Facebook.
<?php
            $str3= "GG was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated GG as a privately held company on September 4, 1998. An initial public offering (IPO) took place on August 19, 2004, and GG moved to its headquarters in Mountain View, California, nicknamed the GG eplex. In August 2015, GG announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. GG is Alphabet's leading subsidiary and will continue to be the umbrella company for Alphabet's Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.

The company's rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond GG's core search engine (GG Search). It offers services designed for work and productivity (GG Docs, GG Sheets, and GG Slides), email (Gmail/Inbox), scheduling and time management (GG Calendar), cloud storage (GG Drive), social networking (GG+), instant messaging and video chat (GG Allo, Duo, Hangouts), language translation (GG Translate), mapping and navigation (GG Maps, Waze, GG Earth, Street View), video sharing (YouTube), note-taking (GG Keep), and photo organizing and editing (GG Photos). The company leads the development of the Android mobile operating system, the GG Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. GG has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the GG Pixel smartphone, GG Home smart speaker, GG Wifi mesh wireless router, and GG Daydream virtual reality headset. GG has also experimented with becoming an Internet carrier (GG Fiber, Project Fi, and GG Station).";
            $new_str1 = str_replace('GG','Google',$str3);
            echo $new_str1;


    ?>
    </b></p></div><hr>
    <div class="fig4 kolona1"><img src="images/googleai.jpg"></div>    
    
    
    <h1>Microsoft</h1>
    <h2 id="microsoft">
        <?php
        $str= "Microsoft Corporation (MS) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers.Since 2016,it is the world's largest software maker, and one of the world's most valuable companies.";
            print trim($str);
        
        ?>
        
        <img id="fig5" src="images"></h2>
    <table style="color: aliceblue;background-color: black;">

    <tr>
        <th><h2 style="margin-left: -1.7%; color: #cccccc;">From the blog</h2></th>
        <th><h2 style="margin-left: 0%; color: #cccccc;">Quick Links</h2></th>
        <th><h2 style="margin-left: -5%; color: #cccccc;">Contact Us</h2></th>
        <th><h2 style="margin-left: -5%; color: #cccccc;">Socialise</h2></th>

    </tr>
    <tr><td><p style="font-family: arial;"><b>Luka Modric</b> wins Ballon d'Or,<br>ending decade of Ronaldo and Messi triumphs.<br><br>LM10, the midfield maestro who won<br>the Champions Legue title with Real Madrid<br>and then helped lead Croatia to the World Cup final<br> was honored Monday with the Ballon d'Or as <br>world's best player of the year <br>  
    <span style="padding-left: 310px;"><a href="longtextlink.html" style="text-align: center;">Read More &raquo;</a></p></span></td>

        

    <td id="linku" ><a href="#Fillimi" class="active" ><span >This link directs to the begining of the page</a><br><hr ></span><br>
    <a href="https://github.com/" class="active" target="_blank"><span >This link directs to an active website on internet</a><br><hr ></span><br>
      <a href="images/eriksen.jpg" class="active" target="_blank"><span >This link directs to a photo taken by PC</a><br><hr></span><br>
    <a href="mailto:vehbi.res@gmail.com" class="active"><span >This link directs to an e-mail address</a><br><hr ></span><br>
        <a href="#aple" class="active"><span style="margin-left: 0%;">This link directs to Apple </a> <br><hr></span></td>
        <td><b>Company:</b> Monumental<br><b>Street:</b> Calle Bailén <b>Str.</b><br><b>Town:</b> Madrid<br><b>ZipCode:</b>28047<br><br><b>Tel:</b><br>049 123/456<br><b>Fax:</b><br>
        38349 123/456<br><br><b>Email:</b><br>team@monumental.com
        </td>
        <td><div class="rrjetet-sociale"><a href="https://www.linkedin.com/" target="_blank"><img src="images/linkedin.png" width="16px" height="16px"> Linkedin</a><hr><br><br>
            <a href="https://www.twitter.com" target="_blank"><img src="images/twitter1.PNG" width="16px" height="16px"> Twitter</a><hr><br><br>
            <a href="https://www.pinterest.com/" target="_blank"><img src="images/pinterest1.png" width="16px" height="16px"> Pinterest</a><hr><br><br>
            <a href="https://www.rss.com/" target="_blank"><img src="images/rss1.png" width="16px" height="16px"> Rss Feed</a><hr><br></div>
    </td></table></body>
   



</html>