let result = document.getElementById("result");

function appendNumber(number) {
    result.value += number;
}

function appendOperator(operator) {
    result.value += operator;
}

function clearDisplay() {
    result.value = "";
}

function calculate() {
    let expression = result.value;
    
    // Replace ^ with ** for power operation
    expression = expression.replace(/\^/g, "**");
    
    try {
        result.value = eval(expression);
    } catch (error) {
        result.value = "Error";
    }
}
