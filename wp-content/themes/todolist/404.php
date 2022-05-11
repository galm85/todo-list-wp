<?php 
     get_header();
     $todos = $wpdb->get_results("SELECT * FROM todos");
     $page_setting = get_field('page_setting');
     $input_setting = get_field('input_setting');
     $table_style = get_field('table_style');
?>

<div class="container">
     <div class="row my-5">
          <div class="col-12">
               <h1 class="displat-5 text-primary text-center">404 Page Not Found</h1>
          </div>
     </div>
     <div class="row">
          <div class="col-12">
               <div class="text-center">
                    <a class="btn btn-primary"  href="http://localhost/todo-list" >back</a>
               </div>
          </div>
     </div>


</div>



<?php get_footer(); ?>