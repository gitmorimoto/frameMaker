<?php
require_once('src/class.Frame.php');
require_once('src/class.inner.php');
require_once('src/class.Title.php');
$frameObj = new Frame();
$titleLabelObj = new TitleFrame();
$makeListDataObj = new MakeListData();

//$inner0Obj = new InnerWithInputBox1(inpNumber,"subTitle","width","height","left","top","fontSize");
$innerWithInputBox0Obj = new InnerWithInputBox1(0,"患者氏名","100%","90%","1%","5%","18px");
$innerWithInputBox1Obj = new InnerWithInputBox1(1,"住所","100%","90%","1%","5%","18px");
$innerWithInputBox2Obj = new InnerWithInputBox1(2,"年齢","100%","90%","1%","5%","18px");
$ListMakerObj = new ListMaker(1,"inpNumber 2","100%","90%","1%","5%","12px");
$InnerWithInputBox1Obj = new InnerWithInputBox1(2,"inpNumber 1","100%","90%","1%","5%","12px");

?>
<html>
    <head>
        <title></title>
        <style>
            #body{background:black;color:white}
        </style>
    </head>
    <body id="body" >
        <div id="" class = "" style ="width:210mm;height:294mm;border:1px solid white;position:relative">
        <?php 
            $str = '「重度かつ継続」に関する意見書（追加用）' ;
            $titleLabelObj->titleLabel(0,"fit_content","fit_content","transparent","60mm","35mm",$str);
            $innerWithInputBox1Obj->content();
            $frameObj ->frame(0,"160mm","20mm","white","25mm","55mm",$innerWithInputBox0Obj);
            $frameObj ->frame(1,"122mm","20mm","white","25mm","75mm",$innerWithInputBox1Obj);
            $frameObj ->frame(2,"38mm","20mm","white","147mm","75mm",$innerWithInputBox2Obj);
            //$listArray = ['a','b','c','d'] ;
            //$listArray=$makeListDataObj->list_maker($listArray);
            //$frameObj->frame(1,"100mm","50mm","white","30mm","65mm",$listArray);
        ?>
        </div>
    </body>
    
</html>