$(document).ready(function(){
    // var settings = {
    //     "url": "localhost:3000/api/v1/vendors/view-meals",
    //     "method": "GET",
    //     "timeout": 0,
    // };
      
    // $.ajax(settings).done(function (response) {
    //     console.log(response);
    // });

    $.ajax({
        // url:"https://unboxng.herokuapp.com",
        url:"https://sharp-foodie-backend.herokuapp.com/",
        method:"GET",
        async:false,
        success:function(data){ 
            console.log(data);
        },       
    });



    
    $(".pay_to_order").click(function(){
        
    })
})