<?php
    if(isset($_POST['submit'])){
        $num = $_POST['text']
        $temp = $_POST['units']

        if(temp == "cel"){
            $result= text *9/5 +32;
            echo "Temprature is ". $result;
        }else{
            $result= (text - 32)*5/9;
            echo "Temprature is ". $result;
        }
    }
?>