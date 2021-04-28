<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/scan.css">
    <script type="module" src="assets/scripts/scan.js"></script>
    <title>Dog Breed Identifier | Scan</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Insert Logo</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Scan</a></li>
            <li><a href="tutorial.html">Tutorial</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div id="main-container">
        <h1 class="center-horizontal">Upload Your Photo Here</h1>
        <div id="upload-container">
            <form method="post" action="" enctype="multipart/form-data" id="uploadForm">
                <div class="preview">
                    <img src="" id="img" width="224" height="224">
                </div>
                <div class="centered">
                    <input name="userPhoto" type="file" id="upload">
                    <input type="button" class="button" value="Upload Photo" id="submit">
                </div>
            </form>
            <input type="button" class="button" value="Predict Breed" id="predict">
            <div>
                <h3 class="center-horizontal" id="predictText"></h3>
                <h2 class="center-horizontal" id="result"></h2>
                <h2 class="center-horizontal"id="resultAcc"></h2>
            </div>
        </div>
    </div>

</body>

</html>