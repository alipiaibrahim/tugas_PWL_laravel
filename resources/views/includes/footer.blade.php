<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
<div class="site-footer">
    <p>Copyright © 2021 Dinamika Book. All Rights Reserved </p>
</div>
</script>
 <script> 
//     $(document).ready(function(){ 
//         $(window).scroll(function(){ 
//             if ($(this).scrollTop() > 500) { 
//                 $('#scroll').fadeIn(); 
//             } else { 
//                 $('#scroll').fadeOut(); 
//             } 
//     }); 
//     $('#scroll').click(function(){ 
//         $("html, body").animate({ scrollTop: 0 }, 500); 
//         return false; 
//     }); 
// });
//
$(document).on('ajaxComplete ready', function () {
    $('.modalMd').off('click').on('click', function () {
        $('#modalMdContent').load($(this).attr('value'));
        $('#modalMdTitle').html($(this).attr('title'));
    });
});
</script>