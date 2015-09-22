<?php echo $this->Html->script('jquery.min'); ?>
<script type="text/javascript">

    $('document').ready(function () {

        $("#com").hide();
         $("#websitesIbulderName").hide();

    });
    function toggleSelect(id)
    {
        if (id == 'Commercial')
        {
            $("#com").show();
            $("#res").hide();

        }

        if (id == 'Residential')
        {
            $("#com").hide();
            $("#res").show();

        }
    }
       $(document).on("change","#websitesBuilderName",function(){
     if( $(this).find("option:selected").text()== 'others' )
     {
         
          $("#websitesIbulderName").show();
     }
     else
     {
         $("#websitesIbulderName").hide();
     }
   });
</script>

<div id="content" class="box">
    
			<!-- Form -->
			<h3 class="tit">Create Microsite</h3>
			<fieldset>
                            <p><?php echo $this->Session->Flash(); ?></p>				
<?php echo $this->Form->Create('Website',array('action'=>'create','type'=>'file'));  ?>
				
				
 <fieldset>
 <legend>Project Category</legend>
 
 <!--<input type='radio' name='proj_category' value='Residential' onclick="toggleSelect('Residential');" checked="checked" />
 <label for='reg'>Residential</label>

<input type='radio' name='proj_category' value='Commercial' onclick="toggleSelect('Commercial');" />
<label for='com'>Commercial</label>
 -->
<?php $options = array('Residential' => 'Residential', 'Commercial' => 'Commercial');
$attributes = array('legend' => false,'value'=>'Residential','onclick'=>'toggleSelect(this.value)');
echo $this->Form->radio('project_category', $options, $attributes); ?>

<br />
<?php echo $this->Form->input('residential',array('options'=>$residential,'label'=>false,'id'=>'res')); ?>
<?php echo $this->Form->input('commercial',array('options'=>$commercial,'label'=>false,'id'=>'com')); ?>

     
 </fieldset>
      <table class="table table-striped table-bordered table-hover">                  
             
<tr>
<td width="100" style="width:120px;">Builder Name:</td>
<td width="467"> <?php echo $this->Form->input('builder_name',array('options'=>$builder,'label'=>false)); ?>                                                        
	</td>
        <td width="467"> <?php echo $this->Form->input('ibulder_name',array('label'=>false,'display'=>'none')); ?>                                                        
	</td>
	</tr>
	<tr>
						<td>Project Name:</td>
						<td>
                                                <?php echo $this->Form->input('project_name',array('id'=>'mpn','label'=>false));  ?>
                                    
                                                </td>
	</tr>
			
	<tr>
			<td colspan="3" class="t-center"><?php echo $this->Form->end('create'); ?>
            </td>
	</tr>	builder

	</table>
		
                        </fieldset></div>