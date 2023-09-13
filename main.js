// PRODUCT JS

$('#changeImage-1').click(function()
{   
    $('#click-change').fadeOut(100, 'swing', function()
    {
        $(this).fadeIn(100).attr({src : 'img/men-bg.jpg'});
    })
    $('#text-change').fadeOut('200', 'swing', function()
    {
        $(this).html('Men Fashion').fadeIn(500);
    });

    $.post('product-list.php', {gender: 'male'}, function(data)
    {
        $('.products-card').fadeOut(200, 'swing', function()
        {
                $(this).html(data).fadeIn(500);
        }); 
    });
})

$('#changeImage-2').click(function()
{
    $('#click-change').fadeOut(100, 'swing', function()
    {
        $(this).fadeIn(100).attr({src : 'img/women-bg.jpg'});
    })
    $('#text-change').fadeOut(200, 'swing', function()
    {
        $(this).html('Women Fashion').fadeIn(500);
    });

    $.post('product-list.php', {gender: 'female'}, function(data)
    {
        $('.products-card').fadeOut('200', 'swing', function()
        {
            $(this).html(data).fadeIn(500);
        });
    });
})

$('#changeImage-3').click(function()
{
    $('#click-change').fadeOut(100, 'swing', function()
    {
        $(this).fadeIn(100).attr({src : 'img/all-bg.jpg'});
    })
    $('#text-change').fadeOut(200, 'swing', function()
    {
        $(this).html('All Collection').fadeIn(500);
    });

    $.post('product-list.php', {gender: 'all'}, function(data)
    {
        $('.products-card').fadeOut('200', 'swing', function()
        {
            $(this).html(data).fadeIn(500);
        });
    });
})

// ABOUT JS

$('.user-template .card').mouseover(function()
{
    $(this).removeClass('shadow-sm').addClass('shadow').css('transform', "translateY(-2%)")
    .find('img').css({'transform' : "scale(1.05)", 'transition' : "ease-in 0.2s"})
})

$('.user-template .card').mouseout(function()
{
    $(this).removeClass('shadow').addClass('shadow-sm').css('transform', "translateY(0)")
    .find('img').css({'transform' : "scale(1)", 'transition' : "ease-in 0.2s"})
})

// Social Media Sharer

$('#shareFb').click(function()
{
    u = 'klothee.rf.gd';
    t = $('#share-desc').text();

    window.open("http://www.facebook.com/sharer.php?u=https://klothee.rf.gd&t='Ini adalah contoh produk'");
})

$('.menu .nav-bar').click(function(e)
{
    e.stopPropagation();
    $('.mobile-header').animate({'right': '0'}, 500)
})

$('body').click(function()
{   

    $('.mobile-header').animate({'right': '-300px'}, 500)
})

$('.responsive-menu a').mouseover(function()
{
    $(this).css({
        'background': 'white',
        'transition': '0.3s ease-in-out',
        'cursor': 'pointer',
        'color': '#333'});
})

$('.responsive-menu a').mouseout(function()
{
    $(this).css({
        'background': '#333',
        'transition': '0.3s ease-in-out',
        'color': 'white'});
})