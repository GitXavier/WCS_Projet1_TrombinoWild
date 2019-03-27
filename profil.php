<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navBar.php'; ?>
<?php include '.old/import-students.php'; ?>

<?php


if (isset($_GET['firstName']))  // Si On a la valeur firstName dans le $_GET
{
    $firstNameStudent = $_GET['firstName'];
    $lastNameStudent = $_GET['lastName'];
}

foreach ($arrayStudents as $student => $dataStudent) {
    $names = explode(' ', trim($dataStudent[0]));
    foreach ($names as $nameFirstLast => $name) {
        $firstName = $names[0];
        $lastName = $names[1];
    }
    if ($firstName == $firstNameStudent && $lastName == $lastNameStudent) {
        break;
    }
}
?>
    <!--la div qui entoure le projet profil sous bootsrap-->

    <div class="mise_en_page"></div>

    <!--La partie profil commence ici-->

    <div class="container">
        <div class="row faces">
            <div class="card col-12 col-md-6">

                <!--Image du profil Wilder-->

                <H1><?php echo $dataStudent[3]; ?></H1>

                <div class="faces">
                    <a class="rounded-circle">
                        <img src="img/<?php echo $firstName . '_' . $lastName . '.jpg'; ?>" class="img-fluid"
                             alt="Photo <?php echo $firstName ?>">
                    </a>
                </div>

                <!--Icones reseaux sociaus-->
                <div class="container col-auto">
                    <div class="row ">

                        <div class="col">
                            <a class="profil-reseau" href="https://fr.linkedin.com/" target="_blank"><img
                                        src=".old/images_trombi/link.png" alt="linkedin"></a>
                        </div>
                        <div class="col">
                            <a class="profil-reseau" href="=https://fr-fr.facebook.com/" target="_blank"><img
                                        src=".old/images_trombi/fb.png" alt="facebook"></a>
                        </div>
                        <div class="col">
                            <a class="profil-reseau" href="=https://twitter.com/login?lang=fr

                            " target="_blank"><img src=".old/images_trombi/twitter.png" alt="twiter"></a>
                        </div>

                    </div>
                </div>
                <br>
                <!--Les informations personnelles-->
                <ul class="list-unstyled">
                    <li class="text-center"><h5 class="font-weight-bolder"><?php echo $lastName; ?></h5></li>
                    <li><h5 class=" text-center"><?php echo $firstName; ?></h5></li>
                </ul>
                <h4 class=" text-center">CENTRE DE <br>FORMATION</h4>
                <ul class="list-unstyled">
                    <li><h5 class=" text-center">Bordeaux</h5></li>
                    <li><h5 class=" text-center">France</h5></li>
                    <li><h5 class=" text-center">Le Phoenix</h5></li>
                    <li><h5 class=" text-center">2019</h5></li>
                </ul>
                <!--La partie textuelle-->
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-body">
                    <h3 class="card-title cursus">Mon Cursus</h3>

                    <p class="card-text profil-font">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos,
                        molestias quisquam accusantium</p>

                    <h3 class="card-title cursus">Qui suis je ?</h3>

                    <p class="card-text profil-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                        laborum unde, necessitatibus praesentium non cupiditate, delectus hic doloremque nesciunt
                        dolorem maxime ratione enim labore quasi deleniti iure dolor reiciendis odio.
                        Distinctio laborum unde, necessitatibus praesentium non cupiditate, delectus hic doloremque
                        nesciunt dolorem maxime ratione enim labore quasi deleniti iure dolor reiciendis odio.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/_footer.php'; ?>