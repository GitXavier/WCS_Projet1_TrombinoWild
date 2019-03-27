<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navBar.php'; ?>
<?php include_once 'connec.php'; ?>




<?php
if (!empty($_POST)) {

    var_dump($_POST);
    $pdo = new PDO(DSN, USER, PASS);
    $query = "INSERT INTO wilder VALUES (NULL, :firstname, :lastname, :birthday, :email, :cursus, :github, :presentation);";
    $prepared = $pdo->prepare($query);

    $prepared->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $prepared->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $prepared->bindValue(':birthday', $_POST['birthday'], PDO::PARAM_STR);
    $prepared->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $prepared->bindValue(':cursus', $_POST['cursus'], PDO::PARAM_STR);
    $prepared->bindValue(':github', $_POST['github'], PDO::PARAM_STR);
    $prepared->bindValue(':presentation', $_POST['about'], PDO::PARAM_STR);

    $prepared->execute();
}
?>





<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname" placeholder="Your FirstName">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Your LastName">
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Your birthday">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cursusPHP" name="cursus" class="custom-control-input" value="PHP" checked>
                        <label class="custom-control-label" for="cursusPHP">Cursus PHP</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="cursusJS" name="cursus" class="custom-control-input" value="JS">
                        <label class="custom-control-label" for="cursusJS">Cursus JS</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="github">Your GitHub</label>
                    <input type="text" class="form-control" id="github" name="github" placeholder="Your GitHub">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control" id="about" name="about" rows="3"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-dark">Send</button>
                </div>
            </div>
        </div>
    </div>
</form>





<?php include 'includes/_footer.php'; ?>
