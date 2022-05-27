<?php

if(isset ($_POST['submit'])){

    $formData =[
      ['Name: ', $_POST['name']],  
      ['Email: ', $_POST['email']],  
      ['DOB: ', $_POST['dob']],  
      ['Gender: ', $_POST['gender']],  
      ['Country: ', $_POST['country']],  
    ];

    $fp = fopen('userdata.csv', 'a');

    foreach($formData as $key=>$data){

    fputcsv($fp, $data);
     }
    // fwrite($fp, $form);

    fclose($fp);
}

$file = fopen("userdata.csv", "r");
  
while (($data = fgetcsv($file)) !== false) {
    echo "<pre>";
    foreach ($data as $i) {
        print_r ("<li>" . ($i).  "</li>" ) ."<br>";
   
    }
    
}
fclose($file);