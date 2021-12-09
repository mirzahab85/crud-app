<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <title>CRUD APP</title>
</head>
<!DOCTYPE html>
<html lang="EN">

<body>

    <header>
        <div class="container">
            <div class="header">
                <div class="logo">

                    <img src="images/logo.png" alt="logo">
                    <h2>CRUD APPLICATION</h2>
                    <div class="nav-toggle" id="navToggle">
                    </div>
                </div>

                <nav>

                    <?php

                if (isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Logout</a></li>';
                echo '<li><a href="profile.php?">Profile</a></li>';
                echo '<li><a href="index.php">Home</a></li>';
                
                }
                ?>
                </nav>
            </div>
        </div>
    </header>

    <div class="container" class="navigation" style="text-align:center">

        <ul>

        </ul>
    </div>

    </div>