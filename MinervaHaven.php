<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Minerva Haven</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('perpus.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .menu-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .menu-box ul {
            list-style: none;
            padding: 0;
        }

        .menu-box ul li {
            margin: 10px 0;
        }

        .menu-box ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        .menu-box ul li a:hover {
            color: #0066cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu-box">
            <h2>Minerva Haven</h2>
            <ul>
                <li><a href="Member.php">Member</a></li>
                <li><a href="Buku.php">Buku</a></li>
                <li><a href="Peminjaman.php">Peminjaman</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
