---
title: 'Tarea 10 | Juego HTML'
---

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        canvas {
            border: 1px solid #d3d3d3;
            background-color: #f1f1f1;
            margin-top: 6%; 
            margin-left: auto; 
            margin-right: auto;
            display: block;
        } 

        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
        }

        .modalDialog>div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            background: -webkit-linear-gradient(#fff, #999);
            background: -o-linear-gradient(#fff, #999);
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .close:hover {
            background: #00d9ff;
        }
    </style>
</head>

<body onload="startGame()">
    <div>
        <canvas id="canvas"></canvas>
    </div>
    <div id="modal"></div>
    <div id="ScoreTable"></div>
    <a href="javascript:location.reload()">Nueva Partida</a>
    
    <script>

        var myGamePiece;
        var myObstacles = [];
        var myScore;

        function startGame() {
            myGamePiece = new component(30, 30, "/user/pages/01.blog/blog-single10/angry-bird-red-icon.png", 10, 120,"image");
            myScore = new component("30px", "Consolas", "black", 280, 40, "text");
            myGameArea.start();
        }
        var myGameArea = {
            canvas: document.getElementById("canvas"),
            start: function () {
                this.canvas.width = 480;
                this.canvas.height = 270;
                this.context = this.canvas.getContext("2d");
                document.body.insertBefore(this.canvas, document.body.childNodes[0]);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 20);
            },
            clear: function () {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            },
            stop: function () {
                clearInterval(this.interval);
            }
        }

        function component(width, height, color, x, y, type) {
            this.type = type;
            if (type === "image") {
                this.image = new Image();
                this.image.src = color;
            }
            this.width = width;
            this.height = height;
            this.speedX = 0;
            this.speedY = 0;
            this.x = x;
            this.y = y;
            this.update = function () {
                ctx = myGameArea.context;
                if (this.type == "text") {
                    ctx.font = this.width + " " + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else if (type == "image") {
                    ctx.drawImage(this.image,
                        this.x,
                        this.y,
                        this.width, this.height);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            }
            this.newPos = function () {
                this.x += this.speedX;
                this.y += this.speedY;
            }
            this.crashWith = function (otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
                    crash = false;
                }
                return crash;

            }
        }

        function updateGameArea() {
            var x, height, gap, minHeight, maxHeight, minGap, maxGap;
            for (i = 0; i < myObstacles.length; i += 1) {
                if (myGamePiece.crashWith(myObstacles[i])) {
                    myGameArea.stop();
                    //here is when the gamer lost
                    console.log("Choque");
                    newMatch();
                    return;
                }
            }
            myGameArea.clear();
            myGameArea.frameNo += 1;
            if (myGameArea.frameNo == 1 || everyinterval(150)) {
                x = myGameArea.canvas.width;
                minHeight = 20;
                maxHeight = 200;
                height = Math.floor(Math.random() * (maxHeight - minHeight + 1) + minHeight);
                minGap = 50;
                maxGap = 200;
                gap = Math.floor(Math.random() * (maxGap - minGap + 1) + minGap);
                myObstacles.push(new component(10, height, "green", x, 0));
                myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));
            }
            for (i = 0; i < myObstacles.length; i += 1) {
                myObstacles[i].speedX = -1;
                myObstacles[i].newPos();
                myObstacles[i].update();
            }
            myScore.text = "SCORE: " + myGameArea.frameNo;
            myScore.update();
            myGamePiece.newPos();
            myGamePiece.update();
        }

        //Reset the game and take the name of the player
        function newMatch() {
            const modal = document.getElementById('modal');
            const div = document.createElement('div');
            div.innerHTML = `
                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Game Over</h2>
                        <p>Si quieres guardar tu puntuacion ingresa tu nombre</p>
                        <input type="text" id="nombre"><button onClick="saveScore();">Guardar</button>
                    </div>
                </div>
            `;
            modal.appendChild(div);
        }

        //Save the Score in localstorage
        function saveScore(){
            const name = document.getElementById('nombre').value;
            const score = myScore.text;
            var player = {
                name: name,
                score: score
            };
            console.log(player.name);

            //Saving data about player = name, score
            localStorage.setItem('datos', JSON.stringify(player));
        }

        //Getting the score and name of player
        function getScore(){
            //getting data about player and save in a var
            var guardado = localStorage.getItem('datos');

            const table = document.getElementById('ScoreTable');
            const element = document.createElement('div');

            //Parsing data to show in a Modal
            var datos = JSON.parse(guardado);

            element.innerHTML = `
                <div id="openModal2" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Hola ${datos.name} la mejor Puntuación que has conseguido es: </h2>
                        <h3>${datos.score}</h3>
                    </div>
                </div>
            `;
            table.appendChild(element);
        }

        //Getting the event when some key is pressed, then move
        document.addEventListener("keydown", (event) => {

            var codigo = event.which || event.keyCode;
            console.log("tecla :" +codigo);

            if (codigo == 83) {
                myGamePiece.speedY = 1;//movedown
            } else if (codigo == 87) {
                console.log("Tecla pulsada " + codigo);
                myGamePiece.speedY = -1;//move up
            } else if (codigo == 68) {
                console.log("Tecla pulsada " + codigo);
                myGamePiece.speedX = 1;//moveright
            } else if (codigo == 65) {
                console.log("Tecla pulsada " + codigo);
                myGamePiece.speedX = -1;//moveleft
            }

        });

        function everyinterval(n) {
            if ((myGameArea.frameNo / n) % 1 == 0) { return true; }
            return false;
        }
    </script>
</body>
</html>