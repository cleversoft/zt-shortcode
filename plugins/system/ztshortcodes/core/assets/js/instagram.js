jQuery(document).ready(function(){
  jQuery('.zt-gallery-instagram-btn').on('click', function(e){
    var img = jQuery(this).attr('data-zoom');
    if(img.length > 0) {
      jQuery('body').append('<div class="modal-instagram"><div class="modal-wrapper"><img src="'+ img +'" /><div class="modal-close"></div></div></div>').addClass('in-animate');
    }
    jQuery('.modal-close').on('click', function(){
      jQuery(this).closest('.modal-instagram').remove();
    })
  })
})