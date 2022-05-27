<?php

if(isset ($_POST['submit'])){

    $formData =[
      ['Name: ', $_POST['name']],  
      ['Email: ', $_POST['email']],  
      ['DOB: ', $_POST['dob']],  
      ['Gender: ', $_POST['gender']],  
      ['Country: ', $_POST['country']],  
    ];
    
    // echo "<pre>";
// print_r($formData);
    foreach($formData as $fD){
        echo "<pre>";
       print_r($fD);
    } 

    $fp = fopen('userdata.csv', 'a');

    foreach($formData as $key=>$data){;
    fputcsv($fp, $data);
     }
    // fwrite($fp, $form);

    fclose($fp);
}