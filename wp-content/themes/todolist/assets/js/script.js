


// add New Task

$('#addBtn').on('click',function(e){
    e.preventDefault();

    let newTodo = $('#newTodo').val();
    if(newTodo != ''){

        
        $.ajax({
            type:'POST',
            url:'./wp-admin/admin-ajax.php',
            data:{'action':'add_new_todo','new_todo':newTodo},
            success:function(response){
                location.reload();
            }
        })
    }

})




// delete task
$('.deleteBtn').on('click',function(){

    let id = $(this).data('id');

    $.ajax({
        type:'POST',
        url:'./wp-admin/admin-ajax.php',
        data:{'action':'delete_todo','todo_id':id},
        success:function(response){
             location.reload();      
        }
    })

})



// update todo status
$('.checkedTodo').change(function(){
    
    let id = $(this).data('id');
    let checked = $(this).is(':checked') ? 'complate' : 'not-complate';
    
    $.ajax({
        type:'POST',
        url:'./wp-admin/admin-ajax.php',
        data:{'action':'update_status','todo_id':id,'status':checked},
        success:function(response){
            location.reload();
            
        }
    })
 
 
})