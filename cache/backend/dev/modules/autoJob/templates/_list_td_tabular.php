<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $jobeet_job->getstrtoupper('c')ompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo link_to($jobeet_job->getstrtoupper('p')osition(), 'jobeet_job_edit', $jobeet_job) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $jobeet_job->getstrtoupper('l')ocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $jobeet_job->getstrtoupper('u')rl() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('job/list_field_boolean', array('value' => $jobeet_job->getstrtoupper('i')sstrtoupper('a')ctivated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $jobeet_job->getstrtoupper('e')mail() ?>
</td>
