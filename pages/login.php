<?php

$session_id = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $session_id = 1; // registration is successful
}

if($session_id == 0){
    echo "<h1>Please register</h1>";
    echo "<p>Session ID: $session_id</p>";
    ?>
    <form method="POST">
        <input type="text" class="form-control" name="login" placeholder="Login">
        <br>
        <br>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <?php
}
else {
    echo "<h1>You have already registered</h1>";
    echo "<p>Session ID: $session_id</p>";
    echo "<br>";
    echo "<a href='#'>Login</a>";
    echo "<p></p>";
}