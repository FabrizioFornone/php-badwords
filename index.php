<?php

if (key_exists('word', $_GET)) {
    $userword = $_GET['word'];
} else {
    $userword = 'Choose a word to replace with a query: ?word=';
}


$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in mollitia sunt voluptatibus possimus non, molestiae expedita ducimus atque eius laborum! Perferendis sunt magni dolore quos nisi eius earum eaque!";

$newWord = str_replace($userword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords Fabrizio Fornone</title>
</head>

<body>
    <main>
        <div class="container">
            <div>
                <h2> <span>Paragraph:</span>
                    <p>
                        <?php
                        echo $paragraph;
                        ?>
                    </p>
                </h2>
                <h2> <span>Length:</span>
                    <?php
                    echo strlen($paragraph);
                    ?>
                </h2>
            </div>
            <div>
                <h2> <span>Query Key:</span>
                    <?php
                    echo $userword
                    ?>
                </h2>
                <h2> <span>Censored Paragraph:</span>
                    <p>
                        <?php
                        echo $newWord;
                        ?>
                    </p>
                </h2>
                <h2> <span>Length:</span>
                    <?php
                    echo strlen($newWord);
                    ?>
                </h2>
            </div>
        </div>
    </main>
</body>

</html>