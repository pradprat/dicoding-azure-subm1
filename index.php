
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
<body>
    <div class="container">
        <h1>hello</h1>

        <div class="input-field col s6">
            <input id="nama" type="text" class="validate">
            <label class="active" for="nama">Nama</label>
        </div>
        <div class="input-field col s6">
            <input id="nim" type="text" class="validate">
            <label class="active" for="nim">NIM</label>
        </div>
        <div class="input-field col s6">
            <input id="hp" type="text" class="validate">
            <label class="active" for="hp">No.HP</label>
        </div>

        <button id="btn_input" class="btn waves-effect waves-light" type="submit" name="action">
            Input
        </button>
        <button id="btn_display" class="btn waves-effect waves-light" type="submit" name="action">
            Display Data
        </button>
    </div>
    <div>
    </div>

    <?php 
            echo "hai";
    ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>

</body>
</html>
