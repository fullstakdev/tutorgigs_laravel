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
					<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                            
                                                            @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<!--begin::Notice-->
                                                                
                                                                
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Suspened Sessions By Admin</span>
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
        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 14px;" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 217px;" aria-label="Sess Time: activate to sort column ascending">Sess Time</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 78px;" aria-label="Sess ID: activate to sort column ascending">Sess ID</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 133px;" aria-label="Virtual Board: activate to sort column ascending">Virtual Board</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 97px;" aria-label="Status: activate to sort column ascending">Status</th></tr>
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
           
            <td class="details-control sorting_1"></td>
            <td>
                March 23,2021 23:15 pm                
            </td>
            <td>6546</td>
            <td>Newrow</td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 02,2021 03:00 am                
            </td>
            <td>6606</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
    <blockquote>
  <p style='font-size:14.5px'>Obserevr <strong>test</strong> claimed the session 6613</strong> by 2021-04-05 07:52am</p>
  <footer class='blockquote-footer'> <cite >By <strong>Observer </strong>&nbsp;04/02/2021 09:35am</cite> <span class='label label-danger label-inline font-weight-lighter mr-2' style='float:right'>Delete</span></footer>
</blockquote>
            
                
                

          " role="row" class="odd">
           
            <td class="details-control sorting_1"></td>
            <td>
                April 05,2021 00:00 am                
            </td>
            <td>6613</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 02:00 am                
            </td>
            <td>6614</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 01:35 am                
            </td>
            <td>6615</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 08:00 am                
            </td>
            <td>6617</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 06,2021 09:00 am                
            </td>
            <td>6618</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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
           
            <td class="details-control sorting_1"></td>
            <td>
                April 07,2021 03:00 am                
            </td>
            <td>6621</td>
            <td></td>
            <td>incomplete</td>
           
        </tr><tr data-child-value="
           
                 
    
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