<?php
require_once('src/class.Frame.php');
require_once('src/class.inner.php');
$frameObj = new Frame();
//$inner0Obj = new InnerWithInputBox1(inpNumber,"subTitle","width","height","left","top","fontSize");
$inner0Obj = new InnerWithInputBox1(0,"inpNumber 0","100%","90%","1%","5%","12px");
$inner1Obj = new InnerWithInputBox1(0,"inpNumber 1","100%","90%","1%","5%","12px");
$inner2Obj = new InnerWithInputBox1(0,"inpNumber 2","100%","90%","1%","5%","12px");
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
            $frameObj->frame(1,"100mm","15mm","white","30mm","65mm",$inner1Obj);
            $frameObj->frame(2,"80mm","15mm","white","100mm","90mm",$inner2Obj);
              
            
        ?>
        </div>
    </body>
    
</html>