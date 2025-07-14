<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<style>
		.red{
			color:red;
		}
	</style>

	<title>Set Methods</title>
</head>
<body>


<h2 style="color:red ;border:3px solid black">Set Methods :</h2><br>

<h5>
	
	<b>⦁	.text("Hello")   </b>: used to set the text to selected selector.<br>
<b>⦁	.html(Hello)          </b>: used to set the html and text.<br>
<b>⦁	.attr             </b>: to set the class or id (attributes).<br>
<b>⦁	.val("")          </b>: to set value.<br>

</h5><br>




<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="clickBtn">Click</button>



<script>
	$(document).ready(function(){
		
		$('#clickBtn').click(function(){
			$('#box h3').text("Hello Sachin");
			$('#box p:first').text("Welcome Sachin Potre");
			$('#box p:last').html("Welcome <b>Sachin Potre</b> How are you");
			$('#box h3').attr("class","red");
		})

	})
</script>
</body>
</html>
