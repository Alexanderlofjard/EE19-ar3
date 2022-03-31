// Element som vi behöver
const eModal =document.querySelector("#exampleModal");
const eForm =document.querySelector("#exampleModal form");
const eLogin =document.querySelector("#login");
const eStatus =document.querySelector("#status");

// Initialisera modal-fönstret
var loginModal = new bootstrap.Modal(
    "#exampleModal",
    {
        // options here
        backdrop: "static",
        keyboard: false
    }
);



// Hantera inloggning
eForm.addEventListener("submit", function (e) {
    // Förhindra att sidan uppdateras
    e.preventDefault();
    
    // Läs in data från formuläret
    const postData = new FormData(eForm);

    console.log(postData);

    // Skicka till skriptet login.php
    fetch("./login.php", {
        method: "POST", 
        body: postData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
})