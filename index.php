<?php

include('simple_html_dom.php');



  $data = array();


	$html = file_get_html('https://www.outbreak.my/');

	
	for ($i = 0; $i<= 80; $i++){
  
		$GLOBALS['state_'.$i] = $html->find('table[class=table table-states table-small table-hover] td',$i)->plaintext;
  
	}
   
	$data = array(
            "state1" => array (
                "country" => "Sabah",
                "confirm" => "$state_2",
                "new cases" => "$state_3",
                "death" => "$state_4",
                ),
  
            "state2" => array (
                "country" => "Selangor",
                "confirm" => "$state_7",
                "new cases" => "$state_8",
                "death" => "$state_9",
                ),
  
             "state3" => array (
                "country" => "KL",
                "confirm" => "$state_12",
                "new cases" => "$state_13",
                "death" => "$state_14",
                ),

                "state4" => array (
                "country" => "Negeri Sembilan",
                "confirm" => "$state_17",
                "new cases" => "$state_18",
                "death" => "$state_19",
                ),

                "state5" => array (
                "country" => "Kedah",
                "confirm" => "$state_22",
                "new cases" => "$state_23",
                "death" => "$state_24",
                ),          
 
                "state6" => array (
                "country" => "PPinang",
                "confirm" => "$state_27",
                "new cases" => "$state_28",
                "death" => "$state_29",
                ), 
   
                "state7" => array (
                "country" => "Labuan",
                "confirm" => "$state_32",
                "new cases" => "$state_33",
                "death" => "$state_34",
                ),              
   
                "state8" => array (
                "country" => "Sarawak",
                "confirm" => "$state_37",
                "new cases" => "$state_38",
                "death" => "$state_39",
                ), 
    
                "state9" => array (
                "country" => "Johor",
                "confirm" => "$state_42",
                "new cases" => "$state_43",
                "death" => "$state_44",
                ),                        
 
                "state10" => array (
                "country" => "Perak",
                "confirm" => "$state_47",
                "new cases" => "$state_48",
                "death" => "$state_49",
                ),              
  
                "state11" => array (
                "country" => "Pahang",
                "confirm" => "$state_52",
                "new cases" => "$state_53",
                "death" => "$state_54",
                ),         
   
                "state12" => array (
                "country" => "Melaka",
                "confirm" => "$state_57",
                "new cases" => "$state_58",
                "death" => "$state_59",
                ),    
 
                "state13" => array (
                "country" => "Terengganu",
                "confirm" => "$state_62",
                "new cases" => "$state_63",
                "death" => "$state_64",
                ),      
 
                "state14" => array (
                "country" => "Kelantan",
                "confirm" => "$state_67",
                "new cases" => "$state_68",
                "death" => "$state_69",
                ),   
  
                "state15" => array (
                "country" => "Putrajaya",
                "confirm" => "$state_72",
                "new cases" => "$state_73",
                "death" => "$state_74",
                ),    
  
                "state16" => array (
                "country" => "Perlis",
                "confirm" => "$state_77",
                "new cases" => "$state_78",
                "death" => "$state_79",
                 ));         
    

echo json_encode($data);


