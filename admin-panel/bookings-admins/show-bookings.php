<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>

<?php 

$query = "SELECT * FROM bookings";
$app = new App;

$app->validateSessionAdminPages();
$bookings = $app->selectAll($query);

?>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body ">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table mt-2">
                <thead >
                  <tr>
                    <th scope="col" class="align-middle text-center">Name</th>
                    <th scope="col" class="align-middle text-center">e-mail</th>
                    <th scope="col" class="align-middle text-center">Booking Date</th>
                    <th scope="col" class="align-middle text-center">People</th>
                    <th scope="col" class="align-middle text-center">Special Note</th>
                    <th scope="col" class="align-middle text-center" > Date</th>
                    <th scope="col" class="align-middle text-center">Status</th>
                    <th scope="col" class="align-middle text-center">Change Status</th>
                    <th scope="col" class="align-middle text-center">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($bookings as $booking) : ?>
                  <tr>
                    <td><?php echo $booking->name; ?></td>
                    <td><?php echo $booking->email; ?></td>
                    <td><?php echo $booking->booking_date; ?></td>
                    <td class="text-center"><?php echo $booking->num_people; ?></td>
                    <td><?php echo $booking->special_request; ?></td>
                    <td><?php echo $booking->created_at; ?></td>
                    <td><?php echo $booking->status; ?></td>
                    <td>
                      <a href="status.php?id=<?php echo $booking->id; ?>" class="btn btn-primary text-center">
                      Change
                      </a>
                    </td>
                    
                     <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center">delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

      <?php require "../layouts/footer.php"; ?>