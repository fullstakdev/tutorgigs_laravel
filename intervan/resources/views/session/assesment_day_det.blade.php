<table class='table'>
  <tr>
     <td>Assesment Date</td><td>{{date_format(date_create($as->assesment_date), 'F d,Y')}}</td>
  </tr>
  <tr>
     <td>District</td><td>{{$as->district_name}}</td>
  </tr>
  <tr>
     <td>School</td><td>{{$as->SchoolName}}</td>
  </tr>
  <tr>
     <td>Grade</td><td>{{$as->name}}</td>
  </tr>
  <tr>
     <td>Total Student</td>
     <?php 
      $resss = DB::table('students')
      ->select('students.last_name', 'students.first_name')
      ->whereIn('id', explode(',',$as->st_ids))
      ->get();


      $stud_str=array();
      foreach ($resss as $row2) {
      $stud_str[] = $row2->first_name.'  '.$row2->last_name;
      }
      $stdList=(count($stud_str)>0)? implode(",", $stud_str):"NA";
     ?>
     <td><b>({{count(explode(',',$as->st_ids))}})</b>
     </td>
     <tr>
        <td>Class list of students</td><td>{{$stdList}}</td>
     </tr>
  </tr>
   
  
</table>