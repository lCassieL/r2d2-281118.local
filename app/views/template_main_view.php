<?php
     if ($_SERVER['REQUEST_METHOD'] === "POST"){
     $title = filter_input(INPUT_POST, 'title');
     $text = filter_input(INPUT_POST, 'text');
     $author = filter_input(INPUT_POST, 'author');
     $cntadm = new ControllerAdmin();
     $cntadm->action_add($title, $text, $author);
     // header('Location: ' . $_SERVER['REQUEST_URI']);
     header('Location: http://r2d2-281118.local/news/index');
 } 
?>
<!doctype html>
<html>
    <head>
        <title>MVC site</title>
    </head>
    <body>
        <?php
        include_once 'app/views/'.$this->page.'.php';
        ?>
    </body>
</html>