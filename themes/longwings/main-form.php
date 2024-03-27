<section class="main-form-section">
    <h3 class="section-header" style="margin-top: 40px;">Still not sure?</h3>
    <p class="section-tagline" style="margin-bottom: 40px;">Fill out our contact form to request more information</p>
<div class="container form-main">
    <div class="form-image-container">
        <img src="<?php echo get_theme_file_uri().'/photos/yellow_butterfly_1.png';?>" alt="" class="img-fluid form-image">
    </div>
    <form class="form-content-holder">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="">
        </div>
        <div class="mb-3" style="display:flex; gap: 5px;">
            <div style="display: flex; flex-direction: column;">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="">
            </div>
            <div style="display: flex; flex-direction: column;">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="">
            </div>
            <div style="display: flex; flex-direction: column;">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="">
            </div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="">
        </div>
        <div style="display:flex; justify-content:center;">
            <input type="submit" class="btn frontpage-card-button">
        </div>
</form>
</div>
</section>