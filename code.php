<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code</title>
    <script type="text/javascript" src="kinematics.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" media="(min-width:601px)" href="large.css">
    <link rel="stylesheet" media="(max-width:600px)" href="small.css">
    <link rel= "shortcut icon" type="x-icon" href="favicon.ico">
</head>

<body>
    <div id="header">
        <?php include "header.php";?>
    </div>
    <h1>Code</h1>
    <!--heck I need to get my hands on the final HALO video-->
    <!--write a bit more about each thing-->
    <h2>Project HALO</h2>
    <div class="project" id="halo">
        <div id="image"><figure><video style="width:95%;object-fit: cover" controls>
                <source src="media/halo-highlights.mp4" type="video/mp4">
                Something went wrong when displaying this video.
            </video>
            <figcaption>(Video edited by Talal Zaim)</figcaption></figure>
        </div>
        <div id="desc">
            <p>Project HALO was a high-altitude balloon launch run by Purdue University graduate student Geoffrey
                Andrews and high school students from Tippecanoe County in the summer of 2019. I was part of a
                programming team of one.</p>
            <p><a href="https://engineering.purdue.edu/HAB">Home Page</a></p>
            <p><a href="https://github.com/kikipet/HALO">GitHub</a></p>
        </div>
    </div>
    <h2>Molecular Replacement Residue Modifier</h2>
    <div class="project" id="mr">
        <!--for molecular replacement code-->
        <!--replace image later when applicable-->
        <div id="image">
            <figure><img style="width:95%; object-fit: cover;" src="media/lysozyme.png">
            <figcaption>(Lysozyme molecule displayed in Coot, picture mine)</figcaption></figure>
        </div>
        <div id="desc">
            <p>The idea for this program came about while I was solving a protein structure in Coot. Part of that
                required having to fix individual residues by hand, and I became frustrated by the occasional file
                closing and subsequent loss of progress. I figured that this was something I could make a computer do.
                Hence, this program.</p>
            <p>This first version of the program is a bit limited, as any new residues added are straight lines,
                which is definitely not accurate. I am working on a fix to that.</p>
            <p><a href="https://repl.it/@SongKim/Fix-Sequence-10">Version 1.0</a></p>
            <p><a href="https://repl.it/@SongKim/Fix-Sequence-11">Version 1.1 - Add sequence alignment functionality</a></p>
            <p><a href="https://repl.it/@SongKim/RotateTranslate-Amino-Acids">Align Amino Acid to Molecule (orientation)</a></p>
        </div>
    </div>
    <h2>Needleman-Wunsch Sequence Alignment</h2>
    <div class="project" id="seq">
        <div id="desc">
            <p>This program uses the Needleman-Wunsch algorithm to align two sequences. It uses the BLOSUM62 similarity matrix.</p>
            <p><a href="https://repl.it/@SongKim/Sequence-Alignment">Sequence Alignment</a></p>
        </div>
    </div>
    <h2>2048 (Text-based)</h2>
    <div class="project" id="j2048">
        <div id="desc">
            <p>This is a text-based version of the phone/online game 2048. Slide tiles/numbers to add them together, and try to reach 2048.</p>
            <p><a href="https://repl.it/@SongKim/Java-2048">2048</a></p>
    <div id="applets">
        <h2>Applets</h2>
        <div id="kinematics">
            <h3>Kinematics</h3>
            <div id="params">
            <p>Displacement (m) <input type="text" id="x" size="4"></p>
            <p>Initial velocity (m/s) <input type="text" id="vi" size="4"></p>
            <p>Final velocity (m/s) <input type="text" id="vf" size="4"></p>
            <p>Acceleration (m/s&#x00b2) <input type="text" id="a" size="4"></p>
            <p>Time (s) <input type="text" id="t" size="4"></p>
            </div>
            <button class="button" style="margin-left:20%;" id="calc">
                Calculate
            </button>
            <!--add reset button-->
            <div id="feedback">
            </div>
        </div>
        <a class="button" href="kinematics.js" download>Source code (JS)</a>
    </div>
</body>

</html>