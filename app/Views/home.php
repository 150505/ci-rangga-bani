<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <style type="text/css">
        body {
            background-image: url('bg.jpg');
            background-size: cover;
            opacity: 1;
            color: white;
            text-shadow: 1px 1px 2px black;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }


        .container {
            margin: auto;
            padding: 20px;
            width: 80%;
            text-align: center;
        }

        h1 {
            font-size: 95px;
            margin-top: 0;
        }

        p {
            font-size: 48px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav>
        <a class="active" href="/">Home</a>
        <a href="/about">About</a>
        <a href="/albums">Albums</a>
    </nav>

    <div class="container">
        <h1>THE 1975</h1>
        <p>New Album: Being Funny in A Foreign Language</p>
    </div>

    <footer>
        &copy; Rangga Bani | 2023
    </footer>

</body>

</html>