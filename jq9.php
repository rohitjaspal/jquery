<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        /*$(selector).submit(),$(selector).submit(function)*/
        $(document).ready(function(){
           $("form").submit(function(event){
                
               if($("input:first").val() === "Arindam")
                {
                    $("span").text("Submitted Successfully.").show().fadeOut(5000);
                       setTimeout(function(){
                             $("input.first").val(" ");
                       },3000);
                    return;
                }
               else if($("input:first").val()==="Abhi")
                {
                   $("span").text("submitted successfully.").show().fadeOut(5000);
                   setTimeout(function(){
                             $("input.first").val(" ");
                       },3000);
                   return;
                }
               else
               {
                   $("span").text("Not Valid..!").show().fadeOut(2000);
                   setTimeout(function(){
                             $("input.first").val(" ");
                       },3000);
                   event.preventDefault();
               }
           }); 
        });
        
    </script>
    </head>
    <body>
        <form action="javascript:alert('success.!');">
            <label>Enter Name</label>
            <input type="text" class="first">
            <input type="submit">
        </form>
        <span></span>
    </body>
</html>