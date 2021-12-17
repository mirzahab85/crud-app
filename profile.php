<?php
session_start();

if (!isset($_SESSION['username'])) {
	exit('<p style="color:red"><strong>You must log in first.</strong></p>');
}

include('database.php');
include('header.php');

$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username'" ;
$result = mysqli_query($conn, $sql);

?>

<div id="profile">



    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <h1><?php echo "<img class = 'img' src='images/" . $row['image'] . "'> <br>"; ?>
        <?php echo $row['firstname'] ?>
        <?php echo $row['lastname'] ?>
        <p><i class="fas fa-envelope-open"></i>&nbsp;&nbsp;<?php echo $row['email'] . "<br>" ?></p>
        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?php echo $row['address'] . "<br>" ?></p>
        <p><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<?php echo $row['phone'] . "<br><br>" ?>
        <div class="social-icon">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-youtube"></i>
        </div>

        <?php } ?>

</div>

<?php include('footer.php'); ?>