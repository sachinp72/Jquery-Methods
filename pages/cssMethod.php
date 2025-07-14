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

	<title>CSS Methods</title>
</head>
<body>

	<h2>CSS Methods</h2><br>

	<pre>

⦁	.css("background","pink")                                              : used to set only one style element
⦁	.css({"background":"orange","color":"red","border":"1px solid"})       : ({}) used to set multiple css elements


	</pre>



<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="addcss">Add single CSS element</button>
<button id ="addcss2">Add Multiple CSS element</button>



<script>
	$(document).ready(function(){
		
		$('#addcss').click(function(){
			$('#box').css("background","pink");
		});

		$('#addcss2').click(function(){
			$('#box h3').css({"background":"orange","color":"red","border":"1px solid"});
		})


	})
</script>
</body>
</html>
