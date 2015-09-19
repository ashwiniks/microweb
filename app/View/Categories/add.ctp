
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>  <?php echo $this->Session->Flash(); ?></tr>
    <tr><?php echo $this->Form->create('',array('action'=>'add')); ?></tr>
    <tr><td>Parent Category</td><td><?php echo $this->Form->input('parent_id',array('label'=>false)); ?> </td></tr>
    <tr><td>Project Name</td><td><?php echo $this->Form->input('projectname',array('label'=>false)); ?></td></tr>   
    <tr><td><?php echo $this->Form->end('add'); ?></td></tr>
</table> 
<?php //echo $this->element('sql_dump'); ?>


<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <th><?php  echo $this->Paginator->sort('id','project Id');?></th> 
    <th><?php  echo $this->Paginator->sort('Category','Category');?></th> <th>Edit</th> <th>Delete</th>
    <?php foreach($data as $data){ ?>
    <tr><td><?=$data['Category']['id']?></td><td><?=$data['Category']['projectname']?></td><td><?php
     echo $this->Html->link(__('Edit'),array('action' =>'edit',$data['Category']['id']));
      ?></td>
        <td><?php echo $this->Html->link(__('Delete'), array('action' => 'delete',$data['Category']['id']),
                array('confirm' => 'Are you sure you wish to delete ?')); ?></td></tr>
    <?php } ?>
    <tr><td><?php echo $this->Paginator->prev(); ?>
        <?php echo $this->Paginator->counter(); ?>
        <?php echo $this->Paginator->next(); ?></td></tr>
</table>