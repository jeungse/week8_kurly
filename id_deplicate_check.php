<?
    include_once('./header.php');

    $ID = $_POST['ID'];

    // 아이디 중복 조회 select
    $sql = "select * from kurly_table where ID='$ID'";
    $result = mysqli_query($conn, $sql);

    if( mysqli_num_rows($result) >= 1 ){
        echo 1; // 아이디 존재한다. 
    } else {
        echo 0;
    }


?>