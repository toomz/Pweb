$(document).ready(function(){
  
  $('.col_img > img').click(function(){
      window.open(this.src, this.alt);
  })

  $('.col_img > img').elevateZoom();   
  
  $('.btn_voir_prod').click(function(){
    var path = $(this).attr("data-path");
    window.open(path, "prod", "width=650, height=450");
  })

  $('.btn_ajout_prod').click(function(){
    alert('fonctionnalité en cours de construction');
  })

  $('select').change(function () {
    $("select option:selected").each(function () {
      window.location.href = ($(this).val()); 
    });
  })
  
})
