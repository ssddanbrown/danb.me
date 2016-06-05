/**
 * Ripple effects
 */
(function() {
    window.ripples = function(selector) {
        window.addEventListener('load', function() {
            var rippleElements = document.querySelectorAll(selector);
            for (var i = rippleElements.length - 1; i >= 0; i--) {
                rippleElements[i].addEventListener('mousedown', rippleClick);
            }
            // Original taken from: http://webdesign.tutsplus.com/tutorials/recreating-the-touch-ripple-effect-as-seen-on-google-design--cms-21655
            function rippleClick(e) {
                // Get this elements position within page
                var elem = this;
                var rect = elem.getBoundingClientRect();
                var offset = {
                    top: rect.top + document.body.scrollTop,
                    left: rect.left + document.body.scrollLeft
                };
                // Get position and size information for ripple circle
                var setX = parseInt(e.pageX - offset.left);
                var setY = parseInt(e.pageY - offset.top);
                var r = Math.sqrt(Math.pow(elem.offsetWidth, 2) + Math.pow(elem.offsetHeight, 2));
                // Remove old svg elements
                removeRipples(elem);
                // Create new svg elements and add to element
                var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                svg.innerHTML = '<circle cx="' + setX + '" cy="' + setY + '" r="' + r + '"></circle>';
                elem.appendChild(svg);
                setTimeout(function() {
                    removeRipples(elem);
                }, 900);
            }

            function removeRipples(elem) {
                svgChildElements = elem.querySelectorAll("svg");
                for (var i = svgChildElements.length - 1; i >= 0; i--) {
                    elem.removeChild(svgChildElements[i]);
                }
            }

        }, false);
    };
})();
ripples('.ripples');


/**
 * Card show staggered animation
 */
(function() {

    var cards = document.querySelectorAll('.card');
    var timeLag = 160; // Time between animations in ms

    for (var i = 0; i < cards.length; i++) {
        showCardTimeout(i);
    }

    function showCardTimeout(i) {
        setTimeout(function() {
            showCard(cards[i]);
        }, timeLag * i);
    }

    function showCard(elem) {
        elem.className += ' card-anim';
        elem.style.opacity = 1;
    }

})();
