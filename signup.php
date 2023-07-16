<?

    include_once('./header.php');

    // ajax 또는 axios로 전송시 전송이름을 아래와 같이 지정해서 보낸다. 
    // api를 사용하지 않고 전송시 form 요소의 name이 전송된다. 
    $ID = $_POST['ID'];
    $PW = $_POST['PW'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $HP = $_POST['HP'];
    $addr = $_POST['addr'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $chooga = $_POST['chooga'];
    $service = $_POST['service'];

    $sql = "INSERT INTO kurly_table(ID, PW, name, email, HP, addr, gender, birth, chooga, service) 
    value('$ID', '$PW', '$name', '$email', '$HP', '$addr', '$gender', '$birth', '$chooga', '$service')";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "데이터 저장 실패";
    } else {
        echo "데이터 저장 성공";
    };

?>