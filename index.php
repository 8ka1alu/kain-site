<?php
if($error_message) {
    echo $error_message;
}
?>
 
<form action="index.php" method="POST">
    <p>ログインID：<input type="text" name="user_name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <input type="submit" name="login" value="ログイン">
</form>

<?php
session_start();
 
$error_message = "";
 
if(isset($_POST["login"])) {
 
    if($_POST["user_name"] == "webtan" && $_POST["password"] == "webtan_pass") {
        $_SESSION["user_name"] = $_POST["user_name"];
        $login_success_url = "login_success.php";
        header("Location: {$login_success_url}");
        exit;
    }
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>

<?php
session_start();
 
if(!isset($_SESSION["user_name"])) {
    $no_login_url = "index.php";
    header("Location: {$no_login_url}");
    exit;
}
?>
