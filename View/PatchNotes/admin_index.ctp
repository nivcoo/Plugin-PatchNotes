<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('PATCHNOTES__GLOBAL_ADD') ?> <a
                                href="<?= $this->Html->url(array('controller' => '', 'action' => 'add', 'admin' => true, 'plugin' => 'patch-notes')) ?>"
                                class="btn btn-success"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>
                </div>
                <div class="box-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 25%;"><?= $Lang->get('PATCHNOTES__ADMIN_NAME') ?></th>
                            <th style="width: 25%;"><?= $Lang->get('PATCHNOTES__ADMIN_URL') ?></th>
                            <th style="width: 25%;" class="right"><?= $Lang->get('PATCHNOTES__ADMIN_NEW') ?></th>
                            <th style="width: 25%;" class="right"><?= $Lang->get('PATCHNOTES__ADMIN_ACTIONS') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($get_patch)) { ?>
                            <?php foreach ($get_patch as $v) { ?>
                                <tr>
                                    <td><?= $v["PatchNotesList"]["name"] ?></td>
                                    <td>
                                        <a target="_blank"
                                           href="<?= $this->Html->url(array('plugin' => 'patch-notes', 'controller' => '', 'action' => $v["PatchNotesList"]["url"], 'admin' => false)) ?>">
                                            <span class="label label-default"
                                                  style="width:25%"><?= $Lang->get('PATCHNOTES__GLOBAL_LINK') ?></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href=""
                                           class="btn bg-olive"><?= $Lang->get('PATCHNOTES__ADMIN_CREATE_NEWS') ?></a>
                                        <a onClick="confirmDel('')"
                                           class="btn bg-maroon"><?= $Lang->get('PATCHNOTES__ADMIN_MANAGE_NEWS') ?></a>
                                    </td>
                                    <td class="right">
                                        <a href="<?= $this->Html->url(array('controller' => '', 'action' => 'edit/' . $v["PatchNotesList"]["id"], 'admin' => true, 'plugin' => 'patch-notes')) ?>"
                                           class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                                        <a onClick="confirmDel('<?= $this->Html->url(array('controller' => '', 'action' => 'delete/' . $v["PatchNotesList"]["id"], 'admin' => true, 'plugin' => 'patch-notes')) ?>')"
                                           class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
