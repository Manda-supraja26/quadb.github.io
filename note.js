function autoSave(){
    var notes_desc = document.getElementById('notes_desc').value;
    if(notes_desc!="")
    {
        $.ajax({
            url:'notes_save.php',
            method:"post",
            data:{notes_desc : notes_desc},
            success:function(response)
            {
                if(response!='')
					{
					document.getElementById('notes_id').value=response;	
					}
					document.getElementById('autoSaveText').innerHTML="Notes  Saved.";

            }
        });
    }

}
setInterval(function(){
    autoSave();
},10000);

setInterval(function(){
    document.getElementById('autoSaveText').innerHTML="";
},8000);
