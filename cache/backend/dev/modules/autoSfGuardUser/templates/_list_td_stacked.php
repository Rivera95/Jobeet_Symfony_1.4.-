<td colspan="4">
    <?php echo __('%%username%% - %%created_at%% - %%updated_at%% - %%last_login%%', array(
        '%%username%%' => link_to(strtoupper($sf_guard_user->getUsername()), 'sf_guard_user_edit', $sf_guard_user),
        '%%created_at%%' => false !== strtotime($sf_guard_user->getCreatedAt()) ? format_date($sf_guard_user->getCreatedAt(), "f") : '&nbsp;',
        '%%updated_at%%' => false !== strtotime($sf_guard_user->getUpdatedAt()) ? format_date($sf_guard_user->getUpdatedAt(), "f") : '&nbsp;',
        '%%last_login%%' => false !== strtotime($sf_guard_user->getLastLogin()) ? format_date($sf_guard_user->getLastLogin(), "f") : '&nbsp;'
    ), 'messages') ?>
</td>
