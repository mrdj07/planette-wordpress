<?php /* Loop Name: Portfolio 2 */ ?>
<?php // Theme Options vars
$items_count = of_get_option('items_count2');
$cols = '2cols';

if(file_exists(CHILD_DIR . '/produit-loop.php')){
	require_once CHILD_DIR . '/produit-loop.php';
}else{
	require_once PARENT_DIR . '/produit-loop.php';
}