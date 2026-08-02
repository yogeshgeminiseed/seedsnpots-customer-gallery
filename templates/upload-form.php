<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="spg-upload-wrapper">

<h2>Share Your Garden 🌱</h2>

<form method="post" enctype="multipart/form-data">

<?php wp_nonce_field( 'spg_gallery_submit', 'spg_nonce' ); ?>

<p>
<label>Your Name</label><br>
<input type="text" name="customer_name" required>
</p>

<p>
<label>Email</label><br>
<input type="email" name="customer_email" required>
</p>

<p>
<label>City</label><br>
<input type="text" name="customer_city">
</p>

<p>
<label>Select Product</label><br>

<input
type="text"
name="product_search"
id="spg-product-search"
placeholder="Search product..."
autocomplete="off">

<input
type="hidden"
name="product_id"
id="spg-product-id">

<div id="spg-search-results"></div>

</p>

<p>

<label>Your Experience</label>

<textarea
name="experience"
rows="5"></textarea>

</p>

<p>

<label>Upload Photos</label>

<input
type="file"
name="gallery_images[]"
multiple
accept="image/*">

</p>

<p>

<button
type="submit"
name="spg_submit">

Submit Garden

</button>

</p>

</form>

</div>