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

	<title>Empty Remove Method</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Empty Remove Method :</h2><br>

		<h5>
			<b>⦁	Empty </b>: use to empty the content (content inside the div).<br>
			<b>⦁	Remove </b>: use to remove the element (remove div).<br>

</h5><br>

	



<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>
<button id ="emptyBtn">Empty Element</button>
<button id ="removeBtn">Remove Element</button><br><br>







<script>
	$(document).ready(function(){
		
		$("#emptyBtn").click(function(){
			$("#box").empty();
		});

		$("#removeBtn").click(function(){
			$("#box").remove();
		})
	
	


	})
</script>
</body>
</html>
