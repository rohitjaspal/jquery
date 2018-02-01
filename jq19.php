<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery load</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("button").click(function(){
                $("div").text($("form").serialize()); 
           }); 
        });
    </script>
    </head>
    <body>
        <form action="">
           Firstname : <input type="text" name="first"><br><br>
           Lastname    <input type="text" name="last"><br><br>
        </form>
        <button>Serialize the form values</button>
        <div>
        
        </div>
    </body>
</html>