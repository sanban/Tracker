<!DOCTYPE html>
<html>
<head>
    <style>
        .flex-container {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
            text-align: center;
        }

        .flex-container > * {
            padding: 15px;
            -webkit-flex: 1 100%;
            flex: 1 100%;
        }

        .article {
            text-align: left;
        }

        header {background: cadetblue;color:white;}
        footer {background: lightblue;color:black;}
        .nav {background:#eee;}

        .nav ul {
            list-style-type: none;
            padding: 0;
        }
        .nav ul a {
            text-decoration: none;
        }

        @media all and (min-width: 768px) {
            .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
            .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
            footer {-webkit-order:3;order:3;}
        }

        table, th, td {
            /*border: 1px solid black;*/
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            text-align: left;
        }
        tr:nth-child(even){
            background-color: #F2F2F2;}
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="flex-container">
    <header>
        <h1><a href="/">OPEN/CLICK TRACKING API</a></h1>
    </header>

    <nav class="nav">
        <ul>
            <li><a href="/open" class="w3-bar-item w3-button">Generate open token</a></li>
            <li><a href="/click" class="w3-bar-item w3-button">Generate click token</a></li>
            <li><a href="/stats/open" class="w3-bar-item w3-button">Open statistics</a></li>
            <li><a href="/stats/click" class="w3-bar-item w3-button">Click statistics</a></li>
        </ul>
    </nav>

    <article class="article">
        @yield('content')
    </article>

    <footer>Training Project</footer>
</div>

</body>
</html>
