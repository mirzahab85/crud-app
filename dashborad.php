<?php 

session_start();

if (!isset($_SESSION['username'])) {
	header ("Location: login.php");
}

include('database.php');
include('header.php');
include('footer.php');

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

?>

<section class="menu">
    <h2> CRUD APP</h2>
    <table>
        <tr>
            <th class="a">ID</th>
            <th class="b">Photo</th>
            <th class="c">First Name</th>
            <th class="d">Last Name</th>
            <th class="e">E-mail</th>
            <th class="f">Adress</th>
            <th class="g">Phone</th>
            <th class="h">Gender</th>
            <th class="i">Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td> <?php echo $row ['ID']; ?> </td>
            <td> <?php echo "<img class = 'images' src='images/" . $row['image'] . "'>"; ?> </td>

            <td> <?php echo $row['firstname']; ?> </td>
            <td> <?php echo $row['lastname']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['address']; ?> </td>
            <td> <?php echo $row['phone']; ?> </td>
            <td> <?php echo $row['gender']; ?> </td>
            <td>
                <a class="viewbutton" href=<?php echo 'view.php?id=' . $row['ID']; ?>><i class="fas fa-eye"></i>
                    <a class="editbutton" href=<?php echo 'edit.php?id=' . $row['ID']; ?>><i
                            class="fas fa-edit"></i></a>
                    <a class="deletebutton" href=<?php echo 'delete.php?id=' . $row['ID']; ?>><i
                            class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php } ?>

    </table>

</section>