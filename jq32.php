<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery clone </title>
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <script>
           /*clone() method is used tomake copies of the set of matched elements.
           It also make copies of their child nodes and attributes.The clone() method 
           is a convenient way to duplicate elements on the page.
           Syntax - $(selector).clone(true|false)*/
    $(document).ready(function(){
       $("button").click(function(){
          $("p").clone().appendTo("div"); 
       }); 
    });
    </script>
    <style>
        div{
            height: auto;
            width:300px;
            background-color: deepskyblue;
            color:white;
            font-size:18px;
            font-family: fantasy;
        }
    </style>
    </head>
    <body>
       <p>This is example para</p>
        <p>This is second example para</p>
        <button>Clone me</button>
        <div>
        <h1>Arindam</h1>
        </div>
    </body>
</html>