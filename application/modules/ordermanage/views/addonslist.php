<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="card">
            <div class="card-header">
                <h4><?php echo display('addons_list') ?></h4>
                

            </div>
            <div class="card-body">
                <table width="100%" id="exdatatable" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('addons_name') ?></th>
                            <th><?php echo display('price') ?></th>
                            <th><?php echo display('status') ?></th>
                            <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($addonslist)) { ?>
                        <?php $sl = $pagenum+1; ?>
                        <?php foreach ($addonslist as $addons) { ?>
                        <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                            <td><?php echo $sl; ?></td>
                            <td><?php echo $addons->add_on_name; ?></td>
                            <td><?php if($currency->position==1){echo $currency->curr_icon;}?>
                                <?php echo $addons->price; ?>
                                <?php if($currency->position==2){echo $currency->curr_icon;}?></td>
                            <td><?php if($addons->is_active==1){echo "Active";}else{echo "Inactive";} ?></td>
                            <td class="center">
                                <?php if($this->permission->method('ordermanage','update')->access()): ?>
                                <a href="<?php echo base_url("ordermanage/menu_addons/create/$addons->add_on_id") ?>"
                                    class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left"
                                    title="Update"><i class="ti-pencil-alt text-white" aria-hidden="true"></i></a>
                                <?php endif; 
										 if($this->permission->method('ordermanage','delete')->access()): ?>
                                <a href="<?php echo base_url("ordermanage/menu_addons/delete/$addons->add_on_id") ?>"
                                    onclick="return confirm('<?php echo display('are_you_sure') ?>')"
                                    class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right"
                                    title="Delete "><i class="ti-trash" aria-hidden="true"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php $sl++; ?>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table> <!-- /.table-responsive -->
                <div class="text-right"></div>
            </div>
        </div>
    </div>
</div>