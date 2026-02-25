<?php
require_once('src/class.Frame.php');
require_once('src/class.inner.php');
$frameObj = new Frame();
$inner0Obj = new InnerWithInputBox(0,"inpNumber 0","70%","80%","5%","5%");
?>
<html>
    <head>
        <title></title>
        <style>
            #body{background:black;color:white}
        </style>
    </head>
    <body id="body" >
        <div id="" class = "" style ="width:210mm;height:294mm;border:1px solid white">
        <?php 
            $frameObj->frame(0,"100mm","15mm","white","30mm","50mm",$inner0Obj);
              
            
        ?>
        </div>
    </body>
    
</html>