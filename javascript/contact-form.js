document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contact-form");
  if (!form) return;

  // Add input animations
  const inputs = form.querySelectorAll("input, textarea");
  inputs.forEach((input) => {
    input.addEventListener("focus", () => {
      input.parentElement.parentElement.classList.add("focused");
    });

    input.addEventListener("blur", () => {
      input.parentElement.parentElement.classList.remove("focused");
    });
  });

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    // Get all form elements
    const nameInput = form.querySelector("#name");
    const emailInput = form.querySelector("#email");
    const subjectInput = form.querySelector("#subject");
    const messageInput = form.querySelector("#message");
    const submitButton = form.querySelector("button[type='submit']");

    // Get values
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const subject = subjectInput.value.trim() || "Message from your portfolio";
    const message = messageInput.value.trim();

    // Validate
    if (!name || !email || !message) {
      alert("Please fill in all required fields.");
      return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // Disable button during processing
    submitButton.disabled = true;
    submitButton.innerHTML =
      '<span>Sending...</span><i data-lucide="loader" class="button-icon spin"></i>';
    lucide.createIcons();

    // Compose email
    const body = `
Hello Suzanne,

I am reaching out through your portfolio contact form.
My name is ${name} and my email is ${email}.

This is what I have to say:
${message}

Best regards, ${name}`;

    // Create mailto link
    const mailtoLink = `mailto:suzanneboon2007@gmail.com?subject=${encodeURIComponent(
      subject
    )}&body=${encodeURIComponent(body)}`;

    // Small delay for better UX
    setTimeout(() => {
      window.location.href = mailtoLink;

      // Reset form after a short delay (in case user returns)
      setTimeout(() => {
        submitButton.disabled = false;
        submitButton.innerHTML =
          '<span>Send Message</span><i data-lucide="send" class="button-icon"></i>';
        lucide.createIcons();
      }, 3000);
    }, 800);
  });
});
