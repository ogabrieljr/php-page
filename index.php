<?php
$title = "Index";
require_once "includes/header.php";
require_once "db/conn.php"
?>


<form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First name</label>
        <input name="firstname" type="text" class="form-control" id="firstname">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <select name="select" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="One">One</option>
        <option value="Two">Two</option>
        <option value="Three">Three</option>
        <option value="Four">Four</option>
    </select>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input name="age" type="text" class="form-control" id="age">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="text" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php require_once "includes/footer.php" ?>