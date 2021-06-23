<?php
require ("model/Cakesmodel.php ");
class CakeController {
    function CreateCakeDropdownList(){
        $cakeModel = new Cakesmodel();
        $result = "<from action = '' method = 'post' width = '200px'> 
                       please select a type:
                       <select name = 'types' >
                       <option value = '%'> All </option>  
                       ".$this->CreateOptionValues($cakeModel->GetCakeTypes())." 
                       </select> 
                           <input type = 'submit' value = 'Search'>
                           </from>
                           ";
                        
                return $result;
                 
    }
    
    function CreateOptionValues(array $valuearray) {
        $result = "";
        foreach ($valuearray as $value){
        $result = $result."<option value = '$value'> $value </option>";
    }
    return $result;
}

function CreateCakeTables($types){
    $cakeModel = new Cakesmodel();
    $cakeArray = $cakeModel->GetCakeByType($types);
    $result = "";
    //Generate a cake table for each cake entity in array
    foreach ($cakeArray as $key => $cake){
        $result = $result. 
                "<table class = 'cakeTable'>  
                    <tr>
                    
                    <th rowspan='6' width = '250px'>  <img runat = 'server' scr = '$cake->image'/> </th>
                        
                    <th width = '75px'>Name:</th>
                    <td>$cake->name</td>
                    </tr>
                    
                    <tr>
                    <th>Type:</th>
                    <td>$cake->type</td>
                    </tr>
                    
                    <tr>
                    <th>Price:</th>
                    <td>$cake->price</td>
                    </tr>
                 
                    <tr>
                    <th>Review:</th>
                    <td>$cake->review</td>
                    </tr>
                 </table>";
}
return $result;
}
}
?>