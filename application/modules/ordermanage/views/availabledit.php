<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">

                    <?php echo form_open('ordermanage/item_food/availablecreate') ?>
                   	<?php echo form_hidden('availableID', (!empty($intinfo->availableID)?$intinfo->availableID:null)) ?>
                        <div class="form-group row">
                        <label for="itemname" class="col-sm-3 col-form-label"><?php echo display('item_name') ?><span class="text-danger">*</span></label>
                        <div class="col-sm-8 customesl">
                        <?php 
						if(empty($itemdropdown)){$itemdropdown = array('' => '--Select--');}
						echo form_dropdown('foodid',$itemdropdown,(!empty($intinfo->foodid)?$intinfo->foodid:null),'class="form-control"') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="availday" class="col-sm-3 col-form-label"><?php echo display('available_day') ?> <span class="text-danger">*</span><a class="cattooltips" data-toggle="tooltip" data-placement="top" title="Use Day Name Like:Saturday,Sunday....."><i class="fa fa-question-circle" aria-hidden="true"></i></a> </label>
                            <div class="col-sm-8 customesl">
                            	<select name="availday" class="form-control" id="availday">
                                <option value=""  selected="selected"><?php echo display('select_option') ?></option>
                                <option value="Saturday" <?php if($intinfo->availday=="Saturday"){ echo "selected";}?>><?php echo display('saturday') ?></option>
                                <option value="Sunday" <?php if($intinfo->availday=="Sunday"){ echo "selected";}?>><?php echo display('sunday') ?></option>
                                <option value="Monday" <?php if($intinfo->availday=="Monday"){ echo "selected";}?>><?php echo display('monday') ?></option>
                                <option value="Tuesday" <?php if($intinfo->availday=="Tuesday"){ echo "selected";}?>><?php echo display('tuesday') ?></option>
                                <option value="Wednesday" <?php if($intinfo->availday=="Wednesday"){ echo "selected";}?><?php echo display('wednesday') ?>></option>
                                <option value="Thursday" <?php if($intinfo->availday=="Thursday"){ echo "selected";}?>><?php echo display('thursday') ?></option>
                                <option value="Friday" <?php if($intinfo->availday=="Friday"){ echo "selected";}?>><?php echo display('friday') ?></option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                        <?php if(!empty($intinfo->availtime)){
							$workingtime = $intinfo->availtime;
							$availtime=explode('-',$workingtime);
							$availtimefrom = $availtime[0];
							$availtimeto = $availtime[1];
							}
							else{
								$availtimefrom = "";
							    $availtimeto = "";
								}
							?>
                            <label for="availtime" class="col-sm-3 col-form-label"><?php echo "From Time:" ?> <span class="text-danger">*</span><a class="cattooltips" data-toggle="tooltip" data-placement="top" title="Use Time Like:2:00,10:00"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                            <div class="col-sm-3 availabledit_padding_right">
                                <input name="fromtime" class="form-control timepicker3" type="text" placeholder="<?php echo display('from_time') ?>" id="fromtime" value="<?php echo $availtimefrom;?>" readonly="readonly"> 
                            </div>
                            <label for="availtime" class="col-sm-2 col-form-label"><?php echo "To Time:" ?> </label>
                            <div class="col-sm-3">
                                <input name="totime" class="form-control timepicker3" type="text" placeholder="<?php echo display('to_time') ?>" id="totime" value="<?php echo $availtimeto;?>" readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <label for="lastname" class="col-sm-3 col-form-label"><?php echo display('status') ?></label>
                        <div class="col-sm-8">
                            <select name="status"  class="form-control">
                                <option value=""  selected="selected"><?php echo display('select_option') ?></option>
                                <option value="1" <?php if(!empty($intinfo)){if($intinfo->is_active==1){echo "Selected";}} else{echo "Selected";} ?>><?php echo display('active');?></option>
                                <option value="0" <?php if(!empty($intinfo)){if($intinfo->is_active==0){echo "Selected";}} ?>><?php echo display('inactive');?></option>
                              </select>
                        </div>
                    </div>
                        <div class="form-group text-right">
                        	<div class="col-sm-11 availabledit_padding_right" >
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                            </div>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>