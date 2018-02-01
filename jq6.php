<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
        <form>
            <select id="sel" name="country">
                <option>Nepal</option>
                <option selected="selected">India</option>
                <option>USA</option>
                <option>USSR</option>
                <option>UK</option>
            </select>
        
        </form>
    
        <div id="country">
        
        </div>
        
        <script>
            $(document).ready(function()
            {
               $("select").change(function(){
                  document.getElementById("country").innerHTML = "You have selected the country " + document.getElementById("sel").value;
               }); 
            });
        </script>
    </body>
</html>