<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>DZ 2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12">

            </header>
        </div>
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12">
                <?php
                    include_once ('pages/menu.php');
                ?>
            </nav>
        </div>
    </br>
        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php
                    if(isset($_GET["page"]))
                    {
                        $page = $_GET["page"];
                        if($page==1) include_once('pages/home.php');
                        if($page==2) include_once('pages/login.php');
                        if($page==3) include_once('pages/square.php');
                    }
                ?>
            </section>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

