<?php
/**
 *  Message
 * 
 * @package openpne_message
 * @author Yasuo Harada
 * @version $Id$
 * @copyright SLYWALKER Co,.Ltd.
 **/
class Message extends AppModel {
	public $name = 'Message';
	public $useTable = 'c_message';
	public $primaryKey = 'c_message_id';

	public $belongsTo = array(
		'MemberTo' => array(
			'className' => 'Member',
			'foreignKey' => 'c_member_id_to',
		),
		'MemberFrom' => array(
			'className' => 'Member',
			'foreignKey' => 'c_member_id_from',
		),
	);
}
?>