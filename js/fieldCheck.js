function CheckField() {
    var eindbestemming = document.getElementsByName('eindbestemming')[0].value;
    if (!isNaN(eindbestemming) && eindbestemming.trim() !== "") {
        alert("Aub voer geen cijfer in");
        console.log("Aub voer geen cijfer in");
        return false;
    }
    if (eindbestemming.trim() === "") {
        alert("Voer een bestemming in.");
        console.log("oer een bestemming in.");
        return false;
    }
    return true;
}