<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background: #1b1b1b;
        color: #d38e8e;
    }

    .hero {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        color: white;
    }

    .hero img {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        border: 4px solid white;
        margin-bottom: 20px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease-in-out;
    }

    .hero img:hover {
        transform: scale(1.1);
    }

    .hero h1 {
        font-size: 38px;
        font-weight: bold;
        margin: 10px 0;
    }

    .hero p {
        font-size: 22px;
        opacity: 0.9;
    }

    .section {
        max-width: 900px;
        margin: 50px auto;
        text-align: center;
        padding: 30px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .section h2 {
        color: #2c3e50;
        font-size: 30px;
        margin-bottom: 20px;
    }

    .skills-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .skill {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100px;
        transition: transform 0.3s;
    }

    .skill:hover {
        transform: translateY(-5px);
    }

    .skill i {
        font-size: 50px;
        color: #007bff;
        margin-bottom: 10px;
    }

    .skill p {
        font-size: 16px;
        font-weight: bold;
    }

    .project-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .project-item {
        background: white;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 20px;
        width: 280px;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .project-item:hover {
        transform: translateY(-5px);
        box-shadow: 4px 4px 18px rgba(0, 0, 0, 0.2);
    }

    .project-item h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .project-item a {
        text-decoration: none;
        color: #2c3e50;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .project-item a:hover {
        color: #4ca1af;
    }

    .contact a {
        color: #4ca1af;
        text-decoration: none;
        font-weight: bold;
    }

    .contact a:hover {
        text-decoration: underline;
    }

    footer {
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        color: white;
        text-align: center;
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }
</style>

<section class="hero">
    <img src="<?= BASE_URL ?>assets/images/Cong.JPG" alt="Avatar">
    <h1>Xin chào, tôi là Lưu Viết Công</h1>
    <p>Nhà phát triển Web & Mobile | Đam mê sáng tạo</p>
</section>

<section class="section skills">
    <h2>Kỹ năng</h2>
    <div class="skills-container">
        <div class="skill"><i class="fab fa-html5"></i><p>HTML</p></div>
        <div class="skill"><i class="fab fa-css3-alt"></i><p>CSS</p></div>
        <div class="skill"><i class="fab fa-js"></i><p>JavaScript</p></div>
        <div class="skill"><i class="fab fa-php"></i><p>PHP & MySQL</p></div>
        <div class="skill"><i class="devicon-flutter-plain"></i><p>Flutter</p></div>
        <div class="skill"><i class="devicon-csharp-plain"></i><p>C#</p></div>
    </div>
</section>

<section class="section projects">
    <h2>Dự án tiêu biểu</h2>
    <div class="project-container">
        <div class="project-item">
            <h3><a href="https://github.com/CongLuu09/Notepads" target="_blank">📝 Ứng dụng ghi chú</a></h3>
            <p>Ứng dụng ghi chú giúp người dùng tạo, chỉnh sửa và lưu trữ ghi chú cá nhân.</p>
            <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
        </div>
        <div class="project-item">
            <h3><a href="https://github.com/CongLuu09/todolistcongviec" target="_blank">✅ Ứng dụng To-Do List</a></h3>
            <p>Quản lý công việc với tính năng thêm, sửa, xóa và lưu trữ cục bộ.</p>
            <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
        </div>
        <div class="project-item">
            <h3><a href="https://github.com/CongLuu09/StudentManager" target="_blank">🎓📚 Quản lý Sinh viên</a></h3>
            <p>Ứng dụng Android giúp quản lý sinh viên và lớp học.</p>
            <p><strong>Công nghệ:</strong> Java (Android), SQLite</p>
        </div>
    </div>
</section>

<section class="section contact">
    <h2>Liên hệ</h2>
    <p>📩 Email: <a href="mailto:cong090503@gmail.com">cong090503@gmail.com</a></p>
    <p>📱 SĐT: 0789055289</p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
