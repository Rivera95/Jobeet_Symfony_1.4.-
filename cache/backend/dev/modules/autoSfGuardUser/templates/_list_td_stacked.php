<td colspan="4">
  <?php echo __('%%username%% - %%created_at%% - %%updated_at%% - %%last_login%%', array('%%username%%' => link_to($sf_guard_user->getstrtoupper('u')sername(), 'sf_guard_user_edit', $sf_guard_user), '%%created_at%%' => false !== strtotime($sf_guard_user->getstrtoupper('c')reatedstrtoupper('a')t()) ? format_date($sf_guard_user->getstrtoupper('c')reatedstrtoupper('a')t(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($sf_guard_user->getstrtoupper('u')pdatedstrtoupper('a')t()) ? format_date($sf_guard_user->getstrtoupper('u')pdatedstrtoupper('a')t(), "f") : '&nbsp;', '%%last_login%%' => false !== strtotime($sf_guard_user->getstrtoupper('l')aststrtoupper('l')ogin()) ? format_date($sf_guard_user->getstrtoupper('l')aststrtoupper('l')ogin(), "f") : '&nbsp;'), 'messages') ?>
</td>
