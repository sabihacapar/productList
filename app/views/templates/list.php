<?php include 'header.php'; ?>
<h2>Products</h2>
<ul>
    <?php if (!empty($products) && is_array($products)): ?>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="/products/show/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No products available.</li>
    <?php endif; ?>
</ul>
<?php include 'footer.php'; ?>