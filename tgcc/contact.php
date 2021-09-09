<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="tgcc.css">
    <link rel="stylesheet" media="(min-width:601px)" href="/large.css">
    <link rel="stylesheet" media="(max-width:600px)" href="/small.css">
    <link rel= "shortcut icon" type="x-icon" href="/favicon.ico">
</head>

<body>
    <div id="header">
        <?php include "header.php";?>
    </div>
    <div id="form">
        <form method="POST" action="mail.php">
            <p>Name: <input type="text" name="uName" /></p>
            <p>Email: <input type="text" name="uEmail" /></p>
            <p>Message: <textarea name="message" rows="6" cols="25"></textarea></p>
            <p><input type="submit" value="Go" /></p>
        </form>
        
    </div>
</body>

</html>