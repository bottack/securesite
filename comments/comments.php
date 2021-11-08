<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Comments</title>
</head>
<body>
    <div class="existing_comments">
    <?php
        $db=mysqli_connect('localhost', 'root', 'toor', 'website_project');
        $sql= 'SELECT * FROM comments';
        $result=mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                echo '<h5 class="user">' . $row['name'] . '</h5>';
                echo '<p class="user_comment">' . $row['comments'] . '</p>';
            }
        }
    ?>
    </div>
    <div id="form_block">
        <h5 id="tag">Please leave a comment below!</h5>
        <form id="php-form" action="comments_connection.php" method="post">
            <table id="php-table">
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Name:</label></td>
                    <td class="php-td"><input id="name" class="php-input" name="name" type="text" placeholder="Username" autocomplete="off"></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Comments</label></td>
                    <td class="php-td"><textarea id="comments" class="php-textarea" name="comments" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="php-button">Submit</button>
        </form>
    </div>
</body>
