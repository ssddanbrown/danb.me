
/**
 * Generate out content
 */
(function() {

    var projectList = [
    {
        "title": "BookStack Platform",
        "link": "https://www.bookstackapp.com",
        "description": "An easy-to-use and free platform for sharing documentation.",
        "skills": ["Laravel", "MySQL", "Angular JS", "PHP"],
        "color": "yellow"
    }, {
        "title": "Social Share Links",
        "link": "https://social-links.danb.me/",
        "description": "A site to generate anchor links for social sharing.",
        "skills": ["HTML", "CSS", "JavaScript", "SASS"],
        "color": "orange"
    }, {
        "title": "The Brazen Project",
        "link": "https://ssddanbrown.github.io/Brazen/",
        "description": "An opinionated SASS & HTML based website starter kit.",
        "skills": ["HTML", "CSS", "Gulp", "SASS"],
        "color": "green"
    }, {
        "title": "I Want To <br> Learn",
        "link": "https://iwanttolearn.io",
        "description": "A site to list learning resources for web & coding based technologies.",
        "skills": ["Laravel", "PHP", "SASS", "HHVM"],
        "color": "blue"
    }, {
        "title": "Thermocouples For Android",
        "link": "https://play.google.com/store/apps/details?id=com.southerntemp.thermocouples",
        "description": "An app for viewing and calculating thermocouple info.",
        "skills": ["Android", "Java", "Material Design"],
        "color": "red"
    }, {
        "title": "Retherm For Android",
        "link": "https://play.google.com/store/apps/details?id=me.danb.retherm",
        "description": "An app to convert between RTD resistance and temperature.",
        "skills": ["Android", "Java", "Thermal Calculation"],
        "color": "yellow"
    }, {
        "title": "E-bikeshop Ecommerce",
        "link": "https://www.e-bikeshop.co.uk",
        "description": "An beautiful online shop selling electric bikes.",
        "skills": ["PHP", "Web Design", "ElasticSearch"],
        "color": "purple"
    }, {
        "title": "E-bikeshop Blog",
        "link": "https://www.e-bikeshop.co.uk/blog",
        "description": "The popular blog for e-bikeshop with electric bike news.",
        "skills": ["Wordpress", "SASS", "HTML", "PHP"],
        "color": "green"
    }];

    var projects = new Vue({
      el: '#projects',
      data: {
        projects: projectList
      }
    })



})();


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
        elem.style.display = 'inline-block';
        elem.className += ' card-anim';
    }

})();
