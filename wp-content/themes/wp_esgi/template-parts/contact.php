<div class="contact">
    <div class="container contact-items row flex-column flex-md-row justify-content-end">
        <div class="col-12 col-md-2 contact-item">
            <h3 class="text-right"><?= get_theme_mod('location') ?></h3>
            <p class="text-right grey"><?= get_theme_mod('address-1') ?></p>
            <p class="text-right grey"><?= get_theme_mod('address-2') ?></p>
        </div>
        <div class="col-12 col-md-2 contact-item">
            <h3 class="text-right"><?= get_theme_mod('job-1') ?></h3>
            <p class="text-right grey"><?= get_theme_mod('phone-1') ?></p>
            <p class="text-right grey"><?= get_theme_mod('mail-1') ?></p>
        </div>
        <div class="col-12 col-md-2 contact-item">
            <h3 class="text-right"><?= get_theme_mod('job-2') ?></h3>
            <p class="text-right grey"><?= get_theme_mod('phone-2') ?></p>
            <p class="text-right grey"><?= get_theme_mod('mail-2') ?></p>
        </div>
    </div>

    <div class="contact-image">
        <div class="row justify-content-md-end justify-content-center">
            <div class="col-12 col-sm-8">
                <img src="<?= get_theme_mod('image-contact') ?>" alt="">
            </div>
        </div>
    </div>

    <div class="contact-form container">
        <h1 class="contact-form-title">Write us here</h1>
        <p class="contact-form-subtitle grey">Go! Don’t be shy.</p>
        <form name="contactForm" id="contactForm" method="post" onsubmit="return formValidation()" action="">
            <div class="row">
                <input class="input" type="text" id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="row">
                <input class="input" type="text" id="email" name="email" placeholder="Email">
            </div>
            <div class="row">
                <input class="input" type="text" id="phone" name="phone" placeholder="Phone no.">
            </div>
            <div class="row">
                <textarea class="input" id="message" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="row">
                <input class="input" type="submit" value="Submit"> <span id="status"></span>
            </div>
        </form>
    </div>
</div>