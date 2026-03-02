<?php
require_once('src/class.Frame.php');
require_once('src/class.inner.php');
require_once('src/class.Title.php');
require_once('src/class.inpElem.php');
$inpElem = [];
$frameObj = new Frame();
$titleLabelObj = new TitleFrame();
//$makeListDataObj = new MakeListData();

$innerWithInputBox0Obj = new InnerWithOneInput(0,"患者氏名","90%","90%","18px","");
//$cont0 = $innerWithInputBox0Obj->content();


$innerWithInputBox1Obj = new InnerWithOneInput(1,"住所","100%","90%","18px","");
$innerWithInputBox2Obj = new InnerWithOneInput(2,"年齢","100%","90%","18px","");
$innerWithListTowInputObj = new InnerWithListTowInput(3,"100%","98%","5%","3%","14px");
$innerWithInputBox3Obj = new InnerWithOneInputV(5,"医師の略歴 (精神保健指定医である等3年以上
精神医療に従事した経験を有することが分かるように記載すること。）","100%","90%","18px","");
$innerWithInputBox4Obj = new InnerWithOneInput(6,"医師指名","100%","90%","18px","");


?>
<html>
    <head>
        <title></title>
        <style>
            #body{background:black;color:white}
        </style>
        
        <script type="module" src="./js/index.js"></script>
        <style>
            .td{background:darkgreen;color:white}
        </style>
       
    </head>
    <body id="body" >
        <div id="" style="width:210mm;height:10mm;border:1px solid white;position:relative;display:flex">
            <button id="submitBtn">enter</button>
            <button id="confirmBtn">confirm</button>
        </div>   
        <div id="" class = "" style ="width:210mm;height:294mm;border:1px solid white;position:relative">
        <?php 
            $str = '「重度かつ継続」に関する意見書（追加用）' ;
            $titleLabelObj->titleLabel(0,"fit-content","fit-content","transparent","60mm","30mm",$str);
           
            $frameObj ->frame(0,"160mm","20mm","white","25mm","40mm",$innerWithInputBox0Obj);
            
            $frameObj ->frame(1,"122mm","20mm","white","25mm","60mm",$innerWithInputBox1Obj);
            
            $frameObj ->frame(2,"38mm","20mm","white","147mm","60mm",$innerWithInputBox2Obj);
            
            $listArray = ['主たる精神障害（ICD-10に準じ該当する番号に〇を付ける又は記載すること',
                          '症状性を含む器質性精神障害（F0）',
                          '精神作用物質による精神及び行動の障害（F1）',
                          '統合失調症、統合失調型障害及び妄想性障害（F72）',
                          '気分障害(F73)',
                          'てんかん（G40）',
                          ""
                           ] ;
            $listArray=$innerWithListTowInputObj->content($listArray);
            
            $frameObj->frame(3,"160mm","60mm","white","25mm","85mm",$listArray);
            $str1 = "「主たる精神障害」が上記⑥の場合のみ下記についても記載すること" ;
            $titleLabelObj->titleLabel(1,"fit_content","fit_content","transparent","25mm","160mm",$str1);
            
            $frameObj ->frame(5,"160mm","80mm","white","25mm","170mm",$innerWithInputBox3Obj);
            
            $frameObj ->frame(6,"160mm","20mm","white","25mm","255mm",$innerWithInputBox4Obj);
            

        ?>
        </div>
    </body>
    
</html>