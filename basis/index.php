<html>
    <head>
        <link rel="stylesheet" type="text/css" href="myStyle.css">    
    <script src="myJavascript.js"></script> 
        <script>
                                           
          
            
         </script>
        <style>
            table , tr, td {
                border:1px solid gray;
            }
                      
           
        </style>
        
        
    </head>
    <body>
                    
       <?php
       
       $idlabel=array(1,2,3,4,5,6,7,8);
       for($x=0;$x< count($idlabel);$x++){
             echo "<table><tr><td>$idlabel[$x]</td></tr></table>";
       }
       
       
       ?>
    </body>
</html>