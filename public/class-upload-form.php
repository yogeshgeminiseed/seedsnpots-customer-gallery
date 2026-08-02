<?php

if (!defined('ABSPATH')) {
    exit;
}

class SPG_Upload_Form {

    public function __construct() {
        add_shortcode('spg_upload_form', array($this, 'render_form'));
    }

    public function render_form() {

        ob_start();
        ?>

        <form method="post" enctype="multipart/form-data">

            <p>
                <label>Your Name</label><br>
                <input type="text" name="customer_name" required style="width:100%;">
            </p>

            <p>
                <label>Email</label><br>
                <input type="email" name="customer_email" required style="width:100%;">
            </p>

            <p>
                <label>City</label><br>
                <input type="text" name="city" style="width:100%;">
            </p>

            <p>
                <label>Plant Name</label><br>
                <input type="text" name="plant_name" required style="width:100%;">
            </p>

            <p>
                <label>Upload Photo</label><br>
                <input type="file" name="plant_photo" accept="image/*" required>
            </p>

            <p>
                <label>Experience</label><br>
                <textarea name="experience" rows="5" style="width:100%;"></textarea>
            </p>

            <p>
                <input type="submit" name="spg_submit" value="Submit Garden">
            </p>

        </form>

        <?php

        return ob_get_clean();

    }

}