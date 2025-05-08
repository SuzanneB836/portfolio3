document.addEventListener("DOMContentLoaded", function () {
  // =============================================
  // COOKIE CONSENT HANDLING
  // =============================================
  const acceptCookiesBtn = document.getElementById("accept-cookies");
  const declineCookiesBtn = document.getElementById("decline-cookies");
  const cookieBanner = document.getElementById("cookie-consent-banner");

  // Show banner only if no consent decision has been made
  if (cookieBanner) {
    const consentCookie = getCookie("cookie_consent");
    if (consentCookie === null) {
      // Only show if no decision exists
      cookieBanner.style.display = "block";
    } else {
      cookieBanner.style.display = "none";
    }
  }

  if (acceptCookiesBtn && declineCookiesBtn) {
    acceptCookiesBtn.addEventListener("click", function () {
      setCookie("cookie_consent", "true", 365);
      if (cookieBanner) cookieBanner.style.display = "none";

      // Save current theme preference now that consent is given
      const isDarkMode = document.body.classList.contains("dark-mode");
      setCookie("dark_mode", isDarkMode ? "1" : "0", 30);
    });

    declineCookiesBtn.addEventListener("click", function () {
      // Delete the consent cookie instead of setting it to false
      deleteCookie("cookie_consent");
      // Also delete any existing theme preference
      deleteCookie("dark_mode");
      if (cookieBanner) cookieBanner.style.display = "none";
    });
  }

  // =============================================
  // DARK MODE FUNCTIONALITY
  // =============================================
  const toggleButton = document.getElementById("theme-toggle");

  // 1. Always allow theme toggling, but only save if consent given
  toggleButton.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
    const isDarkMode = document.body.classList.contains("dark-mode");

    // Only save preference if cookies are accepted
    if (getCookie("cookie_consent") === "true") {
      setCookie("dark_mode", isDarkMode ? "1" : "0", 30);
    }

    updateIcon(isDarkMode ? "Moon" : "Sun");
  });

  // 2. Initialize theme based on consent status
  function initializeTheme() {
    const hasConsent = getCookie("cookie_consent") === "true";
    const prefersDark = window.matchMedia(
      "(prefers-color-scheme: dark)"
    ).matches;

    if (hasConsent) {
      // Use saved preference if consent given
      const darkModePref = getCookie("dark_mode");
      if (darkModePref === "1") {
        document.body.classList.add("dark-mode");
        updateIcon("Moon");
      } else if (darkModePref === "0") {
        document.body.classList.remove("dark-mode");
        updateIcon("Sun");
      }
    } else {
      // Use system preference if no consent
      if (prefersDark) {
        document.body.classList.add("dark-mode");
        updateIcon("Moon");
      } else {
        document.body.classList.remove("dark-mode");
        updateIcon("Sun");
      }
    }
  }

  initializeTheme();

  // =============================================
  // HELPER FUNCTIONS
  // =============================================
  function updateIcon(iconName) {
    const icon = toggleButton.querySelector(".theme-icon");
    if (icon) {
      icon.setAttribute("data-lucide", iconName);
      if (typeof lucide !== "undefined") {
        lucide.createIcons();
      }
    }
  }

  function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
  }

  function getCookie(name) {
    const nameEQ = name + "=";
    const cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length; i++) {
      let cookie = cookies[i];
      while (cookie.charAt(0) === " ") {
        cookie = cookie.substring(1);
      }
      if (cookie.indexOf(nameEQ) === 0) {
        return cookie.substring(nameEQ.length);
      }
    }
    return null;
  }

  function deleteCookie(name) {
    document.cookie =
      name + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
  }
});

// =============================================
// Multiple language introduction - Index.php
// =============================================

// Array of phrases in different languages
var phrases = [
  "Hello", // English
  "Hallo", // Dutch
  "Hallo", // German
  "Aloha", // Hawaiian
  "Bonjour", // French
  "Ciao", // Italian
  "Hola", // Spanish
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
  element.classList.remove('fade-in');
  element.classList.add('fade-out');
  
  setTimeout(function() {
    element.textContent = phrases[index];
    element.classList.remove('fade-out');
    element.classList.add('fade-in');
    index = (index + 1) % phrases.length;
    setTimeout(updateMessage, interval);
  }, 300); // This timeout matches the fade-out duration
}

// Start updating the message
updateMessage();