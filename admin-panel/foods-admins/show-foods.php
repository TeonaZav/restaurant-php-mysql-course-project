<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>

<?php 

$query = "SELECT * FROM foods";
$app = new App;

$app->validateSessionAdminPages();
$foods = $app->selectAll($query);

?>
          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Foods</h5>
              <a  href="create-foods.php" class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
            <?php if (is_iterable($foods)) : ?>
                <?php foreach($foods as $food) : ?>
                  <tr>
                    <th scope="row"><?php echo $food->id; ?></th>
                    <td><?php echo $food->name; ?></td>
                    <td><img src="<?php echo "http://localhost/restoran"; ?>/img/<?php echo $food->image; ?>" alt="product image" style="width: 50px; height: 50px; border-radius: 2px"></td>
                    <td>$<?php echo $food->price; ?></td>
                     <td><a href="delete-foods.php?id=<?php echo $food->id; ?>" class="btn btn-danger  text-center">delete</a></td>
                  </tr> 
                <?php endforeach; ?>
          <?php endif; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

      <?php require "../layouts/footer.php"; ?>