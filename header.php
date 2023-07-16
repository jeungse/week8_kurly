<?
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Headers:*');
    $db_server = 'localhost';
    $db_user_name = 'saeeun';
    $db_user_pw = 'anvktk0037!!';
    $db_name = 'saeeun';

    $conn = mysqli_connect($db_server, $db_user_name, $db_user_pw, $db_name);
    mysqli_set_charset($conn, 'utf8');
?>