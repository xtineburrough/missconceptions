<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>emailing html</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

	$email_to = 'xtine@missconceptions.net,xtineburrough@yahoo.com';
	$subject = 'New Works!';
	$useHTML = true;
	
	if($useHTML) {
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-Type: text/html; charset=iso-8859-1\r\n";
		$header .= 'From:xtine@missconceptions.net \r\n';
		$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>xtine: missconceptions.net</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body bgcolor="#FFFFFF" text="#000000" link="#990000" vlink="#990000" alink="#990000">
<table width="668" border="0" align="center" cellpadding="16" cellspacing="16">
  <tr> 
    <td width="50%" align="left" valign="top"> <p><font size="4" face="Arial, Helvetica, sans-serif"><a href="mailto:xtine@missconceptions.net"><img src="http://www.missconceptions.net/php_class/email/xtine_with.gif" width="288" height="28" border="0"></a> <br>
    </font>
        <img src="http://www.missconceptions.net/php_class/email/paradise_obscura.gif" width="195" height="11">
		<table><tr>
        <td valign="top"><img src="http://www.missconceptions.net/php_class/email/spacer.gif" name="spacer" width="5" height="5" id="spacer"></td>
          <td valign="top"> 
		  <br><img src="http://www.missconceptions.net/php_class/email/bags.jpg" width="291" height="120"><br>
                    <br>
					 <font face = "helvetica, arial" size = "3">
                    So-EX Offsite, in accordance with City Lights
                    Bookstore presents xtine and Corinne Miller\'s latest project,
                    Paradise Obscura, September 2006. </p>
					</font>
            <p></p> <br>
			 <font face = "helvetica, arial" size = "1">
              Paradise Obscura is a visual manifestation of the voyeuristic
                theme developed in Jack Kerouac\'s <i> On the Road </i>. Sal
                Paradise, Kerouac\'s first-person narrator and stand-in for his
                own voice, is realized as a consumer of people and stories. Sal
                was not a materialist consumer--alcohol, cigarettes, and occasionally
                bus rides and food made up the whole of his experience in currency
                exchange. Sal\'s main object of interest was found in other people\'s
                lives, stories, and experiences. 
				<p>
				Our interest in Sal Paradise
                lies in the connection between Sal Paradise (or Jack Kerouac),
                San Francisco (specifically, City Lights Bookstore), and voyeurism\'s
                relationship to the act of material consumption.</p>In utilizing two lines of text from <i>On the Road </i>, we
              have created shopping bags for distribution that are designed to
              manipulate the viewer into playing the roll of an active voyeur.
              The inside message incriminates the consumer, "Everyone in America
              is a natural born thief." On the outside of the bag, the message, "I
              was getting the bug myself" continues to place words in the hands
              of the consumer, as a sort of Kerouac-label (with City Lights as
              the point of distribution, this may even lay upon one who purchases
              Beat literature). These two lines of text are thoughts Sal has
              while he is spending time with friends in San Francisco. While
              they seem appropriate for the American landscape in the 1950s as
              well as in contemporary society, we are returning the lines of
              text to the city where they were born, within a new context: the
              shopping bag. </p>
			  <p>
           Following the tradition of the Situationists International, our
              interest lies in creating a spectacle out of the viewing public
              by using everyday materials. This interventionist project is most
              effective outside of the gallery walls, as the bags are distributed
              to unassuming consumers--literally translating the consumer into
              an art collector (in most cases, unbeknownst to the consumer).
              The bags benefit from the traditionally passive role of the consumer
              while luring onlookers to an incriminating text. It is the familiarity
              with the visual language of the shopping bags that enables the
              consumption of the subversive message. </p>           
			  </font> </td>
        </tr></table>
    <br></p></td>
    <td valign="bottom">
	 <font face = "helvetica, arial" size = "3">
	xtine is a global media artist who engages viewers
        via the Internet and new technologies. While she has lived and worked
        in Boston, Berkeley, New York and Los Angeles, her media art has no geographic
        bounds. Recent global projects include delocator.net, mailavirus.net,
        and unporn.net. Along with artist collaborators, xtine spearheaded the
        media collective Finishing School in 2002, with whom she created several
        subversive media projects for online broadcast. Selections of these projects
        have exhibited nationwide, including at The San Francisco Art Institute\'s
        Walter and McBean Gallery, The Remote Lounge in New York, and The Huntington
        Beach Art Center. In addition to her online projects, xtine\'s video works
        have been included in several festivals and distributed by the Joanie
        for Jackie video exchange, organized by Miranda July. xtine is currently
        Adjunct Faculty at The University of California, Irvine, and Full-Time Faculty at The
        Art Institute of California in Orange County.
		</font><br>
        <br>
        
    <font face = "helvetica, arial" size = "1">	*Remove me from this list. </font></td>
  </tr>
</table>
</body>
</html>';
	}  else  {
		$header = 'From:xtine@missconceptions.net';
		$body = 'here is the body, no html';

	}
	
	mail($email_to,$subject,$body,$header);
	echo "NO html, only text here part 2";
	
?>
</body>
</html>
