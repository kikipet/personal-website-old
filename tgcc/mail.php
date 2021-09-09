<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sent</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tgcc.css">
    <link rel="stylesheet" media="(min-width:601px)" href="/large.css">
    <link rel="stylesheet" media="(max-width:600px)" href="/small.css">
    <link rel= "shortcut icon" type="x-icon" href="/favicon.ico">
</head>

<body>
    <div id="header">
        <?php include "header.php";?>
    </div>
    <div id="submit">
        <p><?php
            
            $userName 		= $_POST['uName'];
            $userEmail	 	= $_POST['uEmail'];
            $userMessage 		= $_POST['message'];

            $to 			= "songkimwl@gmail.com";
            $subject 		= "Email from my website";
            $body 			= "Information Submitted:";

            $body .= "\r\n Name: " . $userName;
            $body .= "\r\n Email: " . $userEmail;
            $body .= "\r\n Message: " . $userMessage;

            mail($to, $subject, $body);
            echo "Thank you, your message has been sent!" . " -" . "<a href='index.php'> Return Home</a>";
        ?></p>
        
    </div>
</body>

</html>