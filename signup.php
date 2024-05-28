<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses_signup.php" method="POST">
        <fieldset>
            <p>
                <label for="name">Name: </label>
                <input type="text" name="name"  />
            </p>
            <p>
                <label for="username">Username: </label>
                <input type="text" name="username"  />
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="password" name="password" />
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>
