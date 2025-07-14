<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
     <style>
        

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

    <title>Sibling Method</title>
</head>
<body>

        <h2 style="color:red ;border:3px solid black">Sibling Method :</h2><br>

        <h5>
            <b>⦁    Sibling() :</b> method used to target the siblings of tag .<br><br>
            <b> ⦁   next() : </b> Target the next sibling of target element.<br> 
            <b> ⦁   nextAll() : </b> All next elements of target element.<br>
            <b> ⦁   nextUntil() : </b> set limit from target to the next elment.<br>
            <b> ⦁   prev() : </b> Target the previous sibling of target element.<br>
            <b> ⦁   prevAll() : </b> All previous elements of target element.<br>
            <b> ⦁   prevUntil() : </b> set limit from target to the previous elment.<br><br>
            <code>
                   $("#child-3").siblings().css("background","red");<br>
                   
            </code>
            <br>

</h5><br>


            <div class="div3" id ="outer">
               <h4 >Outer</h4>
                <div class="div4" id="inner">
                    <h4>Inner</h4>
                    <div class="inner-boxes" id="boxes">

                        <div>Box 1</div>
                        <div>Box 2</div>
                        <div id ="child-3">Box 3</div>
                    </div>
                </div>
            </div>

<br>

<script>
    $(document).ready(function(){
        
       
        $("#child-3").siblings().css("background","red");
        $("#child-3").next().css("background","red");

        
    })
</script>
</body>
</html>
