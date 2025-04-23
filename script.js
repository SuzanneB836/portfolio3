// Wait until the page is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // =============================================
    // COOKIE CONSENT HANDLING
    // =============================================
    const acceptCookiesBtn = document.getElementById('accept-cookies');
    const declineCookiesBtn = document.getElementById('decline-cookies');
    const cookieBanner = document.getElementById('cookie-consent-banner');

    if (acceptCookiesBtn && declineCookiesBtn) {
        acceptCookiesBtn.addEventListener('click', function() {
            setCookie('cookie_consent', 'true', 365);
            if (cookieBanner) cookieBanner.style.display = 'none';
        });

        declineCookiesBtn.addEventListener('click', function() {
            deleteCookie('dark_mode');
            setCookie('cookie_consent', 'false', 365);
            if (cookieBanner) cookieBanner.style.display = 'none';
            document.body.classList.remove('dark-mode');
            updateIcon('Sun');
        });
    }

    // =============================================
    // DARK MODE FUNCTIONALITY
    // =============================================
    const toggleButton = document.getElementById('theme-toggle');

    // 1. CHECK FOR SAVED DARK MODE ON PAGE LOAD
    if (getCookie('cookie_consent') === 'true' && getCookie('dark_mode') === '1') {
        document.body.classList.add('dark-mode');
        updateIcon('Moon');
    }

    // 2. HANDLE THEME TOGGLE CLICK
    toggleButton.addEventListener('click', function () {
        // Only allow toggle if cookies are accepted
        if (getCookie('cookie_consent') !== 'true') {
            alert('Please accept cookies to use this feature');
            return;
        }
        
        document.body.classList.toggle('dark-mode');
        const isDarkMode = document.body.classList.contains('dark-mode');
        setCookie('dark_mode', isDarkMode ? '1' : '0', 30);
        updateIcon(isDarkMode ? 'Moon' : 'Sun');
    });

    // =============================================
    // HELPER FUNCTIONS
    // =============================================
    function updateIcon(iconName) {
        const icon = toggleButton.querySelector('.theme-icon');
        if (icon) {
            icon.setAttribute('data-lucide', iconName);
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }
    }

    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            let cookie = cookies[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(nameEQ) === 0) {
                return cookie.substring(nameEQ.length);
            }
        }
        return null;
    }

    function deleteCookie(name) {
        document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
});