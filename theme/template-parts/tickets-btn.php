<?php
$tickets=get_post_custom_values('tickets');
if(is_array($tickets) && $tickets=$tickets[0]):?>
<div class="tickets">
    <a href="<?=$tickets?>" class="btn btn-primary" target="_blank">Билеты</a>
</div>
<?php endif;