<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Append To Prepend To</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>

  <h2 style="color:red ;border:3px solid black">Append To Prepend To :</h2><br>

  <h5>
   <b> ⦁ AppendTo ()  </b>: is work as same as append but in this method fisrt we give appending text and then target element.<br>
    <b>⦁ AppendTo ()  </b>: is work as same as prepend but in this method fisrt we give prepending text and then target element<br>

  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>

  <button id="appendTo">Append To</button>
  <button id="prependTo">Prepend To</button><br><br>


  <script>
    $(document).ready(function () {
      $("#appendTo").click(function () {
        $("<h3>Good Night everyone</h3>").appendTo("#box");
      });

      $("#prependTo").click(function () {
        $("<h3>Good Morning everyone !!</h3>").prependTo("#box");
      });

    });
  </script>
</body>
</html>
