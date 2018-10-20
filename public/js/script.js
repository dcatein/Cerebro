
$(document).ready(function(){
   $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
   });

   $('.menu-controls').click(function(){
       $('#btn-left').toggle();
       $('#btn-right').toggle();
   });
     
});
