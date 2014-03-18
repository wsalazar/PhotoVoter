<!doctype html>
<html>
<head>
<title>Photo Voter</title>
<script text="text/javascript" src="http://code.jquery.com/jquery-git.js" ></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<header>Photo Voter</header>
    <div id="caption"><div class="pan">
        <div class="page"><h1></h1></div>
    </div></div>
    <div id="content">
        <form enctype="multipart/form-data">
            <div class="page">
                <img id="image" src="images/avengers.jpeg"/>
                <div class="likes">
                        <img class="unlike" src="images/unlike.jpeg"/>
                        <img class="like" src="images/like.jpeg"/>
                </div>
            </div>
        </form>
    </div>
</body>
<script text="text/javascript" src="js/voter.js" ></script>
</html>