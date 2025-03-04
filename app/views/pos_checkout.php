<!-- app/views/pos_checkout.php -->
<form method="POST">
    <input type="hidden" name="total" value="100.00">
    <label>Payment Method:</label>
    <select name="payment_method">
        <option value="cash">Cash</option>
        <option value="card">Card</option>
    </select>
    <button type="submit">Complete Sale</button>
</form>
