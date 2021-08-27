<script>
  $('#district').change(function () {
    district = $(this).val();
    //  $('#district_school').html('Loading ...');
    
    $.ajax({
      type: "GET",
      url: "<?php echo url('ajax_laoding_data')?>?district="+district+"&action=get_multiple_schools&school_id=",
      success: function (response) {
       $('#d_school').html(response);
         $('#grade_id').html('<option value="">--Choose Grade--');
      },
      async: true
    });
  });
  
  $('#d_school').change(function () {
    school = $(this).val();
    //  $('#district_school').html('Loading ...');
    
    $.ajax({
      type: "GET",
      url: "<?php echo url('ajax_laoding_data')?>?school_id="+school+"&action=get_school_grades&district=",
      success: function (response) {
       $('#grade_id').html(response);
      
      },
      async: true
    });
  });

  // var select2_array = ['#district',"#d_school","#grade_id"];
  // for (var v in select2_array) {
  //  $(select2_array[v]).select2({
  //   allowClear: true,
  //   width: 'resolve',
  //   dropdownAutoWidth: true
  //  });
  // }
</script>