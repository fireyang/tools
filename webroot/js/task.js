function test(){
    alert("test");
}
$(function(){
    //$("#tasks > table > tbody > tr")
    $(".xtr").bind("mouseenter mouseleave", function(e){
        $(this).toggleClass("xtr_hover");
        //alert("test");
        }).bind("click",function(e){
            //$("#adding").attr("style","");
            //alert("yang");
        });
    $(".taskadd").click(function(e){
        $.ajax({
           type: "POST",
           url: "/tasks/add",
           data: "name=John",
           success: taskadd_success
         });
    })
})

taskadd_success=function(msg){
    alert( "Data Saved: " + msg );
} 
/*$("#tasks > table > tbody > tr").click(function(e){
    //$(this).toggleClass("over");
    alert("test");
    });*/
