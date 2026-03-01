<?php
class InpElem
{
    protected $elNum;
    protected $elem;

    public function inp_elem($elNum)
    {
        $this->elem="<disp id='disp{$elNum}' class='disp' style='width:100mm;height:10mm'>
            <input id='td{$elNum}' class='td' style='width:100mm;height:10mm;border:5px solid red'>
        </div>";
        return $this->elem;
    }
        
}

?>