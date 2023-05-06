</div>
            <footer class="bg-light text-center text-lg-start footer-content">
                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
                <div class="text-center p-3 copyright-content">
                    Copyright © 2021 Wine Country Weekends Wine Country Weekends | Powered by Wine Country Weekends
                </div>
            </footer>
        </div>
    </body>
</html>
<script type="text/javascript">
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $(".navbar-expand-lg").addClass("darkHeader");
    } else {
        $(".navbar-expand-lg").removeClass("darkHeader");
    }
});
if ($(document).height() >= $(".nav-pills li").height()) {
    // alert($(window).height());
    $("footer").addClass("footer-fixedclass");
}
</script>