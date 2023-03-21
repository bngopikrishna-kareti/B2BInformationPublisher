<?php
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
// dd($username, $password);
if (!empty($username)){
    if (!empty($password)){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="aws_project";
        //connection
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Erros('. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO users(username,password)Values('$username','$password')";
            if($conn->query($sql))
            {
                echo"New record inserted successfully";

            }
            else
            {
                echo"Error:".$sql."<br>".$conn->error;
            }
            $conn->close();

        }

}
}
else{
    echo "Username should not be empty";
    die();
}
?>