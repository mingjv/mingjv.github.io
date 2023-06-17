<?php
$validUsername = "Administrator";
$validPassword = "caojvrong2008";

// 获取通过POST请求发送的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];

// 验证用户名和密码是否匹配
if ($username == $validUsername && $password == $validPassword) {
  // 登录成功
  echo "登录成功！欢迎，" . $username . "!";
} else {
  // 登录失败
  echo "登录失败。请检查用户名和密码是否正确。";
}
?>
