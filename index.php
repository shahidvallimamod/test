<?php
    require_once 'inc/queries.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo ' asd';
    }

    $x = select('users');
    if(!empty($x)){
        $array = [
            'status' => 'user_found',
            'message' => 'کاربر یافت شد',
            'data' => $x
        ];
        echo json_encode($array);
    }else{
        $array = [
            'status' => 'user_not_found',
            'message' => 'کاربر یافت نشد',
            'data' => null
        ];
        echo json_encode($array);
    }
    

