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
}

class InnerWithInputBox extends Inner
{
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
            <input id='td{$inNumber}'
            class='td' style='
            widht:70%;
            height:80%;
            background:darkgreen;
            color:white'>
            </div>";
        return $cont;
    }

}
?>