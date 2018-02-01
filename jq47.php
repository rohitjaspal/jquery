<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery Outer Height</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
        /* It will return the inner width of the first matched element without including border and margin.*/
        $(document).ready(function(){
           $("button").click(function(){
               alert("Outer height of div ="+ $("div").outerHeight());
              alert("Outer width of div ="+ $("div").outerWidth()); 
           }); 
        });
    </script>
    <style>
        .block1{
            height:100px;
            width:500px;
            padding:10px;
            margin:3px;
            border:solid blue;
            border-width:15px;
            background-color: coral;
        }
    </style>
    </head>
    <body>
     <div class="block1">
        <p>this is block</p>   
     </div>
        <hr>
        <button>Click me</button>
    </body>
</html>