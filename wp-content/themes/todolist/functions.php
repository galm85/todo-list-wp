<?php



    function todo_list_style(){
        wp_enqueue_style('todo_list_bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(),'4.4.1','all');
        wp_enqueue_style('todo_list_fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',array(),'6.1.1','all');
        wp_enqueue_style('todo_list_custom_style',get_template_directory_uri().'/style.css',array(),'1.0','all');
    }

    add_action('wp_enqueue_scripts','todo_list_style');





    function todo_list_scripts(){
        wp_enqueue_script('my-theme-jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js',array(),'3.4.1',true);
        wp_enqueue_script('todo_list_custom_script',get_template_directory_uri()."/assets/js/script.js",array('my-theme-jquery'),'1.0',true);
    }

    add_action('wp_enqueue_scripts','todo_list_scripts');






    // API functions


    function add_new_todo(){
        if(isset($_REQUEST)){
            $new_todo = $_REQUEST['new_todo'];
           global $wpdb;
           $wpdb->show_errors();
           $wpdb->insert('todos',array('todo'=>$new_todo,'status'=>'not complate'));
        }
    }
    
    add_action('wp_ajax_add_new_todo','add_new_todo');



    function delete_todo(){
        if(isset($_REQUEST)){
            $todo_id = $_REQUEST['todo_id'];
           global $wpdb;
           $wpdb->show_errors();
           $wpdb->delete('todos',array('id'=>$todo_id));
        }
    }
    
    add_action('wp_ajax_delete_todo','delete_todo');




    function update_status(){
        if(isset($_REQUEST)){
            $todo_id = $_REQUEST['todo_id'];
            $status = $_REQUEST['status'];

           global $wpdb;
           $wpdb->show_errors();
           $wpdb->update('todos',array('status'=>$status),array('ID'=>$todo_id));
        }
    }
    
    add_action('wp_ajax_update_status','update_status');