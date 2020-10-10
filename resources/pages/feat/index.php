<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Features pertaining to the Lost University ID Portal">
    <meta name="author" content="Junior Lawrence Kibirige">
    <og name="twitter" content="https://www.twitter.com/lostunivid"></og>
    <link rel="icon" href="/svg/icon.svg" type="image/svg+xml">

    <title>Lost University ID Portal : Features</title>

    <link rel="canonical" href="https://lostunivid.live/">

    <!-- Bootstrap core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/css/product.css" rel="stylesheet">
    <style>
        .product-device-2 {
            background-color: goldenrod;
        }

        .touch-id {
            background-color: greenyellow !important;
        }

        .product-device-2::before {
            background-color: #000000;
	    background-image: url(./resources/pages/feat/svg/icon.svg);
	    background-size: 9rem;
	    //opacity: 0.9;
        }

        @media (min-width: 360px) {
            .sm {
                display: none !important;
                text-align: center !important;
            }

            .disp {
                display: inline-block !important;
            }
        }
    </style>
</head>

<body>
    <?php include_once('../../../resources/dialogs/cs.php'); ?>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
            </a>
            <?php include_once('../../../resources/includes/menu.php'); ?>
        </div>
    </nav>
    <div class="pull-down text-center bg-dark sticky-top" style="position: fixed; z-index: 1020; top: 47.5px; width: 100%; opacity: 0.4; cursor: pointer">
        <span class="fa fa-angle-down" val="text"></span>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark" style="background-color: #a1a1a1!important">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Lost University ID Portal</h1>
            <p class="lead font-weight-normal">The one stop point to find and announce all lost University ID's</p>
            <p><i><small>Currently our services are under development</small></i></p>
            <a class="btn btn-outline-secondary" href="javascript:rem()">Coming soon</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block">
            <div class="touch-id"></div>
        </div>
    </div>
    <script src="/static/js/vendor/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/static/js/vendor/jquery-3.4.1.min.js" crossorigin="anonymous"><\/script>')
    </script>
    <script src="/static/js/vendor/popper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/vendor/holder.min.js" crossorigin="anonymous"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });

      rem = _ => {
         $('#id01').css({
            'display': 'block'
         })
      }

        (function($) {
            pdu = $('.pull-down')
            $('.pull-down').on('mouseover', () => {
                pdu.css({
                    'opacity': '1',
                    'cursor': 'pointer'
                })
            })
            $('.pull-down').on('mouseout', () => {
                pdu.css({
                    'opacity': '0.4',
                    'cursor': 'default'
                })
            })
            $('.pull-down').on('click', _ => {
                if ($(':first-child', pdu)[1].attributes[1].value != "M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z") {
                    $('.sm').addClass('disp')
                    $('.pull-down').css({
                        'top': 325.5 + 'px',
                        'opacity': '1'
                    })
                    $(':first-child', pdu)[1].attributes[1].value = "M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"
                } else {
                    $('.sm').removeClass('disp')
                    $('.pull-down').css({
                        'top': 47.5 + 'px',
                        'opacity': '0.4'
                    })
                    $(':first-child', pdu)[1].attributes[1].value = "M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"
                }
            })
        }(jQuery))
    </script>
</body>

</html>
