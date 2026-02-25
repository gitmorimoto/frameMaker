<?php
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
           // echo $this->inner->inpBox();
        echo '</div>';
    }

}
?>