<div id="lb-popup" class="lb-popup">

</div>
@push('scripts')

    <script>
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie() {
      var popup = getCookie("popup");
      if (popup != "") {
        return true;
      } else {
        return false;
      }
    }
    function initPopup() {

        var mouseX = 0;
        var mouseY = 0;
        var popupShown = false;
        var $lb_popup = $('#lb-popup');


        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        function varPopup(){
        var $lb_popup_btn_close = $lb_popup.find('.btn-close');
        var $lb_popup_form = $lb_popup.find('#form-popup');
        var $lb_popup_submit = $lb_popup.find('#lb-popup-submit');
        var $lb_popup_btn_redeem = $lb_popup.find('#btn-redeem');
        //lb_popup_btn_close.addEventListener(event, callback, false);
         $lb_popup_btn_close.on('click', function (e) {

            setCookie("popup","1",1);
            e.preventDefault();

            if($(this).hasClass('disabled')) return false;
            $lb_popup.removeClass('show');

        });

          $lb_popup_form.on('submit', function (e) {

            e.preventDefault();

            var action_url = $(this).attr('action');
            var data = $(this).serialize();
            var url = action_url + '?' + data;

            $lb_popup.removeClass('show');

            window.open(url, '_blank');

        });

        $lb_popup_btn_redeem.on('click', function (e) {

            e.preventDefault();
            if($(this).hasClass('disabled')) return false;
            $lb_popup_submit.click();

        });

        }



        $(document).on('mouseleave', function () {
            if (mouseY < 100) {
                //if (!Cookies.get('lb-popup-shown')) {
                if (!popupShown) {
                    $lb_popup.addClass('show');
                    //Cookies.set('lb-popup-shown', true, { expires: 1 });
                    popupShown = true;
                    document.getElementById('lb-popup').innerHTML +=

                       `<div style="z-index:1000000000" class="lb-popup-bg">
                        <div class="lb-popup-content clearfix">
                            <a href="#" class="btn-close">
                                <span>&times;</span>
                            </a>
                            <div class="lb-popup-container img">
                                <img src="{{ asset('uploads/'.$popup[0]->image) }}?w=238&h=400&fit=crop" alt="">
                            </div>
                            <div class="lb-popup-container promo-content">
                                <p class="t1">{{ $popup[0]->text1 }}</p>
                                <p class="t2">{{ $popup[0]->text2 }}</p>
                                <p class="t3">{{ $popup[0]->text3 }}</p>
                                <p class="t4">{{ $popup[0]->text4 }}</p>
                                <p class="t5">{{ $popup[0]->text5 }}</p>
                                <form id="form-popup" class="form" action="{{ route('newsletter') }}" method="post">
                                    <label for="popup-email">EMAIL</label>
                                    <input type="email" id="popup-email" name="email" required="">
                                    <div style="display: inline-flex;">
                                        <div style="width: 10%; display: inline;">
                                            <input type="checkbox" name="agree" value="agree" id="popup-checkbox" form="form-popup">
                                        </div>
                                        <div style="width: 90%; display: inline;">
                                            <p class="t5" style="text-align: left;font-size: 10px;margin-top: 8px;">{{ $popup[0]->text_gdpr}}</p>
                                        </div>
                                    </div>
                                    <input type="submit" id="lb-popup-submit" autocomplete="off">
                                    <input type="hidden" name="redirect"
                                           value="{{ $popup[0]->url }}">
                                    <input type="hidden" name="origin"
                                           value="exit_popup">
                                    {{ csrf_field() }}
                                    <a href="#" id="btn-redeem">
                                        <span>{{ $popup[0]->cta_text }}</span>
                                        <span>Please wait...</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>`;

                varPopup();
                }
            }
        });





    }
        $(document).ready(function(){
              if(checkCookie()==false){

            setTimeout(initPopup, {{ $popup[0]->seconds *1000 }});


      }});



    </script>

@endpush
