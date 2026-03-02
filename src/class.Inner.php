<?php
class InnerWithOneInput
{
    protected $inNumber;
    protected $itemName;
    protected $contWidth;
    protected $contHeight;
    protected $contLeft;
    protected $contTop;
    protected $fontSize;
    
    function __construct($inNumber,$itemName,$contWidth,$contHeight,$fontSize)
	{
        $this->inNumber = $inNumber;
		$this->itemName = $itemName;
        $this->contWidth = $contWidth;
        $this->contHeight = $contHeight;
        

	}

    public function content()
    {
        $inNumber = $this->inNumber;
        $itemName = $this->itemName;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $fontSize = $this->fontSize;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
                width:{$contWidth};
                height:{$contHeight};
                color:white;
                display:flex' >
                <div id='' style='width:fit_content;height:98%'>
                    {$itemName}
                </div>
                <div id='' style='width:70%;height:98%'>
                    <input id='td{$itemName}' class='td' style='width:98%;height:98%'>
                </div>
                </div>";

        return $cont;
    }
}


class InnerWithOneInputV extends InnerWithOneInput
{
    public function content()
    {
        $inNumber = $this->inNumber;
        $itemName = $this->itemName;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $fontSize = $this->fontSize;
        
        
        $cont = "<div id='content{$inNumber}' class = '' style='
                width:{$contWidth};
                height:{$contHeight};
                color:white;
                display:' >
                    <div id='' class = '' style='
                    width:98%;
                    height:15mm;
                    color:white;font-size:{$fontSize}' >
                        {$itemName}
                    </div>
                    <div id='disp{$inNumber}'
                    class='disp' style='
                    width:70%;
                    height:80%;
                    '>
                        <input id='td{$inNumber}' class='td' style='width:98%;height:98%'>
                    </div>
                    
                
                </div>";
        return $cont;
    }

}

class InnerWithInputBox1 extends InnerWithOneInput
{
    
    public function content()
    {
        $inNumber = $this->inNumber;
        $itemName = $this->itemName;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $fontSize = $this->fontSize;
        
       
        //echo $inpElem;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
            width:{$contWidth};
            height:{$contHeight};
            display:flex
            color:white;display:flex; border:;' >
                <div id='subTitle{$inNumber}' class='subTitle' style=
                'width:30%;
                height:98%;
                font-size:{$fontSize}'>
                {$itemName}
                </div>
                <div id = 'disp{$inNumber}'
                 class='disp'
                 style='
                 width:68%;
                 height:95%;
                 background:transparent;
                 color:white'>
                
                </div>
            </div>";
        return $cont;
    }

}

class InnerWithListTowInput
{
    protected $inNumber;
    protected $contWidth;
    protected $contHeight;
    
    protected $fontSize;
    protected $listData;
    protected $list;
   
    function __construct($inNumber,$contWidth,$contHeight,$fontSize)
	{
        $this->inNumber = $inNumber;
        $this->contWidth = $contWidth;
        $this->contHeight = $contHeight;
        $this->fontSize = $fontSize;
       

	}
    protected function listArrayMaker($inNumber)
    {
     $listArray = ["主たる精神障害（ICD-10に準じ該当する番号に〇を付ける又は記載すること",
                          "①症状性を含む器質性精神障害（F0）",
                          "➁精神作用物質による精神及び行動の障害（F1）",
                          "③統合失調症、統合失調型障害及び妄想性障害（F72）",
                          "④気分障害(F73)",
                          "⑤てんかん（G40）",
                          "⑥その他<input id='td".$inNumber." class='td'  style='width:30%;height:10mm;background:darkgreen;color:white'>".
                          "(F <input id='td".($inNumber+1). " class='td' style='width:10%;height:10mm;background:darkgreen;color:white'> )"
                           ] ;
    $this->listData = $listArray;
   // print_r($this->listData);
   // echo count($this->listData);
    }
    
    public function content()
    {
        $inNumber = $this->inNumber;
        $contWidth = $this->contWidth;
        $contHeight = $this->contHeight;
        $fontSize = $this->fontSize;
        
        
        
        $this->listArrayMaker($inNumber);
        $listData = $this->listData;
        //echo '$listData=';
        //print_r($listData);
        for($i=0;$i<count($listData);$i++)
        {
            $this->list = $this->list."<div id='li".$i."' class='li' style='width:150mm;height:7mm'>".
            $listData[$i]."</div>";
        }
        
        $cont = "<div id='content".$inNumber."'
            style='
            width:".$contWidth.";
            height:".$contHeight.";
            position:absolute;
            color:white;' >".
              $this->list. 
            "</div>";
        return $cont;
    }
    
}
/*
class MakeListData
{
    protected $listData;
    public function list_maker($listArray)
    {
        for($i=0;$i<count($listArray);$i++)
        {
            if($i==0)
            {
                 $this->listData[$i] = "<div id='li{$i}' class='li' style='width:98%;height:25px;display:flex'>
                    <div id='' class='' style='width:0%;height:25px;'>
                    </div>
                    <div id='' class='' style='width:98%;height:25px'>
                    {$listArray[$i]}
                    </div>
                  </div>";
            }else
            {
                $this->listData[$i] = "<div id='li{$i}' class='li' style='width:98%;height:25px;display:flex'>
                        <div id='' class='' style='width:3%;height:20px;border:1px solid white;border-radius:20px; text-align: center;'>
                        {$i}
                        </div>
                        <div id='' class='' style='width:90%;height:25px'>
                        {$listArray[$i]}
                        </div>
                    </div>";
            }
        }
        //print_r($this->listData);
        return $this->listData;
    }
}
*/
/*
class InnerWithInputBox2 extends InnerWithInputBox1
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
        $inpElem = $this->inpElem;
        
        $cont = "<div id='content{$inNumber}' class = '' style='
                width:{$contWidth};
                height:{$contHeight};
                
                color:white;' >
                    <div id='subTitle{$inNumber}' class='subTitle' style=
                    'width:98%;
                    height:20%;
                    padding:5px;
                    box-sizing: border-box;
                    font-size:{$fontSize}'>
                    {$content}
                    </div>
                    <div id='wtap{$inNumber}'
                    class='td' style='
                    width:98%;
                    height:98%;
                    '>
                    {$inpElem}
                    </div>
            </div>";
        return $cont;
    }

}
    */
?>