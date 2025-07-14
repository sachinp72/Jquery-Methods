<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<style>
		.clr{
			color:red;
		}

	</style>

	<title>Slide Down Slide UP</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Slide Down Slide UP Effects :</h2><br>

		<h5>
			<b>⦁	SlidDown </b>: use for animated slide Down Effect <b>work for hide but with additional effect</b>.<br>
			<b>⦁	SlideUP </b>: se for animated slide Up Effect <b>work for Show</b>.<br>
			<b>⦁	SlideToggle </b>: use to toggle.<br>
			<b>We can pass callback function for additional task as well <br>

</h5><br>

	



<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="slideUpBtn">Slide Up</button>
<button id ="slideDownBtn">Slide Out</button>
<button id ="slideToggleBtn">Toggle</button>







<script>
	$(document).ready(function(){
		
		$("#slideUpBtn").click(function(){
			$("#box").slideUp(1000 , function(){
				$("h3").hide();
				$("#box").after("<h3 class ='clr'>You slide is up</h3>");
			})
		});

		$("#slideDownBtn").click(function(){
			$("#box").slideDown(1000 , function(){
				$("h3").hide();
				$("#box").after("<h3 class ='clr'>You slide is Down</h3>");
			})
		});

		$("#slideToggleBtn").click(function(){
			$("#box").slideToggle(500,function(){
				$("h3").hide();
			})
		});

	
	


	})
</script>
</body>
</html>
