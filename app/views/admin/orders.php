<!-- app/views/admin/orders.php -->
<h2>Order Management</h2>
<table>
    <tr><th>Order ID</th><th>User ID</th><th>Status</th><th>Action</th></tr>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['user_id'] ?></td>
            <td><?= $order['status'] ?></td>
            <td>
                <form method="POST" action="update_order_status">
                    <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                    <select name="status">
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="shipped">Shipped</option>
                        <option value="delivered">Delivered</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
