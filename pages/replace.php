<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Replace</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>

  <h2 style="color:red ;border:3px solid black">Repplace with || Replace All :</h2><br>

  <h5>
   <b> ⦁ ReplaceWith ()  </b>: is used to replace the tag of the element with other tag.(span->p) and also it can <b style="color:green">replace text</b><br>
    <b>⦁ ReplaceAll ().</b>: is used to replace all the tags in the box with new tags only.</br>
    <b>⦁ In ReplaceAll ().</b>: first we need to give replace tags and value then pass target element.</br>

    

  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>


  <button id="replaceBtn">Replace With</button>
  <button id="replaceAllBtn">Replace All</button>
  


  <script>
    $(document).ready(function () {
     $("#replaceBtn").click(function(){
      $("#box p").replaceWith("<h2>Hello Sachin Potre</h2>");
     });

      $("#replaceAllBtn").click(function(){
      $("<h2>Yahoo Baba</h2>").replaceAll("#box p");
     });

    });
  </script>
</body>
</html>
