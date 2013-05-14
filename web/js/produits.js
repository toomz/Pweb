$(document).ready(function(){
  
  $('.img_prod').click(function(){
      window.open(this.src, this.alt, config='height=400, width=400');
  })
  /*
  $('.img_prod').elevateZoom();
  */
  $('.btn_voir_prod').click(function(){
    var source = $('.img_prod').src;
    window.open(source, " ", config='height=400, width=400');
  })
  
})
