$(document).ready(function() {
    //Disable the Remove Button
    var rowCount = $('table >tbody:last >tr').length;
    if(rowCount == 1) {
        document.getElementsByClassName('btn-remove')[0].disabled = true;
    }
    
    $(document).on('click', '.btn-add', function(e) {
        e.preventDefault();
        
        var controlForm = $('table');
        var currentEntry = $('table>tbody>tr:last');
        var newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');                                         //Remove the Data - as it is cloned from the above
        
        //Add the button  
        var rowCount = $('table >tbody:last >tr').length;
        if(rowCount > 1) {
            var removeButtons = document.getElementsByClassName('btn-remove');
            for(var i = 0; i < removeButtons.length; i++) {
                removeButtons.item(i).disabled = false;
            }
        }
         
    }).on('click', '.btn-remove', function(e) {
        $(this).parents('tr:first').remove();
        
        //Disable the Remove Button
        var rowCount = $('table >tbody:last >tr').length;
        if(rowCount == 1) {
            document.getElementsByClassName('btn-remove')[0].disabled = true;
        }

        e.preventDefault();
        return false;
    });

// -- Start File Upload -- //
    $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });

    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    }); 
// -- END File Upload -- //
});

