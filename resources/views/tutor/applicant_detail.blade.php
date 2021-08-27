@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<style>
/*    svg{height: 170px !important;}*/
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
  $edit          = unserialize($data2->profile_1);
  
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
                                                                @if($data2->is_legal_1 == 1 && $data2->is_legal_2 == 1)
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
                                                                                                                    <h3 class="card-label font-weight-bolder text-dark">Form W-9</h3>
                                                                                                                    <span class="text-muted font-weight-bold font-size-sm mt-1">Tutor Form W-9 informaiton</span>
                                                                                                            </div>

                                                                                                    </div>
                                                                                
                                                                                    <div class="card-body">
                                                                                            <!--begin::Top-->
                                                                                            <div class="d-flex">
                                                                                                 <div class="col-12">
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
                                                                @if(!empty($data2->payment_email)&&!empty($data2->payment_phone))
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="card card-custom gutter-b">
                                                                    <div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Payment Information</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Tutor payment informaiton</span>
												</div>
												
											</div>
									<div class="card-body">
										<!--begin::Top-->
										<div class="d-flex">
											
											<table class='table'>
                                                            <tr><td class="warning">Paypal email address</td><td><?=$data2->payment_email;?></td></tr>
                                                            <tr><td class="warning">Paypal Phone Number</td><td><?=$data2->payment_phone;?></td></tr>
                                                            
                                                            </table>
											<!--end::Info-->
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
                                                                    </div></div>
                                                                 @endif
                                                                 <div class="row">
                                                                <div class="col-12">
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
											
												<!--begin::Body-->
												<div class="card-body">
													<div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mb-6">Customer Info</h5>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                     <?php 
												// Image if exitst 
												$photo_id='https://llabel.googleusercontent.com/KqYRICZo55OamI7-_aJNtFTJffEY5cRdAh003Yc_uqG7B_jmTmYiN0OR_oFCOCBNBzYYxULUmQ=w464';

												if(!empty($data2->photo_id)){
												$photo_id='http://tutorgigs.io/tutor-images/'.$data2->photo_id;	
												}


												?>
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(<?php echo $photo_id;?>)">
																<div class="image-input-wrapper" style="background-image: url(<?php echo $photo_id;?>)"></div>
																
																
															</div>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                    <input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$tutor_det->email?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$tutor_det->f_name?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$tutor_det->lname?>">
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What is your phone number?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$tutor_det->phone?>">
														</div>
													</div>
                                                                                                    
                                                                                                     <?php  if($tdata->quiz_1_status == 'completed' && $tdata->quiz_1_id>0){ 
													 	$test_1='Math';
													 	$test_2='English';

													 	?>

											     <div class="form-row row">
													    <!-- <label>Quiz 1 Result (%)</label>  -->
													   
                                                                                                            <?php if($tdata->quiz_1_id == 5) { ?>
                                                                                                            <label class="col-xl-3 col-lg-3 col-form-label"><?=$test_1?> Result (%)</label>
													 
                                                                                                            <?php } else if($tdata->quiz_1_id == 6) {?>
                                                                                                           <label class="col-xl-3 col-lg-3 col-form-label"><?=$test_2?> Result (%)</label>
                                                                                                            <?php } ?>
                                                                                                           <div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$quiz_1_score?>%">
														</div>
														
													</div>
													<?php } ?>



											<?php  if($tdata->quiz_2_status == 'completed' && $tdata->quiz_2_id > 0){ ?>

											     <div class="form-row row">
                                                                                                 <label class="col-xl-3 col-lg-3 col-form-label"><?=$test_2?> Result (%)</label>
													  <div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$quiz_2_score?>%">
														</div>
														
													</div>
													<?php } ?>
                                                                                                    
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Do you have a computer or tablet and reliable internet access?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" disabled="" <?=($edit['is_computer']=='yes')?'checked':null?> name="radios3">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" disabled="" name="radios3" <?=($edit['is_computer']=='no')?'checked':null?>>
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How did you hear about us?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['hear']?>">
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">When would you like to get started Tutoring?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['started_date']?>" placeholder="mm/dd/yyyy">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Why do you want to Tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['f3_q_1']?>" >
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What makes a good Tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['f3_q_2']?>" >
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Have you ever tutored before?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" <?=($edit['f3_q_3']=='yes')?'checked':null?> disabled="" name="radios3">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_3']=='no')?'checked':null?> disabled="">
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Have you ever Tutored online?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" <?=($edit['f3_q_4']=='yes')?'checked':null?> name="radios3" disabled="">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_4']=='no')?'checked':null?> disabled="">
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">If you have tutored, where and what did you tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['f3_q_5']?>" >
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How many years have you Tutored ?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" <?=($edit['f3_q_6']=='opn_1')?'checked':null?> name="radios3" disabled="">
															<span></span>Less than a year</label>
															<label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_6']=='opn_2')?'checked':null?> disabled="">
															<span></span>1-3 years</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_6']=='opn_3')?'checked':null?> disabled="">
															<span></span>3-5 years</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_6']=='opn_4')?'checked':null?> disabled="">
															<span></span>More than 5 years</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <?php 
												  // Edit array
												  $save_grades_arr=explode(',',$data2->grade_levels);

												  $grade_arr=array('grade_1'=>'Elementary School (3-5)',
													'grade_2'=>'Middle School (6-8)',
													'grade_3'=>'High School (9-12)'
													
													          );

												  ?>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What grade levels do you want to Tutor?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="checkbox-inline">
                                                                                                                    
                                                                                                                     <?php 
                                                     foreach ($grade_arr as $key => $value) {
                                                     	# code...
                                                     	if(is_array($save_grades_arr))
                                                    $checked=(in_array($key,$save_grades_arr))?"checked":null; // checked
                                                    else $checked=null;
                                                     ?>
                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" <?=$checked?> name="radios3" disabled="">
															<span></span><?=$value?></label>
                                                                                                                    
														

														<?php }?>
															
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What subjects can you Tutor ?</label>
														<div class="col-lg-9 col-xl-9">
                                                                                                                    <?php 
												  // Edit array
												  $save_subj_arr=explode(',',$data2->subjects);

												  $subj_arr=array('math'=>'Math',
													'english'=>'English Comprehension & Reading',
													'esl'=>'ESL',
													'languages'=>'Languages'
													          );

												  ?>
															<div class="form-group">
														
														<div class="checkbox-inline">
                                                                                                                    
                                                                                                                      <?php 
                                                     foreach ($subj_arr as $key => $value) {
                                                     	# code...
                                                     	if(is_array($save_subj_arr))
                                                    $sel=(in_array($key,$save_subj_arr))?"checked":null; // checked
                                                    else $sel=null;
                                                     ?>
                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" <?=$sel?> name="radios3" disabled="">
															<span></span><?=$value?></label>
                                                                                                                    
														

														<?php }?>
															
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What languages do you speak aside from English?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="<?=$edit['f3_q_7']?>" >
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Are you a certified Teacher?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" <?=($edit['f3_q_8']=='yes')?'checked':null?> name="radios3" disabled="">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_8']=='no')?'checked':null?> disabled="">
															<span></span>No</label>
                                                                                                                   
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    <?php 
												$familiar=array('opn_1'=>'Not familiar',
													'opn_2'=>'I have heard of it, but not very familiar',
													'opn_3'=>'Somewhat familiar',
													'opn_4'=>'Very familar',
													          'opn_5'=>'I am a specialist');

												?>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How familiar are you with TEKS & STAAR?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" <?=($edit['f3_q_9']=='opn_1')?'checked':null?> name="radios3" disabled="">
															<span></span>Not familiar</label>
															<label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_9']=='opn_2')?'checked':null?> disabled="">
															<span></span>I have heard of it, but not very familiar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_9']=='opn_3')?'checked':null?> disabled="">
															<span></span>Somewhat familiar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_9']=='opn_4')?'checked':null?> disabled="">
															<span></span>Very familar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" <?=($edit['f3_q_9']=='opn_4')?'checked':null?> disabled="">
															<span></span>I'm a specialist</label>
                                                                                                                   
														</div>
														
													</div>
														</div>
													</div>
												</div>
												<!--end::Body-->
											
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
                                                                
                                                                </div>
                                                              
                                                                     
                                                                     
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