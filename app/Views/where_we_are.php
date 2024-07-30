<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<section class="container product-box py-5">
    <div class="row">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our Room">
        </div>
        <div class="col-7">
            <p class="where-we-are-title mb-0">CIGBurger Paris</p>
            <p class="where-we-are-subtitle">Rua des Hamburgers, 123 Paris</p>
            <p class="mb-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, ab quam velit, enim quidem obcaecati accusamus quaerat explicabo similique dolore autem nesciunt, vitae eum inventore. Inventore quod beatae aperiam ratione.
            </p>

            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="tel:+331123456789">+331 1 23 45 67 89</a>
                </p>
            </div>

            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="mailto:paris@cigburger.com">paris@cigburger.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container product-box">
    <div class="row">
        <div class="col text-center">
            <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Localização">
        </div>
    </div>
</section>

<?= $this->endSection() ?>