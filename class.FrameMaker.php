<?php
class Inner
{
    protected $inNumber;
    protected $content;
    protected $contWidth;
    protected $contHeight;
    protected $contLeft;
    protected $contTop;
    function __construct($inNumber,$content,$contWidth,$contHeight,$contLeft,$contTop)
	{
        $this->inNumber = $inNumber;
		$this->content = $content;
        $this->contWidth = $contWidth;
        $this->contHeight = $contHeight;
        $this->contLeft = $contLeft;
        $this->contTop = $contTop;

	}

    public function content()
    {
        $inNumber = $this->inNumber;
        $content = $this->content;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white' >
            {$content}
            </div>";
        return $cont;
    }

    public function inpBox()
    {
        $inNumber = $this->inNumber;
        $content = $this->content;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white' >
            {$content}
            <input id='td{$inNumber}' class='td' style='
            width:70%;
            height:70%;
            background:darkgreen;
            color:white'>
            </div>";
        return $cont;
    }


}

class Frame
{
    protected $width;
    protected $height;
    protected $borderColor;
    protected $left;
    protected $top;
    protected $inner;
    
    
    public function frame($fN,$w,$h,$borderColor,$left,$top,$innerObj)
    {
        $this->width = $w;
        $this->height = $h;
        $this->borderColor = $borderColor;
        $this->left = $left;
        $this->top = $top;
        $this->inner = $innerObj;
       
        echo '<div id="frame'.$fN.'" class = "frame" 
        style="width:'.$this->width.';height:'.$this->height.';position:absolute;top:'.$this->top.';
        left:'.$this->left.';border:1px solid '. $this->borderColor.'">' ;
            echo $this->inner->content();
            echo $this->inner->inpBox();
        echo '</div>';
    }

}
////////////////////////////example//////////////////////////////////////////////
$frObj = new Frame();
$inner0Obj = new Inner(0,"This is test0","98%","98%","5%","5%");
$inner1Obj = new Inner(1,"This is test1","98%","98%","5%","5%");
$inner2Obj = new Inner(2,"Takehiko Morimoto","98%","98%","5%","5%");

?>
<html>
    <head>
        <style>
            #body{background:black;color:white}
        </style>
    </head>
    <body id="body" style = "width:100%;height:600px">
        <div id="sheet0" class="sheet" style="width:210mm;height:297mm;border:1px solid white;position:relative">
        <?php
            //echo $inner;
            $frObj->frame(0,"158mm","20mm","white","25mm","54mm",$inner0Obj);
            $frObj->frame(1,"158mm","20mm","white","25mm","74mm",$inner1Obj);
            $frObj->frame(2,"80mm","20mm","white","100mm","150mm",$inner2Obj);
            //$frObj->frame(1,"120mm","20mm","white","25mm","75mm",$inner1);
            //$frObj->frame(2,"38mm","20mm","white","145mm","75mm",$inner2);
           
        ?>
        </div>

    </body>
</html>