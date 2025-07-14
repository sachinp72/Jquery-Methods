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

	<title>Fade Effects</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Fade Effects :</h2><br>

		<h5>
			<b>⦁	Fade In </b>: use to Fade in the section <b>Same as hide</b>.<br>
			<b>⦁	Fade Out </b>: use to Fade out the section <b>Same as Show</b>.<br>
			<b>⦁	Fade Toggle </b>: use to toggle.<br>

</h5><br>

	



<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="fadeInBtn">Fade In</button>
<button id ="fadeOutBtn">Fade Out</button>
<button id ="fadeToggleBtn">Toggle</button>







<script>
	$(document).ready(function(){
		
		$("#fadeOutBtn").click(function(){
			$("#box").fadeOut(1000 , function(){
				$("#box").after("<h3>You section is Faded out</h3>");
			})
		});

		$("#fadeInBtn").click(function(){
			$("#box").fadeIn(1000 , function(){
				$("h3").hide();
			})
		});

		$("#fadeToggleBtn").click(function(){
			$("#box").fadeToggle()
		});

	
	


	})
</script>
</body>
</html>
