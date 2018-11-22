<!-- PHP Header Includes -->
<?php
    require_once 'core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    include 'includes/headerfull.php';
    include 'includes/left.php';
    
    // Simple SQL Query for Featured Products
    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $db->query($sql);
?>

<body>


<!-- Featured Products -->
<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
    <h2 class="text-center">Featured Products</h2>
        <div class="row">
            <?php while($product = mysqli_fetch_assoc($featured)) : ?>
            <div class="col-md-3">
                <h4><?= $product['title']; ?></h4>
                <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="imgThumb" />
                <p class="list-price text-danger">List Price: <s>£<?= $product['list_price']; ?></s></p>
                <p class="price">Our Price: £<?= $product['price']; ?></p>
                <button type="button" class="btn btn-sm btn-success" onClick="detailsmodal(<?= $product['id']; ?>)">Details</button>
            </div>
            <?php endwhile; ?>
        </div>
</div>

<!-- PHP Footer Includes -->
<?php
    include 'includes/right.php';
    include 'includes/footer.php';
?>
