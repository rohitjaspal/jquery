<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
     <script>
        $(document).ready(function(){
           $("input").focus(function()
           {
              /*alert("this is blur example"); */
            $(this).next("span").css("display","none").fadeIn(5000);
            $(this).css("background-color","red");
           }); 
        });
    
    </script>
    <style>
        span{display:inline;}
    </style>
    
    <body>
    <form>
            <label> Name:</label>
            <input type="text" id="input1"><span>Enter username</span>
            <hr>
        <label> Password:</label>
            <input type="password" id="input2"><span>Enter password</span>
        </form>
    
    </body>
</html>