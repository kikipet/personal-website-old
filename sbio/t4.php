<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T4 | Virology</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/mystyle.css">
    <link rel="stylesheet" media="(min-width:601px)" href="/large.css">
    <link rel="stylesheet" media="(max-width:600px)" href="/small.css">
    <link rel= "shortcut icon" type="x-icon" href="/favicon.ico">
</head>

<body>
    <div id="header">
        <?php include "/home/hw8modkk7lk9/public_html/header.php";?>
    </div>

    <script defer>
        var x = 0;
        function prev(k, s) {
            document.getElementById("t4"+s+x).style.display = "none";
            document.getElementById("t4"+s+x+"d").style.display = "none";
            x = (x + k - 1) % k;
            document.getElementById("t4"+x).style.display = "inline-block";
            document.getElementById("t4"+x+"d").style.display = "inline-block";
        }
        function next(k, s) {
            document.getElementById("t4"+s+x).style.display = "none";
            document.getElementById("t4"+s+x+"d").style.display = "none";
            x = (x + 1) % k;
            document.getElementById("t4"+s+x).style.display = "inline-block";
            document.getElementById("t4"+s+x+"d").style.display = "inline-block";
        }
    </script>

    <div class="info">
        <h1>Escherichia virus T4</h1>
        <p>T4 is a myovirus and one of the most thoroughly studied bacteriophages.</p>
    </div>
    <h2>Parts of T4</h2>
    <div id="t4-gallery" style="text-align:center;">
        <a onclick=prev(6, 'a')><img id="arrow" src="files/prev-arrow.png"></a>
        <img class="t4-diagram" id="t4a0" src="files/t4-capsid.jpg">
        <img class="t4-diagram" style="display:none;" id="t4a1" src="files/t4-neck.jpg">
        <img class="t4-diagram" style="display:none;" id="t4a2" src="files/t4-tail.jpg">
        <img class="t4-diagram" style="display:none;" id="t4a3" src="files/t4-base.jpg">
        <img class="t4-diagram" style="display:none;" id="t4a4" src="files/t4-ltf.jpg">
        <img class="t4-diagram" style="display:none;" id="t4a5" src="files/t4-stf.jpg">
        <a onclick=next(6, 'a')><img id="arrow" src="files/next-arrow.png"></a>
    </div>
    <div id="parts-desc" style="padding-bottom:1%;">
        <div id="t4a0d" class="t4-caption">
            <h3>Capsid</h3>
            <p>The capsid of T4 is an elongated icosahedron. Its caps have T = 13 and the midsection has T = 20.
            The main capsid protein is gp23. It assembles into hexamers with the aid of chaperone proteins groEL (in <i>E. coli</i>) and gp31.
            These hexamers are not perfectly symmetric when assembled, but as the virus matures they expand and become closer to a regular hexagon.
            Hoc (highly immunogenic outer capsid) and Soc (small outer capsid) proteins decorate and stabilize the surface of the capsid.</p>
            <p></p>
        </div>
        <div id="t4a1d" class="t4-caption" style="display:none;">
            <h3>Neck</h3>
            <p>The neck of T4 consists of a collar and whiskers, both made of fibritin. It senses environmental 
            conditions and controls when the virus retracts its long tail fibers. In addition, the whiskers serve to 
            hold the long tail fibers when they are not in use.</p>
        </div>
        <div id="t4a2d" class="t4-caption" style="display:none;">
            <h3>Tail</h3>
            <p>As T4 is a myovirus, the contractile tail is surrounded by a tubular sheath.</p>
            <p>The mechanism for tube contraction is not fully known because we only have beginning and end structures. But what we do know is that 
            the space between the rings that make up the sheath decreases substantially (40 to 17 Å) and the rings separate from the tail.
            When studied in vitro, urea can be used to contract the tail without releasing DNA. In addition, the trigger for tube contraction is probably 
            within the tube or the tape measure protein.
            </p>
        </div>
        <div id="t4a3d" class="t4-caption" style="display:none;">
            <h3>Base plate</h3>
            <p>The base plate consists of 6 "wedges" of proteins that are each composed of several proteins.
            It first assembles in a "dome" conformation, despite this being the higher-energy conformation. 
            It changes to a more stable "star" conformation when attached to a host cell.</p>
        </div>
        <div id="t4a4d" class="t4-caption" style="display:none;">
            <h3>Long tail fibers</h3>
            <p>T4 has 6 long tail fibers that interact with receptors on the surface of <i>E. coli</i>. 
            Due to their flexibility, only the end that binds to the base plate and the end that binds 
            to receptors have been solved.</p>
        </div>
        <div id="t4a5d" class="t4-caption" style="display:none;">
            <h3>Short tail fibers</h3>
            <p>The short tail fibers also bind to the surface of the host cell. They secure the virus 
            to the host, and their binding is necessary for the virus to puncture the cell's membrane.</p>
        </div>
    </div>
    <div id="t4-assembly">
        <h2>Assembly</h2>
        <p>There are at least two possible mechanisms for T4's assembly. In one way (the kinetic model), both the core and the capsid assemble simultaneously 
        and the capsid ies capped when it overtakes the core’s growth. In the other, the capsid and core assemble as helixes and interact with each other 
        throughout the assembly process. Either way, after the capsid is assembled, a protease cleaves the core and inner proteins, which exit the phage 
        through holes on the capsid. The capsid proteins themselves are also cleaved somewhat.</p>
        <p>How the capsid is able to assemble is not completely known. As mentioned earlier, the capsid proteins probably assemble in hexamers first, and
        the process requires two chaperone proteins: groEL in <i>E. coli</i> and gp31. The angles between each hexamer vary: around the vertex, the hexamers 
        bind at around 30 degrees, in the middle section (most prevalent) it is around 18, and elsewhere in the middle it can reach 2 degrees. These variations 
        in angle may play a role in how the capsid assembles, but there are no definitive theories yet.</p>
        <p></p>
    </div>
    <h2>Infection</h2>
    <div id="t4-gallery" style="text-align:center;">
        <a onclick=prev(6, 'b')><img id="arrow" src="files/prev-arrow.png"></a>
        <img class="t4-diagram" id="t4b0" src="files/t4-infection-0.png">
    </div>
</body>

</html>