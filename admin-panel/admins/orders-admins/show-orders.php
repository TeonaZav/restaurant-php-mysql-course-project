<?php require "../../../config/config.php"; ?>
<?php require "../../../libs/App.php"; ?>
<?php require "../../layouts/header.php"; ?>

<?php 

$query = "SELECT * FROM orders";
$app = new App;

$app->validateSessionAdminPages();
$orders = $app->selectAll($query);

?>
          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Orders</h5>
            
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">N</th>
                    <th scope="col">Name</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Town</th>
                    <th scope="col">Country</th>
                    <th scope="col">Tel:</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total</th>
                   
                  </tr>
                </thead>
                <tbody>
            <?php foreach($orders as $order) : ?>
                  <tr>
                    <th scope="row"><?php echo $order->id; ?></th>
                    <td><?php echo $order->name; ?></td>
                    <td><?php echo $order->email; ?></td>
                    <td><?php echo $order->town; ?></td>
                    <td><?php echo $order->country; ?></td>
                    <td><?php echo $order->phone_number; ?></td>
                    <td><?php echo $order->address; ?> </td>
                    <td>$<?php echo $order->total_price; ?>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


      <?php require "../../layouts/footer.php"; ?>