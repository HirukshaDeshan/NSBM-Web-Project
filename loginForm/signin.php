<?php require 'databaseUser.php';

if (isset($_POST['signupSubmit'])){

    $u_Name = $_POST['user_name'];
    $p_aSSword = $_POST['pass_word'];

    if(empty($u_Name)||empty($p_aSSword))
    {
        echo("Enter user name and password input");
    }
    else{
    $sql_qry = "INSERT into user(First_Name, Last_Name, Email, UserName, Password) VALUES ('{$fName}','{$lName}','{$eMail}','{$uName}','{$paSSword}') ";
    $sql_qry_signin = "SELECT Password from userinfo where UserName={'$u_Name'}";

    mysqli_query($conn,$sql_qry);

    if($sql_qry)
    {
        echo("Successfull!!");
    }
    else
    {
        echo("Failed");
    }
    }
     
    mysqli_close($conn)
}




?>