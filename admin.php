<style>
    .wrapper {
        width: 400px;
        padding: 10px;
        background: #3498db;
        color: blue;
    }
    a {
        background: #2c3e50;
        padding: 5px;
        color: blue;
        font-weight: bold;
        text-decoration: none;
        margin-top: 20px;
    }
    span {
        font-style: italic;
        color: #f90;
    }
</style>

<body>
    <div class="wrapper">
        <?php
            session_start();
            if (!isset($_SESSION["username"])) header("location:login.php");
        ?>
        <h3>Selamat Datang Admin :<span><?php echo $_SESSION["username"]?>
        </span></h3>
        <a href="logout.php">Logout</a>
    </div>
</body>