<html>

<head>
    <link rel="stylesheet" type="text/css" href="style/index.css">
</head>

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
            <a class="menuLink" href="#con">Contacts</a>
        </div>
    </div>


    <form action="logic/insert.php" method="POST" enctype="multipart/form-data">
        <p>Insert into db</p>
        <input type="text" id="title" name="title" value="Title">
        <textarea type="message" id="content" name="content" value="Content"  rows="6" columns="12"></textarea>
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152000000" />
        <input type="file" multiple="multiple" id="img" name="img[]" accept="image/*">
        <script>
            <?php
            print_r($_FILES['img']['name']);
            ?>
        </script>
        <input type="submit" value="Submit" name="Submit">

    </form>


    <form action="logic/delete.php" method="POST" enctype="multipart/form-data">
        <p>Delete from db</p>
        <input type="text" id="title" name="title" value="Post title you want to delete">
        <input type="submit" value="Submit" name="Submit1">

    </form>

    <form action="logic/update.php" method="POST" enctype="multipart/form-data">
        <p>Update post from db</p>
        <input type="text" id="title" name="title" value="Post title you want to update">
        <br>

        <input type="text" id="titleUpdate" name="Newtitle" value="" placeholder="New Title">
        <textarea type="text" id="content" name="content" value="" placeholder="New Content" rows="6" ></textarea>
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152000000" />
        <input type="file" multiple="multiple" id="img" name="img[]" accept="image/*">
        <script>
            <?php
            print_r($_FILES['img']['name']);
            ?>
        </script>    
        
        <input type="submit" value="Submit" name="Submit2">

    </form>



    <br>
    <br>

    <form action="logic/blog/insert.php" method="POST" >
    <p> Insert into Blog</p>
    <input type="text" id="blogtitle" name="blogtitle" placeholder="Title">
    <textarea type="text" id="blogcontent" name= "blogcontent" placeholder="Content"  rows="6"  ></textarea>
    <input type="submit" value="Submit" name="SubmitBlog">
    </form>

    <form action = "logic/blog/update.php" method = "POST">
    <p>Update Post</p>
    <input type="number" name="postid" placeholder="Post ID">
    <input type="text" id="nblogtitle" name="nblogtitle" placeholder="Title">
    <textarea type="text" id="nblogcontent" name= "nblogcontent" placeholder="Content" rows="6"> </textarea>
    <input type="submit" value="Submit" name="nSubmitBlog">
    </form>

    <form action="logic/blog/delete.php" method="POST">
    <p>Delete Post</p>
    <input type="number" name="dpostid" placeholder="Post ID" >
    <input type="submit" value="Submit" name="dSubmitBlog">
    </form>
    <br>

</body>
<script src="logic/script.js"></script>

</html>