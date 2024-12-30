$("#addNew").click(function(){

$("#studentModal").modal("show");

})

$("#studentForm").submit(function(event){

    event.preventDefault();


    let form_data = new FormData($("#studentForm")[0]);

    form_data.append("action","registerStudent");

    //method
    //dataType
    // url

    $.ajax( {

              method: "POST",
              dataType: "JSON",
              url : "api.php",
              data : form_data,
              processData : false,
              contentType: false,
              success : function(data){

               let status = data.status;
               let response = data.data;

                $("#studentForm")[0].reset(); // tir tira data
                
               alert(response)
              },
              error : function(data){

                console.log(data);

              }

    })
})