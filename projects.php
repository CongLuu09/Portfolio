<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        max-width: 1100px;
        margin: auto;
        padding: 20px;
        margin-top: 150px;
        flex: 1;
    }

    .projects-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .filter-options {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .filter-options button {
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        background: #007bff;
        color: white;
        border-radius: 5px;
        transition: 0.3s;
    }

    .filter-options button:hover {
        background: #0056b3;
    }

    .project-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .project-item {
        background: white;
        border-radius: 10px;
        padding: 15px;
        width: 280px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .project-item:hover {
        transform: translateY(-5px);
        box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
    }

    .project-item img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 8px;
    }

    .project-item h3 {
        font-size: 20px;
        margin: 10px 0;
    }

    .project-item p {
        font-size: 14px;
        color: #555;
    }

    .project-item a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .project-item a:hover {
        color: #0056b3;
    }

    footer {
        background: #2c3e50;
        color: white;
        text-align: center;
        padding: 15px 0;
        margin-top: auto;
    }
</style>

<div class="container">
    <h2 class="projects-header">Dự án tiêu biểu</h2>
    
    <div class="filter-options">
        <button onclick="filterProjects('all')">Tất cả</button>
        <button onclick="filterProjects('flutter')">Flutter</button>
        <button onclick="filterProjects('java')">Java</button>
        <button onclick="filterProjects('php')">PHP</button>
    </div>

    <div class="project-container">
        <div class="project-item" data-category="flutter">
            <img src="<?= BASE_URL ?>assets/images/placeholder.png" alt="Project">
            <h3><a href="https://github.com/CongLuu09/Notepads">📝 Ứng dụng ghi chú</a></h3>
            <p>Ứng dụng ghi chú đơn giản giúp người dùng tạo, chỉnh sửa và lưu trữ các ghi chú cá nhân.</p>
            <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
        </div>

        <div class="project-item" data-category="flutter">
            <img src="<?= BASE_URL ?>assets/images/placeholder.png" alt="Project">
            <h3><a href="https://github.com/CongLuu09/todolistcongviec">✅ Ứng dụng To-Do List</a></h3>
            <p>Ứng dụng giúp quản lý công việc, hỗ trợ lưu trữ cục bộ.</p>
            <p><strong>Công nghệ:</strong> Flutter, SQLite</p>
        </div>

        <div class="project-item" data-category="java">
            <img src="<?= BASE_URL ?>assets/images/placeholder.png" alt="Project">
            <h3><a href="https://github.com/CongLuu09/StudentManager">🎓📚 Ứng dụng Quản lý Sinh viên</a></h3>
            <p>Ứng dụng Android giúp quản lý sinh viên và lớp học.</p>
            <p><strong>Công nghệ:</strong> Java (Android), SQLite</p>
        </div>
    </div>
</div>

<script>
    function filterProjects(category) {
        let projects = document.querySelectorAll('.project-item');
        projects.forEach(project => {
            if (category === 'all' || project.dataset.category === category) {
                project.style.display = 'block';
            } else {
                project.style.display = 'none';
            }
        });
    }
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
