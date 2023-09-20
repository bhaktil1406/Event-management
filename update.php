<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db');
$id = $_GET['upd'];
if (isset($_POST['Update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $sql = "UPDATE `contact_form` set name='$name',email='$email',number='$number',plan='$plan',address='$address',message='$message' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('update');</script>";
    } else {
        echo "
    <script>alert('error');</script>";
    }





}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>

    <div class="container">

        <?php @include 'header.html'; ?>

        <section class="contact">

            <h1 class="heading">contact us</h1>

            <form action="" method="post">

                <div class="flex">

                    <div class="inputBox">
                        <span>your name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>

                    <div class="inputBox">
                        <span>your email</span>
                        <input type="email" placeholder="enter your email" name="email" required>
                    </div>

                    <div class="inputBox">
                        <span>your number</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>

                    <div class="inputBox">
                        <span>choose plan</span>
                        <select name="plan">
                            <option value="basic">basic plan</option>
                            <option value="premium">premium plan</option>
                            <option value="ultimate">ultimate plan</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <span>your address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30"
                            rows="10"></textarea>
                    </div>

                    <div class="inputBox">
                        <span>your message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30"
                            rows="10"></textarea>
                    </div>

                </div>

                <input type="submit" value="Update" name="Update" class="btn">

            </form>

        </section>

        <?php @include 'footer.html'; ?>

    </div>















    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>