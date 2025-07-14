<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<style>
        .info-box {
            width: 300px;
            margin: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 5px solid #2196f3;
            font-family: Arial, sans-serif;
            font-size: 14px;
            position: relative;

        }
    </style>

	<title>Animate Method</title>
</head>
<body>

		<h2 style="color:red ;border:3px solid black">Animate Method : Attractive Animation</h2><br>

		<h5>
			<b>⦁	 Animate Method </b>: use for to animate and move the section.<br>
			<b>⦁	 We can pass callback function for additional task as well <br>
			<b>⦁	 Position must be set previously to the section so animate function can move the element<br>
			<b>⦁	 Stop() method is used to stop running animation in between of completion. to stop all animation at once :<b> stop(true) </b><br>

</h5><br>

	

<h4 id="data" style="color:green"></h4>

<div class="info-box" id ="box">
    Welcome To Jquery E-Book.
</div> <br><br>
<button id ="animateBtn">Animate</button>
<button id ="animateBtn2">Animate Advance</button>
<button id ="stopBtn">Stop</button>







<script>
	$(document).ready(function(){
		
		$("#animateBtn").click(function(){
			$("#box").animate({
				left : '350px',
				width: '500px',
				fontSize : '25px',
			}),3000
		});

		$("#animateBtn2").click(function(){
			$("#box").animate({left : '250px'},2000,function(){
               $("#data").text("Moving Toward Down");
               
			});

			$("#box").animate({top : '250px'},2000,function(){
               $("#data").text("Moving Toward Left");
               
			});

			$("#box").animate({left : '0px'},2000,function(){
               $("#data").text("Moving Toward Up");
                
			});

			$("#box").animate({top : '0px'},2000,function(){
               $("#data").text("Moving Toward right");
                
			})
		})

		$("#stopBtn").click(function(){
			$("#box").stop();
		})
	})
</script>
</body>
</html>
