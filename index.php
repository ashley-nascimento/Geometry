<!DOCTYPE html>
<html>
<style>
    body {
        position: relative;
        width: 100%;
        margin: 0;
        background: #f08080;
        text-align: center;
    }
    
    h2{
        margin-top: 10%;
        margin-bottom: -20px;
        color: #ffc6d9;
        font-family: Courier New;
    }

    button {
        transition: 1s;
    }

    button:hover {
        background: #DC143C;
    }   
   

    .formas {
        display: inline;
        float: left;
        margin: 10px;
        text-align: center;
    }

    .legal {
        top: 50%;
        left: 55%;
        position: absolute;
        transform: translateX(-50%);
        margin-top: 5%;
        width: 60%;
        line-height: 30px;
        font-size: 15pt;
        color: #ffc6d9;
        font-family: Courier New;
    }

    .quad {
        width: 100px;
        height: 100px;
        border: none;
        background: #ffc6d9;
    }

    .ret {
        width: 157px;
        height: 100px;
        border: none;
        background: #ffc6d9;
    }

    .trap {
        width: 186px;
        height: 100px;
        background: #ffc6d9;
        clip-path: polygon(20% 0%, 80% 0, 100% 100%, 0% 100%);
        border: none;
    }

    .para {
        width: 192px;
        height: 100px;
        -webkit-transform: skew(20deg);
        background: #ffc6d9;
        border: none;
        text-decoration: none;
    }

</style>
<script type="text/javascript">
    function muda1(teste) {
        if (teste == 1) {
            document.getElementById("1").style.transition = "1s"
            document.getElementById("1").style.color = "#DC143C";
        } else {
            document.getElementById("1").style.color = "#ffc6d9";
        }
    }

    function muda2(teste) {
        if (teste == 1) {
            document.getElementById("2").style.transition = "1s"
            document.getElementById("2").style.color = "#DC143C";
        } else {
            document.getElementById("2").style.color = "#ffc6d9";
        }
    }

    function muda3(teste) {
        if (teste == 1) {
            document.getElementById("3").style.transition = "1s"
            document.getElementById("3").style.color = "#DC143C";
        } else {
            document.getElementById("3").style.color = "#ffc6d9";
        }
    }

    function muda4(teste) {
        if (teste == 1) {
            document.getElementById("4").style.transition = "1s"
            document.getElementById("4").style.color = "#DC143C";
        } else {
            document.getElementById("4").style.color = "#ffc6d9";
        }
    }
</script>

<body>
 <h2> Escolha uma forma geométrica </h2>
    <div class="legal">
        <div class="formas" id="1">Quadrado <form action="quadrado.php"> <button class="quad" name="button" onmouseover="muda1(1)" onmouseout="muda1(2)"></button> </form>
        </div>
        <div class="formas" id="2">Retângulo <form action="retangulo.php"> <button class="ret" name="button" onmouseover="muda2(1)" onmouseout="muda2(2)"></button> </form>
        </div>
        <div class="formas" id="3">Trapézio <form action="trapezio.php"> <button class="trap" name="button" onmouseover="muda3(1)" onmouseout="muda3(2)"></button> </form>
        </div>
        <div class="formas" id="4">Paralelogramo <form action="paralelogramo.php"> <button class="para" name="button" onmouseover="muda4(1)" onmouseout="muda4(2)"></button> </form>
        </div>
    </div>
</body>
