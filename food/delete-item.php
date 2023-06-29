<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php 

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $query = "DELETE FROM cart WHERE id='$id' AND user_id = '$_SESSION[user_id]'";
   $app = new App;

   $path = "cart.php";

   $app->delete($query, $path);
   
}


?>



     <!-- Footer Start -->
     <?php require "../includes/footer.php"; ?>