<?


function getUser($idU)
{
    $bdd = getBdd();
    $req = $bdd->prepare("SELECT id, username, mail, password FROM users WHERE username = ?");
    $req->execute(array($idU));
    return $req;
}

function getUsers()
{
    $bdd = getBdd();
    $req = $bdd->query("SELECT id, username, mail, password FROM users");
    $req->execute();
    return $req;
}

function getUsernameExist($idU)
{
    $bdd = getBdd();
    $req = $bdd->prepare("SELECT username FROM users WHERE username = ?");
    $req->execute(array($idU));
    return $req;
}

function getMailExist($mail)
{
    $bdd = getBdd();
    $req = $bdd->prepare("SELECT mail FROM users WHERE mail = ?");
    $req->execute(array($mail));
    return $req;
}

function createUser($mail, $mdp, $username)
{
    $bdd = getBdd();
    $hashpass = password_hash($mdp, PASSWORD_BCRYPT);
    $req = $bdd->prepare("INSERT INTO users (`mail`, `password`, `username`) VALUES (?,?,?)");
    $req->execute(array($mail, $hashpass, $username));
    return $req;
}
function check_mdp_force($mdp)
{
    $majuscule = preg_match('@[A-Z]@', $mdp);
    $minuscule = preg_match('@[a-z]@', $mdp);
    $chiffre = preg_match('@[0-9]@', $mdp);

    if (!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8) {
        return false;
    } else
        return true;
}
