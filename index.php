<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Rechner</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_destroy();
    } elseif (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <header>
        <h1>Pizza Rechner</h1>
        <img src="https://cdn.pixabay.com/photo/2020/03/08/16/04/pizza-4912871_1280.png" alt="Pizza Rechner Logo" height="100">
    </header>
    <main>
        <aside>Werbung</aside>
        <article>
            <!--create a button if a session exits, when pressed destroy session-->
            <?php
            if (isset($_SESSION)) {
                echo '<p>Willkommen!</p>';
                echo '<a href="#?action=logout">Logout</a>';
            }
            ?>
            <form>
                <label for="size">Pizza Durchmesser</label>
                <input type="number" name="size" id="size" placeholder="Größe in cm" min="0" value="30.00" required><br>
                <label for="price">Pizza Preis</label>
                <input type="number" name="price" id="price" placeholder="Preis in Euro" min="0" value="10.00" required><br>
                <input type="radio" name="round" id="round"><label for="round">ist Rund</label><br>
                <input type="button" value="Hinzufügen">
            </form>
            <ul></ul>
            <p></p>
        </article>
    </main>
    <footer>
        <p>Copyright &copy; 2023 Raffael Schäfer</p>
    </footer>
    <script src="./js/app.js"></script>
</body>

</html>