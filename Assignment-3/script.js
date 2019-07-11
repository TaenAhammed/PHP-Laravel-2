class Calculator {
    constructor(num1, num2) {
        this.num1 = num1;
        this.num2 = num2;
    }

    static addition() {
        return this.num1 + this.num2;
    }
    static subtraction() {
        return this.num1 - this.num2;
    }
    static multiplication() {
        return this.num1 * this.num2;
    }
    static division() {
        return this.num1 / this.num2;
    }
}

let num1 = 0;
let num2 = 0;
let result = 0;

let output = "";
let operation = "";

const state = {
    hasActiveOperation: false
};

function calculate() {
    if (num1 >= 0 && num2 >= 0 && operation === "+") {
        result = Calculator.addition(num1, num2);
    }
    document.querySelector(".calculator_result").textContent = result;
}

document.getElementById("zero").addEventListener("click", () => {
    output += "0";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 0;
    num1 += 0;
});

document.getElementById("one").addEventListener("click", () => {
    output += "1";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 1;
    num1 += 1;
});

document.getElementById("two").addEventListener("click", () => {
    output += "2";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) {
        num2 += 2;
        calculate();
    } else {
        num1 += 2;
    }
});

document.getElementById("three").addEventListener("click", () => {
    output += "3";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 3;
    num1 += 3;
});

document.getElementById("four").addEventListener("click", () => {
    output += "4";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 4;
    num1 += 4;
});

document.getElementById("five").addEventListener("click", () => {
    output += "5";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 5;
    num1 += 5;
});

document.getElementById("six").addEventListener("click", () => {
    output += "6";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 6;
    num1 += 6;
});

document.getElementById("seven").addEventListener("click", () => {
    output += "7";
    document.querySelector(".calculator_history").textContent = output;

    if (state.hasActiveOperation) num2 += 7;
    num1 += 7;
});

document.getElementById("eight").addEventListener("click", () => {
    output += "8";
    document.querySelector(".calculator_history").textContent = output;
});

document.getElementById("nine").addEventListener("click", () => {
    output += "9";
    document.querySelector(".calculator_history").textContent = output;
});

document.getElementById("plus").addEventListener("click", () => {
    output += "+";
    operation = "+";
    document.querySelector(".calculator_history").textContent = output;
    state.hasActiveOperation = true;
});

document.getElementById("minus").addEventListener("click", () => {
    output += "-";
    operation = "-";
    document.querySelector(".calculator_history").textContent = output;
});

document.getElementById("mul").addEventListener("click", () => {
    output += "*";
    operation = "*";
    document.querySelector(".calculator_history").textContent = output;
});

document.getElementById("div").addEventListener("click", () => {
    output += "/";
    operation = "/";
    document.querySelector(".calculator_history").textContent = output;
});

document.getElementById("c").addEventListener("click", () => {
    output = "";
    document.querySelector(".calculator_history").textContent = "History";
    document.querySelector(".calculator_result").textContent = "Result";

    num1 = "";
    num2 = "";
    result = 0;

    output = "";
    operation = "";

    state.hasActiveOperation = false;
});

document
    .getElementById("equal")
    .addEventListener("click", () => console.log("equal"));
