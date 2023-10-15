document.addEventListener("DOMContentLoaded", function () {
  const display = document.querySelector(".display input[name='display']");
  const buttons = document.querySelectorAll("input[type='button']");

  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      const value = button.value;

      if (isNumber(value) || value === ".") {
        insert(value);
      } else if (value === "=") {
        calculate();
      } else if (value === "AC") {
        clear();
      } else if (value === "DE") {
        deleteLastCharacter();
      } else {
        handleOperator(value);
      }
    });
  });

  function insert(num) {
    display.value += num;
  }

  function calculate() {
    try {
      display.value = eval(display.value);
    } catch (error) {
      display.value = "Error";
    }
  }

  function clear() {
    display.value = "";
  }

  function deleteLastCharacter() {
    display.value = display.value.slice(0, -1);
  }

  function handleOperator(operator) {
    if (endsWithOperator(display.value)) {
      display.value = display.value.slice(0, -1) + operator;
    } else {
      display.value += operator;
    }
  }

  function isNumber(value) {
    return !isNaN(parseFloat(value)) && isFinite(value);
  }

  function endsWithOperator(str) {
    const operators = ["+", "-", "*", "/", "%"];
    return operators.includes(str.charAt(str.length - 1));
  }
});
