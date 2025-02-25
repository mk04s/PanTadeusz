<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container">
        <h1 class="text-center">Pan Tadeusz, czyli ostatni  zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-4">
              <div class="list-group">
                <a
                  href="./"
                  class="list-group-item list-group-item-action"
                  aria-current="true"
                >
                  Strona glówna
                </a>
                <?php
                  for ($k=1; $k<= 12; $k++){
                    //echo "<a href='.k$k.html' class='list-group-item list-group-item-action'>Księga $k</div>a";
                    echo '<a href="./k'.$k.'.html" class="list-group-item list-group-item-action">Księga'.$k.'</a>';
                  
                  }
                  ?>
                
              </div>
            </div>
            <div class="col-8"></div>
          </div>
    </section>
    <footer class="container">
        <p class="text-center">Mykyta Kyrii, Akademia Nauk Stosowanych w Nowym Targu</p>
    </footer>
</body>
</html>