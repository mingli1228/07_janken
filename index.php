<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん記録</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <h1>じゃんけん記録アプリ</h1>
    </header>

    <main>
        <div class="game-area">
            <button id="playBtn">じゃんけん！</button>
            <div id="cpuHand">CPUの手: </div>
            <div id="totalCount">今までの回数：0 回</div>
        </div>

        <div id="statsBox" class="stats-area">
            <!-- 割合表示エリア -->
        </div>
    </main>

    <footer>
        <p>&copy; Janken App</p>
    </footer>
</body>

</html>