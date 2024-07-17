document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get the form data
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let socialMedia = document.getElementById("socialMedia").value;
    let message = document.getElementById("message").value;

    // Construct an object with the data
    let data = {
        name: name,
        email: email,
        socialMedia: socialMedia,
        message: message
    };

    // You can send the form data to a backend server using AJAX/fetch here
    // For demonstration purposes, we'll just show a confirmation message
    let statusMessage = document.getElementById("statusMessage");
    statusMessage.innerHTML = "Pesan berhasil dikirim ke " + socialMedia + "!";

    // Optionally, you can clear the form fields after submission
    document.getElementById("contactForm").reset();
});
