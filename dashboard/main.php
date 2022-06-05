<main>

    <?php

    if (isset($_GET['page'])) {
        $temp = $_GET['page'];
    } else {
        $temp = "";
    }

    if ($temp == "order") {
        include "./main/order.php";

    } elseif ($temp == "orders") {
        include "./main/orders.php";

    } elseif ($temp == "services") {
        include "./main/services.php";

    } elseif ($temp == "updates") {
        include "./main/updates.php";

    } elseif ($temp == "support") {
        include "./main/support.php";
        
    } elseif ($temp == "balance") {
        include "./main/balance.php";
    }
    // else {
    //     include "./pages/main/index.php";
    // }



    ?>


</main>