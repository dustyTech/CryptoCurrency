
// start oboy leyyyy scroll magin
$(document).ready(function(){
        // init controller
var controller = new ScrollMagic.Controller();

// create a scene
var ourScene = new ScrollMagic.Scene({
       triggerElement: '.four-col-section'
    })
    .setClassToggle(".four-col-section","fade-in") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

    //pining element 
    var pinIntroElement = new ScrollMagic.Scene({
    	triggerElement: '#main-bg',
    	triggerHook: 0,
    	duration: '30%'
    })
    .setPin('#main-bg',{pushFollowers: false})
    .addTo(controller)
    

    // create another pining element for the nav bar 
    var pinNav = new ScrollMagic.Scene({
    	triggerElement: '.col-nav-area',
    	triggerHook: 0,
    	duration: 'auto'
    })
    .setPin('.col-nav-area',{pushFollowers: false})
    .addTo(controller)
    

    // create for the columnn choose us 
    //create scene 
    var OurSceneChoose = new ScrollMagic.Scene({
    	triggerElement: '.choose-us-reason-txt'
    })
    .setClassToggle(".choose-us-reason-txt","fade-in-choose")
    .addTo(controller)
    

    // creating a scene for market overview

    var marketOverViewImg = new ScrollMagic.Scene({
       triggerElement: '.market-o'
    })
    .setClassToggle(".market-o-img","fade-in-market-0") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller


    var marketOverViewImg = new ScrollMagic.Scene({
       triggerElement: '.market-o'
    })
    .setClassToggle(".youtube","fade-in-market-0") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller


    // trade option 
     var marketOverViewImg = new ScrollMagic.Scene({
       triggerElement: '.trade-option'
    })
    .setClassToggle(".trade-option-2","fade-in-trade") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

    var marketOverViewImg = new ScrollMagic.Scene({
       triggerElement: '.trade-option'
    })
    .setClassToggle(".trade-option-1","fade-in-trade") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

    // for those small small icon

    var eightIcon = new ScrollMagic.Scene({
       triggerElement: '.best-option'
    })
    .setClassToggle(".eight-icon","fade-in-eight") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

     var eightIcon = new ScrollMagic.Scene({
       triggerElement: '.best-option'
    })
    .setClassToggle(".eight-icon-others","fade-in-eight") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

    // footer
    var footer = new ScrollMagic.Scene({
       triggerElement: '.footer'
    })
    .setClassToggle(".footer","fade-in-footer") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller

    // pricing
    var pricing = new ScrollMagic.Scene({
       triggerElement: '.price-package'
    })
    .setClassToggle(".price-sec","fade-in-price") // pins the element for the the scene's duration
    .addTo(controller)
     // add indicators (requires plugin) // assign the scene to the controller


  }); // end scroll magin 
