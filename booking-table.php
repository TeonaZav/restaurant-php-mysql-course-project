<?php require "config/config.php"; ?>
<?php require "libs/App.php"; ?>
<?php require "includes/header.php"; ?>

<?php 

$app = new App;

if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $booking_date = $_POST['booking_date'];
  $num_people = $_POST['num_people'];
  $special_request = $_POST['special_request'];
  $status = "Pending";
  $user_id = $_SESSION['user_id'];

  if($booking_date > date("m/d/Y h:i:sa")) {

    $query = "INSERT INTO bookings (name, email, booking_date, num_people, special_request, status, user_id) VALUES (:name, :email, :booking_date, :num_people, :special_request, :status, :user_id)";

    $arr = [
      ":name" => $name,
      ":email" => $email,
      ":booking_date" => $booking_date,
      ":num_people" => $num_people,
      ":special_request" => $special_request,
      ":status" => $status,
      ":user_id" => $user_id,
    ];
  
    $path = "index.php";
  
    $app->insert($query, $arr, $path);
  } else {
      echo '<script>alert("Please, select a valid date")</script>';
      echo "<script>window.location.href='".APPURL."'</script>";
  }

}

?>

<!-- Footer Start -->
<?php require "includes/footer.php"; ?>