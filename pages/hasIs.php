<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<title>Has Is Methods</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Has Is Methods :</h2><br>

		<h5>
			<b>⦁	 Has </b>: Target those element which has specified element for their child. $(p)has('b').<br>
			<b>⦁	 Has </b>: It prefer child tag of targetted parent tag .<br>
			<b>⦁	 Is </b>: Target those element which have specified tag/class/id.<br>
			<b>⦁	 Is </b>: is used in if clause to check the condition.<br>
			

</h5>

<div id="box1">
  <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div>

<h3>Welcome...</h3>
<p class="data">This is a dummy paragraph inside a div...</p>  
<p>Feel free to experiment with events...</p>                   
                                       



<script>
	$(document).ready(function(){
		
		$('p').has('strong').css('color','red');
		$('p').has('.data').css('background','gold');

		$('p').click(function() {
    if ($(this).is('.data')) {
        alert('This paragraph have data class');
    } else {
        alert('No data class');
    }
});

		


	})
</script>
</body>
</html>
