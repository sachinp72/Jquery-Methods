<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<title>Get Methods</title>
</head>
<body>

	

				<h2 style="color:red ;border:3px solid black">Get Methods :</h2><br>

				<h5>
<b>⦁	.html()</b>  - Html of selctor.<br>
<b>⦁	.text()</b>  - text of selctor.<br>
<b>⦁	attr('class')</b> - show the attribute class.<br>
<b>⦁	.val()</b>   - get value of form.<br>

				</h5><br>




<div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>

<form id="fruitForm">
<input type="text" id="name" placeholder="Enter Name"><br>
<input type="text" id="city" placeholder="Enter City"><br>
  <label for="fruits">Choose a fruit:</label>
  <select id="fruits" name="fruit">
    <option value="apple">Apple</option>
    <option value="banana">Banana</option>
    <option value="mango">Mango</option>
    <option value="orange">Orange</option>
  </select>

  <br><br>

  <button type="submit">Submit</button>
</form><br><br>


<script>
	$(document).ready(function(){
		var a = $("#box p").html();
		//console.log(a);

		var b = $("#box").text();
		console.log(b);

		var c = $("#box").attr('class');
		console.log(c);

		$("#fruitForm").submit(function(){

			var sname = $('#name').val();
			alert("hello " + sname);

		});
	})
</script>
</body>
</html>
