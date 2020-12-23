<section class="bg-primary-3">
    <div class="container">
        <div class="section-title text-center mt-5">
            <h1 class="display-3">Patch-Note : <?= $get_patch_notes["name"] ?></h1>
            <div class="lead">Vous pouvez voir ici les nouveautés apportées !</div>
            <br>
            <a href="/" class="d-block"><i class="fas fa-arrow-left" aria-hidden="true"></i> Retour à l'accueil</a>
            <br>
            <br>
        </div>
        <?php if (!empty($get_list['add']['0']) || !empty($get_list['del']['0'])) { ?>
            <div class="card card-body panel panel-body">
                <?php if (!empty($get_list['add']['0'])) { ?>
                    <div class="pricing-table-section text-center text-lg-left">
                        <div class="row">
                            <div class="text-center w-100">
                                <h1 class="display-4"><?= $Lang->get('PATCHNOTES__LANG_GLOBAL') ?></h1>
                            </div>
                            <br>
                        </div>
                        <div class="border rounded bg-white text-dark">
                            <div class="row align-items-center">
                                <div class="col-12 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h4 class="mb-0 text-center">
                                            <p style="border: 1px solid black;display:inline;padding:5px;">
                                                <?= $Lang->get('PATCHNOTES__FORM_SHOP_ADD') ?>
                                            </p>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php foreach ($get_list['add'] as $add) { ?>
                                <div class="row align-items-center">
                                    <div class="col-12 ml-5 py-md-1">
                                        <span><?= $add ?></span>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>

                        </div>
                    </div>
                <?php }
                if (!empty($get_list['del']['0'])) { ?>
                    <div class="pricing-table-section mt-5 text-center text-lg-left">
                        <div class="row">
                            <?php if (empty($get_list['add']['0'])) { ?>
                                <div class="text-center w-100">
                                    <h1 class="display-4"><?= $Lang->get('PATCHNOTES__LANG_GLOBAL') ?></h1>
                                </div>
                                <br>
                            <?php } ?>
                        </div>
                        <div class="border rounded bg-white text-dark">
                            <div class="row align-items-center">
                                <div class="col-12 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h4 class="mb-0 text-center">
                                            <p style="border: 1px solid black;display:inline;padding:5px;">
                                                <?= $Lang->get('PATCHNOTES__FORM_SHOP_DELETE') ?></p>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php foreach ($get_list['del'] as $del) { ?>
                                <div class="row align-items-center">
                                    <div class="col-12 ml-5 py-md-1">
                                        <span><?= $del ?></span>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>


                    </div>
                <?php } ?>
            </div>
        <?php }
        if (!empty($get_list_shop['add']['0']["name"]) || !empty($get_list_shop['edit']['0']["name"]) || !empty($get_list_shop['edit']['0']["name"])) { ?>

            <div class="card card-body mt-5 panel panel-body">
                <?php if (!empty($get_list_shop['add']['0']["name"])) { ?>
                    <div class="pricing-table-section text-center text-lg-left">

                        <div class="row">
                            <div class="text-center w-100">
                                <h1 class="display-4">Shop</h1>
                                <br>
                            </div>
                            <div class="col">

                                <h4 class="mb-0 text-center py-3 py-md-4">
                                    <p style="border: 1px solid black;display:inline;padding:5px;">
                                        <?= $Lang->get('PATCHNOTES__FORM_SHOP_ADD') ?>
                                    </p>
                                </h4>
                            </div>
                        </div>
                        <div class="border rounded bg-white text-dark">
                            <div class="row align-items-center text-center">
                                <div class="col-md-4 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></h6>
                                    </div>
                                </div>
                                <div class="col-md-4 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_PRICE') ?></h6>
                                    </div>

                                </div>
                                <div class="col-md-4 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></h6>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <?php foreach ($get_list_shop['add'] as $add) { ?>

                                <div class="row align-items-center text-center">
                                    <div class="col-md-4 py-3 py-md-4">
                                        <span><?= $add['name'] ?></span>

                                    </div>
                                    <div class="col-md-4 py-3 py-md-4">
                                        <span><?= $add['price'] ?></span>

                                    </div>
                                    <div class="col-md-4 py-3 py-md-4">
                                        <span><?= $add['quantity'] ?></span>

                                    </div>
                                </div>
                                <hr>
                            <?php } ?>

                        </div>
                    </div>
                <?php }
                if (!empty($get_list_shop['edit']['0']["name"])) { ?>

                    <div class="pricing-table-section mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0 text-center py-3 py-md-4">
                                    <p style="border: 1px solid black;display:inline;padding:5px;">
                                        <?= $Lang->get('PATCHNOTES__FORM_SHOP_EDIT') ?>
                                    </p>
                                </h4>
                            </div>
                        </div>
                        <div class="border rounded bg-white text-dark">
                            <div class="row align-items-center text-center">
                                <div class="col-md-3 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></h6>
                                    </div>
                                </div>
                                <div class="col-md-3 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_OLD_PRICE') ?></h6>
                                    </div>

                                </div>
                                <div class="col-md-3 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NEW_PRICE') ?></h6>
                                    </div>

                                </div>
                                <div class="col-md-3 py-3 py-md-4">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></h6>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <?php foreach ($get_list_shop['edit'] as $edit) { ?>
                                <div class="row align-items-center text-center">
                                    <div class="col-md-3 py-3 py-md-4">
                                        <span><?= $edit['name'] ?></span>

                                    </div>
                                    <div class="col-md-3 py-3 py-md-4">
                                        <span><?= $edit['old_price'] ?></span>

                                    </div>
                                    <div class="col-md-3 py-3 py-md-4">
                                        <span><?= $edit['price'] ?></span>

                                    </div>
                                    <div class="col-md-3 py-3 py-md-4">
                                        <span><?= $edit['quantity'] ?></span>

                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>
                    </div>
                <?php }
                if (!empty($get_list_shop['del']['0']["name"])) { ?>
                    <div class="pricing-table-section mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0 text-center py-3 py-md-4">
                                    <p style="border: 1px solid black;display:inline;padding:5px;">
                                        <?= $Lang->get('PATCHNOTES__FORM_SHOP_DELETE') ?>
                                    </p>
                                </h4>
                            </div>
                        </div>
                        <div class="border rounded bg-white text-dark">

                            <hr>
                            <?php foreach ($get_list_shop['edit'] as $del) { ?>
                                <div class="row align-items-center">
                                    <div class="col-12 ml-3 py-3 py-md-4">
                                        <span><?= $del['name'] ?></span>

                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>


                    </div>
                <?php } ?>
            </div>

        <?php } ?>
    </div>
</section>


