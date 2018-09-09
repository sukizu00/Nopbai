<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">

    </head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px;">
    <table class="table table-hover">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Action</td>
        </tr>
        <?php use App\Post;$allPosts =Post::all();foreach ($allPosts as $post): ?>
        <td>
            <td><?php echo $post['id']; ?></td>
            <td><?php echo $post['title']; ?></td>
            <td><?php echo $post['body']; ?></td>
        <td>
            <a href="post/<?php echo $post['id'];?>/edit">Edit</a>
            <a href="post/<?php echo $post['id'];?>/delete">Delete</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>