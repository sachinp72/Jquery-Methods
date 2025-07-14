<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	 <title>jQuery Events Table</title>
    <style>
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 16px;
        }
        th {
            background-color: #e0f7fa;
            font-weight: bold;
        }
    </style>

	<title>Learn Jquery</title>
</head>
<body>


			<h2 style="color:red ;border:3px solid black">Form events :</h2><br><br>

		

<table>
    <tr>
        <th>Mouse Events</th>
        <th>Keyboard Events</th>
        <th>Form Events</th>
    </tr>
    <tr>
        <td>.click</td>
        <td>.keypress</td>
        <td>.focus</td>
    </tr>
    <tr>
        <td>.dblclick</td>
        <td>.keyup</td>
        <td>.blur</td>
    </tr>
    <tr>
        <td>.contextmenu  (Right click)</td>
        <td>.keydown</td>
        <td>.change</td>
    </tr>
    <tr>
        <td>.mouseenter</td>
        <td></td>
        <td>.select</td>
    </tr>
    <tr>
        <td>.mouseleave</td>
        <td></td>
        <td>.submit</td>
    </tr>
</table>




	<ul id ="list">
		<li class ="test">Mango</li>
		<li>Apple</li>
		<li class ="test">Banana</li>
		<li>Orange</li>
	</ul><br>


<div id="infoBox" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
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



	<h5 id="data"></h5>
    
<br><br>







	<script>
		
		$(document).ready(function(){

			 $(".test").css("color","red");  //1

			 $("#infoBox").click(function(){         //2

			    $("#infoBox").css("background","red");
			 })


			 $("#infoBox").dblclick(function(){           //3

			    $("#infoBox").css("background","green");
			 })

			  $("#infoBox").contextmenu(function(){           //4

			    $("#infoBox").css("background","orange");
			 })

			  $("#infoBox").mouseenter(function(){           //5

			    $("#infoBox").css("background","blue");
			 })

			   $("#infoBox").mouseleave(function(){           //6
			    $("#infoBox").css("background","tan");
			 })

           // Keyboard events:

			   $('body').keypress(function(){
			   	$('body').css("background","grey");
			   })

			    $('body').keyup(function(){
			   	$('body').css("background","purple");
			   })

			     $('body').keydown(function(){
			   	$('body').css("background","black");
			   })


			 // form events

			     $('#name,#city').focus(function(){
			   	$(this).css("background","lime");
			   })

			      $('#name,#city').blur(function(){
			   	$(this).css("background","");
			   })

			      $('#fruits').change(function(){   // use for dropdown
			   	$(this).css("background","orange");

			   	var a = $(this).val();
			   	$('#data').html(a);
			   })

			      $('#fruitForm').submit(function(){
			   	alert("Your data submitted successfully!")
			   })

			
		});


	</script>



</body>
</html>