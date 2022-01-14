<div>
    <a href="index.php?page=create-post">New Post</a>
</div>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($posts)) {
        foreach ($posts as $key=>$post):?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $post->title?></td>
                <td><?php echo $post->content?></td>
                <td><a onclick="return confirm('Are you sure?')" href="index.php?page=delete-post&id=<?php echo $key?>">Delete</a></td>
            </tr>
        <?php endforeach;
    } ?>
    </tbody>

</table>
