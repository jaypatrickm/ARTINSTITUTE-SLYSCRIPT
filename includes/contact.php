<!-- hidden inline form -->
<div id="contact_body">
<div id="inline">

	<form id="contact" name="contact" action="#" method="post">
		<div id="contact_name">
		<input type="name" id="name" name="name" class="txt" autofocus="autofocus">
        <br /><label for="name">Your Name</label>
        </div>
		
        <div id="contact_msg">
		<textarea id="msg" name="msg" class="txtarea"></textarea>
        <label for="msg">Enter a Message</label>
		</div>
        
        <div id="contact_email">
        <input type="email" id="email" name="email" class="email_txt">
        <br /><label for="email">Your E-mail</label>
        </div>
        
        <div id="contact_submit">
		<button id="send">Send E-mail</button>
        </div>
	</form>
</div>
</div>
<!-- basic fancybox setup -->
<script type="text/javascript">	
	function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}

	$(document).ready(function() {
		$(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });

		
		$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			var nameval   = $("#name").val();
			var namelen   = nameval.length; 
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			if(namelen < 1) {
				$("#name").addClass("error");
			}
			else if(namelen >= 1){
				$("#name").removeClass("error");
			}
			
			if(mailvalid == true && msglen >= 4) {
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				$("#send").replaceWith("<em>sending...</em>");
				
				$.ajax({
					type: 'POST',
					url: 'sendmessage.php',
					data: $("#contact").serialize(),
					success: function(data) {
						if(data == "true") {
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 1000);
							});
						}
					}
				});
			}
		});
	});
</script>

