<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<title>Filtering Methods</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Filtering Methods :</h2><br>

		<h5>
			<b>⦁	 First </b>: Fetch first tag/element/id and apply properties on it.<br>
			<b>⦁	 last </b>: Fetch Last tag/element and aplly properties on it.<br>
			<b>⦁	 Eq </b>: use to specify number eq(3)=3rd.<br>
			<b>⦁	 Filter </b>: to select the class/tag/id and apply properties.<br>
			<b>⦁	 Not </b>: Target to those parameter except specified in not().<br>
			<b>⦁	 Slice </b>: select part of element to the last element. slice(2) : from index 2 to last element<br>

</h5>

<div id="box1" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div><br>

<ul id ="list">
		<li class ="test">Mango</li>
		<li>Apple</li>
		<li class ="test">Banana</li>
		<li>Orange</li>
		<li>Litchi</li>
		<li>Pineapple</li>
		<li>Papaya</li>
	</ul><br>

	<div id="box2" class ="boxing" style="padding: 15px; background-color:tan; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p class ="data">This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br>

<script>
	$(document).ready(function(){
		
		$('p').first().css('background','red');
		$('p').last().css('color','blue');
		$('#list li').first().css('background','orange');
		$('#list li').eq(4).css('color','green');
		$('p').filter('.data').css('background','grey');
		$('p').not('.data').css('color','brown');
		$('#list li').slice(5).css('background','red');


	})
</script>
</body>
</html>
