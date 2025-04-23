<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if cookie consent has been given
$cookieConsent = isset($_COOKIE['cookie_consent']);

// Debug output (you can remove this after testing)
echo "<!-- Cookie consent status: " . ($cookieConsent ? 'granted' : 'not granted') . " -->";
?>

<?php if (!$cookieConsent): ?>
<div id="cookie-consent-banner" class="cookie-consent">
    <div class="cookie-consent-content">
        <p>We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of cookies.</p>
        <div class="cookie-consent-buttons">
            <button id="accept-cookies" class="cookie-btn accept">Accept</button>
            <button id="decline-cookies" class="cookie-btn decline">Decline</button>
        </div>
    </div>
</div>
<?php endif; ?>