<?php
$installer = $this;
$installer->startSetup();

$installer->getConnection()
	->addColumn( $installer->getTable('bannerdetail'), 'slide_img_mobile', array( 'type' => Varien_Db_Ddl_Table::TYPE_TEXT, 256, 
		'nullable'  => false, 'comment' => 'Slide Image Mobile'));

$installer->endSetup();
?>