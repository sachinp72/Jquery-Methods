<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Width Method</title>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<body>

  <h2 style="color:red ;border:3px solid black">width Method :</h2><br>

  <h5>
   <b> ⦁ width ()  </b>: is used to mesure the width of text inside the box.<br>
   <b> ⦁ innerwidth ()  </b>: total width inside the box including text text.<br>
   <b> ⦁ outerwidth ()  </b>: total width from ouside the box (Border to Border).<br>
   <b> ⦁ outerwidth (true)  </b>: total width from ouside the box with page.<br>
    
  </h5>

  <h5>
   <b> ⦁ height ()  </b>: is used to mesure the height of text inside the box.<br>
   <b> ⦁ innerheight ()  </b>: total height inside the box including text text.<br>
   <b> ⦁ outerheight ()  </b>: total height from ouside the box (Border to Border).<br>
   <b> ⦁ outerheight (true)  </b>: total height from ouside the box with page.<br>
    
  </h5><br>

  <div id="cloneBox" class ="boxing" style="padding: 15px; background-color: #f0f0f0; border: 1px solid #ccc;">
    <img src="images/width.png" alt="image not found" width="500" height="400">
    <img src="images/height.png" alt="image not found" width="500" height="400">
</div><br><br>

  <div id="box" class ="boxing2" style="padding: 15px; background-color: #f0f0f0; border: 15px solid black;">
    <h3>Welcome to jQuery Learning!</h3>
    <p>
jQuery provides a variety of event handlers to interact with user actions. Mouse Events include actions like .click, .dblclick, .contextmenu (right-click), .mouseenter, and .mouseleave, which respond to mouse interactions. Keyboard Events such as .keypress, .keyup, and .keydown handle user input via the keyboard. Form Events like .focus, .blur, .change, .select, and .submit are used to manage form behavior and input field interactions efficiently.
</p>

</div> <br>
  <button id="widthBtn">Width</button>
    <button id="heightBtn">Height</button>
    <button id="offsetBtn">Offset</button>
    <button id="postionBtn">Position</button><br><br>

  <script>
    $(document).ready(function () {
      $("#widthBtn").click(function(){
       console.log("Width :" + $("#box").width());
       console.log("innerWidth :" + $("#box").innerWidth());
       console.log("outerWidth :" +$("#box").outerWidth());
       console.log("outerWidth ;" + $("#box").outerWidth(true));
      });


       $("#heightBtn").click(function(){
       console.log("height :" + $("#box").height());
       console.log("innerHeight :" + $("#box").innerHeight());
       console.log("outerHeight :" + $("#box").outerHeight());
       console.log("outerHeight :" + $("#box").outerHeight(true));
      });

       $("#offsetBtn").click(function(){
        console.log("Offset :" + $("#box").offset());
       });

       $("#postionBtn").click(function(){
        console.log("Position :" + $("#box p").position());
       })

    });
  </script>
</body>
</html>
