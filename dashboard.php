<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
    <body>

        

        <form action="logic/insert.php" method="POST" enctype="multipart/form-data">
        <p>Insert into db</p>
            <input type="text" id="title" name="title" value="Title">
            <input type="message" id="content" name="content" value="Content">
            <input type="hidden" name="MAX_FILE_SIZE" value="2097152000000" />
            <input type="file" multiple="multiple" id="img" name="img[]" accept="image/*" >
            <script>
            <?php
            print_r($_FILES['img']['name']);
            ?>
            </script>
            <input type="submit" value="Submit" name= "Submit">

        </form> 
        

        <form action="logic/delete.php" method="POST" enctype="multipart/form-data">
        <p>Delete from db</p>
            <input type="text" id="title" name="title" value="Post title you want to delete">
            <input type="submit" value="Submit" name= "Submit1">

        </form>

    </body>
</html>