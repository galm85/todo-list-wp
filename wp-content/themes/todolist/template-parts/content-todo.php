
<?php 
    $todos = $wpdb->get_results("SELECT * FROM todos ORDER BY status DESC ,date DESC");
?>
        


       <div class="row justify-content-center">
           <div class="col-sm-12 col-md-10 col-lg-8">
                <table class="<?=$args['table_style']?> border">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="50%">Todo</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($todos as $todo):?>
                            <tr class="<?=$todo->status == 'complate' ? 'complate' : '' ?>">
                                <td><input type="checkbox" class="checkedTodo form-control" data-id="<?=$todo->id?>"  <?=$todo->status == 'complate' ? 'checked' : '' ?>  ></td>
                                <td style="overflow: hidden;"> <?=$todo->todo?></td>
                                <td><?=date('j-m-y', strtotime($todo->date));?></td>
                                <td><button class="deleteBtn btn btn-danger" data-id="<?=$todo->id?>">Delete</button></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
           </div>
       </div>
        
       

    
   