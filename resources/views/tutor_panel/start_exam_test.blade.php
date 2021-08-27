@extends('template.tutor_container')
@section('css')
<style>
.list-answers img{
  max-width:100%;
  height: auto;
  padding-top: 18px;
}

.questions-detail p img{
  width:100%;
  height: auto;
}
.form-register .steps li a .title .step-icon { margin-right:70px !important;}
.form-register .steps li a .step-text { font-size:12px !important;}
.form-register .steps li a .title .step-icon {
    width: 35px;
    height: 35px;
}
.form-register .steps ul { padding-left:45px !important;}

fieldset 
	{
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;       
		position: relative;
		border-radius:4px;
		
		padding-left:20px!important;
                margin-top: 5rem;
	}	
	
		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px; 
			width: 35%; 
			border: 1px solid #ddd;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #f5f5f5;
		}
</style>
@endsection
@section('content')

<?php

$tutor_id = Auth::guard('tutor')->user()->id;
if(@isset($_GET['test_id']))
{
 $test_id = $_GET['test_id'];
         
         $results_data = DB::connection('mysql_2')->table('questions')->where('TestID', $test_id)->get();
         
         $assessment = array();
         $assessment['assessment']['ses_test_id'] = $test_id; 
         $assessment['assessment']['assesment_id'] = $test_id;
         $qn_list = array();
         foreach($results_data as $row)
         {
             $assessment['qn_list'][] = $row->ID;
         }
        
        Request::session()->put('assessment',$assessment);
}
else
{
    $test_id = Request::session()->get('assessment')['assessment']['ses_test_id'];
}
  
         
         
         
         $cur_test_id = Request::session()->get('assessment')['assessment']['ses_test_id'];
     
         $total_attempted = DB::connection('mysql_2')->table('tutor_result_logs')->where('tutor_id', $tutor_id)->where('test_id', $test_id)->count();
         $test_result_data = DB::connection('mysql_2')->table('tests')->where('ID', $test_id)->first();
         
         $get_result = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id', $tutor_id)->where('quiz_test_id', $cur_test_id);
         $rowcount = $get_result->count();
         $get_result = $get_result->get();
         
         
        $quiz_type = $test_result_data->Name;
       
         if($rowcount == 0){ 
             
             $created = date("Y-m-d H:i:s");
             
             DB::connection('mysql_2')->table('tutor_tests_logs')->insert([
                    'tutor_id' => Auth::guard('tutor')->user()->id,
                    'test_type' => $quiz_type,
                    'school_id' => 0,
                    'quiz_test_id' => $cur_test_id,
                    'completion_date' => date("Y-m-d H:i:s"),
                    'status' => 'process',
                    'assigned_date' => date("Y-m-d H:i:s")
                ]);
         }
         else
         {
             DB::connection('mysql_2')->update("update tutor_tests_logs set  status = 'in_process' where tutor_id = '".Auth::guard('tutor')->user()->id."' AND quiz_test_id = '".$cur_test_id."'");
         }
        
         if (@$_GET['pos']) 
         { 
          
           $qn_id = @Request::session()->get('assessment')['qn_list'][@$_GET['pos']];

           $prev = (@$_GET['pos'] - 1);
           $next = (@$_GET['pos'] + 1);
         } 
         else 
         {
            $qn_id = Request::session()->get('assessment')['qn_list'][0];
            $prev = -1;
            $next = 1;
         }
         if(!@$_GET['pos'] || @$_GET['pos'] == 0) {
            $current_qn = 1;
         }else{
           $current_qn = @$_GET['pos'] + 1;
         }

         $show_qn_id=$qn_id;
         
         $qdata = DB::connection('mysql_2')->table('questions')->where('ID', $show_qn_id);
         $tot_ques = $qdata->count(); 
         if($tot_ques > 0)
         {
            $qdata = $qdata->first();
            $record = array();
            $options_is_str = $qdata->OptionIDs;

            $sql_answer = DB::connection('mysql_2')->table('answers')->whereIn('ID', explode(",", $options_is_str))->get();

            if(isset($show_qn_id)){
                $attempted = DB::connection('mysql_2')->table('tutor_result_logs')->where('qn_id', $show_qn_id)->where('tutor_id', $tutor_id)->where('test_id', Request::session()->get('assessment')['assessment']['ses_test_id'])->first();
                $old_choose= @$attempted->answer;
            }

            $opn_arr = array();
            foreach($sql_answer as $row)
            {
                $opn_arr[] = $row->Answer;
            }

            $record['title'] = $qdata->Question; //actual question
            $record['id'] = $qdata->ID;
         }
        
?>
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Complete Test Quiz</h2>
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
								
                                                                    <form name="form_class" id="form_class" method="post" action="{{url('tutor/submit_test_question')}}"  enctype="multipart/form-data" onsubmit='return checkanswer(this)'>
                                                                                            @csrf
                                                                                <input type="hidden" name="ques_no" value="{{$next}}">            
                                                                                            @if($tot_ques>0)
                                                                                            <div class="row">
										<div class="col-sm-12">
										 
                                                                                    <div class="card card-custom gutter-b" >
											<div class="card-header">
												<h3 class="card-title">Question # <?=$current_qn?></h3>
												
											</div>
											<!--begin::Form-->
					                                                    
                                                                                            
                                                                                            <div class="card-body">
													
													<div class="form-group row">
														<div class="col-lg-12">
                                                                                                                    <div class="questions-detail"   style="font-size:14px"> 
															<?=$record['title']; //?>
                                                                                                                        </div>
                                                                                                                  
                                                                                                                  
                                                                                                                 <div class="form-group">
														   <fieldset>    	
					<legend>Choose Your Answer</legend>
														<div class="radio-list list-answers">
															<label class="radio">A )&nbsp;&nbsp;&nbsp;
															<input type="radio" name="answer" value="0"  <?=(isset($attempted->qn_id)&&$old_choose==0)?'checked':null?>>
															<span></span> <?php  echo $opn_arr[0];?></label>
                                                                                                                    
															<label class="radio">B )&nbsp;&nbsp;&nbsp;
															<input type="radio" name="answer" value="1"  <?=($old_choose==1)?'checked':null?>>
															<span></span> <?php  echo $opn_arr[1];?></label>
                                                                                                                    
															<label class="radio">C )&nbsp;&nbsp;
															<input type="radio" name="answer" value="2"  <?=($old_choose==2)?'checked':null?>>
															<span></span> <?php  echo $opn_arr[2];?></label>
                                                                                                                       
                                                                                                                       <label class="radio">D )&nbsp;&nbsp;&nbsp;
															<input type="radio" name="answer" value="3"  <?=($old_choose==3)?'checked':null?>>
															<span></span> <?php  echo $opn_arr[3];?></label>
														</div>
                                        </fieldset>	
													</div>                                                                                                                                   
                                                                                                                        															
														</div>
													</div>
                                                                                                       
                                                                                                   
												</div>
												<div class="card-footer">
													<div class="row">
                                                                                                            <input type="hidden" name="question_id" value="<?=$record['id']?>">
														<div class="col-lg-6">
														 <?php if ($prev != -1) { ?>
															<a href="{{url('tutor/start_test')}}?pos=<?php print $prev; ?>" class="btn btn-secondary">Back</a>
                                                                                                                 <?php } ?>      
														</div>
														<div class="col-lg-6 text-lg-right">
														
                                                                                                                         <input type="submit" class="btn btn-primary submit_button"  name="next" value="Next" >
														</div>
													</div>
												</div>
											
											<!--end::Form-->
										</div>
										
									</div></div>
                                                                                            @else
                                                                                            <div class="row">
                                                                                            <div class="col-xl-12">
										 
                                                                            <div class="card card-custom gutter-b example example-compact">
											
                                                                                            <div class="card-body">
													
                                                                                                        <div class="jumbotron" style="background-color: #fff;text-align: center">
                                                                                                            <h2>You've Answered Every Question!</h1>
                                                                                                            <span></p>
                                                                                                            <p><a class="btn btn-primary btn-lg" href="{{url('tutor/start_test')}}" role="button">Go Back and Check Work</a>

                                                                                                                                                  <input type="submit" class="btn btn-success btn-lg submit_button"  name="complete" value="I'm done!" >
                                                                                                                                               </p>   
                                                                                                          </div>	
                                                                                                    
												</div>
												
											
											<!--end::Form-->
										</div>
										
									</div></div>
                                                                                            @endif
                                                                                            
								
								</form>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection
                                        @section('js')
                                        <script>
                                         function checkanswer(frm)
                                         {
                                            var val =  $('input[name="answer"]:checked').val();
                                            if(val)
                                            {
                                               return true;
                                            }
                                            else
                                            {
                                                alert('Please chosoe an asnser');
                                                return false;
                                            }
                                         }
                                         </script>
                                        @endsection