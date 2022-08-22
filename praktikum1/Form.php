<?php
class Form {
    var $fields=Array();
    var $action;
    var $sumbit=" ";
    var $jumField=0;

    function __construct($action,$sumbit){
        $this->action=$action;
        $this->summbit=$sumbit;
    }
  
    function DisplayForm(){
        echo"<form action='".$this->action."'method='post'>";
        echo"<table width = '100%'>";
        for ($i=0;$i<$this->jumField;$i++)
            {
            echo"<tr>
                <td align='right'>".$this->fields[$i]['label']."</td>";
            echo"<td><input type='text' name='".$this->fields[$i]['name']."'></td>
            </tr>";

            }
     echo"<tr>
        <td><input type='sumbit' name='tombol' value='".$this->sumbit."'></td>
        </tr>";
    echo"</table>";
    }
    function AddField($name,$label){
        $this->fields[$this->jumField]['name']=$name;
        $this->fields[$this->jumField]['label']=$label;
        $this->jumField++;
    }

    function GetData(){
        for ($i=0;$i<$this->jumField;$i++)
        {
            $data[$i]=$_POST[$this->fields[$i]['name']];
        }
        return $data;
    }
}
?>