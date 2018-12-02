<table>
    <caption>Users</caption>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>email</th>
    </tr>
    <?php foreach($this->users as $key=>$user) :?>
    <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $user['login'] ?></td>
        <td><?= $user['email'] ?></td>
    </tr>
    <?php endforeach;?>
</table>