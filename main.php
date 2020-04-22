<?php

function form_construct(){
    echo '
                <form name="ArraysForm" action="" method="post">
                    <label>Array : </label><br/>
                    <input type="text" name="Array" /><br/><br/>
                    <input type="submit" name="Enter" value="Enter">
                </form>';
}

function to_array($some_array,&$my_array)
{
    $my_array=explode(' ',$some_array);;
    foreach ($my_array as &$value)
        $value=(string)$value;
}

function print_numbers($my_array){
    $result=[];
    foreach ($my_array as $key => $value){
        if(!in_array($value, $result))
            $result[$key]=$value;
    }
    print_r($result);
}

form_construct();
if (isset($_POST['Enter']))
{
    if($_POST['Array']==' '){
        echo 'Please, enter the array';
    }
    else{
        $arr=[];
        to_array($_POST['Array'],$arr);
        print_r($arr) ;
        print_numbers($arr);
    }
}
