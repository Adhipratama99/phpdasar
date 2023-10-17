<?php 

if( isset($_POST["submit"])) {
//   Header("Location: datamasiswa.php")  
    
  if($_POST["username"] == "adhi" && $_POST["password"] == "password123" ){
    header("Location: datamahasiswa.php");
    exit;
  }else {
    $error = true;
  }

}

?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Masukan Data Anda ! </h1>
<?php if( isset($error)) : ?>
<p>Password/Username Anda Salah !</p>
<?php endif; ?>
<form action="" method="POST">
    <ul>
        <li>
            <label for="username">USERNAME : </label>
            <input type="text" placeholder="username" name="username" id="username">
        </li>
        <li>
            <label for="password">PASSWORD : </label>
            <input type="password" placeholder="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit"> LOGIN </button>
        </li>

    </ul>
</form>
</body>
</html>
