<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Append Prepend</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>


  <h2 style="color:red ;border:3px solid black">Append Prepend / After Before :</h2><br>

  <h5>
   <b> ⦁ Append </b>: use to append the text and tag at the end of element.<br>
    <b>⦁ Prepend </b>: use to add the tect and tag at the start of the element.<br>
    <b>⦁ After </b>: after the element.<br>
    <b>⦁ Before </b>: before the element.<br>
 
  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>


  <button id="append">Append</button>
  <button id="prepend">Prepend</button><br><br>
  <button id="afterBtn">After</button>
  <button id="beforeBtn">Before</button>

  <script>
    $(document).ready(function () {
      $("#append").click(function () {
        $("#box").append("<h3>Good Night</h3>");
      });

      $("#prepend").click(function () {
        $("#box").prepend("<h3>Good Morning</h3>");
        $("#box h3:first").css({ "color": "red" });
      });

      $("#afterBtn").click(function () {
        $("#box").after("<h3>Try Try But Don't Cry.</h3>");
      });

      $("#beforeBtn").click(function () {
        $("#box").before("<h3>Come To Learn And Go To Serve.</h3>");
      });
    });
  </script>
</body>
</html>
