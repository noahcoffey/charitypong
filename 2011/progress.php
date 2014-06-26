<?php
    
    include_once("inc/formstack.php");
    
    $api_key = "D1F5175E6CB6C98EC5AFEA1D4BADD6C5";
    $form_id = "1105435";
    $page = 1;
    $per_page = 100;
    $data = Formstack::request($api_key, 'data', array( 'id' => $form_id, 'page' => $page, 'per_page' => $per_page ));
    
    foreach ($data['submissions'] as $sub){
        foreach ($sub['data'] as $items){
            if ($items['field'] == "12948486"){
                $val = explode("($", $items['value']);
                $val2 = explode(")", $val[1]);
                $raised += (integer)$val2[0];
            }
        }
        
    }
    $goal = number_format(100*($raised/1500));
    //print "<div id=\"goal\">$goal%</div>";
    print $goal;
    