<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<?php require_once("include/header.php"); ?>
</head>
<body>
<?php require_once("include/menuBar.php"); ?>

<div class="container">
<br/><br/>
<br/><br/>
<br/><br/>
<div id="msg" class="alert alert-success" style="display: none;"></div>
	<h2>Contact Us Page</h2>
	<hr>
	<form method="post" id="cnt">
		<div class="form-group">
			<label class="control-label">Fullname</label>
			<input type="text" name="fullname" id="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Email ID</label>
			<input type="text" name="emailID" id="emailID" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Mobile</label>
			<input type="text" name="mobile" id="mobile" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Message</label>
			<textarea class="form-control" name="message" id="message"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="send" id="send" value="Send Message" class="btn btn-success">
		</div>
	</form>
</div>
<?php require_once("include/footer.php"); ?>
<script>
$(document).ready(function() {
	$("#cnt").submit(function() {
		var arg = "fullname="+$("#fullname").val() + "&emailID="+$("#emailID").val() + "&mobile="+$("#mobile").val() + "&message="+$("#message").val();
		$.ajax({
			type: "post",
			url: "sendMessage.php",
			dataType: "text",
			data: arg,
			beforeSend: function() {
				$("#msg").css("display", "block");
				$("#msg").html("Sending Message, please wait...");
				$("#send").val("Sending wait...");
				$("#send").attr("disabled", true);
			},
			success: function(res) {
				if (res == "1") {
					$("#msg").html("Message send Successfully !");
					$("#send").val("Send Message");
					$("#send").attr("disabled", false);	
				}

			}
		});
		return false;
	});
});
</script>
</body>
</html>