<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a store module for PyroCMS
 *
 * @author 		pyrocms-store Team - Jaap Jolman - Kevin Meier - Rudolph Arthur Hernandez - Gary Hussey
 * @website		http://www.odin-ict.nl/
 * @package 	pyrocms-store
 * @subpackage 	Store Module
**/
?>

    <section class="title">
        <h4><?php echo lang('store_cat_add_label');?></h4>
    </section>

<section class="item">
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>
	<div>
		<ol>
			<li class="<?php echo alternator('even', ''); ?>">
				<?php echo lang('store_cat_add_name','name'); ?>
				<?php echo form_input('name',set_value('name',''),'class="text" maxlength="50"'); ?>
				<span class="required-icon tooltip"><?php echo lang('required_label');?></span>
            </li>
            <li class="<?php echo alternator('even', ''); ?>">
                <?php echo lang('store_cat_add_html','html'); ?>
                <span class="required-icon tooltip"><?php echo lang('required_label');?></span>
                <?php echo form_textarea('html',set_value('html',''),'class="wysiwyg-simple" maxlength="1000"'); ?>

            </li>
            
            <li class="<?php echo alternator('even', ''); ?>">
                <?php echo lang('store_cat_add_parent_id','parent_id'); ?>
                <?php echo form_dropdown('parent_id',$categories,'class="text" maxlength="10"'); ?>
                
            </li>
            <li class="<?php echo alternator('even', ''); ?>">
                <?php echo lang('store_cat_add_images_id','images_id'); ?>
					 <?php echo form_upload('userfile'); ?>
                
            </li>

        </ol>
        <div class="buttons float-right padding-top">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
        </div>
    </div>
	<?php echo form_close(); ?>
</section>