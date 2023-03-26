
// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:2
//         },
//         1000:{
//             items:3
//         }
//     }
// })

$(function(){

    $('.navbar').on('click', 'a', function(){
        $('.navbar a.active').removeClass('active');
        $(this).addClass('active');
    })
    $('.nav').on('click', 'a', function(){
        $('.nav a.active').removeClass('active');
        $(this).addClass('active');
    })

    $('.menu #starter').click(function(){
        $('#img-1').attr('src','assets/img/menu/menu-item-1.png');
        $('#img-2').attr('src','assets/img/menu/menu-item-2.png');
        $('#img-3').attr('src','assets/img/menu/menu-item-3.png');
        $('#img-4').attr('src','assets/img/menu/menu-item-4.png');
        $('#img-5').attr('src','assets/img/menu/menu-item-5.png');
        $('#img-6').attr('src','assets/img/menu/menu-item-6.png');
    })
    
    $('#bfast').click(function(){
        $('#img-1').attr('src','assets/img/menu/menu-item-6.png');
        $('#img-2').attr('src','assets/img/menu/menu-item-5.png');
        $('#img-3').attr('src','assets/img/menu/menu-item-4.png');
        $('#img-4').attr('src','assets/img/menu/menu-item-3.png');
        $('#img-5').attr('src','assets/img/menu/menu-item-2.png');
        $('#img-6').attr('src','assets/img/menu/menu-item-1.png');
    })

    $('.menu #lunch').click(function(){
        $('#img-1').attr('src','assets/img/menu/menu-item-3.png');
        $('#img-2').attr('src','assets/img/menu/menu-item-2.png');
        $('#img-3').attr('src','assets/img/menu/menu-item-1.png');
        $('#img-4').attr('src','assets/img/menu/menu-item-6.png');
        $('#img-5').attr('src','assets/img/menu/menu-item-5.png');
        $('#img-6').attr('src','assets/img/menu/menu-item-4.png');
    })
    
    $('.menu #dinner').click(function(){
        $('#img-1').attr('src','assets/img/menu/menu-item-2.png');
        $('#img-2').attr('src','assets/img/menu/menu-item-1.png');
        $('#img-3').attr('src','assets/img/menu/menu-item-4.png');
        $('#img-4').attr('src','assets/img/menu/menu-item-5.png');
        $('#img-5').attr('src','assets/img/menu/menu-item-3.png');
        $('#img-6').attr('src','assets/img/menu/menu-item-6.png');
    })

})  