<style>
.img {
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

#profile {
    text-align: center;
}
</style>

<?php
session_start();

if (!isset($_SESSION['username'])) {
	exit('<p style="color:red"><strong>You must log in first.</strong></p>');
}

include('database.php');
include('header.php');

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

?>

<div id="view" class="view-container" style="text-align: center;">

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <h1><?php echo "<img class = 'img' src='images/" . $row['image'] . "'> <br>"; ?>

        <?php echo $row['firstname'] ?>
        <?php echo $row['lastname'] . "<br>" ?></p>
    </h1>
    <p><i class="fas fa-envelope-open"></i>&nbsp;&nbsp;<?php echo $row['email'] . "<br>" ?></p>
    <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?php echo $row['address'] . "<br>" ?></p>
    <p><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;<?php echo $row['phone'] . "<br>" ?>

        <?php } ?>

</div>

<?php include('footer.php'); ?>