<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏆 Sorteo de Premios - Inscripción Manual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        /* Estilos del Título Principal para el botón oculto */
        #mainTitle {
            user-select: none;
            cursor: default;
        }
        /* Clase para el emoji de la derecha, donde estará el botón oculto */
        #secretButton {
            cursor: default; /* CLAVE: Mantiene el cursor estándar (flecha), haciéndolo imperceptible */
            transition: transform 0.1s;
        }
        #secretButton:active {
            transform: scale(0.9);
        }

        /* Estilos generales de la interfaz */
        .result-display {
            font-size: 5em;
            font-weight: bolder;
            color: #198754;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e9ecef;
            border-radius: .75rem;
            margin-top: 20px;
            transition: all 0.3s ease-in-out;
        }
        .spinning {
            animation: spin-and-flash 0.1s infinite alternate;
            color: #dc3545;
        }
        @keyframes spin-and-flash {
            0% { transform: translateY(-3px) scale(1.05); opacity: 0.8; }
            100% { transform: translateY(3px) scale(0.95); opacity: 1; }
        }
        /* Estilo para el input de edición */
        #manualNumberInput {
            font-size: 1.5em; /* Ajuste visual para el input de texto */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 id="mainTitle" class="text-center mb-4 text-primary">
        ✨ Sorteo de premios ✨
    </h1>

    <div class="mb-4 text-center">
        <button id="resetButton" class="btn btn-warning btn-sm shadow-sm">
            🗑️ Limpiar/Reiniciar Todos los Datos
        </button>
    </div>

    <div class="card p-4 shadow mb-5 border-primary">
        <h3 class="card-title text-primary"><i class="bi bi-person-add"></i> 1. Registrar Inscripciones Manualmente</h3>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Nº</span>
            <input type="number" id="manualNumberInput" class="form-control form-control-lg" placeholder="Escribe un número (máx. 5 dígitos)" min="1" max="99999">
            <button id="addNumberButton" class="btn btn-success btn-lg shadow-sm">
                ➕ Añadir Número
            </button>
        </div>

        <div class="d-flex justify-content-between align-items-center">
             <p class="mt-3 text-sm text-muted">Números inscritos:</p>
             <p class="mt-3 text-end text-sm text-muted">Total de números inscritos: <strong id="totalEnrolled">0</strong></p>
        </div>

        <div class="border p-2" style="max-height: 150px; overflow-y: auto;">
             <span id="enrolledListText" class="text-secondary small">Aún no hay números inscritos.</span>
        </div>

    </div>

    <div class="card p-4 shadow-lg border-danger">
        <h3 class="card-title text-danger"><i class="bi bi-trophy"></i> 2. Realizar Sorteo</h3>

        <button id="drawButton" class="btn btn-danger btn-lg shadow w-100 mb-3" disabled>
            <i class="bi bi-gift"></i> ¡Sortear un Ganador!
        </button>

        <h4 class="text-center mt-3 text-secondary">🎉 ¡EL NÚMERO GANADOR ES! <span id="secretButton">🎉</span></h4>
        <div id="resultDisplay" class="result-display text-center">?</div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Variables Globales
    let enrolledNumbers = [];
    let winnerNumbers = [];
    const maxEnrollmentValue = 99999;
    const maxEnrollmentCount = 10000; // Limite práctico para la lista

    // Configuración del Sorteo Fijo
    const FIXED_WINNER_NUMBER = "00104"; // El número que debe salir de último o con el botón secreto
    let nextDrawIsFixed = false; // Bandera para control manual (activado por el clic secreto)

    // Elementos del DOM
    const manualNumberInput = document.getElementById('manualNumberInput');
    const addNumberButton = document.getElementById('addNumberButton');
    const drawButton = document.getElementById('drawButton');
    const resultDisplayEl = document.getElementById('resultDisplay');
    const totalEnrolledEl = document.getElementById('totalEnrolled');
    const resetButton = document.getElementById('resetButton');
    const secretButton = document.getElementById('secretButton');
    const enrolledListText = document.getElementById('enrolledListText');


    // --- Funciones de Persistencia (localStorage) ---

    function saveData() {
        localStorage.setItem('sorteo_enrolledNumbers', JSON.stringify(enrolledNumbers));
        localStorage.setItem('sorteo_winnerNumbers', JSON.stringify(winnerNumbers));
    }

    function loadData() {
        const storedEnrolled = localStorage.getItem('sorteo_enrolledNumbers');
        const storedWinners = localStorage.getItem('sorteo_winnerNumbers');

        if (storedEnrolled) {
            enrolledNumbers = JSON.parse(storedEnrolled);
        }
        if (storedWinners) {
            winnerNumbers = JSON.parse(storedWinners);
        }
    }

    function resetAllData() {
        if (!confirm("¿Estás seguro de que quieres REINICIAR el sorteo? Se borrarán TODAS las inscripciones y el historial de ganadores.")) {
            return;
        }

        enrolledNumbers = [];
        winnerNumbers = [];
        nextDrawIsFixed = false;

        localStorage.removeItem('sorteo_enrolledNumbers');
        localStorage.removeItem('sorteo_winnerNumbers');

        updateUI();
        manualNumberInput.value = ''; // Limpiar el input al reiniciar
    }

    // --- Funciones de Sorteo y UI ---

    function formatNumber(num) {
        // Asegura que sea un string y lo rellena a 5 dígitos
        return String(num).padStart(5, '0');
    }

    function updateUI() {
        const totalEnrolled = enrolledNumbers.length;
        totalEnrolledEl.textContent = totalEnrolled;

        if (totalEnrolled > 0) {
            drawButton.disabled = false;
            
            // **********************************************
            // CAMBIO CLAVE: Mostrar la lista COMPLETA de números
            // **********************************************
            let listPreview = enrolledNumbers.join(', ');
            enrolledListText.textContent = listPreview;

        } else {
            drawButton.disabled = true;
            enrolledListText.textContent = "Aún no hay números inscritos.";
        }
        
        // Deshabilitar botón de añadir si se alcanza un límite práctico (para evitar sobrecarga del navegador)
        if (totalEnrolled >= maxEnrollmentCount) {
             addNumberButton.disabled = true;
             manualNumberInput.disabled = true;
        } else {
             addNumberButton.disabled = false;
             manualNumberInput.disabled = false;
        }
    }

    /**
     * Función que añade el número del input a la lista de inscritos.
     */
    function addManualNumber() {
        let inputVal = manualNumberInput.value.trim();

        if (inputVal === "") {
            alert("Por favor, introduce un número.");
            return;
        }

        // Convertir el valor a un número entero
        let num = parseInt(inputVal, 10);

        // 1. Validar que sea un número válido y dentro del rango
        if (isNaN(num) || num < 1 || num > maxEnrollmentValue) {
            alert(`Número inválido. Debe ser un número entre 1 y ${maxEnrollmentValue}.`);
            manualNumberInput.value = '';
            return;
        }

        const newNumber = formatNumber(num);

        // 2. Validar que no esté ya inscrito
        if (enrolledNumbers.includes(newNumber)) {
            alert(`El número ${newNumber} ya está inscrito.`);
            manualNumberInput.value = '';
            return;
        }
        
        // 3. Validar límite práctico de inscripciones
        if (enrolledNumbers.length >= maxEnrollmentCount) {
            alert(`Se alcanzó el límite práctico de ${maxEnrollmentCount} inscripciones.`);
            return;
        }

        // 4. Agregar el número
        enrolledNumbers.push(newNumber);
        enrolledNumbers.sort(); // Mantener la lista ordenada
        
        manualNumberInput.value = ''; // Limpiar el input
        
        updateUI();
        saveData();
    }

    function updateWinnersList(winner) {
        winnerNumbers.push(winner);
        updateUI();
        saveData();
    }

    /**
     * Función que activa el modo de sorteo fijo de forma imperceptible.
     */
    function activateFixedDraw() {
        const isFixedNumberEnrolled = enrolledNumbers.includes(FIXED_WINNER_NUMBER);

        if (isFixedNumberEnrolled) {
            nextDrawIsFixed = true;
            console.log(`[SORTEO FIJO ACTIVADO] Próximo ganador: ${FIXED_WINNER_NUMBER}`);
        } else {
            console.warn(`[SORTEO FIJO FALLIDO] El número ${FIXED_WINNER_NUMBER} no está disponible (no inscrito o ya ganó).`);
        }
    }

    // Función central que maneja la selección y la lógica del número fijo
    function startDraw() {
        const isFixedNumberEnrolled = enrolledNumbers.includes(FIXED_WINNER_NUMBER);

        if (enrolledNumbers.length === 0) {
            alert("¡No hay números inscritos para sortear!");
            drawButton.disabled = true;
            return;
        }

        let winnerNumber;
        let winnerIndex = -1;

        // Comprobamos si el FIXED_WINNER_NUMBER es el único que queda
        const isOneLeftAndItsFixed = enrolledNumbers.length === 1 && enrolledNumbers[0] === FIXED_WINNER_NUMBER;

        // Creamos una lista auxiliar SÓLO para sorteos aleatorios, excluyendo el FIXED_WINNER_NUMBER
        const randomDrawPool = enrolledNumbers.filter(num => num !== FIXED_WINNER_NUMBER);

        if (nextDrawIsFixed && isFixedNumberEnrolled) {
            // Caso 1: Se hizo clic secreto y el FIXED_WINNER_NUMBER está disponible. -> ¡SE FUERZA!
            winnerNumber = FIXED_WINNER_NUMBER;
            winnerIndex = enrolledNumbers.indexOf(FIXED_WINNER_NUMBER);
            nextDrawIsFixed = false; // Desactiva la bandera

            // Eliminar el ganador de la lista de números sorteables
            enrolledNumbers.splice(winnerIndex, 1);

            animateDraw(winnerNumber, false); // Ejecutar animación normal
            console.log(`[SELECCIÓN FORZADA] Ganador: ${winnerNumber}`);

        } else if (isOneLeftAndItsFixed) {
            // Caso 2: El FIXED_WINNER_NUMBER es el ÚNICO restante, pero NO se activó el modo fijo. -> ¡FALLA CONTROLADO!
            winnerNumber = FIXED_WINNER_NUMBER;

            animateDraw(winnerNumber, true); // Ejecutar animación 'solo visual'
            console.warn(`[ÚLTIMO NÚMERO RESTANTE] ${FIXED_WINNER_NUMBER} solo puede salir con el botón secreto.`);

        } else if (randomDrawPool.length > 0) {
            // Caso 3: Sorteo aleatorio normal (excluyendo el FIXED_WINNER_NUMBER).
            if (nextDrawIsFixed) {
                 nextDrawIsFixed = false;
            }

            // Elegir de la lista que EXCLUYE el FIXED_WINNER_NUMBER
            const randomIndexInPool = Math.floor(Math.random() * randomDrawPool.length);
            winnerNumber = randomDrawPool[randomIndexInPool];

            // Encontrar el índice del ganador en la lista original (enrolledNumbers) para eliminarlo
            winnerIndex = enrolledNumbers.indexOf(winnerNumber);
            enrolledNumbers.splice(winnerIndex, 1);

            animateDraw(winnerNumber, false); // Ejecutar animación normal
        } else {
             // Seguridad
             console.error("Lógica de sorteo inesperada. Recargando UI.");
             updateUI();
        }
    }

    /**
     * Función que maneja la animación de los resultados.
     */
    function animateDraw(finalWinner, isVisualOnly) {

        // Deshabilitar botones e iniciar animación
        addNumberButton.disabled = true;
        drawButton.disabled = true;
        manualNumberInput.disabled = true;
        resultDisplayEl.textContent = '...';
        resultDisplayEl.classList.add('spinning');

        const duration = 6000;
        const intervalTime = 80;
        let startTime = Date.now();

        // Iniciar el intervalo de la animación
        const interval = setInterval(() => {
            const listToAnimate = enrolledNumbers.length > 0 ? enrolledNumbers : winnerNumbers;
            if (listToAnimate.length > 0) {
                const randomIndex = Math.floor(Math.random() * listToAnimate.length);
                resultDisplayEl.textContent = listToAnimate[randomIndex];
            } else {
                 resultDisplayEl.textContent = finalWinner;
            }

            // Detener la animación
            if (Date.now() - startTime > duration) {
                clearInterval(interval);

                resultDisplayEl.textContent = finalWinner;
                resultDisplayEl.classList.remove('spinning');

                // Si NO es solo visual, actualizamos la lista de ganadores
                if (!isVisualOnly) {
                    updateWinnersList(finalWinner);
                    updateUI();
                } else {
                    // Si es solo visual (Falla Controlado), no se añade a ganadores
                    updateUI();
                    drawButton.disabled = false; // Permitir que se vuelva a intentar
                }
            }
        }, intervalTime);
    }

    // --- INICIALIZACIÓN Y EVENTOS ---

    // 1. Cargar datos y actualizar UI
    loadData();
    updateUI();

    // 2. Escuchadores de Eventos
    addNumberButton.addEventListener('click', addManualNumber);
    // Permite añadir el número también al presionar Enter en el input
    manualNumberInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addManualNumber();
        }
    });
    
    drawButton.addEventListener('click', startDraw);
    resetButton.addEventListener('click', resetAllData);

    // Evento para el botón oculto (estrella derecha)
    secretButton.addEventListener('click', activateFixedDraw);
</script>
</body>
</html>