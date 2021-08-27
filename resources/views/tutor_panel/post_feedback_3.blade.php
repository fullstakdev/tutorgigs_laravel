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
                                                                        $form_3 = Session()->get('form_3');
                                                                        
                                                                         if(isset($form_3)&&!empty($form_3)){
                                                                            $edit = null;
                                                                            $edit['form_3'] = Session()->get('form_3'); //new arr

                                                                         }
                                                                         
                                                                          if($num == 1)
                                                                          { 
                                                                            $is_edit = 1;
                                                                            $feedback = $res;
                                                                            
                                                                            $edit = unserialize($feedback->feedback_log);  

                                                                       
                                                                         if(isset($form_3)&&!empty($form_3)){
                                                                             $edit = null;
                                                                             $edit['form_3'] = Session()->get('form_3');
                                                                          
                                                                         }

                                                                        }
                                                                        
                                                                        
                                                                        ?>
									<div class="col-xl-12">
										 
                                                                            <div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Feedback Step 3</h3>
												
											</div>
											<!--begin::Form-->
											<form name="form_class" id="form_class" method="post" action="{{route('submit_feedback_3')}}" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
													@foreach($res_form2 as $data)
													<div class="form-group row">
														<div class="col-lg-12">
															<label>{{$data->ques_text}} </label>
                                                                                                                        @if($data->type == "radio" || $data->type == "radio|other")
                                                                                                                        @for($i=1;$i<=3;$i++)
                                                                                                                        <?php
                                                                                                                          $index = 'opn_'.$i;
                                                                                                                          $index = @$data->$index;
                                                                                                                           if(empty($index)) continue;
                                                                                                                           
                                                                                                                          $checked = NULL;
                                                                                                                          if(@$index === @$edit['form_3']["ans_opn_".$data->id])
                                                                                                                                $checked="checked"; 
                                                                                                                          if(@$edit['form_3']["ans_opn_".$data->id] != "Other") 
                                                                                                                                @$edit['form_3']["ans_other_text_".$data->id]=NULL;
                                                                                                                        ?>
                                                                                                                            <div class="radio-inline">
                                                                                                                                    <label class="radio radio-solid">
                                                                                                                                        <input type="radio" name="<?="ans_opn_".$data->id?>" value="<?=@$index?>" <?=$checked?> required="">
                                                                                                                                    <span></span><?=@$index?></label>
                                                                                                                                    

                                                                                                                            </div>
                                                                                                                        <?php 
                                                                                                                                    if($data->opn_other == "yes" && @$index == "Other"){
                                                                                                                                    ?>
                                                                                                                                  <input type="text" class="form-control" placeholder="Your answer" name="<?="ans_other_text_".$data->id?>" value="<?=@$edit['form_3']["ans_other_text_".$data->id]?>"> <?php }?>
                                                                                                                        @endfor
                                                                                                                        @endif
															
														</div>
													</div>
                                                                                                     @endforeach
                                                                                                     <?php
                                                                                                     
                                                                                                      $resss = DB::table('int_slots_x_student_teacher')
                                                                                                            ->join('students', 'students.id', '=', 'int_slots_x_student_teacher.student_id')
                                                                                                            ->select('int_slots_x_student_teacher.*', 'students.last_name', 'students.first_name')
                                                                                                            ->where('int_slots_x_student_teacher.slot_id', Session()->get('feedback_session_id'))                    
                                                                                                            ->get();

                                                                                                            $stud_str = array(); 
                                                                                                            foreach ($resss as $row2) { 
                                                                                                               $stud_str[] = $row2->first_name.'  '.$row2->last_name;
                                                                                                               $student_info = $edit['form_3']['student_issues'][$row2->student_id];  
                                                                                                               ?>
                                                                                                     <input type="text" style="display:none" name="student_issues[<?=$row2->student_id?>]" id="student_issues[]"  value="<?=$student_info?>">
                                                                                                     <?php
                                                                                                            }  

                                                                                           
                                                                                                     ?>
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
														
															<a href="{{url('tutor/post_feedback_2')}}" class="btn btn-secondary">Back</a>
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