<?php
class Inner
{
    protected $content;
    protected $contWidth;
    protected $contHeight;
    protected $contLeft;
    protected $contTop;
   

    public function content($content,$contentWidth,$contentHeight,$contentLeft,$contentTop)
    {
        $this->content = $content;
        $this->contWidth = $contentWidth;
        $this->contHeight = $contentHeight;
        $this->contLeft = $contentLeft;
        $this->contTop = $contentTop;
        echo $this->content;
        /*
        echo "<div id='' class = '' style='
            width:{$this->contWidth};
            height:{$this->contHeight};
            position:absolute;
            left:{$this->contLeft};
            top:{$this->contTop};
            border:2px solid white;
            color:white' >
            {$this->content}
            </div>";
            */
        $cont = "<div id='' class = '' style='
            width:{$this->contWidth};
            height:{$this->contHeight};
            position:absolute;
            left:{$this->contLeft};
            top:{$this->contTop};
            border:2px solid white;
            color:white' >
            {$this->content}
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
    
    
    public function frame($fN,$w,$h,$borderColor,$left,$top,$inner)
    {
        $this->width = $w;
        $this->height = $h;
        $this->borderColor = $borderColor;
        $this->left = $left;
        $this->top = $top;
        $this->inner = $inner;
       
        
        
       
        echo '<div id="frame'.$fN.'" class = "frame" 
        style="width:'.$this->width.';height:'.$this->height.';position:absolute;top:'.$this->top.';
        left:'.$this->left.';border:1px solid '. $this->borderColor.'">' ;
            echo $this->inner;
        echo '</div>';
    }

}
////////////////////////////example//////////////////////////////////////////////
$frObj = new Frame();
$innerObj = new Inner();

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
            //$innerObj->content($content,$w,$h,$left,$top)
           
            $content0 = "this is a test0.";
            $content1 = "this is a test1.";
            $content2 = "this is a test2.";
            //$w = "100%";
            //$h = "100%";
            //$left = "0mm";
            //$top = "0mm";
            $inner0 = $innerObj->content($content0,"100%","100%","0mm","0mm");
            $inner1 = $innerObj->content($content1,"100%","100%","0mm","0mm");
            $inner2 = $innerObj->content($content2,"100%","100%","0mm","0mm");
            //echo $inner;
            $frObj->frame(0,"158mm","20mm","white","25mm","54mm",$inner0);
            $frObj->frame(1,"120mm","20mm","white","25mm","75mm",$inner1);
            $frObj->frame(2,"38mm","20mm","white","145mm","75mm",$inner2);
           
        ?>
        </div>

    </body>
</html>