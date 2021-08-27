@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<style>
    td.details-control {
    background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
}

.warning{background-color: #fcf8e3 !important;}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;

</style>
@endsection
@section('content')
					<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Tutor List With Certification Information</h5>
										
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
					<div class="d-flex flex-column-fluid mt-7" >
							<!--begin::Container-->
							<div class="container">
                                                            
                                                            
                                                       
                                                                
                                                                <div class="card card-custom gutter-b example example-compact">
											
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('tutor_session_list')}}" method="post">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="row">
													
                                                                                                          
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Email</label>
                                                                                                                        <input type="email" class="form-control"   placeholder="Enter Email">
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>First Name</label>
                                                                                                                        <input type="text" class="form-control"  placeholder="Enter First Name">
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Last Name</label>
                                                                                                                        <input type="text" class="form-control"  placeholder="Enter Last Name">
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Type</label>
                                                                                                                        <select class="form-control form-control-solid" name="session_type">

                                                                                                                           <option value="55333">Front application</option>
                                                                                                                            <option value="62103">Created by admin</option>
                                                                                                                           

                                                                                                                        </select>
                                                                                                                </div>
												          </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" class="btn btn-primary mr-2">Search</button>
                                                                                                        </div>
                                                                                                    </div>
													</div>
                                                                                                    
                                                                                                    
												</div>
												
											</form>
											<!--end::Form-->
										</div>
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Unpaid Payment History</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">55 Sessions - 55 Total Hours</span>
												
                                                                                                </h3>
                                                                                            
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															
																
                                                                                                                            
                                                                                                                            <table id="tutor_table" class="table  table-vertical-center">
								<thead>
																	<tr>
																		<th class="p-0 min-w-30px"></th>
																		<th class="p-0 min-w-230px">EMAIL</th>
																		
																		<th class="p-0 min-w-100px text-right">FIRST NAME</th>
																		<th class="p-0 min-w-110px text-right">LAST NAME</th>
                                                                                                                                                <th class="p-0 min-w-110px text-right">PHONE</th>
																		<th class="p-0 min-w-50px text-right"></th>
																	</tr>
																</thead>
								
								 
                                                               <tbody>
								
                                                               
															<tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63017">fame@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">fame   </td>
                                            <td class="text-right">name</td>
                                            <td class="text-right">
                                              123456                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="even">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63016">vtatum@intervene.io</a> 
                
                                            
                                            </td>
                                            <td class="text-right">Vince   </td>
                                            <td class="text-right">Tatum</td>
                                            <td class="text-right">
                                              3146054421                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                
                                                                    <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63017">fame@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">fame   </td>
                                            <td class="text-right">name</td>
                                            <td class="text-right">
                                              123456                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="even">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63016">vtatum@intervene.io</a> 
                
                                            
                                            </td>
                                            <td class="text-right">Vince   </td>
                                            <td class="text-right">Tatum</td>
                                            <td class="text-right">
                                              3146054421                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63017">fame@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">fame   </td>
                                            <td class="text-right">name</td>
                                            <td class="text-right">
                                              123456                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="even">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63016">vtatum@intervene.io</a> 
                
                                            
                                            </td>
                                            <td class="text-right">Vince   </td>
                                            <td class="text-right">Tatum</td>
                                            <td class="text-right">
                                              3146054421                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63017">fame@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">fame   </td>
                                            <td class="text-right">name</td>
                                            <td class="text-right">
                                              123456                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="even">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63016">vtatum@intervene.io</a> 
                
                                            
                                            </td>
                                            <td class="text-right">Vince   </td>
                                            <td class="text-right">Tatum</td>
                                            <td class="text-right">
                                              3146054421                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                                <tr data-child-value="
                                                                   <h6>Certifications</h6>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                    - 
                         </td>
                </tr>
                 </table>
                 <h6>Exam Tests</h6>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-primary btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td >
                    	
                        <a href="edit-admintutor.php?tid=63017">fame@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">fame   </td>
                                            <td class="text-right">name</td>
                                            <td class="text-right">
                                              123456                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                
                                                                               
                                                                                
                                                                                
                                                                                <tr data-child-value="
                                                                   <h4>Certifications</h4>
            <table class='table' style='font-size:13px'>
           
             <tr class='warning'>
                   <td>Teacher Certification</td>
                   <td>
                                             <a href='../teacher_certificate/16155532041068Screenshot (2).png' target='_blank' style='color:green'>16155532041068Screenshot (2).png</a> 
                         &nbsp;&nbsp;  <span class='label label-success'>Approved</span>                      
                         </td>
                </tr>
        
               
             <tr class='warning'>
                   <td>ESL Certification</td>
                   <td>
                                             <a href='../teacher_certificate/16155532041070Screenshot (3).png' target='_blank' style='color:green'>16155532041070Screenshot (3).png</a> 
                         &nbsp;&nbsp;  <span class='label label-success'>Approved</span>                     
                         </td>
                </tr>
         
               
             <tr class='warning'>
                   <td>Bilingual Certification</td>
                   <td>
                                             <a href='../teacher_certificate/16155532041027Screenshot (5).png' target='_blank' style='color:green'>16155532041027Screenshot (5).png</a> 
                         &nbsp;&nbsp;  <span class='label label-success'>Approved</span>                       
                         </td>
                </tr>
                 </table>
                 <h4>Exam Tests</h4>
               <table class='table' style='font-size:13px'>
                                         <tr class='warning'>
                   <td style='width:36%'>Math (2nd -9th Grade) / Algebra 1</td>
                   <td>
                                                                                   <label style='color:green'>
									Status - pass								</p>
                                                                                                                                <p style='color:green'>
                                                                                                                                 Score - 90.00% 
                                                                                                                                     </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English</td>
                   <td>
                                                                                   <label style='color:green'>
									Status - pass								</p>
                                                                                                                                <p style='color:green'>
                                                                                                                                 Score - 95.00% 
                                                                                                                                     </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>Bilingual (Spanish)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                                        <tr class='warning'>
                   <td style='width:36%'>English for ESL (English Learners)</td>
                   <td>
                                                                                    <p style='color:green'>
                                                                -                                                                 </p>
                   </td>
                </tr>
                               <tr class='warning'>
                   <td><a class='btn btn-success btn-sm' href='{{route('manage_certificate')}}'>Manage Certification</a></td><td></td>
                </tr>
              
           </table>" role="row" class="odd">
                                                                
                                                                    
				<td class="details-control sorting_1"></td>						
                    <td>
                    	
                        <a href="edit-admintutor.php?tid=2840">test2@gmail.com</a> 
                
                                            
                                            </td>
                                            <td class="text-right">test2   </td>
                                            <td class="text-right">test2</td>
                                            <td class="text-right">
                                              11122334444                                            </td>
                                            <td>
                                                                                            </td>
                                          

                                                                               
										</tr>
                                                                                </tbody></table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
								<!--end::Notice-->
								<!--begin::Card-->
								
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
					<!--end::Content-->
				@endsection	
                                @section('js')
                                	<!--begin::Page Vendors(used by this page)-->
                                    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                                    <!--end::Page Vendors-->
                                    <!--begin::Page Scripts(used by this page)-->
<!--                                    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>-->
                                    <script src="{{asset('assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
                                    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
                                      <script>
                                        





    function format(value) {
      return '<div>' + value + '</div>';
  }
  
     $(document).ready(function () {
       var table= $('#tutor_table').DataTable({
    // display everything
 "bLengthChange": false,
    "aaSorting": [[ 0, "desc" ]] // Sort by first column descending
}); 

      // Add event listener for opening and closing details
      $('#tutor_table').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');
          var row = table.row(tr);

          if (row.child.isShown()) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
          } else {
              // Open this row
              row.child(format(tr.data('child-value'))).show();
              tr.addClass('shown');
          }
      });
  });


                                        </script>
                                @endsection