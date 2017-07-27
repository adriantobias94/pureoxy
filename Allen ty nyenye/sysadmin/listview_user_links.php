<?php
//******************************************************************
//This file was generated by Cobalt, a rapid application development
//framework developed by JV Roig (jvroig@jvroig.com).
//
//Cobalt on the web: http://cobalt.jvroig.com
//******************************************************************
require 'path.php';
init_cobalt('View user links');

$page_title       = 'ListView: %%';
$db_subclass      = 'user_links';
$html_subclass    = 'user_links_html';
$arr_pkey_name = array('link_id');
$results_per_page = LISTVIEW_RESULTS_PER_PAGE;

//user links / passport tags
$add_link         = 'Add user links';
$edit_link        = 'Edit user links';
$delete_link      = 'Delete user links';
$view_link        = 'View user links';

//pages - set to empty if you don't want to include them in the listview
$add_page         = 'add_user_links.php';
$edit_page        = 'edit_user_links.php';
$delete_page      = 'delete_user_links.php';
$view_page        = 'detailview_user_links.php';
$csv_page         = 'csv_user_links.php';
$report_page      = 'reporter_user_links.php';

//Extra entries under operations column (name of include file, not html code)
$operations_extra = '';

//Formatting and alignment options for data columns
$arr_formatting   = array();
$arr_alignment    = array();

require 'components/listview_proc_head.php';
require 'components/listview_proc_html.php';
require 'components/listview_proc_query.php';
require 'components/listview_body_head.php';
require 'components/listview_body_data.php';
require 'components/listview_body_end.php';
