<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="Navbar">
        <div class="navbarHeading">
            <div class="navbartitle">
                <h1 class="title"> WheelZ4U </h1>
            </div>


            <div class="navbarsearch">
                <form action="">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <button type="submit">Search</button>
                </form>
            </div>



            <div class="navbarLogin">
                <a href="">Admin Page</a>
            </div>
        </div>


        <!-- links in Navbar -->


        <div class="navbarLinks">
            <div class="Links">
                <ul>

                </ul>
            </div>
        </div>
    </div>

    <div class="validation">


        <div class="validationTable">
            <table>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>Validatation Status</th>
                    <th>
                        Approval
                    </th>
                </tr>
                <form action="" method="post">
                    <?php

                    include 'connect.php';

                    $show_products = $conn->prepare("SELECT * FROM `users` where   `validation` = 0");
                    $show_products->execute();
                    if ($show_products->rowCount() > 0) {
                        while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                            <tr>

                                <input type="hidden" value=<?= $fetch_products['id']; ?> name="idVal">
                                <td><?= $fetch_products['name']; ?></td>
                                <td><?= $fetch_products['email']; ?></td>
                                <td><?= $fetch_products['validation']; ?></td>
                                <td><button name="validate" id="validate" value=<?= $fetch_products['id']; ?>> Validate
                                    </button> </td>

                            </tr>
                    <?php
                        }
                    } ?>
                </form>

            </table>

        </div>
    </div>



    <?php
    include 'connect.php';




    // session_start();

    // $admin_id = $_SESSION['admin_id'];

    // if (!isset($admin_id)) {
    //    header('location:admin_login.php');
    // };

    if (isset($_POST['validate'])) {

        $id = $_POST['validate'];
        $change_product = $conn->prepare("UPDATE `users` SET `validation` = 1 where `id` = ?");
        $change_product->execute([$id]);
        header('location:admin.php');
    }
