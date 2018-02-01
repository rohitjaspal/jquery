<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
        <form>
            <select id="sel" name="country" multiple="multiple">
                <option>Nepal</option>
                <option selected="selected">India</option>
                <option>USA</option>
                <option selected="selected">USSR</option>
                <option>UK</option>
            </select>
        
        </form>
    
        <div id="country">
        
        </div>
        <script>
            $("select").change(function(){
               var str = "";
            $("select option:selected").each(function(){
                str + $(this).text(str); 
            });
                $("div").text(str);
            })
            .change();
        
        </script>
    </body>
</html>