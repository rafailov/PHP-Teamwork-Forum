<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Team "Spike" - Forum</title>
    <script src="scripts/jquery-1.11.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div id="wrapper">
        <button>
            <a href="forum-Login.php">Sing up</a>
        </button>
        <button>
            <a href="forum-Registration.php">Register now</a>
        </button>
        <form method="post">
            <input type="text" name="title" placeholder="title">
            <textarea name="content"></textarea>
            <input type="submit" value="Add new theme" id="addNewTheme">
        </form>
        <?php
        if(isset($_POST['title']) && isset($_POST['content'])){
            $title = $_POST['title'];
            $content = $_POST['content'];

            echo "<div class=\"article\">";
            echo "<h4>$title</h4>";
            echo "<div>$content</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>