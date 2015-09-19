<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>  <?php echo $this->Session->Flash(); ?></tr>
    <tr><?php echo $this->Form->create('',array('action'=>'add')); ?></tr>
    <tr><td>Builder Name</td><td><?php echo $this->Form->input('builder_name',array('label'=>false)); ?></td></tr>   
    <tr><td><?php echo $this->Form->end('add'); ?></td></tr>
</table> 


<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <th><?php echo $this->Paginator->sort('id','ID'); ?></th>
    <th><?php echo $this->Paginator->sort('builder_name','Builder Name'); ?></th>
    <th>EDIT</th><th>DELETE</th>
    <?php // print_r($builder);
    
 foreach ($builder as $builder )
 { ?>
    <tr><td><?php echo $builder['Builder']['id'] ?></td>
        <td><?php echo $builder['Builder']['builder_name'] ?></td>
        <td><?php echo $this->Html->link('Edit',array('action'=>'edit',$builder['Builder']['id'])); ?></td>
        <td><?php echo $this->Html->link('Delete',array('action'=>'delete',$builder['Builder']['id'])); ?></td></tr>
 <?php } ?>
    <tr><?php echo $this->Paginator->prev(); ?>
        <?php echo $this->Paginator->counter(); ?>
        <?php echo $this->Paginator->next(); ?></tr>
</table>