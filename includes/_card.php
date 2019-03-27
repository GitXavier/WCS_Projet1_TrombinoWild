<?php

include_once 'connec.php';
require_once 'Wilder.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM wilder ORDER BY firstname ASC";
$res = $pdo->query($query);
$wilders = $res->fetchAll(PDO::FETCH_CLASS, 'Wilder');

?>

    <div class="faces">

    <?php

    foreach ($wilders as $school) {

            $firstName =  $school->getFirstname();
            $lastName =  $school->getLastname();
            $photoWader = 'img/' . $firstName .'_' . $lastName . '.jpg';

            if (!is_file($photoWader)) {
                $photoWader = 'img/logo.jpg';
            }?>

        <div class="col-6 col-md-3">
            <a class="rounded-circle" href="/profil.php?firstName=<?php echo $firstName;?>&lastName=<?php echo $lastName;?>">
                <img src="<?php echo $photoWader; ?>" class="img-fluid" alt="Photo <?php echo $firstName?>">
            </a>
            <p><?php echo $firstName .' ' . $lastName; ?></p>
        </div>

<?php } ?>

    </div>


