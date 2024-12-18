<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required> <br>
        <label for="pass">Password:</label>
        <input type="password" name="password" id="pass" required> <br>
        <input type="submit" name="submit" value="submit" >
    </form>

    <?php
// melakukan pengecekan form telah disubmit
if (isset($_POST['submit'])) {
    // apakah field nama dan email sudah diisi
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo "username tidak boleh kosong <br>";
        }
        elseif (empty($email)) {
            echo "email tidak boleh kosong <br>";
        }
        elseif (empty($password)) {
            echo "password tidak boleh kosong <br>";
        }
        else {
            // jika kondisi terpenuhi
            echo "Data berhasil diisi <br>";
            echo "username: $username <br>";
            echo "email: $email <br>";
            echo "password: $password <br>";
        }
    } else {
        echo "form tidak valid <br>";
    }
}

// mengambil nilai langsung dari input nama dan email

// tampilkan

?>
</body>

</html>