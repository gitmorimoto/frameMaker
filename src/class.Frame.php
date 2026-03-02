<?php
class Frame
{
    protected $width;
    protected $height;
    protected $borderColor;
    protected $left;
    protected $top;
    public $inner;
    
    
    public function frame($fN,$w,$h,$borderColor,$left,$top,$inner)
    {
        $this->width = $w;
        $this->height = $h;
        $this->borderColor = $borderColor;
        $this->left = $left;
        $this->top = $top;
        $this->inner = $inner;
        //print_r($this->inner);
        if(gettype($this->inner)=='array')
        {
            //echo 'array';
            $n=count($this->inner);
            echo '<div id="frame'.$fN.'" class = "frame" 
            style="width:'.$this->width.';height:'.$this->height.';position:absolute;top:'.$this->top.';
            left:'.$this->left.';border:1px solid '. $this->borderColor.'">' ;
                for($i=0;$i<$n;$i++)
                {
                    echo $this->inner[$i];
                }
                
            // echo $this->inner->inpBox();
            echo '</div>';
            
        }else if(gettype($this->inner)=='object')
        {
            echo 'obj';
            echo "<div id='frame{$fN}' class = 'frame' 
            style='width:{$this->width};height:{$this->height};position:absolute;top:{$this->top};
            left:{$this->left};border:1px solid {$this->borderColor}'>".
            $this->inner->content().
            "</div>";
        }else{
            echo 'str';
            echo "<div id='frame{$fN}' class = 'frame' 
            style='width:{$this->width};height:{$this->height};position:absolute;top:{$this->top};
            left:{$this->left};border:1px solid {$this->borderColor}'>".
            $this->inner.
            "</div>";
        }
        
    }

}
?>