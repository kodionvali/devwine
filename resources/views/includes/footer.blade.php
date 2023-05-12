          </div>
            <footer class="bg-light text-center text-lg-start footer-content">
                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
                <div class="text-center p-3 copyright-content">
                    Copyright © 2021 Wine Country Weekends Wine Country Weekends | Powered by Wine Country Weekends
                </div>
            </footer>
        </div>
        <div class="overlay-loader">
          <div class="load-container">
            <div class="linespinner"></div>
          </div>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('/js/master.js')}}"></script>
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
<script type="text/javascript">
  var mybutton = document.getElementById("myBtn");
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  $(".navbar-toggler").click(function() {
    $(".navbar-collapse").toggleClass("menu-slide");
  });

  $(".see-more-custom").click(function() {
    $(".more-view-content").toggleClass("main-more");
  });

    </script>