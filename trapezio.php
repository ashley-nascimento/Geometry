<?php require("formas_geometricas.php");?>
<!DOCTYPE html>
<html>
<style>
    body {
        position: relative;
        width: 100%;
        margin: 0;
        background: #f08080;
        text-align: center;
        color: #ffc6d9;
    }

    h2 {
        margin-top: 10%;
        margin-bottom: -102px;
        color: #ffc6d9;
        font-family: Courier New;
    }

    button {
        transition: 1s;
        margin-top: 10%;
    }

    button:hover {
        background: #DC143C;
    }

    input {
        margin-top: 9%;
        text-align: center;
    }

    .valor {
        width: 190px;
        height: 25px;
        border-radius: 20px;
        border: none;
    }

    .valor2 {
        width: 190px;
        height: 25px;
        border-radius: 20px;
        border: none;
        margin-top: 1%;
    }

    .valor:focus {
        border: none;
    }

    .la {
        margin-top: 3%;
    }

    .bot {
        margin-top: 2%;
        background: #f08080;
        border-radius: 4px;
        height: 31px;
        width: 85px;
        border: 2px solid #ffc6d9;
        transition: 0.2s;
        color: #ffc6d9;
        font-family: Courier New;
    }

    .bot:hover {
        color: #DC143C;
        border: 2px solid #DC143C;
    }
</style>

<body>
    <h2>Trapézio</h2>
    <form method="POST">
        <input type=text name=a class="valor" placeholder="Altura 1"><br>
        <input type=text name=b class="valor2" placeholder="Base menor"><br>
        <input type=text name=c class="valor2" placeholder="Altura 2"><br>
        <input type=text name=B class="valor2" placeholder="Base maior"><br>
        <input type=submit value="Calcular" class="bot">
        <h2 class="la">Resultado:</h2> <?php if (isset($_POST['a']) || isset($_POST['b']) || isset($_POST['c']) || isset($_POST['B'])){ $r = new Formas(); $r->Trapezio(); }
?>
    </form>
</body>

</html>