
<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navBar.php'; ?>
<?php include 'orders/import-students.php'; ?>

    <div class="faces">
    <?php foreach ($arrayStudents as $student => $dataStudent){
        $names = explode(' ', trim($dataStudent[0]));
        foreach ($names as $namefirstlast => $name);
        $firstName = $names[0];
        $lastName = $names[1];

            if (is_file('img/' . $firstName .'_' . $lastName . '.jpg')){
    ?>
      <div class="col-6 col-md-3">
        <a class="rounded-circle" href="profil-<?php echo $firstName;?>.php">
            <img src="img/<?php echo $firstName .'_' . $lastName . '.jpg'; ?>" class="img-fluid" alt="Photo <?php echo $firstName?>">
        </a>
      </div>
    <?php } } ?>
    </div>

<?php include 'includes/_footer.php';?>