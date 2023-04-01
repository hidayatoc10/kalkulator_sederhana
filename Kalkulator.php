<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>

<style>
    body{
        background-color: #eaeaea;
        font-size: 28px;
    }
    .a, .b, .c, .d{
        font-size: 30px;
        width: 40px;
        transition: 1s;
    }
    
    .a:hover{
        font-size: 30px;
        width: 40px;
        background-color: red;
    }
    .b:hover{
        font-size: 30px;
        width: 40px;
        background-color: blue;
    }
    .c:hover{
        font-size: 30px;
        width: 40px;
        background-color: yellow;
    }
    .d:hover{
        font-size: 30px;
        width: 40px;
        background-color: white;
    }
</style>
<p>
    <?php echo "Masukkan Nilai pertama dan kedua";?><p>
    <form method="POST">
        Nlai Pertama : <input type="text" name="pertama"><br><br>
        Nilai Kedua  : <input type="text" name="kedua"><br><br>
       <button type="text" name="tambah" class="a">+</button>
       <button type="text" name="kurang" class="b">-</button>
       <button type="text" name="kali" class="c">x</button>
       <button type="text" name="bagi" class="d">/</button>
    </form>

    
    <?php  
        if( isset($_POST["tambah"])){
            $pertama = $_POST['pertama'];
        $kedua = $_POST['kedua'];
        $hasil = $pertama + $kedua;
        
    echo "<br>";
        echo $pertama. " + " .$kedua. " = ". $hasil. "<br>";
    }
        if( isset($_POST["kurang"])){
            $pertama = $_POST['pertama'];
        $kedua = $_POST['kedua'];
        $hasil = $pertama - $kedua;
        
    echo "<br>";
        echo $pertama. " - " .$kedua. " = ". $hasil. "<br>";
    }
        if( isset($_POST["kali"])){
            $pertama = $_POST['pertama'];
        $kedua = $_POST['kedua'];
        $hasil = $pertama * $kedua;
        
    echo "<br>";
        echo $pertama. " x " .$kedua. " = ". $hasil. "<br>";
    }
        if( isset($_POST["bagi"])){
            $pertama = $_POST['pertama'];
        $kedua = $_POST['kedua'];
        $hasil = $pertama / $kedua;
        
    echo "<br>";
        echo $pertama. " / " .$kedua. " = ". $hasil. "<br>";
    }

    ?>
</body>
</html>