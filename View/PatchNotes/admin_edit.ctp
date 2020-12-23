<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('PATCHNOTES__GLOBAL_EDIT') ?></h3>
                </div>
                <div class="box-body">
                    <form action="" method="post" data-ajax="true"
                          data-redirect-url="<?= $this->Html->url(array('plugin' => 'patch-notes', 'controller' => '', 'action' => 'index', 'admin' => true)) ?>">


                        <div class="ajax-msg"></div>
                        <h4>
                            <b>
                                <?= $Lang->get('PATCHNOTES__LANG_GLOBAL') ?>
                            </b>
                        </h4>
                        <hr>
                        <div class="form-group">
                            <h5><?= $Lang->get('PATCHNOTES__ADMIN_NAME') ?></h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_NAME_EXAMPLE') ?></span>
                                </div>
                                <input name="name" value="<?= $get_patch_notes['name'] ?>" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5><?= $Lang->get('PATCHNOTES__ADMIN_URL') ?></h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_URL_EXAMPLE') ?></span>
                                </div>
                                <input name="url" value="<?= $get_patch_notes['url'] ?>" class="form-control" type="text">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4><b><?= $Lang->get('PATCHNOTES__FORM_SHOP_ADD') ?></b></h4>
                            <small class="text-danger">
                                <?= $Lang->get('PATCHNOTES__FORM_ADD') ?>
                            </small>
                            <div class="input-group">
                                <input name="lists[add][0]" value="<?= htmlentities($list["add"][0]) ?>"
                                       class="form-control" type="text">
                                <div class="input-group-append">
                                    <button data-i="<?= count($list["add"]) ?>" type="button" id="addList"
                                            class="btn btn-success"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>
                            <div class="addList"></div>
                            <?php
                            $i = 0;
                            unset($list["add"][0]);
                            foreach ($list["add"] as $key => $value) {
                                $i++;
                                echo '<div style="margin-top:5px;" class="input-group" id="add-' . $i . '">';
                                echo '<input name="lists[add[' . $i . ']" value="' . htmlentities($value) . '" class="form-control" type="text">';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-danger add-list-del" data-id-i="' . $i . '" type="button"><span class="fas fa-times"></span></button>';
                                echo '</span>';
                                echo '</div>';

                            }
                            ?>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4><b><?= $Lang->get('PATCHNOTES__FORM_SHOP_DELETE') ?></b></h4>
                            <small class="text-danger">
                                <?= $Lang->get('PATCHNOTES__FORM_DELETE') ?>
                            </small>
                            <div class="input-group">
                                <input name="lists[del][0]" value="<?= htmlentities($list["del"][0]) ?>"
                                       class="form-control" type="text">
                                <div class="input-group-append">
                                    <button data-j="<?= count($list["del"]) ?>" type="button" id="delList"
                                            class="btn btn-success"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>
                            <div class="delList"></div>
                            <?php
                            $i = 0;
                            unset($list["del"][0]);
                            foreach ($list["del"] as $key => $value) {
                                $i++;
                                echo '<div style="margin-top:5px;" class="input-group" id="del-' . $i . '">';
                                echo '<input name="lists[del][' . $i . ']" value="' . htmlentities($value) . '" class="form-control" type="text">';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-danger del-list" data-id-j="' . $i . '" type="button"><span class="fas fa-times"></span></button>';
                                echo '</span>';
                                echo '</div>';

                            }
                            ?>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4><b>Shop</b></h4>
                            <small class="text-danger">
                                <?= $Lang->get('PATCHNOTES__FORM_SHOP') ?>
                            </small>
                            <h5><?= $Lang->get('PATCHNOTES__FORM_SHOP_ADD') ?></h5>
                            <div class="input-group">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>
                                <input name="lists[shop][add][0][name]"
                                       value="<?= htmlentities($list["shop"]["add"][0]["name"]) ?>"
                                       class="form-control" type="text">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_PRICE') ?></span></span>
                                <input name="lists[shop][add][0][price]"
                                       value="<?= htmlentities($list["shop"]["add"][0]["price"]) ?>"
                                       class="form-control" type="text">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></span></span>
                                <input name="lists[shop][add][0][quantity]"
                                       value="<?= htmlentities($list["shop"]["add"][0]["quantity"]) ?>"
                                       class="form-control" type="text">
                                <div class="input-group-append">
                                    <button data-k="<?= count($list["shop"]["add"]) ?>" type="button" id="addShop"
                                            class="btn btn-success"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>
                            <?php
                            $i = 0;
                            unset($list["shop"]["add"][0]);
                            foreach ($list["shop"]["add"] as $key => $value) {
                                $i++;
                                echo '<div style="margin-top:5px;" class="input-group" id="shop-add-' . $i . '">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">'. $Lang->get("PATCHNOTES__FORM_SHOP_NAME") .'</span></span>';
                                echo '<input name="lists[shop][add][' . $i . '][name]" class="form-control" value="' . htmlentities($value["name"]) . '" type="text">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">' . $Lang->get('PATCHNOTES__FORM_SHOP_PRICE') . '</span></span>';
                                echo '<input name="lists[shop][add][' . $i . '][price]" class="form-control" value="' . htmlentities($value["price"]) . '" type="text">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">' . $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') . '</span></span>';
                                echo '<input name="lists[shop][add][' . $i . '][quantity]" class="form-control" value="' . htmlentities($value["quantity"]) . '" type="text">';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-danger add-shop-del" data-id-k="' . $i . '" type="button"><span class="fas fa-times"></span></button>';
                                echo '</span>';
                                echo '</div>';

                            }
                            ?>
                            <div class="addShop"></div>
                            <hr>
                            <h5><?= $Lang->get('PATCHNOTES__FORM_SHOP_EDIT') ?></h5>

                            <div class="input-group">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>
                                <input name="lists[shop][edit][0][name]"
                                       value="<?= htmlentities($list["shop"]["edit"][0]["name"]) ?>"
                                       class="form-control" type="text">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get("PATCHNOTES__FORM_SHOP_OLD_PRICE") ?></span></span>
                                <input name="lists[shop][edit][0][old_price]"
                                       value="<?= htmlentities($list["shop"]["edit"][0]["old_price"]) ?>"
                                       class="form-control" type="text">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NEW_PRICE') ?></span></span>
                                <input name="lists[shop][edit][0][price]"
                                       value="<?= htmlentities($list["shop"]["edit"][0]["price"]) ?>"
                                       class="form-control" type="text">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></span></span>
                                <input name="lists[shop][edit][0][quantity]"
                                       value="<?= htmlentities($list["shop"]["edit"][0]["quantity"]) ?>"
                                       class="form-control" type="text">
                                <div class="input-group-append">
                                    <button data-l="<?= count($list["shop"]["edit"]) ?>" type="button" id="editShop"
                                            class="btn btn-success"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>
                            <?php
                            $i = 0;
                            unset($list["shop"]["edit"][0]);
                            foreach ($list["shop"]["edit"] as $key => $value) {
                                $i++;
                                echo '<div style="margin-top:5px;" class="input-group" id="shop-edit-' . $i . '">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">'. $Lang->get("PATCHNOTES__FORM_SHOP_NAME") .'</span></span>';
                                echo '<input name="lists[shop][edit][' . $i . '][name]" class="form-control" value="' . htmlentities($value["name"]) . '" type="text">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">'. $Lang->get("PATCHNOTES__FORM_SHOP_OLD_PRICE") .'</span></span>';
                                echo '<input name="lists[shop][edit][' . $i . '][old_price]" class="form-control" value="' . htmlentities($value["old_price"]) . '" type="text">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">' . $Lang->get('PATCHNOTES__FORM_SHOP_NEW_PRICE') . '</span></span>';
                                echo '<input name="lists[shop][edit][' . $i . '][price]" class="form-control" value="' . htmlentities($value["price"]) . '" type="text">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">' . $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') . '</span></span>';
                                echo '<input name="lists[shop][edit][' . $i . '][quantity]" class="form-control" value="' . htmlentities($value["quantity"]) . '" type="text">';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-danger edit-shop-del" data-id-l="' . $i . '" type="button"><span class="fas fa-times"></span></button>';
                                echo '</span>';
                                echo '</div>';

                            }
                            ?>
                            <div class="editShop"></div>
                            <hr>
                            <h5><?= $Lang->get('PATCHNOTES__FORM_SHOP_DELETE') ?></h5>

                            <div class="input-group">
                                <span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>
                                <input name="lists[shop][del][0][name]"
                                       value="<?= htmlentities($list["shop"]["del"][0]["name"]) ?>"
                                       class="form-control" type="text">
                                <div class="input-group-append">
                                    <button data-m="<?= count($list["shop"]["del"]) ?>" type="button" id="delShop"
                                            class="btn btn-success"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>

                            <?php
                            $i = 0;
                            unset($list["shop"]["del"][0]);
                            foreach ($list["shop"]["del"] as $key => $value) {
                                $i++;
                                echo '<div style="margin-top:5px;" class="input-group" id="shop-del-' . $i . '">';
                                echo '<span class="input-group-prepend"><span class="input-group-text">'. $Lang->get("PATCHNOTES__FORM_SHOP_NAME") .'</span></span>';
                                echo '<input name="lists[shop][del][' . $i . '][name]" class="form-control" value="' . htmlentities($value["name"]) . '" type="text">';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-danger del-shop-del" data-id-m="' . $i . '" type="button"><span class="fas fa-times"></span></button>';
                                echo '</span>';
                                echo '</div>';

                            }
                            ?>
                            <div class="delShop"></div>
                        </div>
                        <br>

                        <div class="pull-right">
                            <a href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'admin' => true, 'plugin' => 'patch-notes')) ?>"
                               class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                            <button class="btn btn-danger" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    $('#addList').on('click', function (e) {

        e.preventDefault();

        var i = parseInt($(this).attr('data-i'));

        var input = '';
        input += '<div style="margin-top:5px;" class="input-group" id="add-' + i + '">';
        input += '<input name="lists[add][' + i + ']" class="form-control" type="text">';
        input += '<span class="input-group-prepend">';
        input += '<button class="btn btn-danger add-list-del" data-id-i="' + i + '" type="button"><span class="fas fa-times"></span></button>';
        input += '</span>';
        input + '</div>';

        i++;

        $(this).attr('data-i', i);

        $('.addList').append(input);

        $('.add-list-del').unbind('click');
        $('.add-list-del').on('click', function (e) {

            var id = $(this).attr('data-id-i');

            $('#add-' + id).slideUp(150, function () {
                $('#add-' + id).remove();
            });
        });

    });

    $('.add-list-del').on('click', function (e) {

        var id = $(this).attr('data-id-i');

        $('#add-' + id).slideUp(150, function () {
            $('#add-' + id).remove();
        });
    });


    $('#delList').on('click', function (e) {

        e.preventDefault();

        var j = parseInt($(this).attr('data-j'));

        var input = '';
        input += '<div style="margin-top:5px;" class="input-group" id="del-' + j + '">';
        input += '<input name="lists[del][' + j + ']" class="form-control" type="text">';
        input += '<span class="input-group-prepend">';
        input += '<button class="btn btn-danger del-list" data-id-j="' + j + '" type="button"><span class="fas fa-times"></span></button>';
        input += '</span>';
        input + '</div>';

        j++;

        $(this).attr('data-j', j);

        $('.delList').append(input);

        $('.del-list').unbind('click');
        $('.del-list').on('click', function (e) {

            var id = $(this).attr('data-id-j');

            $('#del-' + id).slideUp(150, function () {
                $('#del-' + id).remove();
            });
        });

    });

    $('.del-list').on('click', function (e) {

        var id = $(this).attr('data-id-j');

        $('#del-' + id).slideUp(150, function () {
            $('#del-' + id).remove();
        });
    });


    $('#addShop').on('click', function (e) {

        e.preventDefault();

        var k = parseInt($(this).attr('data-k'));

        var input = '';

        input += '<div style="margin-top:5px;" class="input-group" id="shop-add-' + k + '">';
        input += "<span class='input-group-prepend'><span class='input-group-text''><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>";
        input += '<input name="lists[shop][add][' + k + '][name]" class="form-control" type="text">';
        input += '<span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_PRICE') ?></span></span>';
        input += '<input name="lists[shop][add][' + k + '][price]" class="form-control" type="text">';
        input += '<span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></span></span>';
        input += '<input name="lists[shop][add][' + k + '][quantity]" class="form-control" type="text">';
        input += '<span class="input-group-prepend">';
        input += '<button class="btn btn-danger add-shop-del" data-id-k="' + k + '" type="button"><span class="fas fa-times"></span></button>';
        input += '</span>';
        input + '</div>';

        k++;

        $(this).attr('data-k', k);

        $('.addShop').append(input);

        $('.add-shop-del').unbind('click');
        $('.add-shop-del').on('click', function (e) {

            var id = $(this).attr('data-id-k');

            $('#shop-add-' + id).slideUp(150, function () {
                $('#shop-add-' + id).remove();
            });
        });

    });

    $('.add-shop-del').on('click', function (e) {

        var id = $(this).attr('data-id-k');

        $('#shop-add-' + id).slideUp(150, function () {
            $('#shop-add-' + id).remove();
        });
    });


    $('#editShop').on('click', function (e) {

        e.preventDefault();

        var l = parseInt($(this).attr('data-l'));

        var input = '';

        input += '<div style="margin-top:5px;" class="input-group" id="shop-edit-' + l + '">';
        input += "<span class='input-group-prepend'><span class='input-group-text'><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>";
        input += '<input name="lists[shop][edit][' + l + '][name]" class="form-control" type="text">';
        input += '<span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get("PATCHNOTES__FORM_SHOP_OLD_PRICE") ?></span></span>';
        input += '<input name="lists[shop][edit][' + l + '][old_price]" class="form-control" type="text">';
        input += '<span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_NEW_PRICE') ?></span></span>';
        input += '<input name="lists[shop][edit][' + l + '][price]" class="form-control" type="text">';
        input += '<span class="input-group-prepend"><span class="input-group-text"><?= $Lang->get('PATCHNOTES__FORM_SHOP_QUANTITY') ?></span></span>';
        input += '<input name="lists[shop][edit][' + l + '][quantity]" class="form-control" type="text">';
        input += '<span class="input-group-prepend">';
        input += '<button class="btn btn-danger edit-shop-del" data-id-l="' + l + '" type="button"><span class="fas fa-times"></span></button>';
        input += '</span>';
        input + '</div>';

        l++;

        $(this).attr('data-l', l);

        $('.editShop').append(input);

        $('.edit-shop-del').unbind('click');
        $('.edit-shop-del').on('click', function (e) {

            var id = $(this).attr('data-id-l');

            $('#shop-edit-' + id).slideUp(150, function () {
                $('#shop-edit-' + id).remove();
            });
        });

    });

    $('.edit-shop-del').on('click', function (e) {

        var id = $(this).attr('data-id-l');

        $('#shop-edit-' + id).slideUp(150, function () {
            $('#shop-edit-' + id).remove();
        });
    });

    $('#delShop').on('click', function (e) {

        e.preventDefault();

        var m = parseInt($(this).attr('data-m'));

        var input = '';

        input += '<div style="margin-top:5px;" class="input-group" id="shop-del-' + m + '">';
        input += "<span class='input-group-prepend'><span class='input-group-text'><?= $Lang->get('PATCHNOTES__FORM_SHOP_NAME') ?></span></span>";
        input += '<input name="lists[shop][del][' + m + '][name]" class="form-control" type="text">';
        input += '<span class="input-group-prepend">';
        input += '<button class="btn btn-danger del-shop-del" data-id-m="' + m + '" type="button"><span class="fas fa-times"></span></button>';
        input += '</span>';
        input + '</div>';

        m++;

        $(this).attr('data-m', m);

        $('.delShop').append(input);

        $('.del-shop-del').unbind('click');
        $('.del-shop-del').on('click', function (e) {

            var id = $(this).attr('data-id-m');

            $('#shop-del-' + id).slideUp(150, function () {
                $('#shop-del-' + id).remove();
            });
        });

    });

    $('.del-shop-del').on('click', function (e) {

        var id = $(this).attr('data-id-m');

        $('#shop-del-' + id).slideUp(150, function () {
            $('#shop-del-' + id).remove();
        });
    });


</script>
