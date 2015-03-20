$("#emiCalculator input[type=radio]").click(function(){

if ($(this).val() === 'monthly'){

    $("#tenure").val($("#tenure").val()*12);

}

else{
       $("#tenure").val($("#tenure").val()/12);

} 
    calculateEMI();
});

 function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode < 46 || charCode > 57 || charCode == 47)
            return false;

         return true;

      }


function calculateEMI(){
    
    var fields = ['loanamount','percentage','tenure'];
    var calculate = true;
    $(fields).each(function(keys,ids){
        if($("#"+ids).val() ==""){calculate = false;}
    });
   if(calculate){
        var P = $("#loanamount").val();
        var R = $("#percentage").val()/(12*100);
        var N = $("#tenure").val();
       if($("#emiCalculator input[type=radio]:checked").val()=='yearly'){
        N = N*12;
       }
       N = parseInt(N);
       var EMI = (P * R * Math.pow((1+R),N))/(Math.pow((1+R),N)-1);
       var onCompletion = (N*EMI);
       var difference = onCompletion - P;
       $("#emi").text(Math.ceil(EMI));
       $("#interest").text(Math.ceil(difference));
       $("#total").text(Math.ceil(onCompletion));
   
   }

}