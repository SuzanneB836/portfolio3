<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
</head>
<body>

<?php include 'header.php'; ?>

<div class="site-contact">
    <div class="full-container">
        <div class="content-container">
            <h1>Let's Connect</h1>
            <p class="lead">Have a question, idea, or just want to say hi? Drop a message below—I'd love to hear from you!</p>

            <form id="contact-form">
                <div class="form-group">
                    <label for="name">
                        <i data-lucide="user" class="input-icon"></i>
                        <input type="text" id="name" name="name" required placeholder="Your name">
                    </label>
                </div>

                <div class="form-group">
                    <label for="email">
                        <i data-lucide="mail" class="input-icon"></i>
                        <input type="email" id="email" name="email" required placeholder="your.email@example.com">
                    </label>
                </div>

                <div class="form-group">
                    <label for="subject">
                        <i data-lucide="message-square" class="input-icon"></i>
                        <input type="text" id="subject" name="subject" placeholder="What's this about? (Optional)">
                    </label>
                </div>

                <div class="form-group">
                    <label for="message">
                        <i data-lucide="edit" class="input-icon"></i>
                        <textarea id="message" name="message" rows="6" required placeholder="Your message here..."></textarea>
                    </label>
                </div>

                <button type="submit" class="submit-button">
                    <span>Send Message</span>
                    <i data-lucide="send" class="button-icon"></i>
                </button>
            </form>

            <div class="socials">
                <div class="divider">
                    <span>Or find me online</span>
                </div>
                
                <div class="social-links">
                    <a href="https://github.com/SuzanneB836" target="_blank" class="social-link">
                        <i data-lucide="github"></i>
                        <span>GitHub</span>
                    </a>
                    <a href="https://www.linkedin.com/in/suzanne-boon/" target="_blank" class="social-link">
                        <i data-lucide="linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                    <a href="mailto:suzanneboon2007@gmail.com" target="_blank" class="social-link">
                        <i data-lucide="mail"></i>
                        <span>Email</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
    
    <!-- Scripts remain at the bottom as requested -->
    <script src="javascript/script.js"></script>
    <script src="javascript/contact-form.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>