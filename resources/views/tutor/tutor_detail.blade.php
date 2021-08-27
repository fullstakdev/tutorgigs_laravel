@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<style>
    svg{height: 170px !important;}
    .warning{background-color: #fcf8e3; width:50%}
</style>
@endsection
@section('content')
<?php

function quiz_result($getid,$test_id){
   

        $results = DB::connection('mysql_2')->table('tutor_result_logs')->where('tutor_id', '=', $getid)->where('test_id', '>', $test_id);
        $total_attempted = $results->count();
        
        $results = $results->get();
        $correct=0;
        foreach($results as $row)
        {
           if($row->answer_id == $row->attempt_id){
            $correct=$correct+1;
          } 
        }
        
         if($correct > 0)
        {
        $get_scored=($correct*100)/$total_attempted;
        }
        else
            $get_scored = 0;
         return  $get_scored=round($get_scored,2);

 }  
  $get_state_arr = unserialize($tutor_det->signup_state);
  $edit          = unserialize(@$data2->profile_1);
  
  if($tdata->quiz_1_status == 'completed' && $tdata->quiz_1_id > 0){

  $test_id = $tdata->quiz_1_id; //Default 
  $quiz_1_score = quiz_result($tutor_det->id, $test_id);
}


///Quiz 2 result 
if($tdata->quiz_2_status == 'completed' && $tdata->quiz_2_id > 0){
  $test_id = $tdata->quiz_2_id; //Default 
  $quiz_2_score=quiz_result($tutor_det->id,$test_id);
}
?>
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tutor Applicantion Details</h5>
									<!--end::Page Title-->
									
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<div class="card-toolbar">
													<a href="{{url('pdf_applicant_download')}}/{{$tutor_det->id}}" class="btn btn-info btn-sm font-weight-bolder font-size-sm mr-3">Download PDF</a>
                                                                                                        @if(Auth::guard('admin')->user()->role > 0)
													 <a href="{{url('w9_pdf_download')}}/{{$tutor_det->id}}" class="btn btn-warning btn-sm font-weight-bolder font-size-sm">Download W-9 Form</a>
                                                                                                        @endif  
												</div>
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
                                                                @if(@$data2->is_legal_1 == 1 && @$data2->is_legal_2 == 1)
                                                                    @if(!empty($data2->is_legal_3))
                                                                       @php
                                                                         $form_3_arr = unserialize($data2->legal_form3_data);
							                 $tutorName  = $tutor_det->f_name.' '.$tutor_det->lname;
                                                                        @endphp 
                                                                         <div class="row">
                                                                            <div class="col-12">
                                                                            <div class="card card-custom gutter-b">
                                                                                <div class="card-header py-3">
                                                                                                            <div class="card-title align-items-start flex-column">
                                                                                                                    <h3 class="card-label font-weight-bolder text-dark">Legal Stuff</h3>
                                                                                                                    <span class="text-muted font-weight-bold font-size-sm mt-1">Tutor legal stuff informaiton</span>
                                                                                                            </div>

                                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        
                                                                                            <!--begin::Top-->
                                                                                            <div class="d-flex">
                                                                                                
                                                                                                 <div class="col-12">
                                                                                                     <h4 class="text-danger"><strong>W-9 Form Data</strong></h4>
                                                                                                <table class="table">
        <?php if(!empty($form_3_arr['name_income_tax'])) { ?> <tr><td class="warning">Income Tax Name</td><td><?php echo $form_3_arr['name_income_tax'];?></td></tr> <?php } ?>
        <?php if(!empty($form_3_arr['business_name'])) { ?> <tr><td class="warning">Business Name</td><td><?php echo $form_3_arr['business_name'];?></td></tr> <?php } ?>
        <?php if(!empty($form_3_arr['tax_classification'])) { ?> <tr><td class="warning">Federal Tax Classification</td>
            <td>
                <ul style="list-style-type:none;padding-left:0px">
                <?php 
                foreach($form_3_arr['tax_classification'] as $tax) {
                  if( $tax == 1) echo '<li>Individual/sole proprietor or single-member LLC</li>';
                  if( $tax == 2) echo '<li>C Corporation</li>';
                  if( $tax == 3) echo '<li>S Corporation</li>';
                  if( $tax == 4) echo '<li>Partnership</li>';
                  if( $tax == 5) echo '<li>Trust/estate</li>';
                  if( $form_3_arr['tax_classification'] == 6) echo '<li>Limited liability company. Enter the tax classification</li>';
                }
                  
                ?>
                    </ul>
            </td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['limited_liability_text'])) { ?> <tr><td class="warning">Other Tax Classification</td><td><?php echo $form_3_arr['limited_liability_text'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['exempt_payee_code'])) { ?> <tr><td class="warning">Exempt payee code</td><td><?php echo $form_3_arr['exempt_payee_code'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['exempt_from_fatca'])) { ?> <tr><td class="warning">Exemption from FATCA</td><td><?php echo $form_3_arr['exempt_from_fatca'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['income_tax_name_and_address'])) { ?> <tr><td class="warning">Requester's name and address</td><td><?php echo $form_3_arr['income_tax_name_and_address'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['income_tax_address'])) { ?> <tr><td class="warning">Address</td><td><?php echo $form_3_arr['income_tax_address'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['income_tax_address_city'])) { ?> <tr><td class="warning">City, state, and ZIP</td><td><?php echo $form_3_arr['income_tax_address_city'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['list_account_number'])) { ?> <tr><td class="warning">List account number(s)</td><td><?php echo $form_3_arr['list_account_number'];?></td></tr> <?php } ?>
         
         <?php if(!empty($form_3_arr['social_security_number'])) { ?> <tr><td class="warning">Social security number</td><td><?php echo $form_3_arr['social_security_number'];?></td></tr> <?php } ?>
         <?php if(!empty($form_3_arr['employer_identification_number '])) { ?> <tr><td class="warning">Employer identification number </td><td><?php echo $form_3_arr['employer_identification_number '];?></td></tr> <?php } ?>
         <tr ><td class="warning" style="vertical-align:middle !important;">Signature </td><td ><?php  echo  $data2['legal_form3_sign'];?></td></tr>
         </table>
                                                                                                     </div>
                                                                                           
                                                                                            </div>
                                                                                            
                                                                                           <div class="col-12">     
                                                                                                
                                                                                                 <h4 class="text-danger"><strong>Policy Form</strong></h4>
                                                                                    
                                                                                      <table class='table'>
                                                                                          <tr><td class="warning" style="vertical-align:middle !important;">Policy Form signature </td>
             <td>
                 <div > <?php  echo  $data2['pri_tutor_sign'];?></div>
                 <table class='table'>
                     <tr><td>Name</td><td><?=$tutorName?></td></tr>
                     <tr><td>Date</td><td><?=$data2['pri_tutor_date'];?></td></tr>
                     <tr><td colspan="2"><a href="legal_stuff_form.php?tid=<?=$tutor_det->tid?>"class="btn btn-xs btn-danger">view full form</a></td></tr>
                 </table>
             </td>
         </tr>
         </table>
         <?php $terms=unserialize($data2['terms_form_data']);?>
                                                                                       <hr>
                                                                                      <h4 class="text-danger"><strong>Terms Form</strong></h4>
                                                                                     
                                                                                      <table class='table'>
         <tr><td class="warning" style="vertical-align:middle;">Terms Form signature </td>
             <td>
                 <div > <?php  echo  $data2['term_tutor_sign'];?></div>
                 <table class='table'>
                     <tr><td>Name</td><td><?=$tutorName?></td></tr>
                     <tr><td>Date</td><td><?=$terms['term_form_date'];?></td></tr>
                   
                 </table>
             </td>
         </tr>
       
                                                                                      </table>
                                                                                      </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                             </div>
                                                                      
                                                                    @endif
                                                                @endif
                                                                 <div class="row">
                                                                <div class="col-6">
								<div class="card card-custom gutter-b">
                                                                    <div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Tutor Application & Personal Information</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Tutor application questions & personal informaiton</span>
												</div>
												
											</div>
									<div class="card-body">
										<!--begin::Top-->
										<div class="d-flex">
											
											<table class='table'>
                                                            <tr><td ><strong>Email Address</strong></td><td><?=$tutor_det->email?></td></tr>
                                                            <tr><td ><strong>First name</strong></td><td><?=$tutor_det->f_name?></td></tr>
                                                            <tr><td ><strong>Last name</strong></td><td><?=$tutor_det->lname?></td></tr>
                                                            <tr><td ><strong>What is your phone number?</strong></td><td><?=$tutor_det->phone?></td></tr>
                                                            
                                                            <?php  if($tdata->quiz_1_status == 'completed' && $tdata->quiz_1_id > 0 ){ 
													 	$test_1='Math';
													 	$test_2='English';

													 	?>
                         
											     <tr>
													    <!-- <label>Quiz 1 Result (%)</label>  -->
													   
                                                                                                            <?php if($tdata->quiz_1_id == 5) { ?>
                                                                                                            <td ><strong><?=$test_1?> Result (%)</strong></td>
													  
                                                                                                            <?php } else if($tdata->quiz_1_id == 6) {?>
                                                                                                            <td ><strong><?=$test_2?> Result (%)</strong></td>
                                                                                                            <?php } ?>
                                                                                                            <td><?=$quiz_1_score?>%</td>
													</tr>
													<?php } ?>
                                                                                                         <?php  if($tdata->quiz_2_status == 'completed' && $tdata->quiz_2_status > 0 ){ ?>
                         
											     <tr>
													 <td ><strong><?=$test_2?> Result (%)</strong></td>
													  <td><?=$quiz_2_score?>%</td>
													</tr>
													<?php } ?>
                                                             @if(!empty($data2->payment_email)&&!empty($data2->payment_phone))
                                                             <tr><td ><strong>Paypal email address</strong></td><td><?=$data2->payment_email;?></td></tr>
                                                            <tr><td ><strong>Paypal Phone Number</strong></td><td><?=$data2->payment_phone;?></td></tr>
                                                             @endif
                                                            </table>
											<!--end::Info-->
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
                                                                
                                                                </div>
                                                                <?php 
                                            if(!empty($tutor_det->SpecialtySubjects)){
                                            ?>
                                                                <div class="col-6">
								<div class="card card-custom gutter-b">
                                                                    <div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Specialty/Subjects</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Tutor specialty/subjects</span>
												</div>
												
											</div>
									<div class="card-body">
										<!--begin::Top-->
										<div class="d-flex">
											
											<table class="table">
                                             

                                             	
                                             
                                             	<?php 
													$sub = explode(',', $tutor_det->SpecialtySubjects);
													foreach ($sub as $value) {
														?>
                                             <tr><td><input type="checkbox" checked></td><td> <?php echo $value;?></td></tr>
                                             	<?php } ?>
                                             </table>
											<!--end::Info-->
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
                                                                
                                                                </div>
                                            <?php } ?>
                                                                     
                                                                     
                                                                </div>
                                                                
                                                                
                                                                </div>
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
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection