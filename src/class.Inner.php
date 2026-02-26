<?php
class Inner
{
    protected $inNumber;
    protected $content;
    protected $contWidth;
    protected $contHeight;
    protected $contLeft;
    protected $contTop;
    protected $fontSize;
    function __construct($inNumber,$content,$contWidth,$contHeight,$contLeft,$contTop,$fontSize)
	{
        $this->inNumber = $inNumber;
		$this->content = $content;
        $this->contWidth = $contWidth;
        $this->contHeight = $contHeight;
        $this->contLeft = $contLeft;
        $this->contTop = $contTop;
        $this->fontSize = $fontSize;

	}

    public function content()
    {
        $inNumber = $this->inNumber;
        $content = $this->content;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        $fontSize = $this->fontSize;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white;' >
            {$content}
            </div>";
        return $cont;
    }
}


class InnerWithInputBox0 extends Inner
{
    public function content()
    {
        $inNumber = $this->inNumber;
        $content = $this->content;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        $fontSize = $this->fontSize;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white;font-size:{$fontSize}' >
            {$content}
            <input id='td{$inNumber}'
            class='td' style='
            width:70%;
            height:80%;
            background:darkgreen;
            color:white'>
            </div>";
        return $cont;
    }

}

class InnerWithInputBox1 extends Inner
{
    public function content()
    {
        $inNumber = $this->inNumber;
        $content = $this->content;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        $fontSize = $this->fontSize;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white;display:flex' >
                <div id='subTitle{$inNumber}' class='subTitle' style=
                'width:30%;
                height:98%;
                border-right:1px solid white;
                padding:5px;
                box-sizing: border-box;
                font-size:{$fontSize}'>
                {$content}
                </div>
                <input id='td{$inNumber}'
                class='td' style='
                width:68%;
                height:95%;
                background:darkgreen;
                color:white'>
            </div>";
        return $cont;
    }

}
?>