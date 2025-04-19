import "./bootstrap";

const fullNameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const messageTextarea = document.getElementById("message");
const submitButton = document.getElementById("sbmt");

const emptyName = document.querySelector(".empty-name");
const emptyEmail = document.querySelector(".empty-email");
const emptyMessage = document.querySelector(".empty-message");

const closeSection = document.querySelector('.close-section');

const closeButton = document.querySelector(".close-btn");


fullNameInput.addEventListener("input", () => {
    checkIfNameIsEmpty();
});

emailInput.addEventListener("input", () => {
    checkIfEmailIsEmpty();
});

messageTextarea.addEventListener("input", () => {
    checkIfMessageIsEmpty();
});

closeButton.addEventListener("click", () => {
    closeSection.classList.add('hidden');
});

function checkIfNameIsEmpty() {
    if (fullNameInput.value === "" || fullNameInput.value === null) {
        emptyName.classList.remove("hidden");
        submitButton.disabled = true;
    } else {
        emptyName.classList.add("hidden");
        submitButton.disabled = false;
    }
}

function checkIfEmailIsEmpty() {
    if (emailInput.value === "" || emailInput.value === null) {
        emptyEmail.classList.remove("hidden");
        submitButton.disabled = true;
    } else {
        emptyEmail.classList.add("hidden");
        submitButton.disabled = false;
    }
}

function checkIfMessageIsEmpty() {
    if (messageTextarea.value === "" || messageTextarea.value === null) {
        emptyMessage.classList.remove("hidden");
        submitButton.disabled = true;
    } else {
        emptyMessage.classList.add("hidden");
        submitButton.disabled = false;
    }
}
