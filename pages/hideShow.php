<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hide Show Toggle</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


</head>
<body>

  <h2 style="color:red ;border:3px solid black">Hide Show Toggle :</h2><br>

  <h5>
   <b> ⦁ hide ()  </b>: is used to hide the section.<br>
   <b> ⦁ show()  </b>: is used to display the section.<br>
   <b> ⦁ toggle()  </b>: toggle of hide and show.<br>
   <b> We can assign time to function hide(1000) = 1 sec and also we can pass second parameter as callback funtion.<br>
  
    

  </h5><br>

  <div id="box" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>This is a dummy paragraph inside a div. You can use jQuery to show, hide, update, or animate this content dynamically.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
    <p>Feel free to experiment with events like <strong>click</strong>, <strong>hover</strong>, and more.</p>
</div> <br><br>


  <button id="hideBtn">Hide</button>
  <button id="showBtn">Show</button>
  <button id="toggleBtn">toggle</button>

  


  <script>
    $(document).ready(function () {
     $("#showBtn").click(function(){
      $("#box").show(1000,function(){
        $("#data").remove();
      });
     });

      $("#hideBtn").click(function(){
      $("#box").hide(1000,function(){
        $("#box").after("<h3 id ='data'style='color:red'>Try Try But Don't Cry.</h3>");
      });
     });

     $("#toggleBtn").click(function(){
          $("#box").toggle(1000);
         })


    });
  </script>
</body>
</html>
