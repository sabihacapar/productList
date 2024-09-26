<?php include 'header.php'; ?>
<h2><?php echo $product['name']; ?></h2>
<p><?php echo $product['description']; ?></p>
<p>Price: $<?php echo $product['price']; ?></p>
<a href="/products">Back to Products</a>
<?php include 'footer.php'; ?>