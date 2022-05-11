<?php 
    get_header();
     $todos = $wpdb->get_results("SELECT * FROM todos");
    
?>
<script type="text/javascript">
    CONST ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

    <div class="container d-flex flex-column ">
        <div class="row justify-content-center py-5">
            <div class="col-12">
                <h1 class="text-center">Todo List</h1>
            </div>
        </div>

       <div class="row justify-content-center py-5">
           <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="input-container">
                    <input placeholder="New Todo " id="newTodo" type="text" name="new-todo">
                    <button id="addBtn" type=submit>Add</button>
                </div>
           </div>
       </div>
        

       <div class="row justify-content-center">
           <div class="col-sm-12 col-md-10 col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Todo</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($todos as $todo):?>
                            <tr class="<?=$todo->status == 'complate' ? 'complate' : '' ?>">
                                <td><input type="checkbox" class="checkedTodo form-control" data-id="<?=$todo->id?>"  <?=$todo->status == 'complate' ? 'checked' : '' ?>  ></td>
                                <td><?=$todo->todo?></td>
                                <td><?=$todo->date?></td>
                                <td><button class="deleteBtn" data-id="<?=$todo->id?>"><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
           </div>
       </div>
    

    </div>
    
    
    
 

    <?php get_footer(); ?>
 

 