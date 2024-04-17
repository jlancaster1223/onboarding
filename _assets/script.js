$(document).ready(function() {
    // Count the number of .slide
    var count = $('.slide').length;
    console.log('Total Slides: '+count);

    // Make the dots clickable
    $('.dot').click(function() {
        var index = $(this).index();
        console.log('Dot Index: '+index);
        // Remove .active from all .dot
        $('.dot').removeClass('active');
        $('.dot').eq(index).addClass('active');
        $('.slide').removeClass('active');
        $('.slide').eq(index).addClass('active');

        index++;

        sortButtons(index, count);
    });

    // Make the next button clickable
    $('.next-slide').click(function() {
        // Get the index of the active slide
        var index = $('.slide.active').index();

        // Next Slide
        if (index < count) {
            console.log('Next Slide Index: '+index);
            $('.dot').removeClass('active');
            $('.dot').eq(index).addClass('active');
            $('.slide').removeClass('active');
            $('.slide').eq(index).addClass('active');
            index++;
        }

        sortButtons(index, count);
        sortOverflow();
    });

    // Make the prev button clickable
    $('.prev-slide').click(function() {
        // Get the index of the active slide
        var index = $('.slide.active').index();

        // Prev Slide
        if (index > 1) {
            console.log('Prev Slide Index: '+index);
            $('.dot').removeClass('active');
            $('.dot').eq(index-2).addClass('active');
            $('.slide').removeClass('active');
            $('.slide').eq(index-2).addClass('active');
            index--;
        }

        sortButtons(index, count);
        sortOverflow();
    });

    function sortOverflow() {
        var scrollableElements = document.querySelectorAll('*[style*="overflow"]');

        // Reset scroll position for each scrollable element
        scrollableElements.forEach(function(element) {
            // Set overflow to hidden
            element.style.overflow = 'hidden';
            // Set overflow to auto
            element.style.overflow = 'scroll';
        });
    }
    function sortButtons(index, count) {
        if(index == count) {
            $('.next-slide').removeClass('active');
            $('.prev-slide').addClass('active');
        } else if(index == 1) {
            $('.prev-slide').removeClass('active');
            $('.next-slide').addClass('active');
        } else {
            $('.next-slide').addClass('active');
            $('.prev-slide').addClass('active');
        }
    }
});
