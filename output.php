<?php  

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST ["confirm-password"];
/*
    if(trim($username) != ""){
    echo "USER Email is Not Empty<br>";
    
}else {
    echo "username is empty<br>";
}

if(trim($email) != ""){
    echo "Email is Not Empty<br>";
    
}else {
    echo "email is empty<br>";
}

if(trim($password) != ""){
    echo "password is Not Empty<br>";
    
}else {
    echo "password is empty<br>";
}
*/
test($username);
test(fieldname: $email);
test($password);
test($confirm_password);



function test ($fieldname){
    if(trim($fieldname) != ""){
        echo "User Field is Not Empty<br>";
        
    }else {
        echo "field is empty<br>";
    }
}
if ($password == $confirm_password{
    <Header> ("Registration Success!<br>"); </Header> 
    exit;
    
}else {
    echo "field is empty<br>";
}

}

?>