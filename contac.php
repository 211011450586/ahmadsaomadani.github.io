<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak dengan Akun Sosial Media</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Kontak</h2>
        <form id="contactForm" method="post" action="#">
            <div class="form-control">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
                <label for="socialMedia">Akun Sosial Media:</label>
                <select id="socialMedia" name="socialMedia">
                    <option value="Facebook">Facebook</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Instagram">Instagram</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Pinterest">Pinterest</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-control">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>
        <div id="statusMessage"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
