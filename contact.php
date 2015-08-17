<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/slystyle.css" />
<title>Sly Script</title>
</head>

<body>
<div id="container">
   	 <?php include("includes/nav.php");?>
	 <div id="contact_body">
     	<div id="contact_form">
         <form action="" method="post" name="contact" id="contact">
    <input type="hidden" name="recipients" value="jaypatrickm@gmail.com" />
    <input type="hidden" name="required" value="fname:Your first name, email:Your email address, message: Please write a message." />
    <input type="hidden" name="subject" value="sly_contact" />
    <div id="contact_name">
      <input name="name" type="text" class="required" id="name" >
      <label for="name" class="label">Name </label>
      
    </div>
    <div id="contact_email">
      <input name="email" type="text" class="required" id="email">
      <label for="email" class="label">E-mail</label>
      
    </div>
    <div id="contact_subject">
      <input name="subject" type="text" id="subject">
      <label for="subject" class="label">Subject</label>
      
    </div>
    <div id="contact_message">
      <textarea name="message" cols="15" rows="5" id="comments"></textarea>
      <label for="message" class="label">Message</label>
      
    </div>
<div id="contact_btn_fix">
            <input type="image" src="sources/contact_btn.png" name="submit" id="submit" value="Submit">
    </div>
    </li>
    </ul>
  </form>
        	
        </div>
     </div>
     <div id="footer_fix">
	<div id="footer_body">
		<div id="footer_col1">
            <p>&copy; 2012 <h4><a href="index.php">Sly Script</a></h4></p>
    		
    	</div>
        <div id="footer_col2">
        	<ul>
            	<li><a href="contact.php"><img src="sources/icon_email.png" /></a></li>
                <li><a href="facebook.php"><img src="sources/icon_facebook.png" /></a></li>
                <li><a href="twitter.php"><img src="sources/icon_twitter.png" /></a></li>
                <li><a href="linkedin.php"><img src="sources/icon_linkedin.png" /></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</body>
</html>