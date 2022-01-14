<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
        <?php if (isset($users)) {
            foreach ($users as $key=>$user):?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $user->name?></td>
                    <td><?php echo $user->age?></td>
                </tr>
            <?php endforeach;
        } ?>
    </tbody>

</table>
