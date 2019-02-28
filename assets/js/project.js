/*******************************Request Item.js File******************************/
function generateElements(id){
//    window.alert(id);
    var currentId = (parseInt(id)-1);
    $("#add-project").append("<div class='form-group row' id='item"+id+"'><div class='col-md-4'><label style='display:block'>Project Name</label><input type='text' placeholder='Name of the project' name='project_name"+id+"'></div><div class='col-md-4'><label>Project Description</label><input type='text' placeholder='Description' name='project_description"+id+"'></div><div id='item"+id+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements('"+(parseInt(id)+1)+"')\"><i class='fa fa-plus'></i></button></div><div  id='item"+id+"_remove_button'='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-danger btn-sm' onclick =\"removeElement('"+id+"')\"><i class='fa fa-trash'></i></button></div></div>");
    $("#item"+currentId+"_add_button").remove();
    $("#item"+currentId+"_remove_button").remove();
    
}

function removeElement(id){
    //window.alert(id);
    $("#item"+id).remove();
    var previousId = parseInt(id)-1;
//    window.alert(previousId);
    if(previousId!=1)
        $("#item"+previousId).append("<div id='item"+previousId+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements('"+id+"')\"><i class='fa fa-plus'></i></button></div><div  id='item"+previousId+"_remove_button'='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-danger btn-sm' onclick =\"removeElement('"+previousId+"')\"><i class='fa fa-trash'></i></button></div>");
    else
        $("#item"+previousId).append("<div id='item"+previousId+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements('"+id+"')\"><i class='fa fa-plus'></i></button></div>");
}



/**********************************File UPload Js ****************************/



