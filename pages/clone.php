<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clone Method</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>

  <h2 style="color:red ;border:3px solid black">Clone Method :</h2><br>

  <h5>
   <b> ⦁ Clone ()  </b>: is used to clone the data from one element to other.<br>
    <b>⦁ $("#box1").clone().prependTo("#box2").</b></br>

    

  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>

<div id="cloneBox" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <p></p>
</div><br><br>

  <button id="cloneBtn">Clone</button>
  


  <script>
    $(document).ready(function () {
      $("#cloneBtn").click(function(){
        $("#box h3,p").clone().prependTo("#cloneBox")
      });

    });
  </script>
</body>
</html>
