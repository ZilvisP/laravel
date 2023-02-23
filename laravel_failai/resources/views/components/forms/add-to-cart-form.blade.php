<form action="{{ route('product.add_to_cart') }}" method="POST">
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" value="1">
    <input type="submit" value="Add to cart" class="cart-button">
</form>
