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



function evaluateCheckboxes() {
    // Hole die Liste aller ausgewählten Checkboxen (checked).
    // https://developer.mozilla.org/de/docs/Web/API/Document/querySelectorAll
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked'); // CSS3 Selector!!!!

    if (checkboxes.length === 0) {
        // Die liste der Checkboxen ist leer - es wurde keine ausgewählt.
        setWarning("Bitte wähle eine Antwort aus.");
        return false; // Submit-Aktion abbrechen.
    }

    // User hat Antworten ausgewählt: Zähle die erreichten Punkte zusammen.
    let achievedPoints = 0; // Summe aller erreichten Punkte pro Frage.
    let points; // Anzahl der Punkte einer einzelnen Antwort.
    // oder kürzer als Liste
    // let achievedPoints = 0, points;

    for (let c = 0; c < checkboxes.length; c++) {
        points = checkboxes[c].value; // Als 'value' kommt ein String.
        points = parseInt(points); // String in ganze Zahl konvertieren. 

        // Richtige Antwort: pts === 1
        // Falsche Antwort: pts === 0
        achievedPoints = achievedPoints + points; // oder kurz: achievedPoints += points;
    }
    
    // Schreibe die erreichte Punktzahl ins Hidden Field 'achievedPoints'.
    let hiddenField = document.getElementById("achievedPoints");
    hiddenField.value = achievedPoints;
}















function evaluateCheckboxes___() {
    // Hole die Liste aller ausgewählten Checkboxen (checked).
    // https://developer.mozilla.org/de/docs/Web/API/Document/querySelectorAll
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    if (checkboxes.length === 0) {
        // Die Liste von ausgewählten Checkboxen (checked) ist leer.
        setWarning("Bitte wähle zumindest eine Antwort aus.");
        return false; // Bei false wird der weitere Submit gestoppt.        
    }

    // User hat Antworten ausgewählt: Zähle die erreichten Punkte zusammen.
    let points = 0,
        pts;

    for (let i = 0; i < checkboxes.length; i++) {
        pts = checkboxes[i].value; // 'value' ist ein String
        pts = parseInt(pts); // String wird in eine ganze Zahl konvertiert...
        points = points + parseInt(pts); // ... und zur Summe aller Punkte addiert.
    }

    // Schreibe die erreichte Punktzahl ins Hidden Field 'achievedPoints'.
    let hiddenElement = document.getElementById("achievedPoints");
    if (hiddenElement) hiddenElement.value = points;
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
function validateRange() {
    // Prüfe, ob der Range Slider verändert wurde.
    if (!sliderHasChanged()) {
        setWarning("Bitte verändere die Position des Sliders.");

        // Stoppt den Sprung (action) auf die nächste Seite.
        return false;
    }
    else return true;
}

function sliderChanged() {
    // Get hiddenInputElement "range-slider-changed" and set its value to 1.
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    // Hole das hiddenInputElement "range-slider-changed" und gib true zurück
    // falls die "1" eingetragen ist. Sonst gib false zurück.
    let hiddenInputElement = document.getElementById("range-slider-changed");
    
    if (hiddenInputElement.value === "1") return true;
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