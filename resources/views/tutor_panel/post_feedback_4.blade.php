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
                                                                        $is_edit=0;
                                                                        $form_4 = Session()->get('form_4');
                                                                        
                                                                         if(isset($form_4)&&!empty($form_4)){
                                                                            $edit = null;
                                                                            $edit['form_4'] = Session()->get('form_4'); //new arr

                                                                         }
                                                                         
                                                                          if($num == 1)
                                                                          { 
                                                                            $is_edit = 1;
                                                                            $feedback = $res;
                                                                            $edit = unserialize($feedback->feedback_log);  

                                                                       
                                                                         if(isset($form_4)&&!empty($form_4)){
                                                                             $edit = null;
                                                                             $edit['form_4'] = Session()->get('form_4');
                                                                          
                                                                         }

                                                                        }
                                                                        
                                                                        
                                                                        ?>
									<div class="col-xl-12">
										 
                                                                            <div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Feedback Step 4</h3>
												
											</div>
											<!--begin::Form-->
											<form name="form_class" id="form_class" method="post" action="{{route('submit_feedback_4')}}" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
													
													@foreach($res_form4 as $data)
													<div class="form-group row">
														<div class="col-lg-12">
															<label>{{$data->ques_text}} </label>
                                                                                                                        @if($data->type == "radio" || $data->type == "radio|other")
                                                                                                                        @for($i=1;$i<=5;$i++)
                                                                                                                        <?php
                                                                                                                          $index = 'opn_'.$i;
                                                                                                                          $index = @$data->$index;
                                                                                                                         if(empty($index)) continue;
                                                                                                                         
                                                                                                                          $checked = NULL;
                                                                                                                          $option_key = @$index;
                                                                                                                      
                                                                                                                          if(@$is_edit == 1 && $option_key === @$edit['form_4']["ans_opn_".$data->id])
                                                                                                                                $checked="checked"; 
                                                                                                                                
                                                                                                                          if(@$edit['form_4']["ans_opn_".$data->id] != "Other") 
                                                                                                                                @$edit['form_4']["ans_other_text_".$data->id]=NULL;
                                                                                                                         
                                                                                                                        ?>
                                                                                                                            <div class="radio-inline">
                                                                                                                                    <label class="radio radio-solid">
                                                                                                                                        <input type="radio" name="<?="ans_opn_".$data->id?>" value="<?=@$index?>" <?=$checked?> required="">
                                                                                                                                    <span></span><?=@$index?></label>
                                                                                                                                    

                                                                                                                            </div>
                                                                                                                        <?php 
                                                                                                                                    if(@$data->opn_other == "yes" && @$index == "Other"){
                                                                                                                                    ?>
                                                                                                                                  <input type="text" class="form-control" placeholder="Your answer" name="<?="ans_other_text_".$data->id?>" value="<?=@$edit['form_4']["ans_other_text_".$data->id]?>"> <?php }?>
                                                                                                                        @endfor
                                                                                                                        @endif
															
														</div>
													</div>
                                                                                                     @endforeach
                                                                                                    
                                                                                                     <?php $see_different = @$edit['form_4']['see_different'];  ?>
                                                                                                    
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>What would you like to see different?</label>
															<input type="text" class="form-control" placeholder="" name="see_different" required id="engaged_not_info" value="<?=(isset($see_different))?$see_different:NULL?>" >
															
														</div>
														<div class="col-lg-6">
															<label> Add your PayPal email?</label>
															<input type="email" class="form-control" placeholder="" value='<?php echo @$edit['form_4']['is_paypal_email'];?>' name="is_paypal_email">
															
														</div>
													</div>
                                                                                                     
                                                                                                     <div class="form-group row">
														<div class="col-lg-12">
															<label>Please enter student's name and tell the teacher about any Behavior Issues</label>
                                                                                                                        <textarea id="kt-tinymce-4" name="student_behavior_info" class="tox-target">{{@$feedback->student_behavior_info}}</textarea>
															
														</div>
														
													</div>
													<!-- begin: Example Code-->
													
													<!-- end: Example Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
														
															<a href="{{url('tutor/post_feedback_3')}}" class="btn btn-secondary">Back</a>
														</div>
														<div class="col-lg-6 text-lg-right">
                                                                                                                    <button type="submit" class="btn btn-primary">Complete</button>
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
                                            <script src="{{asset('tutor_assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
                                            <!--end::Page Vendors-->
                                            <!--begin::Page Scripts(used by this page)-->
                                            <script src="{{asset('tutor_assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>
                                        @endsection