<?php include 'orders/import-students.php'; ?>

    <div class="faces">
    <?php

    foreach ($arrayStudents as $student => $dataStudent){
        $names = explode(' ', trim($dataStudent[0]));
        foreach ($names as $nameFirstLast => $name)
        {
            $firstName = $names[0];
            $lastName = $names[1];
        }
            if (is_file('img/' . $firstName .'_' . $lastName . '.jpg')){
    ?>
      <div class="col-6 col-md-3">
        <a class="rounded-circle" href="/profil.php?firstName=<?php echo $firstName;?>&lastName=<?php echo $lastName;?>">
            <img src="img/<?php echo $firstName .'_' . $lastName . '.jpg'; ?>" class="img-fluid" alt="Photo <?php echo $firstName?>">
        </a>
      </div>
    <?php } } ?>
    </div>




