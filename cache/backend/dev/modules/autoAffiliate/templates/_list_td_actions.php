<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_activate">
      <?php echo link_to(__('Activate', array(), 'messages'), 'affiliate/activate?id='.$jobeet_affiliate->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_deactivate">
      <?php echo link_to(__('Deactivate', array(), 'messages'), 'affiliate/Deactivate?id='.$jobeet_affiliate->getId(), array()) ?>
    </li>
  </ul>
</td>
