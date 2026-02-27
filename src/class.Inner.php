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

class ListMaker
{
    protected $inNumber;
    protected $contWidth;
    protected $contHeight;
    protected $contLeft;
    protected $contTop;
    protected $fontSize;
    protected $listData;
    function __construct($inNumber,$contWidth,$contHeight,$contLeft,$contTop,$fontSize)
	{
        $this->inNumber = $inNumber;
        $this->contWidth = $contWidth;
        $this->contHeight = $contHeight;
        $this->contLeft = $contLeft;
        $this->contTop = $contTop;
        $this->fontSize = $fontSize;
       

	}
    public function content($listData)
    {
        $inNumber = $this->inNumber;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $contLeft = $this->contLeft;
        $contTop = $this->contTop;
        $fontSize = $this->fontSize;
        $this->listData = $listData;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            position:absolute;
            left:{$contLeft};
            top:{$contTop};
            color:white;display:flex' >
             {$this->listData}   
            </div>";
        return $cont;
    }
    
}

class MakeListData
{
    protected $listData;
    public function list_maker($listArray)
    {
        for($i=0;$i<count($listArray);$i++)
        {
            $this->listData[$i] = "<div id='li{$i}' class='li' style='width:98%;height:25px;border-bottom:1px solid white;display:flex'>
                    <div id='' class='' style='width:10%;height:25px;border-right:1px solid white'>
                    {$i}
                    </div>
                    <div id='' class='' style='width:90%;height:25px'>
                    {$listArray[$i]}
                    </div>
                  </div>";
        }
        //print_r($this->listData);
        return $this->listData;
    }
}
?>