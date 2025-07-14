<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<title>Each Method</title>
</head>
<body>


	<h2 style="color:red ;border:3px solid black">Each Method :</h2><br><br>

<h5>
			<b>⦁	 Each </b>: is use to select same elements and apply loop on it.<br>
			
			
			

</h5><br>

	<ul id ="list">
		<li>Mango</li>
		<li>Apple</li>
		<li>Banana</li>
		<li>Orange</li>
		<li>Litchi</li>
		<li>Grapes</li>
	</ul><br>


	<script>
		
		$(document).ready(function(){

          $('#list li').each(function(){
          	$(this).text("hello").css('color','red');
          })
			
			
		});


	</script>



</body>
</html>