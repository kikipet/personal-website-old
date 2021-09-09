<script defer>
    function menu() {
        if (screen.width <= 600) {
            if (document.getElementById("navbar").style.display === "block") {
                document.getElementById("navbar").style.display = "none";
                for (var i = 0; i < 8; i++) {
                    document.getElementById("navbar").children[i].style.display = "none";
                }
                document.getElementById("home").style.display = "none";
                document.getElementsByClassName("dropdown")[0].style.display = "none";
            }
            else {
                document.getElementById("navbar").style.display = "block";
                for (var i = 0; i < 8; i++) {
                    document.getElementById("navbar").children[i].style.display = "block";
                }
                document.getElementById("home").style.display = "block";
                document.getElementsByClassName("dropdown")[0].style.display = "block";
            }
        }
        else {
            window.location.href = './index.php';
        }
    }
</script>

<div id="name">
    <h1><a href="index.php">Tippecanoe Girls Coding Club</a></h1>
</div>
<span id="top">
    <a id="control" onclick="menu()">Temporary</a>
    <script onload>
        if (screen.width <= 600) {
            document.getElementById("control").innerHTML = "Menu";
        }
        else {
            document.getElementById("control").innerHTML = "Home";
        }
    </script>
    <ul id="navbar">
        <li style="display: none;"><a id="home" href="./index.php">Home</a></li>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="http://songeunkim.com/tgcc/forum/">Forum</a></li>
        <li><a href="scratch.php">Scratch</a></li>
        <li><a href="privacy.php">Privacy</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</span>
<div id="spacer"></div>