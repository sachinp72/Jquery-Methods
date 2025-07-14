<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>wrap Unwrap</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

  <style>
    #test{
      color:greay;
      border: 2px solid black;
    }
  </style>
</head>
<body>

  <h2 style="color:red ;border:3px solid black">Wrap Unwrap :</h2><br>

  <h5>
   <b> ⦁ wrap ()  </b>: is used to wrap any tag under other tag.<br>
   <b> ⦁ wrapAll()  </b>: is used to wrap multiple tags under other tag.<br>
   <b> ⦁ wrapInner()  </b>: is used to wrap any text inside tag.<br>
    <b>⦁ Unwrap ().</b>: is used remove the content from parent tag.</br>
    

    

  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>


  <button id="wrapBtn">Wrap</button>
  <button id="unwrapBtn">Unwrap</button>
  <button id="wrapAllBtn">Wrap all</button>
  <button id="wrapInnerBtn">Wrap Inner</button>
  


  <script>
    $(document).ready(function () {
     $("#wrapBtn").click(function(){
      $("#box p").wrap("<h2 style = 'color:red'></h2>")
     });

     $("#unwrapBtn").click(function(){
      $("#box p").unwrap();
     })

     $("#wrapAllBtn").click(function(){
      $("#box p").wrapAll("<pre style='background:orange'></pre>");
     })

     $("#wrapInnerBtn").click(function(){
      $("#box p:last").wrapInner("<b id ='test'></b>");
     })

    });
  </script>
</body>
</html>
