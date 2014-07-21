<script src="js/app.v2.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/landing.js"></script>
<script src="js/sly.js"></script>
<script src="js/horizontal.js"></script>
<script src="http://darsa.in/sly/js/vendor/modernizr.js"></script>
<!--  less local  -->   <script src="js/less.js"></script>


<script id="addJS">
jQuery(document).ready(function($) {
var sly = new Sly($("#frame"), {
    horizontal: 1,
    itemNav: 'basic',
    activateMiddle: 1,
    smart: 1,
    activateOn: 'click',
    mouseDragging: 1,
    touchDragging: 1,
    releaseSwing: 1,
    scrollBy: 1,
    speed: 300,
    moveBy: 600,
    elasticBounds: 1,
    startAt: 0
    }).init();
});
</script>