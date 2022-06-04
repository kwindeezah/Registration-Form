<?php

if(isset ($_POST['submit'])){
      $name = $_POST['name'];  
      $email = $_POST['email'];
      $dob = $_POST['dob'];  
      $gender = $_POST['gender']; 
      $country = $_POST['country'];
      $fh= 'userdata.csv'; 
      $fp = fopen($fh, 'w');
      $data = "{$name}, {$email}, {$dob}, {$gender}, {$country}";

        if(fwrite($fp, $data)){
        } else{ 
            echo "There's an error";
        }
        fclose($fp);
} 

    $file = fopen("userdata.csv", "r");
        while (($data = fgetcsv($file)) !== false) {
            echo implode(",",$data);
              
            fclose($file);
        }