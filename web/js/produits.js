$(document).ready(function(){
  
  $('.col_img > img').click(function(){
      window.open(this.src, this.alt);
  })

//  $('.col_img > img').elevateZoom();   
  
  $('.btn_voir_prod').click(function(){
    var path = $(this).attr("data-path");
    window.open(path);
  })

  $('.btn_ajout_prod').click(function(){
    alert('fonctionnalité en cours de construction');
  })

  $('select').change(function () {
    //var str = "";
    $("select option:selected").each(function () {
      $("#test").text($(this).val());
      //str += $(this).val() + " ";
      //str += $(this).text() + " ";
    });
  })
  
})
