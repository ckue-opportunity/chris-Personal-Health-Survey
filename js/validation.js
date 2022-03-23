function validateText() {
    // <input type="text" id="some-text">
    let value = document.getElementById("some-text").value;

    // Wenn kein Wert eingegeben wurde, dann soll der Submit gestoppt werden.
    if (value == "") { // if (!value) {} wäre dasselbe - kürzer.
        setWarning("Bitte geben Sie Text ein.");

        // Stopp: Es wurde kein Wert eingegeben.
        return false;
    }

    // Alles ok: gar nichts zurückgeben oder return true;
}

function validateNumber() {
    // <input type="number" id="number-text">
    let value = document.getElementById("number-text").value;
    let warning = "Bitte geben Sie eine Zahl ein.";

    // Wenn kein Wert eingegeben wurde, dann soll der Submit gestoppt werden.
    if (value == "") { // if (!value) {} wäre dasselbe - aber kürzer.
        setWarning(warning);

        // Stopp: Es wurde kein Wert eingegeben.
        return false;
    }

    if (isNaN(value)) { 
        // isNaN(value) gibt true zurück, falls value KEINE Zahl ist.
        setWarning(warning);

        // Stopp: Es wurde keine Zahl eingegeben.
        return false;
    }        

    // Alles ok: gar nichts zurückgeben oder return true;
}

function validateCheckboxes() {
    // Sammeln alle Werte der ausgewählten (checked) Checkboxen.
    // (Bento-Box) CSS Selector !!!
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    for (let i = 0; i < checkboxes.length; i++) {
        array.push(checkboxes[i].value); // value ist jeweils ein String.
    }

    // Falls keine Checkbox gewählt wurde ist array === [].
    if (array.length === 0) {
        setWarning("Bitte wähle zumindest eine Checkbox aus.");
        return false; // Bei false wird der weiter Submit gestoppt.
    }

    // Checkboxe(n) wurde(n) gewählt: SETZE Liste in ein 'hidden' Inputfeld.
    // value muss ein String, also muss array in einen String konvertiert werden.
    document.getElementById("checkboxValues").value = array.toString();
}

function validateRadios(radioName) {
    // 'radioButtons' ist eine Liste die einen bis mehrere Radio Buttons enthalten kann.
    // Kann auch leer sein :-)
    let radioButtons = document.getElementsByName(radioName);

    // Wir müssen die Liste von radioButtons nach dem gewählten Wert durchsuchen.
    for (let i = 0; i < radioButtons.length; i++) {
        let radioBtn = radioButtons[i]; // Wähle das 'i'-te Element aus der Liste aus.
        
        if (radioBtn.checked == true) {
            return true;
        }
    }

    // Kein Radio-Button wurde angewählt.
    setWarning("Bitte wähle eine Option.");
    return false; // STOPP: Submit abbrechen und auf der Seite bleiben.
}

/*
    validateRange() ist abhängig von
        - sliderChanged() und sliderHasChanged()
        - im HTML: <input type="hidden" name="range-slider-changed">
        - im HTML: <input type="range" ... onchange="sliderChanged();">
*/
function validateRange(inputID) {
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");

            // Stoppt den Sprung (action) auf die nächste Seite.
            return false;
        }
    }

    /*
    validation.js:89 Uncaught TypeError: Cannot read properties of null (reading 'type')
    at validateRange (validation.js:89:22)
    at HTMLButtonElement.onclick (index.php:53:50)
    */
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}

// TOOLS -------------------------------------------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}





















// TEMPORARY ----------------------------------------------------------------------------------

function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle aus, bevor du weitergehst.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
}

/*  Sample for checkboxes

    var array = []
    var checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

    for (var i = 0; i < checkboxes.length; i++) {
    array.push(checkboxes[i].value)
    }
*/