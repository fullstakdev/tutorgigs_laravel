<script>
  
  function showPaymentRate(duration){
            var certificate_val = $("#certificate_required").val();
            if(duration==''){
              $("#payment_rate").val('0');
              return false;
            }
            $.ajax({
              type: 'GET',
              url : '{{route("payment.get_payment_rate")}}',
              data : { duration:duration, certified:certificate_val},
              success :  function(data){
                $("#payment_rate").val(data);
                $("#payment_rate_div").show('slow');
              },
              error : function(data){

              }
            });
          }
          $("#certificate_required").change(function(){
              $("#duration_id").change();
              
          });
</script>