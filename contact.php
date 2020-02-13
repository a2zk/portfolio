<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- <link href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.css"> -->
    <link rel="stylesheet" href="css/main.css">
    <script src="js/contact.js"></script>
    <title>Aidan Koenig | Contact</title>
</head>

<body>
    <header>
        <?php include 'include/nav.php' ?>
    </header>

    <div class="contact">
        <h3 class="titletxt">
            <span class="titleroll">Contact</span>
        </h3>
        <div class="bigbox">
            <div class="imgg">
                <img src="media/mouse.png" alt="illustration">
                <div class="righttxt">
                    <h5>Services</h5>
                    <h6>What I can do for you:
                        <ul>
                            <li>Web Development</li>
                            <li>Brand Creation</li>
                            <li>Event Identity</li>
                            <li>Graphic Design</li>
                        </ul>
                    </h6>
                </div>
            </div>
        </div>
        <div class="flex">
            <form id="contact-form" class="contactform" autocomplete>
                <label for="name">Name</label><br />
                <input type="text" name="name" required /><br />
                <label for="phone">Phone</label><br />
                <input type="text" name="phone" /><br />
                <label for="email">Email</label> <br />
                <input type="email" name="email" required><br />
                <label for="message">Write Message</label><br />
                <textarea name="message" cols="30" rows="10"></textarea><br />
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
        <p id="output-msg"></p>
    </div>
</body>

<footer>
    <div class="copyright">Copyright 2019 All rights reserved | Aidan Koenig</div>
</footer>

</html>
