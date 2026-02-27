<?php
class TitleFrame
{
    protected $fN;
    protected $width;
    protected $height;
    protected $borderColor;
    protected $left;
    protected $top;
    protected $title;
    
    public function titleLabel($fN,$w,$h,$borderColor,$left,$top,$title)
    {
        $this->fN = $fN;  
        $this->width = $w;
        $this->height = $h;
        $this->borderColor = $borderColor;
        $this->left = $left;
        $this->top = $top;
        $this->title = $title;
          
        
        echo "<div id='frame{$fN}' class = 'frame' 
        style='width:{$this->width};
        height:{$this->height};
        position:absolute;
        top:{$this->top};
        left:{$this->left};
        border:1px solid {$this->borderColor}'>
        {$this->title}
        </div>";
     
    }
}
?>
