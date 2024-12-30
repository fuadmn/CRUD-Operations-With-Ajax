loadData();

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


function loadData() {

  let sendingData = {
    "action" : "readAll"
  }

  $.ajax({
        method: "POST",
        dataType : "JSON",
        url : "api.php",
        data : sendingData,
        success : function(data){

          let status = data.status;
          let response = data.data;

          let html = '';
          let tr = '';

          if(status){

            response.forEach( item =>{
               tr += "<tr>";
              for(let i in item){

                // console.log("This is ", i);
                // console.log("This is ", item);
                
                tr += `<td>${item[i]}</td>`;
                 

              }
   
              tr += `<td> <a class="btn btn-info update_info" update_id=${item['id']}> <i class="fas fa-edit delete-info" delete_id=${item['id']}></i> </a> &nbsp;&nbsp;<a class="btn btn-danger"><i class="fas fa-trash"></a></td>`
              tr += "</tr>"
                       
            })
          
            $("#studentTable tbody").append(tr);
            
          }

        },
        error : function(data){

        }

  })
}