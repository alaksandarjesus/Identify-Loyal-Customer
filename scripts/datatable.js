$(document).ready(function() {
    $('#siteusers').dataTable();
} );

$(document).ready(function() {
    $('#pagecount').dataTable();
    $(".options").hide();;
    
} );


$("#showhideoptions").click(function(){

$(".options").toggle(1000);
    
});


$(document).on('click','#hidecolumns li',function(){
    $("#showcolumns").append("<li>"+$(this).text()+"</li>");
    $(this).remove();
    showhidecolumn($(document).find('table').attr('id'),$(this).text());
});

$(document).on('click','#showcolumns li',function(){
    
        $("#hidecolumns").append("<li>"+$(this).text()+"</li>");
        $(this).remove();
        showhidecolumn($(document).find('table').attr('id'),$(this).text());
});


function showhidecolumn(table, headervalue){

   $("#"+table+" tr:eq(0) th").each(function(index,value){
        if($(value).text() == headervalue){
            var columnvalue = $(value).index()+1;
            $('td:nth-child('+columnvalue+'),th:nth-child('+columnvalue+')').toggle(500);
        }
   });
    
};