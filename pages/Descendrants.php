<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
     <style>
        .outer {
            padding: 30px;
            width: 700px;
            background-color: tan;
        }


        .div3 {
            padding: 30px;
            width: 600px;
            background-color: lightblue;
        }

        .div4 {
            padding: 30px;
            width: 500px;
            background-color: #fbe3e4;
        }

        .inner-boxes {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .inner-boxes div {
            flex: 1;
            height: 60px;
            background-color: grey;
            text-align: center;
            line-height: 60px;
            border: 1px solid #888;
        }
    </style>

    <title>Descendrants Method</title>
</head>
<body>

        <h2 style="color:red ;border:3px solid black">Descendrants Method :</h2><br>

        <h5>
            <b>⦁    Descendrant method used to target the children tag of the parent note tag.<br><br>
            <b> ⦁   children() : </b> Target the children tag only. also we can specify perticular child or any class.<br> 
            <b> ⦁   find() : </b> used to find the element and add properties on it.<br><br>
            <code>
                    $("#mid").children().css("background","red");<br>
                    $("#top").find(".inner-boxes").css("background","red");<br>
            </code>
            <br>

</h5><br>

<div class="outer" id="top">
   <h4 >Top</h4>
            <div class="div3" id ="mid">
               <h4 >Mid</h4>
                <div class="div4" id="outer">
                    <h4>Outer</h4>
                    <div class="inner-boxes" id="inner">

                        <div>Box 1</div>
                        <div>Box 2</div>
                        <div id ="child-3">Box 3</div>
                    </div>
                </div>
            </div>
</div> 
<br>

<script>
    $(document).ready(function(){
        
       // $("#mid").children().css("background","red");
        $("#top").find(".inner-boxes").css("background","red");
        

        
    })
</script>
</body>
</html>
