<?php require './model/bd.users.php';
$conditionSucces = false;
if (isset($_REQUEST['action'])) {

    $action = $_REQUEST['action'];
    switch ($action) {
        case 'sign_up';
            if (!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password_verify'])) {

                if ($_POST['password'] != $_POST['password_verify']) {
                    $errorMessage = "Les mots de passes ne sont pas identiques";
                } else {

                    $reqUser = getUsernameExist($_POST['username']);
                    $idExist = $reqUser->fetch();
                    $reqMail = getMailExist($_POST['mail']);
                    $mailExist = $reqMail->fetch();
                    if ($idExist) {
                        $errorMessage = "Le pseudo existe déjà";
                        $conditionSucces = false;

                    } else
                        if ($mailExist) {
                            $errorMessage = "Il existe déjà un compte associé à cette adresse mail";
                            $conditionSucces = false;
                        } else {
                        }
                    if (check_mdp_force($_POST['password']) == false)
                    { $errorMessage = "Le mot de passe est trop faible. Il doit contenir plus de 8 caractères, et au moins une majscule, un caractère spécial";
                        $conditionSucces = false;
                    }
                }
            } else {
                $errorMessage = "Veuillez remplir tous les champs";
            }

    }
}
if ($conditionSucces) {
    createUser($_POST['mail'], $_POST['password'], $_POST['username']);
    echo "<h1> Inscription réussie ! 😃 </h1>";

} else
    include "./view/sign_up.html.php";
