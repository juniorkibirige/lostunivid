<link rel="stylesheet" href="https://cdn.tms-dist.lan:433/styles/css/dialogs.inc.css">
<link rel="stylesheet" href="https://cdn.tms-dist.lan:433/styles/css/custom.css">
<script src="https://cdn.tms-dist.lan:433/styles/font-awesome/js/all.js" crossorigin="anonymous"></script>
<style>
    .tac4:hover {
        text-decoration-line: none;
    }

    .disabled {
        cursor: not-allowed;
    }

    @media (min-width: 768px) {
        .pull-down {
            display: none !important;
        }
    }

    .pull-down {
        color: #f1f1f1;
    }
</style>

<div class="tms-modal" id="id01" style="cursor:pointer; display:none; z-index: 9999">
    <div class="tms-modal-content animate tms-card-4" style="max-width:600px; cursor:auto; top: -3rem; ">
        <form method="post" action="javascript:void(0)" autocomplete="off">

            <div class="tms-container">
                <div class="jumbotron bg-dark" style="margin: -0.1rem -16px; border-radius: 0px 0px 4px 4px;">
                    <h1 class="text-center" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color:antiquewhite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                            <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                            <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                            <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                            <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                            <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                        </svg>
                        Be The First To Know When We Come Live</h1>
                </div>
                <div class="tms-section" style="border-radius: 4px 4px 0 0">
                    <label for="user"><b>Email</b></label>
                    <input class="tms-input tms-border tms-margin-bottom form-control" type="email" placeholder="Enter Email for reminder" name="email" required autofocus>
                    <input class="tms-input tms-border tms-margin-bottom form-control" type="text" placeholder="Enter First and Last Name" name="name" required autofocus>
                    <span><small><input type="checkbox" name="tac" id="tac" onchange="enable()">&nbsp;You agree to our <a target="_blank" class="tac4" href="/tacs?data=cmVwb3J0bG9zdGlk&_rdr#sect-4"  onclick="document.getElementById('id01').style.display='none'">Terms and Conditions Policy Section 4</a>.</small></span><br>
                    <span><small><input type="checkbox" name="info" id="info">&nbsp;Provide me with information about your new services.</small></span>

                    <button class="tms-button tms-block tms-green tms-section tms-padding disabled" disabled='true' type="submit" onclick="document.getElementById('id01').style.display='none'">Be the first to Know</button>
                </div>
            </div>

            <div class="tms-container tms-border-top tms-padding-16 tms-light-grey" style="background-color:#f1f1f1">
                <button type="button" class="tms-btn tms-red" onclick="document.getElementById('id01').style.display='none'">Cancel</button>

            </div>
        </form>
    </div>
</div>
<script>
    function enable() {
        if (document.getElementById('tac').checked) {
            $('.tms-button').removeAttr('disabled')
            document.getElementsByClassName('tms-button')[0].removeAttribute('disabled')
            document.getElementsByClassName('tms-button')[0].classList.remove('disabled')
        } else {
            $('.tms-button').attr('disabled', 'true')
            document.getElementsByClassName('tms-button')[0].setAttribute('disabled', 'true')
            document.getElementsByClassName('tms-button')[0].classList.add('disabled')
        }
    }
</script>
