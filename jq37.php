<!DOCTYPE HTML>
<html>
<head>
    <title>Jquery prop method</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>/*This methos is used fortwo purposes. i)It is used to return the value of property for the first elemenr in set of matched elements. ii)It is used to set one or more property value for a set of matched element. It is used to retrieve the property values like D.O.M. propertylike tag name, node name, default check. */
          /*$(selector).prop(property)*/
        $(document).ready(function(){
           $("button").click(function(){
              var $x = $("div");
               $x.prop("color","#ff22ee");
               $x.append("Thie value of color property :" + $x.prop("color"));
               $x.removeProp("color");
               $x.append("<br>Now the value of color property:"+$x.prop("color"));
           }); 
        });
    </script>
    </head>
    <body>
         <button>Add /Remove </button>
        <div></div>
    </body>
</html>