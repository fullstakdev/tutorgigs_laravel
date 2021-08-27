@extends('template.tutor_container')
@section('css')
@endsection
@section('content')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5">Session Survey Feedback</h2>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<div class="d-flex align-items-center font-weight-bold my-2">
											<!--begin::Item-->
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-white icon-1x"></i>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Home</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
											<!--end::Item-->
										</div>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Info-->
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<?php
                                                                        $form_2 = Session()->get('form_2');
                                                                       
                                                                         if(isset($form_2)&&!empty($form_2)){
                                                                            $edit = null;
                                                                            $edit['form_2'] = Session()->get('form_2'); //new arr

                                                                         }
                                                                         
                                                                          if($num == 1)
                                                                          { 
                                                                            $is_edit = 1;
                                                                            $feedback = $res;
                                                                            
                                                                            $edit = unserialize($feedback->feedback_log);  

                                                                       
                                                                         if(isset($form_2)&&!empty($form_2)){
                                                                             $edit = null;
                                                                             $edit['form_2'] = Session()->get('form_2');
                                                                          
                                                                         }

                                                                        }
                                                                        
                                                                        
                                                                        ?>
									<div class="col-xl-12">
										 
                                                                            <div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Feedback Step 2</h3>
												
											</div>
											<!--begin::Form-->
					<form name="form_class" id="form_class" method="post" action="{{route('submit_feedback_2')}}" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
													
													<div class="form-group row">
														<div class="col-lg-12">
															<label><?=$data->ques_text?></label>
                                                                                                                        <input  name="qn_id[<?=$data->id?>]"  type="hidden"  value="<?=$data->id?>"> 
                                                                                                                        @if($data->type == "radio")
                                                                                                                            <div class="radio-inline">
                                                                                                                                <?php for($i=1;$i<=3;$i++){ 
                                                                                                                                    $name= @$data->opn_.$i;
                                                                                                                                 
                                                                                                                                     $checked=NULL;
                                                                                                                                     if($name === @$edit['form_2']["ans_opn_".$data->id]){
                                                                                                                                          $checked="checked"; 
                                                                                                                                       }
                                                                                                                                    ?>
                                                                                                                                    <label class="radio radio-solid">
                                                                                                                                    <input type="radio" name="<?="ans_opn_".$data->id?>" <?=$checked;?> value="<?=$name?>">
                                                                                                                                    <span></span><?=$name?></label>
                                                                                                                                <?php }  ?>
                                                                                                                            </div>
                                                                                                                        @endif
															
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<div class="col-lg-12">
															<label>Were students engaged the entire time?*</label>
                                                                                                                        <?php $default_stu_engaged=(isset($edit['form_2']['stu_engaged']))?$edit['form_2']['stu_engaged']:"yes"; ?>
															<div class="radio-inline">
																<label class="radio radio-solid">
																<input type="radio" required  <?php if($default_stu_engaged=="yes") echo 'checked';  ?> name="stu_engaged" value="yes">
																<span></span>Yes</label>
																<label class="radio radio-solid">
																<input type="radio" <?php if($default_stu_engaged=="no") echo 'checked';  ?> name="stu_engaged" value="no">
																<span></span>No</label>
                                                                                                                            
															</div>
															
														</div>
													</div>
                                                                                                      
                                                                                                    <?php
                                                                                                     $engaged_not_info=(!empty(@$edit['form_2']['engaged_not_info']))?@$edit['form_2']['engaged_not_info']:NULL;
                                                                                                     $default_txt_show=null;
                                                                                                      if($default_stu_engaged=="yes"){
                                                                                                                  $default_txt_show="none";
                                                                                                                  $engaged_not_info=NULL;
                                                                                                              }

                                                                                                    ?>
                                                                                                    <div class='row' id="stu_engaged_area"  style=" display:<?=@$default_txt_show?>;">
                                                                                                        <div class="col-lg-12">
															<label>If not, please give details (with names) if appropriate.</label>
                                                                                                                        <input type="text" name="engaged_not_info" id="engaged_not_info" value="<?=(isset($engaged_not_info))?$engaged_not_info:NULL?>" class="form-control" placeholder="">
															
														</div>
                                                                                                    </div>
													<!-- begin: Example Code-->
													
													<!-- end: Example Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
														
															<a href="{{url('tutor/post_feedback')}}/3345" class="btn btn-secondary">Back</a>
														</div>
														<div class="col-lg-6 text-lg-right">
															<button type="submit" class="btn btn-primary">Next</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										
									</div>
								</div>
								<!--end::Row-->
                                                                
                                                                
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection
                                        @section('js')
                                         <script>
                                            $(function () {
                                                $('input[name="stu_engaged"]').on('click', function () {
                                                    if ($(this).val() == 'yes') {

                                                        $('#stu_engaged_area').hide();
                                                        $('#engaged_not_info').prop('required', false);
                                                    } else {
                                                        $('#stu_engaged_area').show();
                                                        $('#engaged_not_info').prop('required', true);

                                                    }



                                                });
                                            });
                                         </script>
                                        @endsection