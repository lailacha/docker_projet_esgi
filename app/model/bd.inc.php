<?

function getBdd()
{ {
        try {
            $bdd = new PDO('mysql:host=db;dbname=db', 'root', 'password');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch (exception $e) {
            echo "Connection MYSQl IMPOSSIBLE:", $e->getMessage();
            die();
        }
    }
}
