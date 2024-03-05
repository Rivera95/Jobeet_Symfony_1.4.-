<td class="sf_admin_text sf_admin_list_td_username">
  <?php echo link_to($sf_guard_user->getUsername(), 'sf_guard_user_edit', $sf_guard_user) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($sf_guard_user->getCreated_at()) ? format_date($sf_guard_user->getCreated_at(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($sf_guard_user->getUpdated_at()) ? format_date($sf_guard_user->getUpdated_at(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_last_login">
  <?php echo false !== strtotime($sf_guard_user->getLast_login()) ? format_date($sf_guard_user->getLast_login(), "f") : '&nbsp;' ?>
</td>
