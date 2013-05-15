$(document).ready(function(){
  
  $('.img_prod').click(function(){
      window.open(this.src, this.alt, config='height=1000, width=1000');
  })

  $('.col_img > img').elevateZoom();   
  
  $('.btn_voir_prod').click(function(){
    var path = $(this).attr("data-path");
    window.open(path, "_newtab", config='height=400, width=400, ');
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
