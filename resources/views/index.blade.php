<!DOCTYPE html>
<html lang="en" style="width: 100%;height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>control panel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>

<body style="width: 100%;height: 100%;">
    <div style="background: url(&quot;assets/img/—Pngtree—smart%20robot%20palm%20advertising%20background_979721.jpg&quot;);width: 100%;height: 100%;">
        <div class="text-center" style="height: 100%;width: 100%;">
            <div class="row" style="width: 100%;">
                <div class="col" style="margin-top: 154px;">
                    <h1 style="color: rgb(255,255,255);">Control Panel</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine1-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[0]->value}}></div>
                <div class="col"><input id ="engine1" class="form-range" type="range" min="0" max="180" value={{$engine[0]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine1</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine2-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[1]->value}}></div>
                <div class="col"><input id ="engine2" class="form-range" type="range" min="0" max="180" value={{$engine[1]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine2</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine3-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[2]->value}}></div>
                <div class="col"><input id ="engine3" class="form-range" type="range" min="0" max="180" value={{$engine[2]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine3</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine4-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[3]->value}}></div>
                <div class="col"><input id ="engine4" class="form-range" type="range" min="0" max="180" value={{$engine[3]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine4</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine5-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[4]->value}}></div>
                <div class="col"><input id ="engine5" class="form-range" type="range" min="0" max="180" value={{$engine[4]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine5</h1>
                </div>
            </div>
            <div class="row align-items-center" style="width: 100%;">
                <div class="col"><input id ="engine6-text" type="number" min="0" max="180" style="margin-left: 70%" value={{$engine[5]->value}}></div>
                <div class="col"><input id ="engine6" class="form-range sl" type="range" min="0" max="180" value={{$engine[5]->value}}></div>
                <div class="col">
                    <h1 style="color: rgb(255,255,255); margin-right: 60%">engine6</h1>
                </div>
            </div>
            <button class="btn btn-primary" type="button" style="margin: 0px;margin-right: 50px;">save</button>
            <button class="btn btn-primary" type="button">turn on</button>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("engine1").oninput = function() {
            document.getElementById("engine1-text").value = this.value;
        }
        document.getElementById("engine2").oninput = function() {
            document.getElementById("engine2-text").value = this.value;
        }
        document.getElementById("engine3").oninput = function() {
            document.getElementById("engine3-text").value = this.value;
        }
        document.getElementById("engine4").oninput = function() {
            document.getElementById("engine4-text").value = this.value;
        }
        document.getElementById("engine5").oninput = function() {
            document.getElementById("engine5-text").value = this.value;
        }
        document.getElementById("engine6").oninput = function() {
            document.getElementById("engine6-text").value = this.value;
        }

        document.getElementById("engine1-text").oninput = function() {
            document.getElementById("engine1").value = this.value;
        }
        document.getElementById("engine2-text").oninput = function() {
            document.getElementById("engine2").value = this.value;
        }
        document.getElementById("engine3-text").oninput = function() {
            document.getElementById("engine3").value = this.value;
        }
        document.getElementById("engine4-text").oninput = function() {
            document.getElementById("engine4").value = this.value;
        }
        document.getElementById("engine5-text").oninput = function() {
            document.getElementById("engine5").value = this.value;
        }
        document.getElementById("engine6-text").oninput = function() {
            document.getElementById("engine6").value = this.value;
        }
    </script>
</body>

</html>