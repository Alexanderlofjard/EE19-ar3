 let heading = document.querySelector("h1");
 heading.innerHTML = "Goodbye World"
 console.log
 //exempel 5
 const loginButton = document.querySelector("button.login");
 loginButton.addEventListener("click, loginUser");

 function loginUser(event) {
     console.log("user logged in");
 }

 document.querySelector("form").addEventListener("submit", submitForm)

 function submitForm (e) {
    e.preventDefault();
    // ... 
 }