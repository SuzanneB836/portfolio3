/*
Multiple language introduction

Used for:
index.php
*/

// Array of phrases in different languages
var phrases = [
  "Hello", // English
  "Hallo", // German
  "Aloha", // Hawaiian
  "Bonjour", // French
  "Ciao", // Italian
  "Hola", // Spanish
  "Hallo", // Dutch
  "Olá", // Portuguese
  "Привет", // Russian
  "你好", // Chinese (Simplified)
  "こんにちは", // Japanese
  "여보세요", // Korean
];

var index = 0;
var interval = 800; // Interval in milliseconds

// Function to update the message
function updateMessage() {
  var element = document.getElementById("helloMessage");
  element.classList.remove("fade-in");
  element.classList.add("fade-out");

  setTimeout(function () {
    element.textContent = phrases[index];
    element.classList.remove("fade-out");
    element.classList.add("fade-in");
    index = (index + 1) % phrases.length;
    setTimeout(updateMessage, interval);
  }, 300); // This timeout matches the fade-out duration
}

// Start updating the message
updateMessage();