<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cv Maker</title>
</head>
<body>
    <!--this is homepage and didn't used partials(forgot about it)-->
    <div class="container-1">
        <header>
            <div class="logo">
                <h2><a href="index.php">Cv <span>Maker</span></a></h2>
            </div>
            <div class="menu-section">
                <a href="checklog.php">create resume</a>
                <a href="blog.php">blog</a>
                <a href="contact.php">contact</a>
                <a href="login.php" class="login">Log In</a>
                <a href="logout.php" class="login">Log Out</a>
            </div>
       </header>
       <div class="intro">
         <h1>Create Professional resume with Cv Maker</h1>
         <p>Creating a curriculum vitae can be overwhelming, especially when you have to do it all by yourself. But this time, Zety CV maker has got your back. Let’s outperform your competition and get you that dream job.</p>
         <!--it will check if checking.php if some one isn't logged in then it will redirect to login page else to register page-->
         <a href="checklog.php" class="btn">create your resume</a>
       </div>
    </div>

</body>
</html>