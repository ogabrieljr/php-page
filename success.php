<?php
$title = "Success";
require_once "includes/header.php" ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_GET["firstname"]?></h5>
        <p class="card-text"><?php echo $_GET["email"]?></p>
        <p class="card-text"><?php echo $_GET["text"]?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

<?php require_once "includes/footer.php" ?>