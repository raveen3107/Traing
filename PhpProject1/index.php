<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script>
$(document).ready(function() {
    $("#name").keyup(function(){
        var dd=$(this).val();
          alert(dd);
       $.ajax({
          type: "POST",
        url: "data/search.php",
         data: ({key:dd}),
    success: function(result){
       alert(result);
    }
});
});
});
</script>
        
        
    </head>
    
    
    <body>
  
              <input type="text" id="name" >
	
    </body>
</html>
