<?php /* $Id$ $URL$ */
if (!defined('W2P_BASE_DIR')) {
	die('You should not access this file directly.');
}

/**
 * files Class
 */
class files extends smartsearch {
	var $table = 'files';
	var $table_module = 'files';
	var $table_key = 'file_id';
	var $table_link = 'index.php?m=files&a=addedit&file_id=';
	var $table_title = 'Files';
	var $table_orderby = 'file_name';
	var $search_fields = array('file_name', 'file_description', 'file_type', 'file_version', 'file_co_reason');
	var $display_fields = array('file_name', 'file_description', 'file_type', 'file_version', 'file_co_reason');
	var $follow_up_link = 'fileviewer.php?file_id=';

	function cfiles() {
		return new files();
	}
}
?>