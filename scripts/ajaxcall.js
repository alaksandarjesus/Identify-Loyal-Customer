$(document).ready(function(){
    
    var finalurl = $(location).attr("href");
    var filename = finalurl.substr(finalurl.lastIndexOf('/') + 1);
    var url = filename.split('.');
    $.ajax({
    type: 'post',
    url: "../assets/api/api.updateloyal.php",
    data: JSON.stringify( { page: url[0] } )
});

});



