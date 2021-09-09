<h1 class="txt-center">Liste des utilisateurs de ce super site</h1>
<div class="flex row center m-auto">


    <table id="users-list" >
        <thead>
        <tr>
            <th >Login</th>
            <th >Mail</th>
        </tr>
        </thead>
        <tbody>

        <? foreach ($users as $user): ?>
            <tr align="center">
                <td><? echo $user['username']; ?></td>
                <td><? echo $user['mail']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="flex row  center mt-3">
    <a href="index.php?uc=sign">Clique pour t'inscrire</a>
</div>