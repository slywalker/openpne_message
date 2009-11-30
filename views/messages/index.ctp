<div class="messages index">
<h2><?php __('Messages');?></h2>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort(__('Member To', true), 'c_member_id_to');?></th>
	<th><?php echo $this->Paginator->sort(__('Member From', true), 'c_member_id_from');?></th>
	<th><?php echo $this->Paginator->sort(__('R Datetime', true), 'r_datetime');?></th>
	<th><?php echo $this->Paginator->sort(__('Subject', true), 'subject');?></th>
	<th><?php echo $this->Paginator->sort(__('Body', true), 'body');?></th>
</tr>
<?php
$i = 0;
foreach ($messages as $message):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo h($message['MemberTo']['nickname']); ?>
		</td>
		<td>
			<?php echo h($message['MemberFrom']['nickname']); ?>
		</td>
		<td>
			<nobr><?php echo $this->Time->format('m/d H:i', $message['Message']['r_datetime']); ?></nobr>
		</td>
		<td style="text-align:left;">
			<?php echo h($message['Message']['subject']); ?>
		</td>
		<td style="text-align:left;">
			<?php echo h($message['Message']['body']); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
