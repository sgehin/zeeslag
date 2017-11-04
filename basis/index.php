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
            button{
                width: 20;
                height: 20;
            }          
           
        </style>
        
        
    </head>
    <body>
   
    
    
    <tabel>
        <tr>
                    
       <?php
       // bord opmaken
       for($row=0;$row<4;$row++){
            $idlabel=array(1,2,3,4,5,6,7,8);
            for($x=0;$x< count($idlabel);$x++){
                echo "<td><button type='button' onclik=myfunctie() id=$idlabel[$x]>-</button></td>";
                echo '<td><button type="button" onclik="myfunctie() id="b7">X</button></td>';                
            }
            echo "<br>";
       }    
        ?>
        </tr>
    </tabel> 
    <script>
        
            function myfunctie(){
                alert("test");
                document.getElementById('b7').innerhtml='test';
                }
                       
            }
                    
    </script>
            
       
    </body>
</html>