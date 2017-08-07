<?php
  $ecpm_ddc_leave_days = get_option('ecpm_ddc_leave_days');
  $ecpm_ddc_record_threshold = get_option('ecpm_ddc_record_threshold');
  $ecpm_ddc_freq = get_option('ecpm_ddc_freq');
  
  $ecpm_ddc_move_back_data = get_option('ecpm_ddc_move_back_data');
  $ecpm_ddc_remove_data = get_option('ecpm_ddc_remove_data');

?>
<form id='ddcsettingform' method="post" action="">    
  <table width="100%" cellspacing="0" cellpadding="10" border="0">
	<tr>
		<th align="left">
			<label for="ecpm_ddc_leave_days"><?php echo _e('Move records older then (in days):', ECPM_DDC); ?></label>
		</th>
		<td>
			<Input type='text' size='3' Name ='ecpm_ddc_leave_days' value='<?php echo $ecpm_ddc_leave_days;?>'>
	        <span class="description"><?php _e( 'Specify how long to keep couters in core table.' , ECPM_DDC ); ?></span>
		</td>
	</tr>
	
	<tr>
		<th align="left">
			<label for="ecpm_ddc_record_threshold"><?php echo _e('Record threshold:', ECPM_DDC); ?></label>
		</th>
		<td>
			<Input type='text' size='5' Name ='ecpm_ddc_record_threshold' value='<?php echo $ecpm_ddc_record_threshold;?>'>
	        <span class="description"><?php _e( 'Minimun number of days to leave in core table.' , ECPM_DDC ); ?></span>
		</td>
	</tr>
	
	<tr>
      <th align="left">
		<label for="ecpm_ddc_freq"><?php echo _e('Run this script:', ECPM_DDC); ?></label>
	  </th>
      <td align="left">
        <?php if ( ddc_is_pro() ) { ?>
	        <select name="ecpm_ddc_freq">
	          <option value="manual" <?php echo ($ecpm_ddc_freq == 'manual' ? 'selected':'') ;?>><?php _e('Manually', ECPM_DDC);?></option>
	          <option value="daily" <?php echo ($ecpm_ddc_freq == 'daily' ? 'selected':'') ;?>><?php _e('Auto', ECPM_DDC);?></option>
	        </select>
        <?php 
  	    } else { 
	      echo _e('Manually', ECPM_DDC);
	    } 
	    ?>
      </td>
    </tr>
    
    <tr><td colspan="2"><hr></td></tr>
    
    <tr>
		<th align="left">
			<label><u><?php echo _e('Plugin uninstall', ECPM_DDC ); ?></u></label>
		</th>
		<td>
		</td>
	</tr>
    
    <tr>
		<th align="left">
			<label for="ecpm_ddc_move_back_data"><?php echo _e('Put data back', ECPM_DDC); ?></label>
		</th>
		<td>
			<Input type='checkbox' Name='ecpm_ddc_move_back_data' <?php echo ($ecpm_ddc_move_back_data == 'on' ? 'checked':'') ;?> >
	        <span class="description"><?php _e( 'Would you like to put counters back to core table on unistall?' , ECPM_DDC ); ?></span>
		</td>
	</tr>
	
	<tr>
		<th align="left">
			<label for="ecpm_ddc_remove_data"><?php echo _e('Remove all plugin settings and tables', ECPM_DDC); ?></label>
		</th>
		<td>
			<Input type='checkbox' Name='ecpm_ddc_remove_data' <?php echo ($ecpm_ddc_remove_data == 'on' ? 'checked':'') ;?> >
	        <span class="description"><?php _e( 'Would you like to remove all plugin settings after uninstall?' , ECPM_DDC ); ?></span>
		</td>
	</tr>
  </table>
  
  <hr>
  <p>  
    <input type="submit" id="ecpm_ddc_submit" name="ecpm_ddc_submit" class="button-primary" value="<?php _e('Save settings', ECPM_DDC); ?>" />
  </p>
</form>