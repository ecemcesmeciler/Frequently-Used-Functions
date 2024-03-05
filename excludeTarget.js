function extractStringUntilTargetExcludeTarget(inputString, targetWord) {
    var lowerInput = inputString.toLowerCase();
    var index = lowerInput.indexOf(targetWord.toLowerCase());
    if (index !== -1) {
        return inputString.substring(0, index).trim();
    } else {
        return inputString;
    }
}
