<!DOCTYPE html>
<html>
<head>
  <title>Remember Password</title>
  <script src="jquery-3.6.2.js"></script>
</head>
<body>
<form method="post">
  Username: <input type="text" name="user" id="u"> <br>
  Password: <input type="password" name="pass" id="p"><br>
  <input type="checkbox" name="rem" value="r"> Remember Password
  <input type="submit" value="Login" id="btn">
</form>
<script>
  $(document).ready(function(){
    $("#u").keyup(function(){
      var u = $("#u").val();
        if(u == "admin"){
          $("#p").val("<?php echo $_COOKIE['admin']; ?>");
        }
          

    });
  });
</script>
<?php  
if(isset($_POST['user'])){
  $username = $_POST["user"];
  $password = $_POST["pass"];
  $remember = $_POST["rem"];

  if($username == "admin" && $password == "123"){
    echo "Login Successfull";
    if($remember == "r"){
      setcookie("admin","123",time()+(86400));
    }
  }else{
    echo "Login Fail";
  }
}
?>
</body>
</html>