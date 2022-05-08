<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/bigscreen.css">
    <link rel="stylesheet" type="text/css" href="style/smallscreen.css">
    <link rel="stylesheet" type="text/css" href="style/lines.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto+Slab&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<title></title>

<body>
    <div class="loader">
        <img src="icons/hand.gif" alt="Loading..." />
    </div>

    <button class="ham">
        <span class="menuIcon">
            <img src="icons/menu.png">
        </span>
        <span class="xIcon">
            <img src="icons/cancel.png">
        </span>
    </button>
    <div class="menu">
        <div class="placement">
            <a class="menuLink" href="index.php">Home</a>
            <a class="menuLink" href="cards.php">Work</a>
            <a class="menuLink" href="blog.php">Blog</a>
            <a class="menuLink" href="index.php">Contacts</a>
        </div>
    </div>
    <div class="nonfooter">
            <div class="container1">
                    <p class="big-text">Not so daily posts</p>
            </div>
    </div>
    <?php

include('logic/connectdb.php');
echo "<link rel='stylesheet' type='text/css' href='style/bigscreen.css'>";
echo "<link rel='stylesheet' type='text/css' href='style/smallscreen.css'>";
$sql = "SELECT id, title, date, content FROM blog";
$result6 = mysqli_query($dbConnected, $sql);

if (mysqli_num_rows($result6)) {
    while ($row6 = $result6->fetch_assoc()) {
        echo '<div class= "blogcont">
        <div class = "bloghead">
        <div class= "blogtitle">
            <p>'. $row6['title'] . '</p>
        </div>
        <div class= "blogdate">
            <p>'. $row6['date'] . '</p>
        </div>
        </div>
    
        <div class = "blogcontent">
            <p>'. $row6['content'] . '</p>
        </div>
    
    </div>';
    }
} 

?>


</body>
<script src="logic/script.js"></script>

</html>