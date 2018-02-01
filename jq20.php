<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery load</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("button").click(function(){
             
               
               var x = $("form").serializeArray();
               
               $.each(x,function(i,field)
               {
                  $("div").append(field.name + ":-" + field.value + " ");
                   
               });
               
           }); 
        });
    </script>
    </head>
    <body>
        <form action="">
           Firstname : <input type="text" name="first"><br><br>
           Lastname    <input type="text" name="last"><br><br>
        </form>
        <button>SerializeArray the form values</button>
        <div>
        
        </div>
    </body>
</html>