<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';

$name = $email = $message = "";
$successMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $successMessage = "✅ Tin nhắn của bạn đã được gửi thành công!";
    } else {
        $errorMessage = "⚠ Vui lòng điền đầy đủ thông tin!";
    }
}
?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .contact-container {
        width: 100%;
        max-width: 450px;
        background: white;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }

    .contact-container h2 {
        margin-bottom: 15px;
        font-size: 24px;
        color: #333;
    }

    .contact-container input, .contact-container textarea {
        width: 100%;
        padding: 12px;
        margin-top: 10px;
        border: 2px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease-in-out;
    }

    .contact-container input:focus, .contact-container textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .contact-container button {
        width: 100%;
        padding: 12px;
        margin-top: 15px;
        background: #007bff;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }

    .contact-container button:hover {
        background: #0056b3;
    }

    .message {
        font-weight: bold;
        margin-top: 15px;
        padding: 10px;
        border-radius: 5px;
        font-size: 16px;
    }

    .success {
        color: green;
        background: #e7f6e7;
    }

    .error {
        color: red;
        background: #f6e7e7;
    }
</style>

<div class="contact-container">
    <h2>📩 Liên hệ với tôi</h2>

    <?php if (!empty($successMessage)) : ?>
        <p class="message success"><?= $successMessage ?></p>
    <?php elseif (!empty($errorMessage)) : ?>
        <p class="message error"><?= $errorMessage ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="Họ và Tên" value="<?= htmlspecialchars($name) ?>" required>
        <input type="email" name="email" placeholder="Email của bạn" value="<?= htmlspecialchars($email) ?>" required>
        <textarea name="message" rows="5" placeholder="Nhập nội dung liên hệ..." required><?= htmlspecialchars($message) ?></textarea>
        <button type="submit">Gửi tin nhắn</button>
    </form>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
