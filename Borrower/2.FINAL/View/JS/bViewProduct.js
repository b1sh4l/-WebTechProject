const btnrent = document.getElementById('btnrent');
const orid = document.getElementById('orid');

<script src="../View/JSjquery.js"></script>
jQuery(function($) {
	$("submit").hide();
  $("input[type='radio']:checked").each(function(e){
  		$(this).closest('.orid').find("submit").show();
  });
  $("body").on("change","input[type='radio']" ,function(){
    $(this).closest('.orid').find("submit").show();
  });

  $("body").on("click","submit" ,function(){
    $(this).closest('.orid').find("input[type='radio']:checked").prop("checked",false);
    $(this).hide();
  });
})
/*if (document.document.querySelector('#orid').checked) {
    document.getElementById('btnrent').style.display='visible';
  } 
else {
    document.getElementById('btnrent').style.visibility='hidden';
  }*/
