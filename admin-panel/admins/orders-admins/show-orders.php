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
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">town</th>
                    <th scope="col">country</th>
                    <th scope="col">zipcode</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">address</th>
                    <th scope="col">total_price</th>
                    <th scope="col">status</th>
                    <th scope="col">delete</th>
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
                    <td>
                    <?php echo $order->zipcode; ?>
                    </td>
                    <td><?php echo $order->phone_number; ?></td>
                    <td><?php echo $order->address; ?> </td>
                    <td>$<?php echo $order->total_price; ?></td>                     <td><a href="delete-orders.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


      <?php require "../../layouts/footer.php"; ?>