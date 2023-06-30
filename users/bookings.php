<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>
<?php 

  $query = "SELECT * FROM bookings WHERE user_id = '$_SESSION[user_id]'";
  $app = new App;

  $bookings = $app->selectAll($query);

?>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Bookings</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="<?php echo APPURL;?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo APPURL;?>/users/bookings.php?id=<?php echo $_SESSION['user_id']; ?>">Bookings</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
            <div class="container">
                
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Number of people</th>
                            <th scope="col">Special Request</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($bookings as $booking) : ?>
                          <tr>
                            
                            <td><?php echo $booking->name; ?></td>
                            <td><?php echo $booking->email; ?></td>
                            <td><?php echo $booking->booking_date; ?></td>
                            <td><?php echo $booking->num_people; ?></td>
                            <td><?php echo $booking->special_request; ?></td>
                            <td><?php echo $booking->status; ?></td>
                            <?php if($booking->status == 'Completed') : ?>
                       
                            <td><a href="<?php echo APPURL; ?>/users/review.php" class="btn btn-success text-white">Review</a></td>
                            <?php endif; ?>
                          </tr>
                      
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                </div>
            </div>
        <!-- Service End -->
        

        <!-- Footer Start -->
        <?php require "../includes/footer.php"; ?>