// This is a functions that scrolls to #{...}link
function goToByScroll(id){
      // Remove "link" from the ID
      //alert(id);
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $(id).offset().top-86},
        'slow');
}

function menuSwitch(id){
    $("#myNavbar ul li").removeClass("active");
    $("#myNavbar ul #"+id).addClass('active');
}
    
$("#myNavbar > ul > li").click(function(e) { 
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
     changeID= $(this).attr("id");
     menuSwitch(changeID);
     
    goToByScroll($("#myNavbar ul #"+changeID+" a").attr("href"));
    //alert($("#myNavbar ul #"+changeID+" a").attr("href")+' '+$(this).attr("id"));
});

// Scroll Check

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    
    //return (elemBottom <= docViewBottom);
}

$(window).scroll(function() {
    if (isScrolledIntoView('#navTop') === true) {        
        menuSwitch('home');
        $('#navTop .row').css('background','rgba(25,25,25,.4)');
        alert('Home');
    }else{
        $('#navTop .row').css('background','rgba(25,25,25,.8)');
        alert('Not Home');
    }
    
    if (isScrolledIntoView('#aboutDiv') === true) {
        $('#aboutDiv .col-md-12').fadeIn();
        menuSwitch('about');        
        alert('About');
    }

    if (isScrolledIntoView('#servicesDiv') === true) {
        $('#servicesDiv .col-md-12').fadeIn();
        menuSwitch('services');
        alert('services');
    }
    
    if (isScrolledIntoView('#projectsDiv') === true) {
        $('#projectsDiv .col-md-12').fadeIn();
        menuSwitch('projects');
    }
    
    if (isScrolledIntoView('#supportDiv') === true) {
        $('#supportDiv .col-md-12').fadeIn();
        menuSwitch('support');
    }

    if (isScrolledIntoView('#contactDiv') === true) {
        $('#contactDiv .col-md-12').fadeIn();
        menuSwitch('contact');
    }
    
    if (isScrolledIntoView('#follow') === true) {
        $('#follow').addClass('sc_lft_active');
    } else {
        $('#follow').removeClass('sc_lft_active');
    }
});

function checkStatus(){
        

}