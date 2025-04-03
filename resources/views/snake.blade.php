<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos Sencillos</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #e0f7fa;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-image: url('https://i.pinimg.com/originals/02/01/1e/02011ec8554277b8c70bf22fb192123c.gif');
            background-size: cover;
            background-position: center;
        }

        .games {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .game {
            border: 4px solid #333;
            border-radius: 15px;
            padding: 20px;
            margin: 20px;
            width: 200px;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .game:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            background-color: #ff4081;
            color: white;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #f50057;
        }

        .game img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        #rps-game {
            background-color: #66ccff;
        }

        #memory-pattern-game {
            background-color: #ffcc66;
        }

        #hangman-game {
            background-color: #ff9999;
        }

        #guess-number-game {
            background-color: #99ff99;
        }

        #find-pair-game {
            background-color: #ffccff;
        }

        #color-memory-game {
            background-color: #cc99ff;
        }


        .interactive-title-container {
            position: relative;
            margin-bottom: 1cm; 
            width: calc(100% - 10cm); 
            max-width: 700px; 
            margin-left: auto; 
            margin-right: auto; 
        }
        .interactive-title {
            position: relative;
            font-size: 4rem; 
            color: #ff6600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            animation: pulse 2s infinite;
            z-index: 10;
            border: 5px solid #007bff; 
            border-radius: 10px; /* Bordes redondeados */
            padding: 20px; /* Espaciado interno */
            background-color: #fff; /* Fondo blanco */
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1) translateY(0);
                color: #090d0c;
                background-color: #fffbf3; 
                border-color: #090d0c; 
            }
            50% {
                transform: scale(1.2) translateY(-5px);
                color: #fffbf3;
                background-color: #090d0c; 
                border-color:#fffbf3; 
            }
        }
    </style>
</head>
<body>
    <div class="interactive-title-container">
        <h1 class="interactive-title">Juegos Sencillos</h1>
    </div>
    <div class="games">
        <div class="game" id="rps-game">
            <h2>Piedra, Papel, Tijeras</h2>
            <img src="https://st3.depositphotos.com/5045705/16974/v/450/depositphotos_169745242-stock-illustration-rock-paper-scissors-icons.jpg" alt="Piedra, Papel, Tijeras">
            <button onclick="playRPS('piedra')">Piedra</button>
            <button onclick="playRPS('papel')">Papel</button>
            <button onclick="playRPS('tijeras')">Tijeras</button>
        </div>
        <div class="game" id="memory-pattern-game">
            <h2>Memoriza el Patrón</h2>
            <img src="https://play-lh.googleusercontent.com/IZRASItsvZUyXCF2u_V0GmK71pyEpEPJIDaYP_OVm75zZYP7VkeKx1oQNvtJ2GPPWCg" alt="Memoriza el Patrón">
            <button onclick="startMemoryPattern()">Iniciar</button>
        </div>
        <div class="game" id="hangman-game">
            <h2>Ahorcado</h2>
            <img src="https://media.istockphoto.com/id/1089779594/es/vector/%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D1%8C.jpg?s=612x612&w=0&k=20&c=jBf8rSFVnrYUoXsaLtN6Rtak6UiCML3wY2ds2kculcs=" alt="Ahorcado">
            <button onclick="startHangman()">Iniciar</button>
        </div>
        <div class="game" id="guess-number-game">
            <h2>Adivina el Número</h2>
            <img src="https://mobbyt.com/media/gallery/34df0bf13777facbc45b774a44c36b18/8a20c061_2020-06-03-mobbyt.png" alt="Adivina el Número">
            <button onclick="startGuessNumber()">Iniciar</button>
        </div>
        <div class="game" id="find-pair-game">
            <h2>Encuentra la Pareja</h2>
            <img src="https://mobbyt.com/media/gallery/0fcee95cc7b4f2067da8ba1e330de18e/71653a29_2019-09-07-mobbyt.jpg" alt="Encuentra la Pareja">
            <button onclick="startFindPair()">Iniciar</button>
        </div>
        <div class="game" id="color-memory-game">
            <h2>Memoria de Colores</h2>
            <img src="https://i.pinimg.com/474x/b5/69/17/b56917931825a7c85447728515e3f0a0.jpg" alt="Memoria de Colores">
            <button onclick="startColorMemory()">Iniciar</button>
        </div>

        <br>
        <a href="welcome" class="btn">Volver a la Página de Inicio</a>

    </div>
    <script>
        function playRPS(playerChoice) {
            var choices = ['piedra', 'papel', 'tijeras'];
            var computerChoice = choices[Math.floor(Math.random() * 3)];
            var translatedChoices = {
                'piedra': 'Piedra',
                'papel': 'Papel',
                'tijeras': 'Tijeras'
            };
            alert('Jugador eligió: ' + translatedChoices[playerChoice] + '\nComputadora eligió: ' + translatedChoices[computerChoice]);

            if (playerChoice === computerChoice) {
                alert('¡Empate!');
            } else if ((playerChoice === 'piedra' && computerChoice === 'tijeras') ||
                       (playerChoice === 'papel' && computerChoice === 'piedra') ||
                       (playerChoice === 'tijeras' && computerChoice === 'papel')) {
                alert('¡Ganaste!');
            } else {
                alert('¡Perdiste!');
            }
        }

        function startMemoryPattern() {
            alert('¡Encuentra el patrón en la secuencia de colores!');
            var pattern = generatePattern(5); // Genera un patrón de 5 colores
            var userPattern = [];
            var index = 0;

            function showNextColor() {
                if (index < pattern.length) {
                    alert(pattern[index]);
                    index++;
                    setTimeout(showNextColor, 1000); // Muestra cada color por 1 segundo
                } else {
                    var userInput = prompt('Ahora repite el patrón.');
                    var userColors = userInput.split(',').map(function(color) {
                        return color.trim().toLowerCase();
                    });

                    // Verificar si el patrón del usuario coincide con el patrón generado
                    var patternMatch = true;
                    if (userColors.length !== pattern.length) {
                        patternMatch = false;
                    } else {
                        for (var i = 0; i < pattern.length; i++) {
                            if (userColors[i] !== pattern[i]) {
                                patternMatch = false;
                                break;
                            }
                        }
                    }

                    // Mostrar mensaje de resultado
                    if (patternMatch) {
                        alert('¡Correcto! Has memorizado la secuencia correctamente.');
                    } else {
                        alert('¡Incorrecto! Inténtalo de nuevo.');
                    }
                }
            }

            showNextColor();
        }

        function generatePattern(length) {
            var colors = ['rojo', 'verde', 'azul', 'amarillo'];
            var pattern = [];
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * colors.length);
                pattern.push(colors[randomIndex]);
            }
            return pattern;
        }

        function startHangman() {
            alert('¡Adivina la palabra antes de que se complete el ahorcado!');
            var words = ['gato', 'perro', 'ratón', 'elefante', 'jirafa']; // Palabras disponibles para adivinar
            var randomIndex = Math.floor(Math.random() * words.length);
            var wordToGuess = words[randomIndex];
            var guessedLetters = [];
            var maxAttempts = 6;
            var incorrectGuesses = 0;
            var hiddenWord = '_'.repeat(wordToGuess.length); // Palabra oculta al inicio

            function displayWord() {
                alert('Palabra a adivinar: ' + hiddenWord);
            }

            function updateHiddenWord(letter) {
                var newHiddenWord = '';
                for (var i = 0; i < wordToGuess.length; i++) {
                    if (wordToGuess[i] === letter) {
                        newHiddenWord += letter;
                    } else {
                        newHiddenWord += hiddenWord[i];
                    }
                }
                hiddenWord = newHiddenWord;
            }

            function isGameWon() {
                return hiddenWord === wordToGuess;
            }

            function isGameLost() {
                return incorrectGuesses >= maxAttempts;
            }

            function guessLetter() {
                var letter = prompt('Ingresa una letra:').toLowerCase();
                if (guessedLetters.includes(letter)) {
                    alert('Ya has intentado con esa letra. Intenta con otra.');
                    guessLetter();
                } else {
                    guessedLetters.push(letter);
                    if (wordToGuess.includes(letter)) {
                        alert('¡Bien! La letra ' + letter + ' está en la palabra.');
                        updateHiddenWord(letter);
                    } else {
                        alert('La letra ' + letter + ' no está en la palabra.');
                        incorrectGuesses++;
                    }
                    displayWord();
                    if (isGameWon()) {
                        alert('¡Felicidades! Has adivinado la palabra correctamente: ' + wordToGuess);
                    } else if (isGameLost()) {
                        alert('Lo siento, has perdido. La palabra correcta era: ' + wordToGuess);
                    } else {
                        guessLetter();
                    }
                }
            }

            displayWord();
            guessLetter();
        }

        function startGuessNumber() {
            alert('¡Adivina el número secreto!');
            var secretNumber = Math.floor(Math.random() * 100) + 1; // Número aleatorio entre 1 y 100
            var attempts = 0;

            // Lógica para que el usuario adivine el número
        }

        function startFindPair() {
            alert('¡Encuentra las parejas de imágenes iguales!');
            var images = ['imagen1.jpg', 'imagen2.jpg', 'imagen3.jpg', 'imagen4.jpg', 'imagen5.jpg']; // Imágenes disponibles
            var shuffledImages = shuffle(images.concat(images)); // Duplica
            var selectedCards = [];

            // Lógica para el juego de encontrar la pareja
        }

        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex;

            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex--;

                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        }

        function startColorMemory() {
            alert('¡Memoriza la secuencia de colores y repítela!');
            var colors = ['rojo', 'verde', 'azul', 'amarillo']; // Colores disponibles
            var pattern = generatePattern(5); // Genera un patrón de 5 colores
            var userPattern = [];
            var index = 0;

            function showNextColor() {
                if (index < pattern.length) {
                    // Cambia el fondo del cuerpo con el color actual
                    document.body.style.backgroundColor = pattern[index];
                    setTimeout(function() {
                        // Restaura el fondo del cuerpo al color original después de 1 segundo
                        document.body.style.backgroundColor = '#f4f4f4';
                        index++;
                        showNextColor();
                    }, 1000); // Muestra cada color por 1 segundo
                } else {
                    // Lógica para que el usuario repita el patrón
                    var userInput = prompt('Repita el patrón de colores separados por coma (por ejemplo, rojo,azul,verde):');
                    var userColors = userInput.split(',').map(function(color) {
                        return color.trim().toLowerCase();
                    });
                    if (JSON.stringify(userColors) === JSON.stringify(pattern)) {
                        alert('¡Correcto! Has memorizado la secuencia correctamente.');
                    } else {
                        alert('¡Incorrecto! Inténtalo de nuevo.');
                    }
                }
            }

            showNextColor();
        }

        function goToHomePage() {
            window.location.href = window.location.href; // Recarga la página para volver al inicio
        }
    </script>
</body>
</html>
