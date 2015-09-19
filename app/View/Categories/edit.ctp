<?php //print_r($category); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>  <?php echo $this->Session->Flash(); ?></tr>
    <tr><?php echo $this->Form->create('',array('action'=>'edit')); ?></tr>
    <tr><td>Parent Category</td><td><?php echo $this->Form->input('parent_id',array('label'=>false)); ?> </td></tr>
    <tr><td>Project Name</td><td><?php echo $this->Form->input('projectname',array('label'=>false)); ?></td></tr>   
    <tr><td><?php echo $this->Form->end('add'); ?></td></tr>
</table> 
<?php //echo $this->element('sql_dump'); ?>

