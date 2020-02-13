$('document').ready(function(){
    const sr = ScrollReveal({
            origin: 'bottom',
            distance: '50px',
            duration: '1000',
            delay: '500',
            reset: false
    });

    sr.reveal('.item');
    sr.reveal('.lower');

});