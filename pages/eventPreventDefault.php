<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<title>Event Prevent Default</title>
</head>
<body>


	<h2 style="color:red ;border:3px solid black">Event Prevent Default :</h2><br><br>

<h5>
			<b>⦁	 EventPreventDefault </b>: is use to modify the default action of element.<br>
			<b>⦁	 Its disable the default action of the link.<br>
			<b>⦁	 isPreventedDefault</b> : It is used to check if the element is prevented or not. return True/false<br>
			
			
			

<a href="https://www.youtube.com/watch?v=Jq-zdOb59Jo" id ="prevent">click this Prevented Link</a><br><br>
<a href="https://www.youtube.com/watch?v=Jq-zdOb59Jo" >click this Default Link</a>


	<script>
		
		$(document).ready(function(){

          $('#prevent').click(function(event){
          	event.preventDefault();
          })
			
			
		});


	</script>



</body>
</html>