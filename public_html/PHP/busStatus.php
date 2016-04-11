<?php
/**
* author: Beatrice Migaliza Lung'ahu
* date: 9th February,2016
* description: class containing database queries on the busStatus tableau
*/


include("adb.php");

class busStatus extends adb{
    
    function add_new_status($status,$importance,$busName){
        $str_query = "INSERT INTO busstatus (Status,Importance,BusName) VALUES('$status','$importance','$busName')";
        if($this->query($str_query)){
            return true;
        }
        else{
            return false;
        }
    }
    
    function edit_status(){
        
    }
    
   
}
?>