@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css">
<style>
  .form-group label {
      font-size: 15px;
      font-weight: 600;
      color: #3F4254;
  }
  .select2.select2-container{
    width: 100%!important;
  }
  .modal .modal-header .close span {
      display: block!important;
  }
</style>
@endsection
@section('content')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
 <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
  <!--begin::Info-->
  <div class="d-flex align-items-center flex-wrap mr-2">
   <!--begin::Page Title-->
   <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Applicant Details</h5>
   <!--end::Page Title-->
   
  </div>
  
 </div>
</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  
  
  
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Assesment Rules</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
       <a href="/add-assesment-rule" class="btn btn-warning">Create Rule</a>
     </div>
    </div>
   </div>
   <div class="card-body">
     <table class="table">
       <thead>
         <th>Sr#</th>
         <th>Distric</th>
         <th>School</th>
         <th>Grade</th>
         <th>Type</th>
         <th>Rules</th>
         <th>Action</th>
       </thead>
       <tbody>
         <tr>
           <td>1</td>
           <td>N/A</td>
           <td>N/A</td>
           <td>N/A</td>
           <td>General</td>
           <td><button class="btn btn-info"  data-toggle="modal" data-target="#rule_modal">View Rules</button></td>
           <td>
             <button class="btn btn-primary">Edit/View Rule</button>
           </td>
         </tr>
         <tr>
           <td>2</td>
           <td>District 1</td>
           <td>School 1</td>
           <td>Grade 1</td>
           <td>Custom</td>
           <td><button class="btn btn-info"  data-toggle="modal" data-target="#rule_modal">View Rules</button></td>
           <td>
             <button class="btn btn-primary">Edit/View Rule</button>
             <button class="btn btn-danger" onclick="confirm('Are you sure to delete?')">Delete</button>
           </td>
         </tr>
         <tr>
           <td>3</td>
           <td>District 2</td>
           <td>School 2</td>
           <td>Grade 2</td>
           <td>Custom</td>
           <td><button class="btn btn-info" data-toggle="modal" data-target="#rule_modal">View Rules</button></td>
           <td>
             <button class="btn btn-primary">Edit/View Rule</button>
             <button class="btn btn-danger" onclick="confirm('Are you sure to delete?')">Delete</button>
           </td>
         </tr>
       </tbody>
     </table>
   </div>
   </div>
   
  </div>
  <!--end::Bottom-->
  
 </div>
 
</div>
<!--end::Container-->
</div>
<!--end::Content-->
<!-- Modal -->
<div class="modal fade" id="rule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rule List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Day 1 : Lesson 1</li>
          <li>Day 2 : Lesson 2</li>
          <li>Day 3 : Lesson 3</li>
          <li>Day 4 : Lesson 4</li>
          <li>Day 5 : Lesson 5</li>
        </ul>
      </div>
      
    </div>
  </div>
</div>
 @endsection
 @section('js')
 <!--begin::Page Vendors(used by this page)-->

 <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
 @endsection