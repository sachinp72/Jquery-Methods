<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<style>
		.clrRed{
			color:red;
		}

	</style>

	<title>Class Methods</title>
</head>
<body>

	<h2 style="color:red ;border:3px solid black">Class Methods :</h2><br>

	<h5>
<b>⦁	.addClass("clrRed")   </b>: use to add class to the selctor element.<br>
<b>⦁	.removeClass("clrRed") </b>: use to remove the class.<br>
<b>⦁	.toggleClass("clrRed") </b>: add class if not present / remove class if present.<br>

	</h5><br>



<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="addBtn">Add class</button>
<button id ="rmBtn">Remove class</button>
<button id ="tgBtn">Toggle class</button>



<script>
	$(document).ready(function(){
		
		$('#addBtn').click(function(){
			$('#box h3').addClass("clrRed");
		})

		$('#rmBtn').click(function(){
			$('#box h3').removeClass("clrRed");
		})
		
		$('#tgBtn').click(function(){
			$('#box h3').toggleClass("clrRed");
		})

	})
</script>
<script src="js/app.js"></script>
</body>
</html>
