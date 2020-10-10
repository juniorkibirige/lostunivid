<?php session_start() ?>

    <a class="py-2 d-none d-md-inline-block" style="<?php
if (!empty($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == "S2liaXJpZ2UgMTgwMDcyNTU2Nw==") { ?> display: block<?php } else echo 'display:none !important';?>" href="/report?data=cmVwb3J0bG9zdGlk&_rdr">Report Lost ID</a>

<a class="py-2 d-none d-md-inline-block" href="/feat?data=cmVwb3J0bG9zdGlk&_rdr">Features</a>
<a class="py-2 d-none d-md-inline-block" href="/ent_user?data=cmVwb3J0bG9zdGlk&_rdr">Enterprise</a>
<a class="py-2 d-none d-md-inline-block" href="/support?data=cmVwb3J0bG9zdGlk&_rdr">Support</a>
<a class="py-2 d-none d-md-inline-block" href="/pricing?data=cmVwb3J0bG9zdGlk&_rdr">Pricing</a>
<?php
if (!empty($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == "S2liaXJpZ2UgMTgwMDcyNTU2Nw==") { ?>
    <a class="py-2 d-none d-md-inline-block" href="/logout?data=cmVwb3J0bG9zdGlk&_rdr">Logout</a>
<?php
} else { ?>
    <a class="py-2 d-none d-md-inline-block" href="/login?data=cmVwb3J0bG9zdGlk&tab=login&_rdr">Login</a>
    <a class="py-2 d-none d-md-inline-block" href="/login?data=cmVwb3J0bG9zdGlk&tab=signup&_rdr">SignUp</a>

<?php }
?>
<?php
if (!empty($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == "S2liaXJpZ2UgMTgwMDcyNTU2Nw==") { ?>
    <a class="py-2 d-none d-md-inline-block" href="/report?data=cmVwb3J0bG9zdGlk&_rdr">Report Lost ID</a>
<?php
}
?>
<a class="py-2 d-none d-sm-inline-block sm" href="/feat?data=cmVwb3J0bG9zdGlk&_rdr">Features</a>
<a class="py-2 d-none d-sm-inline-block sm" href="/ent_user?data=cmVwb3J0bG9zdGlk&_rdr">Enterprise</a>
<a class="py-2 d-none d-sm-inline-block sm" href="/support?data=cmVwb3J0bG9zdGlk&_rdr">Support</a>
<a class="py-2 d-none d-sm-inline-block sm" href="/pricing?data=cmVwb3J0bG9zdGlk&_rdr">Pricing</a>
<?php
if (!empty($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == "S2liaXJpZ2UgMTgwMDcyNTU2Nw==") { ?>
    <a class="py-2 d-none d-md-inline-block sm" href="/logout?data=cmVwb3J0bG9zdGlk&_rdr">Logout</a>
<?php
} else { ?>
    <a class="py-2 d-none d-sm-inline-block sm" href="/login?data=cmVwb3J0bG9zdGlk&tab=login&_rdr">Login</a>
    <a class="py-2 d-none d-sm-inline-block sm" href="/login?data=cmVwb3J0bG9zdGlk&tab=signup&_rdr">SignUp</a>

<?php }
?>
<script>
    console.log("<+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=>\n         @@    @@  @@  @@@\\         \n         @@    @@  @@  @@ @@        \n         @@    @@  @@  @@  @        \n         @@@@  @ \\\/ @  @@  @        \n         @@@@~  @@@@   @@@@          \n<+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=>")
    console.log("We're hiring! https://tmsystem.live/jobs-at-tmsystem/")
    var paths = [
        '/',
        '/report',
        '/feat',
        '/ent_user',
        '/support',
        '/pricing'
    ]
    let a = document.getElementsByClassName('py-2')
    for (let i = 0; i < a.length; i++) {
        const item = a[i]
        item.addEventListener('click', () => sel(i))
    }

    let b = document.getElementsByClassName('py-2')
    for (let i = 0; i < b.length; i++) {
        const item = b[i]
        item.addEventListener('click', () => sel(i))
    }

    function sel(e) {
        setcooky('active_page', e, 2)
    }
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
        if ((window.location.pathname > paths[tab]) - (window.location.pathname < paths[tab]) == 0) {
            console.log("LUD Analysis: Back to previous location: " + paths[tab])
            clearTimeout(cc)
            return
        } else if (window.location.pathname == '/tacs') {
            return
        } else if (window.location.pathname == '/priv') {
            return
        } else if (window.location.pathname == '/login') {
            return
        } else if (window.location.pathname == '/logout') {
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
    }
    var cc = setTimeout(() => {
        checkcooky(cc)
    }, 100)
</script>