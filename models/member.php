<?php
/**
 *  Member
 * 
 * @package openpne_message
 * @author Yasuo Harada
 * @version $Id$
 * @copyright SLYWALKER Co,.Ltd.
 **/
class Member extends AppModel {
	public $name = 'Member';
	public $useTable = 'c_member';
	public $primaryKey = 'c_member_id';

	public $hasMany = array(
		'MessageTo' => array(
			'className' => 'Message',
			'foreignKey' => 'c_member_id_to',
		),
		'MessageFrom' => array(
			'className' => 'Message',
			'foreignKey' => 'c_member_id_from',
		),
	);
}
?>