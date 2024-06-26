<section class="main-form-section">
<div style="display: flex; flex-direction: column; align-items:center; padding-bottom: 40px;">
<div class="header-holder" >
    <h3 class="section-header" >Still not sure?</h3>
    <p class="section-tagline" >Fill out our contact form to request more information</p>
</div>
</div>

    <div class="container form-main">
    <div class="form-image-container">
        <img src="<?php echo get_theme_file_uri().'/photos/Zebra_longwing.svg';?>" alt="" class="img-fluid form-image">
    </div>
    <form class="form-content-holder" id="main-page-form">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="" required>
        </div>
        <div class="mb-3" style="display:flex; gap: 5px;">
            <div style="display: flex; flex-direction: column;">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="" required>
            </div>
            <div style="display: flex; flex-direction: column;">
                <label for="state" class="form-label">State</label>
                <input type="text" name="state" class="form-control" id="state" placeholder="" required>
            </div>
            <div style="display: flex; flex-direction: column;">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" name="zip"class="form-control" id="zip" placeholder=""required>
            </div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="">
        </div>
        <div style="display:flex; justify-content:center;">
            <input type="submit" id="email_list_builder_button" class="btn frontpage-card-button">
        </div>
</form>
</div>
</section>