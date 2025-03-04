<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pan Tadeusz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container">
        <h1 class="text-center">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-4">
                <div class="list-group">
                    <a href="./" class="list-group-item list-group-item-action">Strona główna</a>
                <?php 
                    for ($i=1;$i<=12;$i++){
                        $active = isset($_GET['k']) && $_GET['k'] == $i ? "active" : "";
                        echo("<a href='./index.php?k=$i' class='list-group-item list-group-item-action $active'>Księga $i</a>");
                    }

                    ?>

                </div>

            </div>
            <div class="col-8">
                <?php
                    if(isset($_GET['k'])){
                        $k=$_GET['k'];
                        include_once("./k".$k.".html");
                    }else{
                        echo("");
                    }

                ?>

                <img src="./PanTadeusz.jpg" alt="PanTadeusz" class="img-fluid img-thumbnail">
            </div>
        </div>
    </section>
    <footer class="container">
        <p class="text-center">Mykyta Kyrii, Akademia Nauk Stosowanych w Nowym Targu</p>
    </footer>
</body>
</html>