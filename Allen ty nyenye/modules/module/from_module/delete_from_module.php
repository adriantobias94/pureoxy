<?php
//****************************************************************************************
//Generated by Cobalt, a rapid application development framework. http://cobalt.jvroig.com
//Cobalt developed by JV Roig (jvroig@jvroig.com)
//****************************************************************************************
require 'path.php';
init_cobalt('Delete from module');

if(isset($_GET['id']))
{
    $id = urldecode($_GET['id']);
    require_once 'form_data_from_module.php';
}

if(xsrf_guard())
{
    init_var($_POST['btn_cancel']);
    init_var($_POST['btn_delete']);
    require 'components/query_string_standard.php';

    if($_POST['btn_cancel'])
    {
        log_action('Pressed cancel button');
        redirect("listview_from_module.php?$query_string");
    }

    elseif($_POST['btn_delete'])
    {
        log_action('Pressed delete button');
        require_once 'subclasses/from_module.php';
        $dbh_from_module = new from_module;

        $object_name = 'dbh_from_module';
        require 'components/create_form_data.php';


        $dbh_from_module->delete($arr_form_data);

        redirect("listview_from_module.php?$query_string");
    }
}
require 'subclasses/from_module_html.php';
$html = new from_module_html;
$html->draw_header('Delete %%', $message, $message_type);
$html->draw_listview_referrer_info($filter_field_used, $filter_used, $page_from, $filter_sort_asc, $filter_sort_desc);

$html->draw_hidden('id');

$html->detail_view = TRUE;
$html->draw_controls('delete');

$html->draw_footer();