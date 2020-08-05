$(document).ready(function () {

    setTimeout(function() {
      $(".toast-time-hide").fadeOut(1500);
    },5000);

    $('.lowercase').keyup(function(){
      this.value = this.value.toLowerCase();
    });

    $('.uppercase').keyup(function(){
      this.value = this.value.toUpperCase();
    });      
}); 