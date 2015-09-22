<?php print_r($websites); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example"">
                <tr>              
                <th>Microsite Id</th>
                <th>Builder Name</th>
                <th>Mircosite Name</th>
                 <th>Status</th>
                 <th>Add Details</th>
                 
				 <th>View Offline</th>
				 
                </tr>
    <?php foreach($websites as $websites){ ?>            
                <tr>
<td><?=$websites['Website']['id']; ?></td> <td><?=$websites['Website']['builder_name']; ?></td>
<td><?=$websites['Website']['project_name']; ?></td> 

<?php if(!$websites['Website']['status']){ ?>
<td><button title="click here for enable" class="btn btn-danger" type="button">Disable</button></td> <?php }else { ?>
<td><button title="click here for disable" class="btn btn-success" type="button">Enable</button></td><?php  } ?>
<td><button class="btn btn-primary" type="button">Add Details</button></td>
 <td><button class="btn btn-primary" type="button">View Offline</button></td>
                 </tr>
                 <?php } ?>
</table>
