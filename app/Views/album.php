<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>

    <style>
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

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .grid-item {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
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
        <a href="/">Home</a>
        <a class="active" href="/about">About</a>
        <a href="/albums">Albums</a>
    </nav>

    <div class="container">
        <h1>Albums</h1>
        <div class="grid-container">
            <div class="grid-item">
                <h2>The 1975</h2>
                <p>Released: September 2, 2013</p>
            </div>
            <div class="grid-item">
                <h2>I Like It When You Sleep, for You Are So Beautiful yet So Unaware of It</h2>
                <p>Released: February 26, 2016</p>
            </div>
            <div class="grid-item">
                <h2>A Brief Inquiry into Online Relationships</h2>
                <p>Released: November 30, 2018</p>
            </div>
            <div class="grid-item">
                <h2>Notes on a Conditional Form</h2>
                <p>Released: May 22, 2020</p>
            </div>
            <div class="grid-item">
                <h2>Being Funny In A Foreign Language</h2>
                <p>Released: October 14, 2022</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; Rangga Bani | 2023
    </footer>

</body>

</html>