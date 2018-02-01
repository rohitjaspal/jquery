<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery unwrap</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script> /*It is a reverse process of wrap.*/   
        $(document).ready(function(){
           $("button").click(function(){
              $("p").unwrap(); 
           }); 
        });
    </script>
    <style>
        div{
            background-color: cornflowerblue;
        }
    </style>
    </head>
    <body>
        <div>
            <p>This is para</p>
        </div>
        <button>click me</button>
    </body>
</html>