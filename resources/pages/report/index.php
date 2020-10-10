<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The one stop point to report all lost University ID's">
    <meta name="author" content="Junior Lawrence Kibirige">
    <link rel="icon" href="/svg/icon.svg" type="image/svg+xml">

    <title>Lost University ID Portal : Report ID</title>

    <link rel="canonical" href="https://lostunivid.live/">

    <!-- Bootstrap core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/css/product.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/jquery-ui-1.12.1/jquery-ui.css">
    <style id="first">
        .product-device-2::before {
            background-size: 9rem;
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

        .main-report {
            min-width: 100%;
            min-height: 270px;
        }

        .nice-top {
            background: chartreuse;
            min-height: 50px;
            margin: -20px -20px 0 -20px;
            color: #343a40 !important;
            /* transform: perspective(40) */
        }

        .nice-bottom {
            background: chartreuse;
            min-height: 50px;
            margin: 0 -20px -20px -20px;
            position: relative;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .report {
            background-color: crimson !important;
            color: whitesmoke !important;
        }

        .col-sm-4[data-provide*='picker'] {
            display: flex;
            max-width: 19% !important;
            justify-content: space-between !important;
        }

        .before {
            top: 592.5999755859375282.76666259765625 !important
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

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark" style="background-color: burlywood!important">
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
    <div class="main-report position-relative p-3 p-md-5 m-md-3 bg-dark text-white">
        <div class="nice-top text-grey text-center py-2 report">
            <h3>Report Lost ID</h3>
        </div>
        <fieldset id="form-a1">
            <form action="javascript:form_a1()" id="report" method="post">
                <div class="tms-container">
                    <div class="tms-section">
                        <label for="user"><b>Name:</b></label>
                        <input class="tms-input tms-border tms-margin-bottom form-control" type="text" name="user" readonly aria-readonly="true" <?php if (isset($_COOKIE['uname'])) echo 'value=' . utf8_decode(base64_decode($_COOKIE['uname']));
                                                                                                                                                    else echo "value='Not logged in'"; ?>>

                        <label for="passwd"><b>ID Number:</b></label>
                        <input class="tms-input tms-border tms-margin-bottom form-control" type="text" placeholder="ID Number" name="idn">

                        <label for="email"><b>Email Address:</b></label>
                        <input class="tms-input tms-border tms-margin-bottom form-control" type="text" name="email" readonly aria-readonly="true" <?php if (isset($_COOKIE['uname'])) echo 'value=' . utf8_decode(base64_decode($_COOKIE['uname']));
                                                                                                                                                    else echo "value='Not logged in'"; ?>>

                        <div class="row pl-3">
                            <label for="date"><b>Date lost:</b></label>
                            <select class="col-sm-4 ml-1 tms-input tms-border tms-margin-bottom form-control" data-provide="datepicker" type="text" name="year-l" id="year" onchange="populate('month', 'day', this.id)"></select>
                            <select class="col-sm-4 ml-1 tms-input tms-border tms-margin-bottom form-control" data-provide="datepicker" type="text" name="month-l" id="month" onchange="populate(this.id, 'day', 'year')">
                                <option value="" id="init"></option>
                            </select>
                            <select class="col-sm-4 ml-1 tms-input tms-border tms-margin-bottom form-control" data-provide="datepicker" type="text" name="day-l" id="day" onchange="setdatepicker()"></select>
                            <input type="text" class="datepicker" style="visibility:hidden; width: 0px">
                            <svg class="svg-inline--fa fa-calendar fa-w-14 ml-3 mt-2" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" id="dp1585681201301" data-focus-class="datepicker">
                                <path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path>
                            </svg>
                        </div>

                        <label for="location"><b>Last Seen Location:</b></label>
                        <textarea aria-label="Location Last Seen" tabindex="1" class="tms-input tms-border tms-margin-bottom form-control" type="text" name="location" required aria-required="true" maxlength="100" placeholder="Location where ID was lost or misplaced"></textarea>

                        <label for="faculty"><b>College / Faculty:</b></label>
                        <input aria-label="Faculty or College Name" tabindex="1" class="tms-input tms-border tms-margin-bottom form-control" type="text" name="faculty" required aria-required="true" maxlength="100" placeholder="Name of College / Faculty on ID">

                        <label for="stud_no"><b>Student Number:</b></label>
                        <input aria-label="Student Number" tabindex="1" class="tms-input tms-border tms-margin-bottom form-control" type="text" name="stud_no" required aria-required="true" maxlength="100" placeholder="Student Number on ID">
                        <p>
                            <span><small><input type="checkbox" name="tac" id="tac" onchange="enable()">&nbsp;You agree to our <a class="tac4" href="/tacs?data=cmVwb3J0bG9zdGlk&_rdr#sect-5">Terms and Conditions Policy</a>.</small></span><br>
                        </p>

                        <button class="tms-button tms-block tms-red tms-section tms-padding" type="submit" aria-label="Submit Lost Item">Submit Lost Item</button>
                    </div>
                </div>
            </form>
        </fieldset>
        <fieldset disabled="disabled" hidden id="form-a2">
            form a2
        </fieldset>
        <div class="nice-bottom tms-red"></div>
    </div>
    <script src="/static/js/vendor/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/static/js/vendor/jquery-3.4.1.min.js" crossorigin="anonymous"><\/script>')
    </script>
    <script src="/static/js/vendor/popper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/vendor/holder.min.js" crossorigin="anonymous"></script>
    <script src="/static/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="/static/js/main.js"></script>
    <script>
    
        $('.datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        })
        var years = []
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

        leap = (y) => {
            return ((y % 4 == 0) && (y % 100 != 0)) || (y % 400 == 0)
        }

        populate = (s1, s2, s3) => {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            var s3 = document.getElementById(s3);
            s2.innerHTML = "";
            if (s1.value == "Jan" || s1.value == "Mar" || s1.value == "May" || s1.value == "Jul" || s1.value == "Aug" || s1.value == "Oct" || s1.value == "Dec") {
                var optionArray = [
                    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31
                ];
            } else if (s1.value == "Apr" || s1.value == "Jun" || s1.value == "Sept" || s1.value == "Nov") {
                var optionArray = [
                    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30
                ];
            } else if (s1.value == "Feb") {
                if (leap(s3.value))
                    var optionArray = [
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29
                    ];
                else
                    var optionArray = [
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28
                    ];

            }
            for (var option in optionArray) {
                var pair = optionArray[option];
                var newOption = document.createElement("option");
                newOption.value = pair;
                newOption.innerHTML = pair;
                s2.options.add(newOption);
            }
        }
        v = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"]
        var cI = $('[data-focus-class]')
        var cO = $('.hasDatepicker')
        var cal = $(document).find('#ui-datepicker-div')
        const y = $(document).find('#year')
        const m = $(document).find('#month')
        const d = $(document).find('#day')
        setdatepicker = () => {
            var dt = v.indexOf(m.val()) + 1 + '/' + d.val() + '/' + y.val()
            console.info(dt)
            cO.val(dt)
        }
        $('[data-focus-class]').on('click', (e) => {
            console.log(JSON.stringify(cal[0].style.display));
            
            if (cal[0].style.display == "" || cal[0].style.display == "none") {
                cO.focus()
            }
            cO.on('focus', () => {
                sty = document.createElement('style')
                lft = cal.offset().left - 45
                tp = cal.offset().top + parseFloat((-cal.offset().top + cI.offset().top + 30))
                sty.innerHTML = '.below {top: ' + tp + 'px !important;\nleft: ' + lft + 'px !important}'
                $(document).find('#first').after(sty)
                cal.addClass('below')
                setcooky('focus', checkcooky(null, 'focus') + 1, 1)
            })
        })
        cO.on('change', (e) => {
            let date = (e.target.value).toString().split('/')
            y.val(date[2])
            m.val(v[parseInt(date[0])])
            m.change()
            d.val(parseInt(date[1]))
        })
        v.forEach(m => {
            var Option = document.createElement('option')
            Option.value = m
            Option.innerHTML = m
            $('#month').append(Option)
        });
        for (i = 0; i <= 100; i++) {
            year = parseInt(new Date().toDateString().split(' ')[3])
            var Option = document.createElement('option')
            Option.value = year - i
            Option.innerHTML = year - i
            $('#year').append(Option)
            years[i] = year - i
            if (year - i == 1970) break
        }
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
        setcooky = (n, v, e) => {
            let d = new Date()
            d.setTime(d.getTime() + (e * 24 * 60 * 60 * 1000))
            var expires = 'expires=' + d.toUTCString()
            document.cookie = n + '=' + v + ';' + expires + ';path=/;'
        }
        getcooky = (n) => {
            var name = n + '=';
            var dc = decodeURIComponent(document.cookie)
            var c = dc.split(';')
            for (let i = 0; i < c.length; i++) {
                let ca = c[i];
                while (ca.charAt(0) == ' ') {
                    ca = ca.substring(1)
                }
                if (ca.indexOf(name) == 0) {
                    return ca.substring(name.length, ca.length)
                }
            }
            return ''
        }
        checkcooky = (cc, cooky = "active_page") => {
            let tab = getcooky(cooky)
            if (cc != null) {
                if ((window.location.pathname > paths[tab]) - (window.location.pathname < paths[tab]) == 0) {
                    console.log("LUD Analysis: Back to previous location: " + paths[tab])
                    clearTimeout(cc)
                    return
                } else if (window.location.pathname == '/tacs') {
                    return
                } else if (window.location.pathname == '/priv') {
                    return
                }
                if (tab == '') {
                    for (let i = 0; i < a.length; i++) {
                        if (i == 0) {
                            const item = a[i]
                            item.click();
                        } else continue
                    }
                } else {
                    for (let i = 0; i < a.length; i++) {
                        if (i == tab) {
                            const item = a[i]
                            item.click();
                        } else continue
                    }
                }
            } else {
                if (tab == '') tab = 0
                return parseInt(tab, 10)
            }
        }
    </script>
</body>

</html>