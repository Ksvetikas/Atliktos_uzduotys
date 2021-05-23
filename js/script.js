const textInput = document.getElementById("city-input");
const invalidMessage = document.getElementById("invalid");
const wrongCityMessage = document.getElementById("no-weather-info");

if ((invalidMessage !== null) || (wrongCityMessage !== null)) {
    textInput.style.border = "1px solid var(--invalid-input-color)";
}

textInput.addEventListener("click", function() {

    if (invalidMessage !== null) {
        invalidMessage.remove();
    }

    if (wrongCityMessage !== null) {
        wrongCityMessage.remove();
    }

    textInput.style.border = "2px solid var(--background-color)";
});

textInput.addEventListener("dblclick", function() {
    textInput.value = "";
});