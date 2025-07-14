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

    <title>Ancestors Method</title>
</head>
<body>

        <h2 style="color:red ;border:3px solid black">Ancestors Method :</h2><br>

        <h5>
            <b>⦁     Ancestors method used to target the parents tag of the child note tag.<br><br>
            <b> ⦁   pareant() : </b> Target the parent tag only.<br>
            <b> ⦁   pareants() : </b> Target All the parents, grand-parents, great-grandparents. Also we can specify parents selector in parents("#outer")<br>
            <b> ⦁   pareantsUntil() : Set the limit from selector to parent <code></code></b> <br>
            <b> ⦁   closest() : </b> its used to select any closest tag and aplly property on it<br>
            <b> ⦁   offsetPareant() : </b>is apply on only those element which have property:relative/absulute <br><br>
            <code>
        $("#child-3").parent().css("background","red");<br>
        $("#child-3").parents("#child-outer").css("background","orange")<br>
        $("#inner-div").parentsUntil("#child-main").css("background", "green");<br>
        $("#child-3").closest("div").css("background", "red");</code>
            <br>

</h5><br>

<div class="outer" id="child-main">
   <h4 >Main</h4>
            <div class="div3" id ="child-outer">
               <h4 >Outer</h4>
                <div class="div4">
                    <h4>Inner</h4>
                    <div class="inner-boxes" id="inner-div">
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
        
        //$("#child-3").parent().css("background","red");
        //$("#child-3").parents("#child-outer").css("background","orange")
        //$("#inner-div").parentsUntil("#child-main").css("background", "green");
        $("#child-3").closest("div").css("background", "red");


        
    })
</script>
</body>
</html>
