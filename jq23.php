<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery mouse enter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("button").click(function(){
            $("p").text("hello i am changing text");  
           });
        });
    </script>
    <style>
        p{
            color:blueviolet;
            margin:8px;
        }
       
    </style>
    <body>
        <button>Clickme</button>
        
        <p>HelloThis is my para</p>
        <p>Looking for online training</p>
    </body>
    </head>