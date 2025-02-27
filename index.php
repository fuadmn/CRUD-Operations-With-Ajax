<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
         
    <div class="col-sn-8">

      <h1 class="fs-3 text-center">Users Info</h1>
     <button class="btn btn-success 1-3" id="addNew">Add New Students</button>
      <table class="table"id="studentTable">

      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
       
      </tbody>
      </table>
    </div>

    <div class="modal" tabindex="-1" id="studentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Users Info </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


       <form id="studentForm">

       <div class="form-group m-2">
        <input type="text" name="id" id="id" class="form-control" placeholder="Enter student Id">
        
       </div>
       <div class="form-group m-2">
       <input type="text" name="name" id="name" class="form-control" placeholder="Enter student Name">        
       </div>
       <div class="form-group m-2">
       <input type="text" name="class" id="class" class="form-control" placeholder="Enter student Class">        
       </div>

       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

       </form>
      </div>
      
    </div>
  </div>
</div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>