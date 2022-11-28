<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>

    <title>
        Multiple date selection
    </title>

    <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>
    <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="js/mobiscroll.javascript.min.js"></script>

    <style type="text/css">
            body {
        margin: 0;
        padding: 0;
    }

    body,
    html {
        height: 100%;
    }

    </style>
</head>
<body>
    <div class="form">
        <p>Olá, <?php echo $_SESSION['username']; ?>!</p>
        <p>Página de disponibilidades</p>
        <div mbsc-page class="demo-multiple-select">
        <div style="height:100%">
                <div class="mbsc-grid">
        <div class="mbsc-row">
            <div class="mbsc-col-sm-12 mbsc-col-md-4">
                <div class="mbsc-form-group">
                    <div class="mbsc-form-group-title">Multi-day</div>
                    <div id="demo-multi-day"></div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <script>
        
            mobiscroll.setOptions({
        locale: mobiscroll.localePtPT,   // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                    // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'            // More info about themeVariant: https://docs.mobiscroll.com/5-19-1/javascript/calendar#opt-themeVariant
    });
    
    mobiscroll.datepicker('#demo-multi-day', {
        controls: ['calendar'],          // More info about controls: https://docs.mobiscroll.com/5-19-1/javascript/calendar#opt-controls
        display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
        selectMultiple: true
    });
    
    mobiscroll.datepicker('#demo-max-days', {
        controls: ['calendar'],          // More info about controls: https://docs.mobiscroll.com/5-19-1/javascript/calendar#opt-controls
        display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
        selectMultiple: true,
        selectMax: 5,
        headerText: 'Pick up to 5 days'  // More info about headerText: https://docs.mobiscroll.com/5-19-1/javascript/calendar#opt-headerText
    });
    
    mobiscroll.datepicker('#demo-counter', {
        controls: ['calendar'],          // More info about controls: https://docs.mobiscroll.com/5-19-1/javascript/calendar#opt-controls
        display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
        selectMultiple: true,
        selectCounter: true
    });
    </script>

        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>