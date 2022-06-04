<main>

    <?php

    if (isset($_GET['page'])) {
        $temp = $_GET['page'];
    } else {
        $temp = "";
    }

    if ($temp == "login") {
        include "./pages/main/login.php";
    } elseif ($temp == "login/signup") {
        include "./pages/main/signup.php";
    } elseif ($temp == "services") {
        include "./pages/main/services.php";
    } elseif ($temp == "faq") {
        include "./pages/main/faq.php";
    } elseif ($temp == "news") {
        include "./pages/main/news.php";
    } elseif ($temp == "blog") {
        include "./pages/main/blog.php";
    } elseif ($temp == "minigamne") {
        include "./pages/main/minigamne.php";
    } else {
        include "./pages/main/index.php";
    }



    ?>


</main>