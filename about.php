<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #3e2723, #1b1b1b);
        color:#a9a9a9;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        max-width: 1100px;
        margin: 50px auto;
        background: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .left-panel {
        width: 35%;
        text-align: center;
        padding: 20px;
        background: linear-gradient(to bottom, #4ca1af, #2c3e50);
        color: white;
        border-radius: 10px 0 0 10px;
    }

    .left-panel img {
        width: 140px;
        border-radius: 50%;
        margin-bottom: 15px;
        border: 3px solid white;
    }

    .right-panel {
        width: 65%;
        padding: 20px 30px;
    }

    .section {
        margin-bottom: 30px;
    }

    .section h2 {
        color: #2c3e50;
        border-bottom: 3px solid #4ca1af;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    .card {
        background: #fff;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.03);
    }

    .hidden-content {
        display: none;
        padding-top: 10px;
    }

    .skill-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .skill-box {
        background: #4ca1af;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
    }
    footer {
        background: linear-gradient(to right,rgb(210, 226, 241),rgb(117, 150, 221));
        color: white;
        text-align: center;
        padding: 15px 0;
        font-family: 'Poppins', sans-serif;
    }
</style>

<div class="container">
    <div class="left-panel">
        <img src="<?= BASE_URL ?>assets/images/Cong.JPG" alt="Avatar">
        <h3>Lưu Viết Công</h3>
        <p>Nhà phát triển Web & Mobile</p>
        <p>📍 Minh Khai, Hai Bà Trưng, Hà Nội</p>
        <p>📧 cong090503@gmail.com</p>
    </div>

    <div class="right-panel">
        <div class="section">
            <h2>🎓 Học vấn</h2>
            <p><strong>Trường THPT QUẤT LÂM</strong> <br>2018 - 2021</p>
            <p><strong>Trường Cao Đẳng Nghề Bách Khoa Hà Nội(HACTECH)</strong> <br>2021 - 2024 <br> Chuyên ngành: Công nghệ thông tin</p>
        </div>

        <div class="section">
            <h2>💼 Kinh nghiệm & Dự án</h2>
            <div class="card" onclick="toggleContent('exp1')">
                <h3>📝 Ứng dụng Ghi chú</h3>
                <p>Ứng dụng giúp tạo, chỉnh sửa và lưu trữ ghi chú cá nhân.</p>
                <div id="exp1" class="hidden-content">
                    <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
                    <a href="https://github.com/CongLuu09/Notepads" target="_blank">🔗 Xem trên GitHub</a>
                </div>
            </div>

            <div class="card" onclick="toggleContent('exp2')">
                <h3>✅ Ứng dụng To-Do List</h3>
                <p>Giúp quản lý công việc hàng ngày với lưu trữ cục bộ.</p>
                <div id="exp2" class="hidden-content">
                    <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
                    <a href="https://github.com/CongLuu09/todolistcongviec" target="_blank">🔗 Xem trên GitHub</a>
                </div>
            </div>

            <div class="card" onclick="toggleContent('exp3')">
                <h3>🎓📚 Ứng dụng Quản lý Sinh viên</h3>
                <p>Ứng dụng Android giúp quản lý sinh viên và lớp học.</p>
                <div id="exp3" class="hidden-content">
                    <p><strong>Công nghệ:</strong> Java (Android), SQLite, XML</p>
                    <a href="https://github.com/CongLuu09/StudentManager" target="_blank">🔗 Xem trên GitHub</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>🛠 Kỹ năng</h2>
            <div class="skill-container">
                <span class="skill-box">HTML</span>
                <span class="skill-box">CSS</span>
                <span class="skill-box">JavaScript</span>
                <span class="skill-box">PHP & MySQL</span>
                <span class="skill-box">Flutter</span>
                <span class="skill-box">Java (Android)</span>
                <span class="skill-box">C#</span>
            </div>
            <div class="section">
            <h2>🎯 Sở thích</h2>
            <div class="hobbies">
                <span class="hobby">🎮 Chơi game</span>
                <span class="hobby">📖 Đọc sách</span>
                <span class="hobby">💻 Lập trình</span>
                <span class="hobby">🎵 Nghe nhạc</span>
            </div>
    </div>
        </div>
</div>

<script>
    function toggleContent(id) {
        var content = document.getElementById(id);
        content.style.display = content.style.display === "block" ? "none" : "block";
    }
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
