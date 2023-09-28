function generateRandomSixDigitNumber() {

    var randomNumber = Math.floor(Math.random() * 1000000);
    var randomSixDigitString = randomNumber.toString().padStart(6, '0');
    return randomSixDigitString;
}
