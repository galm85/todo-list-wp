<?php 
     get_header();
     $todos = $wpdb->get_results("SELECT * FROM todos");
     $page_setting = get_field('page_setting');
     $input_setting = get_field('input_setting');
     $table_style = get_field('table_style');
?>

    <div style="background-color: <?=$page_setting['background_color']?>; width:100%;height: 100vh;"  >
        
    
        <div class="container d-flex flex-column">
            <div class="row justify-content-center py-5">
                <div class="col-12">
                    <h1 class="text-center page-title" 
                        style="color:<?=$page_setting['title_color']?>;font-size:<?=$page_setting['title_font_size']?>px;font-weight: <?=$page_setting['title_font_weight']?>;"> 
                    <?=$page_setting['page_title']?>
                </h1>
            </div>
        </div>

       <div class="row justify-content-center py-5">
           <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="input-container">
                    <input placeholder="<?=$input_setting['input_place_holder']?>" id="newTodo" type="text" name="new-todo" style="background:<?=$input_setting['input_background_color']?>;color:<?=$input_setting['input_text_color']?>" >
                    <button id="addBtn" type=submit style="color:<?=$input_setting['button_text_color']?>;background-color:<?=$input_setting['button_color']?>"> <?=$input_setting['button_label']?> </button>
                </div>
           </div>
       </div>

        <?php if($todos){
            get_template_part('template-parts/content','todo',array('table_style'=>$table_style)); 
      
        }else{
            echo "<h2 class='text-center'><i>No Todos Yet...</i></h2>";
        }

   ?>
</div>
</div>
    <?php get_footer(); ?>