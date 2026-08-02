<?php if(isset($_GET['spg'])&&$_GET['spg']=='success'):?>
<div class="spg-success">Thank you! Your submission is awaiting approval.</div>
<?php endif;?>
<form class="spg-upload-form" method="post">
<?php wp_nonce_field('spg_submit','spg_nonce');?>
<p><label>Name</label><input name="spg_name" type="text" required></p>
<p><label>Email</label><input name="spg_email" type="email" required></p>
<p><label>City</label><input name="spg_city" type="text"></p>
<p><label>Product</label><input name="spg_product" type="text" placeholder="AJAX search in v0.5"></p>
<p><label>Photos</label><input type="file" multiple disabled><small>Enabled in v0.5</small></p>
<p><label>Experience</label><textarea name="spg_exp"></textarea></p>
<p><button name="spg_submit" value="1">Submit</button></p>
</form>