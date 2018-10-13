function generateElements2(id){
//    window.alert(id);
    var currentId1 = (parseInt(id)-1);
    $("#add-achievements").append("<div class='form-group row' id='item1"+id+"'><div class='col-md-4'><label style='display:block'>Achievements</label><input type='text' placeholder='Your Achievement'></div><div class='col-md-4'><label>Achievement Description</label><input type='text' placeholder='Description'></div><div id='item1"+id+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements2('"+(parseInt(id)+1)+"')\"><i class='fa fa-plus'></i></button></div><div  id='item1"+id+"_remove_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-danger btn-sm' onclick =\"removeElement2('"+id+"')\"><i class='fa fa-trash'></i></button></div></div>");
    $("#item1"+currentId1+"_add_button").remove();
    $("#item1"+currentId1+"_remove_button").remove();
    
}

function removeElement2(id){
    //window.alert(id);
    $("#item1"+id).remove();
    var previousId1 = parseInt(id)-1;
//    window.alert(previousId1);
    if(previousId1!=1)
        $("#item1"+previousId1).append("<div id='item1"+previousId1+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements('"+id+"')\"><i class='fa fa-plus'></i></button></div><div  id='item1"+previousId1+"_remove_button'='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-danger btn-sm' onclick =\"removeElement2('"+previousId1+"')\"><i class='fa fa-trash'></i></button></div>");
    else
        $("#item1"+previousId1).append("<div id='item1"+previousId1+"_add_button' class='col-md-2'><label for='' style='display:block'>&nbsp;</label><button type='button'  class='btn btn-primary btn-sm' onclick =\"generateElements('"+id+"')\"><i class='fa fa-plus'></i></button></div>");
}