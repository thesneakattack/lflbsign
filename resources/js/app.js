import './bootstrap';
import './jquery.tabbable';
// jquery enabled section
$(() => {
    $('#scrollDown').on("click", (function(){
        // $('#result-div').trigger('rollbar',[+0.15])
        $("#contentArea").animate({ scrollTop: $("#contentArea").scrollTop() + 608 }, 250);
    }));
    $('#scrollUp').on("click", (function(){
        // $('#contentArea').trigger('rollbar',[-0.15]);
        $("#contentArea").animate({ scrollTop: $("#contentArea").scrollTop() - 608 }, 250);
    })); 
});

Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
    get: function(){
        return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
})

function idleLogout() {
    var t;
    window.onload = resetTimer;
    // window.onmousemove = resetTimer;
    window.onmousedown = resetTimer; // catches touchscreen presses
    window.onclick = resetTimer;     // catches touchpad clicks
    window.onscroll = resetTimer;    // catches scrolling with arrow keys
    window.addEventListener('scroll', resetTimer, true);
    window.onkeypress = resetTimer;

    function logout() {
        if(document.querySelector('video') && document.querySelector('video').playing){ // checks if element is playing right now
            console.log("Video playing. Idle timer reset.")
            resetTimer();
        }else{
            if((typeof defaultTopic === 'undefined')){
                console.log("CON1");
                return false;
            }
            else{
                if(typeof homePage === 'undefined'){
                    console.log("CON2");
                    window.location.href = '/topics/' + defaultTopic;
                }else{
                    if(defaultTopic === userDefinedTopic){
                        console.log("CON3");
                        return false;
                    }else{
                        console.log("CON4");
                        window.location.href = '/topics/' + defaultTopic;
                    }
                }
            }
        }        
    }

    //CON 1: defaultTopic undefined, userDefinedTopic undefined: DO NOTHING

    //CON 2: defaultTopic defined, homePage undefined: GO TO DEFAULT HOME PAGE
    //CON 3: defaultTopic defined, homePage defined, defaultTopic =/= userDefinedTopic: GO TO DEFAULT HOME PAGE
    //CON 4: defaultTopic defined, homePage defined, defaultTopic == userDefinedTopic: DO NOTHING


    function resetTimer() {
    	console.log("Event logged. Idle timer reset.")
        clearTimeout(t);
        t = setTimeout(logout, 90000);  // time is in milliseconds
        // t = setTimeout(logout, 90000000);  // time is in milliseconds
    }
}

idleLogout();






// TAB JQUERY UTILITY AND DEMO

// http://jsfiddle.net/Kgzzx/80/
// https://github.com/marklagendijk/jQuery.tabbable


// FOR ADDITIONAL DOCUMENTATION AND DETAILS REGARDING KEYPRESS AND TAB/FOCUS BEHAVIOR BELOW:

// https://stackoverflow.com/questions/8546252/how-to-simulate-tab-on-enter-keypress-in-javascript-or-jquery
// https://stackoverflow.com/questions/11277989/how-to-get-the-focused-element-with-jquery

$(() => {
    $(document).on('keydown', handleDocumentKeyDown);
	$(".menu-btn").on('click', (function(event){
		// event.preventDefault(); //Slide out ADA NAV options to the left (this is handled with CSS Animation)
            // $("nav").toggleClass("slideLeft"); 
            $("div.ada-nav").css({"overflow" : "initial"}); //DISABLE OVERFLOW SO THAT THE SELECTION OPTIONS APPEAR (animated with slideOut animation defined in ada-nav.css)
        }));
	// $('a').on('click', (function() {
	// 	// window.location.href = this.href; //THIS WILL CAPTURE ENTER/CLICK KEYPRESS so as to properly navigate to the contained link
	// }));            
    $(".tab-select").on('click', simulateKeyPress);
    // $('#tabMode').change(showExplanation);
    // showExplanation();
});

function handleDocumentKeyDown(event){
    if(event.which === 9){ //9 is TAB KEYCODE IN JS
        var tabMode = $('#tabMode').val();
        tabMode = 'tabbable';
        switch(tabMode){ //TAB/FOCUS CYCLING (PREV/NEXT)
            case 'tabbable':
                if(event.shiftKey){
                    $.tabPrev();
                    console.log($(document.activeElement));
                }
                else{
                    $.tabNext();
                    console.log($(document.activeElement));
                }
                event.preventDefault();
                break;
                
            case 'focusable':
                if(event.shiftKey){
                    $.focusPrev();
                }
                else{
                    $.focusNext();
                }
                event.preventDefault();
                break;
                
            case 'none':
                event.preventDefault();
        }
    }
}

function simulateKeyPress(){
    // console.log($(":focus"));
    // console.log(document.activeElement);
    var e = jQuery.Event("keypress");
e.which = 13; // # Some key code value - ENTER KEY
e.keyCode = 13;
document.activeElement.click();
// $(document.activeElement).trigger(e);
    // console.log($(":focus"));
}

function showExplanation(){
    // var explanations = $('#explanations p');
    // explanations.hide();
    
    // var tabMode = $('#tabMode').val();
    // explanations.filter('.' + tabMode).show();
    
    // var tabModeOption = $('#tabMode option:selected');
    // $('h2 .mode').text(tabModeOption.text());
}