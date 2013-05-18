$(document).ready(function(){
  
  $('.col_img > img').click(function(){
      window.open(this.src, this.alt);
  })

  
  //$('.col_img > img').elevateZoom();   
  
  $('.btn_voir_prod').click(function(){
    var path = $(this).attr("data-path");
    window.open(path, "prod", "width=500, height=500");
  })

  $('.btn_ajout_prod').click(function(){
    alert('fonctionnalité en cours de construction');
  })

  $('select').change(function () {
    $("select option:selected").each(function () {
      window.location.href = ($(this).val()); 
    });
  })

  //$('.col_img > img').imageLens();
  $('.img_prod').click(function(){
    
  })
  
})

/* $('.img_prod').animate({
      opacity : 0.4
    },'slow','linear');
    });
    */