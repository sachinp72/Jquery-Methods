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

	<title>Multiple Events Click </title>
</head>
<body>

	<h2 style="color:red ;border:3px solid black">Multiple Events Click by Using On / Off :</h2><br>

	<h5>
		1.	By using On we can code multiple events under single click.
	</h5><br>




<button id ="offEvents">Off events</button><br><br>
<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>





<script>
	$(document).ready(function(){
		
		$("#box").on({
			"click": function(){
				$('#box').css("background","");
			},

			"mouseover": function(){
				$('#box').css("background","red");
			},

			"mouseout": function(){
				$('#box').css("background","blue");
			},


			})

		$("#offEvents").click(function(){
			$("#box").off("mouseover mouseout")
		})


	})
</script>
</body>
</html>
