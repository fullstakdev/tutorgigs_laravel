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

.warning{background-color: #fcf8e3;}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;

</style>
@endsection
@section('content')
					<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Session List</h5>
									<!--end::Page Title-->
									
								</div>
								
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                            
                                                            @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<!--begin::Notice-->
                                                                
                                                                
								<div class="card card-custom  gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Session List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">554 Sessions</span>
												</h3>
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															<table id="tutor_table" class="table  table-vertical-center">
																
																
    <thead>
        <tr role="row">
            <th class="p-0 w-30px">
                
               
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			
            </th>
            <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 14px;" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 217px;" aria-label="Sess Time: activate to sort column ascending">Sess Time</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 78px;" aria-label="Sess ID: activate to sort column ascending">Sess ID</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 133px;" aria-label="Virtual Board: activate to sort column ascending">Virtual Board</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 97px;" aria-label="Status: activate to sort column ascending">Status</th></tr>
    </thead>
    <tbody>

								<tr data-child-value="
           
                 
    
    <blockquote class='blockquote'>
  <p style='font-size:14.5px'>Observer <strong>test2</strong> joined the session <strong>6546</strong> by 2021-04-02 10:06am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
   <blockquote class='blockquote'>
  <p style='font-size:14.5px'>Observer <strong>test2</strong> joined as instructor to the session  <strong>6546</strong> by 2021-04-02 09:35am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

 <blockquote>
 <h3>Survey Result</h3>
 <hr>
<table class='table'  style='font-size:14px'>
<thead><th>Question</th><th>Answer</th></thead>
               <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;' >Session ID</td>
                   <td>6546</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Session Start Time</td><td>March 23,2021&nbsp;11:15 PM</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>What Objective did you cover ?</td><td>5th Grade Math</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you finish the session completely?</td>
                   <td>Yes</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>How many students did you have in your tutor session</td><td>1</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students participating by joining the conversation and answering questions? </td>
                   <td>
                   Yes                   </td>
                </tr >
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students engaged the entire time?</td>
                   <td>yes</td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did students understand the lesson? </td>
                   <td>
                    No                   </td>
                </tr>
               
                           <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do students need additional lessons on this objective? </td>
                   <td>
                    Yes                    </td>
                </tr>
               
                            
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Please enter student's name and tell the teacher about any Behavior Issues</td>
                   <td><p>f df guuu</p></td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the lesson provided by Tutorgigs clear?</td>
                   <td>
                   Yes                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do you have everything you need to successfully tutor?</td>
                   <td>
                   No                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you have adequate time for the lesson?</td>
                   <td>
                   Yes                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you experience any technology issues?</td>
                   <td>
                   Yes                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the system difficult to use?</td>
                   <td>
                   Easy                   </td></tr>
                         </table> </blockquote>           " role="row" class="odd">
                                                                    <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
           
            <td class="details-control sorting_1"></td>
            <td>
                March 23,2021 23:15 pm                
            </td>
            <td>6546</td>
            <td>Newrow</td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> complete survey of the session </strong> by 2021-04-03 13:12pm</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test2</strong> claimed the session 6606</strong> by 2021-04-02 09:34am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

 <blockquote>
 <h3>Survey Result</h3>
 <hr>
<table class='table'  style='font-size:14px'>
<thead><th>Question</th><th>Answer</th></thead>
               <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;' >Session ID</td>
                   <td>6606</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Session Start Time</td><td>April 02,2021&nbsp;03:00 AM</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>What Objective did you cover ?</td><td>5th Grade Math</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you finish the session completely?</td>
                   <td>No</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>How many students did you have in your tutor session</td><td>5</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students participating by joining the conversation and answering questions? </td>
                   <td>
                   Somewhat                   </td>
                </tr >
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students engaged the entire time?</td>
                   <td>yes</td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did students understand the lesson? </td>
                   <td>
                    Yes                   </td>
                </tr>
               
                           <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do students need additional lessons on this objective? </td>
                   <td>
                    Other test                   </td>
                </tr>
               
                            
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Please enter student's name and tell the teacher about any Behavior Issues</td>
                   <td><p>test r tttf gghj ghhjj</p></td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the lesson provided by Tutorgigs clear?</td>
                   <td>
                   Yes                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do you have everything you need to successfully tutor?</td>
                   <td>
                   Other wer ttyyuuu                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you have adequate time for the lesson?</td>
                   <td>
                   Yes                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you experience any technology issues?</td>
                   <td>
                   No                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the system difficult to use?</td>
                   <td>
                   Challenging                   </td></tr>
                         </table> </blockquote>           " role="row" class="even">
            
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 02,2021 03:00 am                
            </td>
            <td>6606</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test</strong> claimed the session 6613</strong> by 2021-04-05 07:52am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="odd">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 05,2021 00:00 am                
            </td>
            <td>6613</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Observer <strong>test</strong> joined as instructor to the session  <strong>6614</strong> by 2021-04-06 01:22am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Observer <strong>test</strong> joined as instructor to the session  <strong>6614</strong> by 2021-04-06 01:21am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test</strong> claimed the session 6614</strong> by 2021-04-06 01:20am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6614</strong> by 2021-04-06 01:08am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="even">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 02:00 am                
            </td>
            <td>6614</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Observer <strong>Tech Support </strong> joined as instructor to the session  <strong>6615</strong> by 2021-04-06 01:31am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>Tech Support </strong> claimed the session 6615</strong> by 2021-04-06 01:31am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6615</strong> by 2021-04-06 01:26am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="odd">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 01:35 am                
            </td>
            <td>6615</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong></strong> joined the session <strong>6617</strong> by 2021-04-06 02:17am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong></strong> joined the session <strong>6617</strong> by 2021-04-06 02:09am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test2</strong> claimed the session 6617</strong> by 2021-04-06 02:04am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong></strong> joined the session <strong>6617</strong> by 2021-04-06 01:55am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test</strong> claimed the session 6617</strong> by 2021-04-06 01:54am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="even">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 08:00 am                
            </td>
            <td>6617</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong></strong> joined the session <strong>6618</strong> by 2021-04-06 02:18am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test</strong> claimed the session 6618</strong> by 2021-04-06 02:16am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6618</strong> by 2021-04-06 02:14am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="odd">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 09:00 am                
            </td>
            <td>6618</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> completed survey of the session 6621</strong> by 2021-04-06 12:31pm</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6621</strong> by 2021-04-06 06:15am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

 <blockquote>
 <h3>Survey Result</h3>
 <hr>
<table class='table'  style='font-size:14px'>
<thead><th>Question</th><th>Answer</th></thead>
               <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;' >Session ID</td>
                   <td>6621</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Session Start Time</td><td>April 07,2021&nbsp;03:00 AM</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>What Objective did you cover ?</td><td>5th Grade Math</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you finish the session completely?</td>
                   <td>No</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>How many students did you have in your tutor session</td><td>0</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students participating by joining the conversation and answering questions? </td>
                   <td>
                                      </td>
                </tr >
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students engaged the entire time?</td>
                   <td></td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did students understand the lesson? </td>
                   <td>
                    Other test                   </td>
                </tr>
               
                           <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do students need additional lessons on this objective? </td>
                   <td>
                    Other test                    </td>
                </tr>
               
                            
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Please enter student's name and tell the teacher about any Behavior Issues</td>
                   <td>vv dfbf  ff ffff fffff</td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the lesson provided by Tutorgigs clear?</td>
                   <td>
                   Challenging                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do you have everything you need to successfully tutor?</td>
                   <td>
                   Challenging                     </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you have adequate time for the lesson?</td>
                   <td>
                   Challenging                     </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you experience any technology issues?</td>
                   <td>
                   Challenging                     </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the system difficult to use?</td>
                   <td>
                   Challenging                     </td></tr>
                         </table> </blockquote>           " role="row" class="even">
            <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
           
            <td class="details-control sorting_1"></td>
            <td>
                April 07,2021 03:00 am                
            </td>
            <td>6621</td>
            <td></td>
            <td>incomplete</td>
           
        </tr>
        <tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> completed survey of the session 6622</strong> by 2021-04-06 12:44pm</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6622</strong> by 2021-04-06 12:44pm</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

 <blockquote>
 <h3>Survey Result</h3>
 <hr>
<table class='table'  style='font-size:14px'>
<thead><th>Question</th><th>Answer</th></thead>
               <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;' >Session ID</td>
                   <td>6622</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Session Start Time</td><td>April 07,2021&nbsp;01:00 AM</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>What Objective did you cover ?</td><td>3rd Grade Math</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you finish the session completely?</td>
                   <td>No</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>How many students did you have in your tutor session</td><td>2</td>
                </tr>
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students participating by joining the conversation and answering questions? </td>
                   <td>
                   Yes                   </td>
                </tr >
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Were students engaged the entire time?</td>
                   <td>yes</td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did students understand the lesson? </td>
                   <td>
                    Yes                   </td>
                </tr>
               
                           <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do students need additional lessons on this objective? </td>
                   <td>
                    No                    </td>
                </tr>
               
                            
                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Please enter student's name and tell the teacher about any Behavior Issues</td>
                   <td><p>dggg hhhhhh</p></td>
                </tr>
                
                                <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the lesson provided by Tutorgigs clear?</td>
                   <td>
                   Yes                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Do you have everything you need to successfully tutor?</td>
                   <td>
                   No                    </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you have adequate time for the lesson?</td>
                   <td>
                   Yes                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Did you experience any technology issues?</td>
                   <td>
                   Yes                   </td></tr>
                                         <tr >
                   <td class='warning' style='word-wrap: break-word;min-width: 60%;max-width: 60%;white-space:normal;'>Was the system difficult to use?</td>
                   <td>
                   Challenging                   </td></tr>
                         </table> </blockquote>           " role="row" class="odd">
            
            <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
           
            <td class="details-control sorting_1"></td>
            <td>
                April 07,2021 01:00 am                
            </td>
            <td>6622</td>
            <td>Newrow</td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong></strong> joined the session <strong>6624</strong> by 2021-04-08 09:59am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Tutor <strong>test2</strong> claimed the session 6624</strong> by 2021-04-08 09:58am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="even">
           <td class="pl-0 py-4">
                                                                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
			</td>
            <td class="details-control sorting_1"></td>
            <td>
                April 08,2021 10:00 am                
            </td>
            <td>6624</td>
            <td></td>
            <td>incomplete</td>
           
        </tr></tbody>
							</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
                                                                                            
                                                                                            <div class="col-md-12" style="text-align:center;margin-bottom: 15px">
        <button type="submit" class="btn  btn-primary" name="submit">Create Observer Job</button>
    </div>
											</div>
											<!--end::Body-->
										</div>
                                                                
                                                                <div class="">
                                                                    <div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Created Observer Job</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 10+ jobs</span>
												</h3>
                                                                                            
                                                                                            
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															<table id="tutor_table" class="table  table-vertical-center">
																<thead>
																	<tr>
																		
																		<th class="p-0 min-w-230px">Observer Job ID</th>
																		<th class="p-0 min-w-100px text-right">SESSION ID</th>
																		<th class="p-0 min-w-100px text-right">ASSIGNED OBSERVER</th>
																		
																		<th class="p-0 min-w-150px text-right">ACTION</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                  <tr role="row" class="odd">
																		
																		<td class="pl-0">
																			000045																		</div>
																		</td>
																		<td class="text-right">
																			6699, 4456, 6689
																			
																		</td>
																		<td class="text-right">
																			test2 test2
																		</td>
																		
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    			<a href="" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		
																	</a>
                                                                                                                                    																</li>
																
                                                                                                                                																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Delete</span>
																		</span>
																	</a>
																</li>
                                                                                                                                																<li class="navi-item">
                                                                                                                                    
                                                                                                                                   
																</li>
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        
                                                                                                                                       
                                                                                                                                        <tr role="row" class="even">
																		
																		<td class="pl-0">
																			000445																		</div>
																		</td>
																		<td class="text-right">
																			5677, 3456, 6899
																			
																		</td>
																		<td class="text-right">
																			Saifur Rahman
																		</td>
																		
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    			<a href="" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		
																	</a>
                                                                                                                                    																</li>
																
                                                                                                                                																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Delete</span>
																		</span>
																	</a>
																</li>
                                                                                                                                																<li class="navi-item">
                                                                                                                                    
                                                                                                                                   
																</li>
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr role="row" class="odd">
																		
																		<td class="pl-0">
																			000345																		</div>
																		</td>
																		<td class="text-right">
																			5556, 23455, 67890
																			
																		</td>
																		<td class="text-right">
																			samtha mathwes
																		</td>
																		
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    			<a href="" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		
																	</a>
                                                                                                                                    																</li>
																
                                                                                                                                																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Delete</span>
																		</span>
																	</a>
																</li>
                                                                                                                                																<li class="navi-item">
                                                                                                                                    
                                                                                                                                   
																</li>
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
                                                                </div>
								<!--end::Notice-->
								<!--begin::Card-->
								
								
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