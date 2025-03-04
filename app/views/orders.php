<!-- app/views/orders.php -->
<h2>My Orders</h2>
<table>
    <tr><th>Order ID</th><th>Status</th></tr>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['status'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
