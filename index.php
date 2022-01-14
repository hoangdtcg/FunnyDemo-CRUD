<?php
require __DIR__."/vendor/autoload.php";

use App\Services\PostService;
use App\Services\UserService;

$userService = new UserService();
$postService = new PostService();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=user">User List</a>
<a href="index.php?page=post">Post List</a>
</body>
</html>
<?php
//    if(isset($_REQUEST["page"]))
//        $page = $_REQUEST["page"];
//    else
//        $page = "";

//    $page = isset($_REQUEST["page"])?$_REQUEST["page"]:"";
    $page = $_REQUEST["page"] ?? "";
    switch ($page){
        case "user":
            $users = $userService->getAll();
            include_once "App/Views/user/list.php";
            break;
        case "post":
            $posts = $postService->getAll();
            include_once "App/Views/post/list.php";
            break;
        case "create-post":
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                include_once "App/Views/post/create.php";
            }else{
                $postService->create($_POST);
                header("location:index.php?page=post");
            }
            break;
        case "delete-post":
            $id = $_REQUEST["id"] ?? null;
            $postService->delete($id);
            header("location:index.php?page=post");
            break;
    }

