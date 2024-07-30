<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<section class="container">
    <div class="col">
        <div class="row mb-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burguer 1">
            </div>
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 01</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptate cumque fugit molestias reprehenderit mollitia eos vel, architecto ea quam obcaecati adipisci ab, laudantium fuga. Odit blanditiis doloribus doloremque impedit!
                    Sit officiis recusandae dolorem unde neque expedita atque odio officia quaerat dolores eum pariatur ullam beatae id, odit nisi modi ducimus corrupti? Distinctio deleniti ipsum aperiam dolorem natus expedita facere.</p>
                <h2 class="mt-3 product-text-color">15,00€</h2>
            </div>
        </div>

        <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 02</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptate cumque fugit molestias reprehenderit mollitia eos vel, architecto ea quam obcaecati adipisci ab, laudantium fuga. Odit blanditiis doloribus doloremque impedit!
                    Sit officiis recusandae dolorem unde neque expedita atque odio officia quaerat dolores eum pariatur ullam beatae id, odit nisi modi ducimus corrupti? Distinctio deleniti ipsum aperiam dolorem natus expedita facere.</p>
                <h2 class="mt-3 product-text-color">14,00€</h2>
            </div>
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burguer 2">
            </div>
        </div>

        <div class="row mb-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burguer 3">
            </div>
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 03</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptate cumque fugit molestias reprehenderit mollitia eos vel, architecto ea quam obcaecati adipisci ab, laudantium fuga. Odit blanditiis doloribus doloremque impedit!
                    Sit officiis recusandae dolorem unde neque expedita atque odio officia quaerat dolores eum pariatur ullam beatae id, odit nisi modi ducimus corrupti? Distinctio deleniti ipsum aperiam dolorem natus expedita facere.</p>
                <h2 class="mt-3 product-text-color">12,00€</h2>
            </div>
        </div>

        <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Burguer 04</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptate cumque fugit molestias reprehenderit mollitia eos vel, architecto ea quam obcaecati adipisci ab, laudantium fuga. Odit blanditiis doloribus doloremque impedit!
                    Sit officiis recusandae dolorem unde neque expedita atque odio officia quaerat dolores eum pariatur ullam beatae id, odit nisi modi ducimus corrupti? Distinctio deleniti ipsum aperiam dolorem natus expedita facere.</p>
                <h2 class="mt-3 product-text-color">9,00€</h2>
            </div>
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burguer 4">
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>