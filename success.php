<?php
$title = "Success";
require_once "includes/header.php" ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST["firstname"]?></h5>
        <p class="card-text"><?php echo $_POST["email"]?></p>
        <p class="card-text"><?php echo $_POST["age"]?></p>
        <p class="card-text"><?php echo $_POST["select"]?></p>
        <p class="card-text"><?php echo $_POST["text"]?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

<?php require_once "includes/footer.php" ?>