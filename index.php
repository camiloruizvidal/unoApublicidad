<!DOCTYPE html>
<html lang="es"> 
    <head>
        <title>UnoA|Publicidad</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./images/layout/favicon.ico" type="image/x-icon"/>
        <script>
            try {
                Typekit.load();
            }
            catch (e)
            {
            }
        </script>
        <script>
            window.App = {};
            App.path = "index.html";
        </script>
        <script src="./javascripts/application.min54ab.js?1474336443"></script>
        <script src="javascripts/jquery/jquery.min.js"></script>
        <script src="javascripts/jquery/owl-carousel/owl.carousel.js"></script>
        <script src="javascripts/sweetalert-dev.js"></script>
        <script>
            $(document).ready(function ()
            {
                $("#owl-demo").owlCarousel(
                        {
                            autoPlay: 3000, //Set AutoPlay to 3 seconds 
                            items: 4,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 3]

                        });
                $('.modal_contact').click(function ()
                {
                    swal({
                        title: "¿Desea saber acerca de nosotros?",
                        text: "Estamos dispuestos a ayudarle. !",
                        type: "info",
                        showCancelButton: false,
                        confirmButtonColor: "#2196F3",
                        confirmButtonText: "Nuestros datos",
                        closeOnConfirm: false
                    },
                    function () {
                        swal("Información", "Direcion: Cra 9 No. 22N-36 Piso 2 B/. Ciudad Jardín, o llamenos al celular 315 5153551", "success");
                    });
                });

            });
        </script>
        <link rel="stylesheet" type="text/css" href="./stylesheets/application.min54ab.css?1474336443" />
        <link rel="stylesheet" type="text/css" href="./stylesheets/owl.transitions.css" />
        <link rel="stylesheet" type="text/css" href="./stylesheets/owl.theme.css" />
        <link rel="stylesheet" type="text/css" href="./stylesheets/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="./stylesheets/jquery-photowall.css" />
        <link rel="stylesheet" type="text/css" href="./stylesheets/sweetalert.css" />
    </head>
    <body class="hidden ">

        <!--  <script src="../pv.webbyawards.com/cloud/sitebug.js" data-id="714" data-display-rank="false" data-pos="top-right" id="webby-pv-bug"></script>-->

        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol viewBox="0 0 25 40" id="shape-scroll">
        <path fill="#ffffff" d="M12.5,40C5.6,40,0,34.4,0,27.5v-15C0,5.6,5.6,0,12.5,0S25,5.6,25,12.5v15C25,34.4,19.4,40,12.5,40z M12.5,1
              C6.2,1,1,6.2,1,12.5v15C1,33.8,6.2,39,12.5,39S24,33.8,24,27.5v-15C24,6.2,18.8,1,12.5,1z"/>
        <path fill="#ffffff" d="M12.5,14.9L12.5,14.9c-1.1,0-1.9-0.9-1.9-1.9v-2.1c0-1.1,0.9-1.9,1.9-1.9h0c1.1,0,1.9,0.9,1.9,1.9V13
              C14.4,14.1,13.6,14.9,12.5,14.9z"/>
    </symbol>

    <symbol viewBox="-463 268 32 26" id="shape-twitter">
        <path d="M-431,271.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6c-1.2-1.3-2.9-2.1-4.8-2.1
              c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5
              c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.2-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1
              c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,3,10.1,3c12.1,0,18.7-10,18.7-18.7
              c0-0.3,0-0.6,0-0.8C-433,273.5-431.9,272.4-431,271.1L-431,271.1z"/>
    </symbol>

    <symbol viewBox="-451 271 14 26" id="shape-facebook">
        <path d="M-442,271c-2.8,0-5,2.2-5,5v3h-4v4h4v14h4v-14h4.5l1-4h-5.5v-3c0-0.6,0.4-1,1-1h5v-4H-442z"/>
    </symbol>

    <symbol viewBox="-223 25 512 512" id="shape-instagram">
        <path d="M204,25h-342c-46.8,0-85,38.2-85,85v342c0,46.8,38.2,85,85,85h342c46.8,0,85-38.2,85-85V110C289,63.2,250.8,25,204,25z
              M-59.1,249h184.2c3.5,10,5.4,20.8,5.4,32c0,53.8-43.7,97.5-97.5,97.5s-97.5-43.7-97.5-97.5C-64.5,269.8-62.6,259-59.1,249
              L-59.1,249z M225,249v192c0,17.6-14.4,32-32,32h-320c-17.6,0-32-14.4-32-32V249h50.1c-2.3,10.3-3.6,21-3.6,32
              c0,80.2,65.3,145.5,145.5,145.5S178.5,361.2,178.5,281c0-11-1.2-21.7-3.6-32L225,249z M225,137c0,8.8-7.2,16-16,16h-32
              c-8.8,0-16-7.2-16-16v-32c0-8.8,7.2-16,16-16h32c8.8,0,16,7.2,16,16V137z"/>
    </symbol>

    <symbol viewBox="-463 268 32 26" id="shape-twitter-white">
        <path fill="#ffffff" d="M-431,271.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6c-1.2-1.3-2.9-2.1-4.8-2.1
              c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5
              c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.2-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1
              c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,3,10.1,3c12.1,0,18.7-10,18.7-18.7
              c0-0.3,0-0.6,0-0.8C-433,273.5-431.9,272.4-431,271.1L-431,271.1z"/>
    </symbol>

    <symbol viewBox="-451 271 14 26" id="shape-facebook-white">
        <path fill="#ffffff" d="M-442,271c-2.8,0-5,2.2-5,5v3h-4v4h4v14h4v-14h4.5l1-4h-5.5v-3c0-0.6,0.4-1,1-1h5v-4H-442z"/>
    </symbol>

    <symbol viewBox="-223 25 512 512" id="shape-instagram-white">
        <path fill="#ffffff" d="M204,25h-342c-46.8,0-85,38.2-85,85v342c0,46.8,38.2,85,85,85h342c46.8,0,85-38.2,85-85V110C289,63.2,250.8,25,204,25z
              M-59.1,249h184.2c3.5,10,5.4,20.8,5.4,32c0,53.8-43.7,97.5-97.5,97.5s-97.5-43.7-97.5-97.5C-64.5,269.8-62.6,259-59.1,249
              L-59.1,249z M225,249v192c0,17.6-14.4,32-32,32h-320c-17.6,0-32-14.4-32-32V249h50.1c-2.3,10.3-3.6,21-3.6,32
              c0,80.2,65.3,145.5,145.5,145.5S178.5,361.2,178.5,281c0-11-1.2-21.7-3.6-32L225,249z M225,137c0,8.8-7.2,16-16,16h-32
              c-8.8,0-16-7.2-16-16v-32c0-8.8,7.2-16,16-16h32c8.8,0,16,7.2,16,16V137z"/>
    </symbol>

    <symbol viewBox="0 0 648.47 173.76" id="shape-hk-logo">
        <path class="cls-1" d="M194.59,106.77a21.27,21.27,0,0,0-14-12.19c-11.47-3.34-21.7,2-29.13,10-5.85-15.71-14.78-23.82-26.62-24.13a19.37,19.37,0,0,0-14.35,5.46c-6.85,6.55-9.46,17.59-9.62,25.74A115.06,115.06,0,0,0,110,158a121.91,121.91,0,0,0,11.44,21.2c1.72,2.53,3.57,5.19,5.59,7.74a16.21,16.21,0,0,0-9.92,11.59,19.5,19.5,0,0,0,5.59,19,39.2,39.2,0,0,0,8.23,5.25c3.25,1.71,6.62,3.48,9.14,6.19,4.56,4.89,5.37,11.83,2.43,20.65a3.47,3.47,0,0,0,1.83,4.06,3.7,3.7,0,0,0,1.78.49,2.93,2.93,0,0,0,2.31-1.11,20.24,20.24,0,0,0,4.22-15.33,24.83,24.83,0,0,0-9.32-16.56A43.66,43.66,0,0,0,136,217c-3.42-1.68-6.95-3.42-9.5-6.22a12.28,12.28,0,0,1-3.4-9.73,16.66,16.66,0,0,1,6.52-10.92,41,41,0,0,0,6.94,6.34,2.14,2.14,0,0,0,1.24.4,2.37,2.37,0,0,0,1.62-.69,2.48,2.48,0,0,0,.54-3.09c-1.09-1.76-2.3-3.46-3.55-5.13,25.08-11.22,45.47-32.42,56.25-58.69C195,123.51,197.81,114.93,194.59,106.77Zm-65.8,70.8a118,118,0,0,1-18.48-53.49c-.81-9.42-2.48-29,10.38-33.47a11.55,11.55,0,0,1,9.17.4c7.67,3.78,12.07,15.95,14.54,23.27a4.71,4.71,0,0,0,2,5.72,5.43,5.43,0,0,0,7.6-1.42c11.57-16.43,21.78-14,25.64-12.14a8.82,8.82,0,0,1,4.86,5.3c2.35,7.16-3.53,18.11-6.7,24l-.22.41c-10,18.61-25.77,34.43-45.65,45.86C130.84,180.56,129.77,179.09,128.79,177.58Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M243.19,142.68v24.06h36.72V142.68q0-5.16,2.32-7.73a7.82,7.82,0,0,1,6.1-2.58,8.11,8.11,0,0,1,6.22,2.55q2.37,2.55,2.38,7.76v66.16q0,5.21-2.4,7.79a8.09,8.09,0,0,1-6.19,2.58,7.76,7.76,0,0,1-6.13-2.61q-2.29-2.6-2.29-7.76V180.6H243.19v28.24q0,5.21-2.4,7.79a8.09,8.09,0,0,1-6.19,2.58,7.75,7.75,0,0,1-6.13-2.61q-2.29-2.6-2.29-7.76V142.68q0-5.16,2.26-7.73a7.77,7.77,0,0,1,6.16-2.58,8.11,8.11,0,0,1,6.22,2.55Q243.19,137.47,243.19,142.68Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M350.5,191.26H319.91a20.74,20.74,0,0,0,2.15,9.39,14.37,14.37,0,0,0,13.2,8.19,18.66,18.66,0,0,0,5.13-.66,16.71,16.71,0,0,0,4.5-2.06,34.59,34.59,0,0,0,4-3q1.83-1.6,4.75-4.35a5.13,5.13,0,0,1,3.44-1A5.66,5.66,0,0,1,361,199a4.71,4.71,0,0,1,1.49,3.72,10.18,10.18,0,0,1-1.66,5,19.67,19.67,0,0,1-5,5.44,28.53,28.53,0,0,1-8.42,4.33,36.3,36.3,0,0,1-11.66,1.72q-15.06,0-23.43-8.59t-8.36-23.31A38.91,38.91,0,0,1,306,174.44a28.35,28.35,0,0,1,6-10.17,26.07,26.07,0,0,1,9.74-6.5,35,35,0,0,1,12.83-2.26,30.44,30.44,0,0,1,15.72,3.87,25.44,25.44,0,0,1,9.82,10,26.28,26.28,0,0,1,3.26,12.49q0,5.9-3.38,7.65T350.5,191.26Zm-30.59-8.88h28.35q-.57-8-4.33-12a13,13,0,0,0-9.88-4,12.51,12.51,0,0,0-9.6,4Q320.71,174.47,319.91,182.38Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M411.28,210.39a48.33,48.33,0,0,1-11,6.62,30.66,30.66,0,0,1-11.89,2.21,22.53,22.53,0,0,1-10.57-2.38,17.4,17.4,0,0,1-7-6.45,16.73,16.73,0,0,1-2.46-8.82,15.8,15.8,0,0,1,4.07-10.94,20.35,20.35,0,0,1,11.17-6.07q1.49-.34,7.39-1.54t10.11-2.21q4.21-1,9.14-2.43-.29-6.19-2.49-9.08t-9.14-2.89q-6,0-9,1.66a14.56,14.56,0,0,0-5.15,5q-2.15,3.32-3,4.38t-3.81,1.06a6.67,6.67,0,0,1-4.55-1.69,5.5,5.5,0,0,1-1.92-4.33,13.22,13.22,0,0,1,2.92-8q2.92-3.89,9.11-6.41t15.41-2.52q10.31,0,16.21,2.43a15.08,15.08,0,0,1,8.34,7.71q2.43,5.27,2.43,14,0,5.5,0,9.34t-.09,8.53a31.49,31.49,0,0,0,1.46,9.2,28.94,28.94,0,0,1,1.46,6.16,5.76,5.76,0,0,1-2.26,4.38,7.58,7.58,0,0,1-5.13,2,6.91,6.91,0,0,1-4.75-2.26A33.52,33.52,0,0,1,411.28,210.39Zm-1-22.62a78.89,78.89,0,0,1-10,2.66q-6.56,1.4-9.08,2.06a12.35,12.35,0,0,0-4.81,2.58,6.61,6.61,0,0,0-2.29,5.36,7.93,7.93,0,0,0,2.69,6,10,10,0,0,0,7,2.49,18.34,18.34,0,0,0,8.57-2,13.55,13.55,0,0,0,5.76-5.24q2.12-3.55,2.12-11.69Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M449.75,196.64V209.7q0,4.76-2.23,7.13a7.45,7.45,0,0,1-5.67,2.38,7.16,7.16,0,0,1-5.56-2.4q-2.18-2.41-2.18-7.1V166.17q0-10.54,7.62-10.54,3.89,0,5.61,2.46t1.89,7.27a27.34,27.34,0,0,1,5.76-7.27,11.89,11.89,0,0,1,7.88-2.46,20.14,20.14,0,0,1,9.56,2.46q4.64,2.46,4.64,6.53a6.21,6.21,0,0,1-2,4.73,6.13,6.13,0,0,1-4.27,1.86,19.64,19.64,0,0,1-4.15-1.06,19.32,19.32,0,0,0-5.81-1.06,8.51,8.51,0,0,0-5.61,1.81,11.57,11.57,0,0,0-3.38,5.36,37.42,37.42,0,0,0-1.66,8.45Q449.75,189.59,449.75,196.64Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M485.55,157h1.72v-9.39q0-3.78.2-5.93a8.75,8.75,0,0,1,1.12-3.69,7.06,7.06,0,0,1,2.63-2.61,7.51,7.51,0,0,1,3.84-1,7.73,7.73,0,0,1,5.38,2.23,6.62,6.62,0,0,1,2,3.64,33.18,33.18,0,0,1,.43,6.1V157h5.73a7.34,7.34,0,0,1,5.07,1.58,5.2,5.2,0,0,1,1.75,4A4.52,4.52,0,0,1,513,167a16.15,16.15,0,0,1-7.13,1.26H502.9V197a46.51,46.51,0,0,0,.26,5.64,5.73,5.73,0,0,0,1.37,3.21,4.69,4.69,0,0,0,3.64,1.23,19.55,19.55,0,0,0,3.72-.49,19.23,19.23,0,0,1,3.66-.49,4.72,4.72,0,0,1,3.41,1.52,5.11,5.11,0,0,1,1.52,3.75q0,3.78-4.12,5.78t-11.86,2q-7.33,0-11.11-2.46a11.44,11.44,0,0,1-5-6.82,46.35,46.35,0,0,1-1.17-11.63v-30H485.2a7.43,7.43,0,0,1-5.15-1.6,5.24,5.24,0,0,1-1.77-4.07,5,5,0,0,1,1.86-4A8.18,8.18,0,0,1,485.55,157Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M542.09,142.68v29.44l33.4-34.83a30.55,30.55,0,0,1,4.09-3.72,7.6,7.6,0,0,1,4.5-1.2,8.26,8.26,0,0,1,5.93,2.15,7,7,0,0,1,2.26,5.24q0,3.72-3.84,7.39l-20.68,19.59,23.83,34.14a42.94,42.94,0,0,1,3.78,6.22,12.07,12.07,0,0,1,1.26,5.18,6.45,6.45,0,0,1-2.21,4.87,8.41,8.41,0,0,1-6,2.06,10.09,10.09,0,0,1-5.78-1.52,13,13,0,0,1-3.78-4q-1.55-2.52-2.75-4.58L556,178.14l-13.92,13.35v17.36q0,5.27-2.4,7.82a8.13,8.13,0,0,1-6.19,2.55,8.31,8.31,0,0,1-4.18-1.14,8,8,0,0,1-3.09-3.09,10,10,0,0,1-1-3.72q-.17-2.12-.17-6.13V142.68q0-5.16,2.26-7.73a7.77,7.77,0,0,1,6.16-2.58,8.11,8.11,0,0,1,6.22,2.55Q542.09,137.47,542.09,142.68Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M611.36,148.35a8.25,8.25,0,0,1-5.58-2,7.77,7.77,0,0,1,.06-11.14,8,8,0,0,1,5.53-2.15,8.2,8.2,0,0,1,5.38,1.95,6.94,6.94,0,0,1,2.35,5.67,7.15,7.15,0,0,1-2.29,5.64A7.93,7.93,0,0,1,611.36,148.35Zm7.73,16.15V209.7q0,4.7-2.23,7.1a7.41,7.41,0,0,1-5.67,2.4,7.07,7.07,0,0,1-5.59-2.46q-2.15-2.46-2.15-7V165q0-4.64,2.15-7a7.22,7.22,0,0,1,5.59-2.35,7.49,7.49,0,0,1,5.67,2.35A9.09,9.09,0,0,1,619.09,164.51Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M673.3,210.27v-1.54a39.92,39.92,0,0,1-6.22,5.87,23.41,23.41,0,0,1-6.64,3.44,25,25,0,0,1-7.82,1.17,23,23,0,0,1-10.4-2.38,24.24,24.24,0,0,1-8.28-6.79,30.93,30.93,0,0,1-5.3-10.37,44.21,44.21,0,0,1-1.81-12.89q0-14.66,7.16-22.85t18.85-8.19a25.3,25.3,0,0,1,11.4,2.32,31.78,31.78,0,0,1,9.05,7.13V142.11q0-4.81,1.92-7.27a6.53,6.53,0,0,1,5.47-2.46,6.78,6.78,0,0,1,5.47,2.26q1.92,2.27,1.92,6.68v69q0,4.47-2.06,6.7a6.92,6.92,0,0,1-5.33,2.23,6.83,6.83,0,0,1-5.3-2.32Q673.29,214.57,673.3,210.27Zm-30.76-23a26.68,26.68,0,0,0,2,10.83,15.08,15.08,0,0,0,5.41,6.73,13.37,13.37,0,0,0,7.5,2.26A13.84,13.84,0,0,0,665,205a14.77,14.77,0,0,0,5.44-6.59,26.61,26.61,0,0,0,2-11.08,25.92,25.92,0,0,0-2-10.74,16.14,16.14,0,0,0-5.5-6.87,13.14,13.14,0,0,0-7.59-2.38,12.8,12.8,0,0,0-7.67,2.43,15.64,15.64,0,0,0-5.24,7A27.79,27.79,0,0,0,642.54,187.3Z" transform="translate(-100.85 -80.4)"/><path class="cls-1" d="M749.32,198.76a18.14,18.14,0,0,1-12.46,18.07,41.75,41.75,0,0,1-15,2.38,36.56,36.56,0,0,1-14.44-2.58,21,21,0,0,1-8.88-6.44,13,13,0,0,1-2.86-7.76,6,6,0,0,1,1.83-4.41,6.28,6.28,0,0,1,4.64-1.83,5.43,5.43,0,0,1,3.78,1.2,13.27,13.27,0,0,1,2.52,3.38,17.16,17.16,0,0,0,5.76,6.24q3.35,2.06,9.14,2.06a13.2,13.2,0,0,0,7.7-2.09q3-2.09,3-4.78a6.51,6.51,0,0,0-3.12-6q-3.13-1.89-10.28-3.61a85.19,85.19,0,0,1-13.15-4.21,21.64,21.64,0,0,1-8.11-5.82,13.31,13.31,0,0,1-3-8.88,15.65,15.65,0,0,1,2.81-8.88,19.24,19.24,0,0,1,8.28-6.67,31.69,31.69,0,0,1,13.2-2.49,43.36,43.36,0,0,1,10.91,1.26,27.23,27.23,0,0,1,8.08,3.38,16.71,16.71,0,0,1,4.92,4.7,9.19,9.19,0,0,1,1.69,5,5.83,5.83,0,0,1-1.8,4.41,7.15,7.15,0,0,1-5.13,1.72,6.28,6.28,0,0,1-4.1-1.37,27.14,27.14,0,0,1-3.87-4.12,14.12,14.12,0,0,0-4.18-3.66,13.16,13.16,0,0,0-6.53-1.37,12.79,12.79,0,0,0-7,1.8,5.26,5.26,0,0,0-2.81,4.5,4.86,4.86,0,0,0,2.06,4,17.09,17.09,0,0,0,5.56,2.61q3.49,1,9.62,2.52A51.45,51.45,0,0,1,740,185.3a19.78,19.78,0,0,1,7,5.82A12.89,12.89,0,0,1,749.32,198.76Z" transform="translate(-100.85 -80.4)"/>
    </symbol>

    <symbol viewBox="0 0 37.8 37.8" id="shape-scroll-touch">
        <path fill="#ffffff" d="M18.9,37.8C8.5,37.8,0,29.3,0,18.9C0,8.5,8.5,0,18.9,0s18.9,8.5,18.9,18.9C37.8,29.3,29.3,37.8,18.9,37.8z M18.9,2
              C9.6,2,2,9.6,2,18.9s7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9S28.2,2,18.9,2z"/>
        <path fill="#ffffff" d="M26.1,15.3c-0.4-0.4-1-0.4-1.4,0l-6,6l-5.5-5.5c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.2,6.2c0.2,0.2,0.5,0.3,0.7,0.3
              s0.5-0.1,0.7-0.3l6.8-6.8C26.5,16.3,26.5,15.7,26.1,15.3z"/>
    </symbol>

    <symbol viewBox="0 0 50 50" id="shape-chevron-left">
        <polygon points="32.8,43.9 36.5,40.2 20.7,24.4 36.5,8.6 32.8,4.9 13.3,24.4 13.3,24.4 13.3,24.4 "/>
    </symbol>

    <symbol viewBox="0 0 50 50" id="shape-chevron-right">
        <polygon points="17,4.9 13.3,8.6 29.1,24.4 13.3,40.2 17,43.9 36.5,24.4 36.5,24.4 36.5,24.4 "/>
    </symbol>

    <symbol viewBox="0 0 100 80" id="shape-nav-clipping">
        <path d="M0,0v50h12.2c-0.2-1.6-0.3-3.1-0.3-4.8c0-21.2,17.2-38.4,38.4-38.4s38.4,17.2,38.4,38.4c0,1.6-0.1,3.2-0.3,4.8 H100V0H0z"/>
    </symbol>

    <symbol viewBox="0 0 13.1 10.9" id="shape-heart">
        <g>
        <path d="M0,4.1c0-0.2,0-0.5,0-0.7C0,3.3,0.1,3.1,0.1,3c0.2-0.9,0.5-1.6,1.2-2.1C2.6-0.4,4.6-0.2,6,1
              c0.2,0.2,0.4,0.4,0.6,0.6c0.1-0.2,0.2-0.3,0.3-0.4c1-1,2.1-1.5,3.5-1.2c1.5,0.3,2.3,1.3,2.7,2.8c0,0.1,0.1,0.2,0.1,0.4
              c0,0.3,0,0.6,0,1c0,0.1-0.1,0.1-0.1,0.2c-0.2,1.1-0.7,2.1-1.4,3c-1.3,1.6-3,2.7-4.9,3.5c-0.1,0.1-0.3,0-0.5,0
              c-1.2-0.5-2.4-1.2-3.4-2.1c-1.3-1.1-2.3-2.4-2.7-4C0.1,4.5,0.1,4.3,0,4.1z"/>
        </g>
    </symbol>

    <symbol viewBox="0 0 50 50" id="shape-cross">
        <polygon points="38.3,14.6 35.4,11.7 25,22 14.6,11.7 11.7,14.6 22,25 11.7,35.4 14.6,38.3 25,28 35.4,38.3 38.3,35.4 28,25 "/>
    </symbol>

    <symbol viewBox="-460.6 261.6 39.1 39" id="shape-circle-arrow">
        <path d="M-441.1,300c-10.4,0-18.9-8.5-18.9-18.9s8.5-18.9,18.9-18.9s18.9,8.5,18.9,18.9S-430.7,300-441.1,300z M-441.1,264.2
              c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9C-424.2,271.8-431.8,264.2-441.1,264.2z"/>
        <path d="M-445.1,274c-0.4,0.4-0.4,1,0,1.4l6,6l-5.5,5.5c-0.4,0.4-0.4,1,0,1.4s1,0.4,1.4,0l6.2-6.2c0.2-0.2,0.3-0.5,0.3-0.7
              s-0.1-0.5-0.3-0.7l-6.8-6.8C-444.1,273.6-444.8,273.6-445.1,274z"/>
    </symbol>

    <symbol viewBox="-460.6 261.6 39.1 39" id="shape-circle-arrow-white">
        <path fill="#ffffff" d="M-441.1,300c-10.4,0-18.9-8.5-18.9-18.9s8.5-18.9,18.9-18.9s18.9,8.5,18.9,18.9S-430.7,300-441.1,300z M-441.1,264.2
              c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9C-424.2,271.8-431.8,264.2-441.1,264.2z"/>
        <path fill="#ffffff" d="M-445.1,274c-0.4,0.4-0.4,1,0,1.4l6,6l-5.5,5.5c-0.4,0.4-0.4,1,0,1.4s1,0.4,1.4,0l6.2-6.2c0.2-0.2,0.3-0.5,0.3-0.7
              s-0.1-0.5-0.3-0.7l-6.8-6.8C-444.1,273.6-444.8,273.6-445.1,274z"/>
    </symbol>

    <symbol viewBox="0 0 13.1 10.9" id="shape-heart-cta">
        <path d="M0,4.1c0-0.2,0-0.5,0-0.7C0,3.3,0.1,3.1,0.1,3c0.2-0.9,0.5-1.6,1.2-2.1C2.6-0.4,4.6-0.2,6,1
              c0.2,0.2,0.4,0.4,0.6,0.6c0.1-0.2,0.2-0.3,0.3-0.4c1-1,2.1-1.5,3.5-1.2c1.5,0.3,2.3,1.3,2.7,2.8c0,0.1,0.1,0.2,0.1,0.4
              c0,0.3,0,0.6,0,1c0,0.1-0.1,0.1-0.1,0.2c-0.2,1.1-0.7,2.1-1.4,3c-1.3,1.6-3,2.7-4.9,3.5c-0.1,0.1-0.3,0-0.5,0
              c-1.2-0.5-2.4-1.2-3.4-2.1c-1.3-1.1-2.3-2.4-2.7-4C0.1,4.5,0.1,4.3,0,4.1z"/>
    </symbol>

    <symbol viewBox="0 0 126.5 111.2" id="shape-warrior">
        <path fill="#ffffff" id="XMLID_4_" d="M40.6,35.6c5.8-0.4,11.3,4.4,11.3,4.4c-4.3-5.4-8.9-7.2-12-7.7c5.6-2.3,12.5,0.9,12.5,0.9
              c-6.7-4.7-12.4-4.4-15.2-3.7c-1.3-3.1-4.2-7.2-9.8-12.2C12.2,3.7,0,0,0,0s7.1,16.9,19.3,28.5c4.6,4.4,8.3,6.7,11.2,8
              c-0.6,2.9-0.9,8.4,3.7,15c0,0-3.2-6.9-0.9-12.4c0.5,3.1,2.3,7.6,7.6,11.9c0,0-4.8-5.5-4.4-11.3l71.7,71.6l2.9-0.8l1.2-3.2
              L40.6,35.6z"/>
        <path fill="#ffffff" id="XMLID_3_" d="M85.9,35.6c-5.8-0.4-11.3,4.4-11.3,4.4c4.3-5.4,8.9-7.2,12-7.7C81,30.1,74,33.3,74,33.3
              c6.7-4.7,12.4-4.4,15.2-3.7c1.3-3.1,4.2-7.2,9.8-12.2C114.3,3.7,126.5,0,126.5,0s-7.1,16.9-19.3,28.5c-4.6,4.4-8.3,6.7-11.2,8
              c0.6,2.9,0.9,8.4-3.7,15c0,0,3.2-6.9,0.9-12.4c-0.5,3.1-2.3,7.6-7.6,11.9c0,0,4.8-5.5,4.4-11.3l-71.7,71.6l-2.9-0.8l-1.2-3.2
              L85.9,35.6z"/>
    </symbol>

    <symbol viewBox="-446 257 43 47" id="shape-soldier">
        <path fill="#ffffff" d="M-424.6,293.3L-446,304v-6.4l21.4-10.7l21.6,10.7v6.4L-424.6,293.3z M-446,289.2v-6.4l21.4-10.7l21.6,10.7v6.4
              l-21.6-10.7L-446,289.2z M-446,274.1v-6.4l21.4-10.7l21.6,10.7v6.4l-21.6-10.7L-446,274.1z"/>
    </symbol>

    <svg viewBox="0 0 98 121.2" id="shape-fighter">
    <path fill="#ffffff" d="M73.9,98.9v16c0,0,4.5-0.3,12.1-5.3V94.2C86,94.2,80.8,97.5,73.9,98.9z"/>
    <path fill="#ffffff" d="M39.4,98.9v16c0,0-4.5-0.3-12.1-5.3V94.2C27.3,94.2,32.5,97.5,39.4,98.9z"/>
    <path fill="#ffffff" d="M56.5,62.1c-7.2,0-13,5.9-13,13v40.9c0,0,1.9,5.3,13,5.3s13-5.3,13-5.3V75.1C69.5,67.9,63.7,62.1,56.5,62.1z
          M63.6,107.5l-2.3,2.3l-4-4l-4,4l-2.3-2.3l4-4l-4-4l2.3-2.3l4,4l4-4l2.3,2.3l-4,4L63.6,107.5z M63.6,85.5l-2.3,2.3l-4-4l-4,4
          l-2.3-2.3l4-4l-4-4l2.3-2.3l4,4l4-4l2.3,2.3l-4,4L63.6,85.5z"/>
    <path fill="#ffffff" d="M12.2,39.8l5.1,43.4L4.5,66.8c0,0-3.9-12.6-4.5-17.5s2.5-9.5,7.1-9.5S12.2,39.8,12.2,39.8z"/>
    <path fill="#ffffff" d="M77.8,0H56.5H35.2C7.9,3.7,16.3,35.2,16.3,35.2l5.5,51.5c6.1,3.9,12.2,6.2,17.5,7.4V74.8
          c0-9.5,7.7-17.2,17.2-17.2s17.2,7.7,17.2,17.2v19.4c5.3-1.3,11.4-3.5,17.5-7.4l5.5-51.5C96.8,35.2,105.2,3.7,77.8,0z M65.6,34.8
          l2,11.5l-10.4-5.4l-10.4,5.4l2-11.5l-8.4-8.2L52.1,25l5.2-10.5L62.4,25L74,26.6L65.6,34.8z"/>
    </svg>

    <symbol viewBox="-452.1 262.2 22.1 37.8" id="shape-arrow-left">
        <path fill="#ffffff" d="M-430.8,299.2c1-1,1-2.5,0-3.5l-15.2-15.2l13.9-13.9c1-1,1-2.5,0-3.5c-1-1-2.5-1-3.5,0l-15.7,15.7c-0.5,0.5-0.8,1.3-0.8,1.8
              c0,0.5,0.3,1.3,0.8,1.8l17.2,17.2C-433.4,300.2-431.8,300.2-430.8,299.2z"/>
    </symbol>

    <symbol viewBox="-452.1 262.2 22.1 37.8" id="shape-arrow-left-red">
        <path fill="#e81e48" d="M-430.8,299.2c1-1,1-2.5,0-3.5l-15.2-15.2l13.9-13.9c1-1,1-2.5,0-3.5c-1-1-2.5-1-3.5,0l-15.7,15.7c-0.5,0.5-0.8,1.3-0.8,1.8
              c0,0.5,0.3,1.3,0.8,1.8l17.2,17.2C-433.4,300.2-431.8,300.2-430.8,299.2z"/>
    </symbol>

    <symbol viewBox="-452.1 262.2 22.1 37.8" id="shape-arrow-right">
        <path fill="#ffffff" d="M-451.4,263c-1,1-1,2.5,0,3.5l15.2,15.2l-13.9,13.9c-1,1-1,2.5,0,3.5c1,1,2.5,1,3.5,0l15.7-15.7c0.5-0.5,0.8-1.3,0.8-1.8
              c0-0.5-0.3-1.3-0.8-1.8l-17.2-17.2C-448.8,262-450.4,262-451.4,263z"/>
    </symbol>

    <symbol viewBox="-460.6 261.6 39.1 39" id="shape-circle-heart">
        <path d="M-441.1,300c-10.4,0-18.9-8.5-18.9-18.9s8.5-18.9,18.9-18.9s18.9,8.5,18.9,18.9S-430.7,300-441.1,300z M-441.1,264.2
              c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9C-424.2,271.8-431.8,264.2-441.1,264.2z"/>
        <path d="M-447.8,279.7c0-0.2,0-0.5,0-0.7c0-0.1,0.1-0.3,0.1-0.4c0.1-0.9,0.6-1.6,1.2-2.2c1.4-1.2,3.4-1.1,4.8,0.2
              c0.2,0.2,0.4,0.4,0.6,0.6c0.1-0.1,0.2-0.3,0.3-0.4c1-1,2.2-1.5,3.6-1.2c1.5,0.3,2.3,1.4,2.7,2.8c0,0.1,0,0.2,0.1,0.4
              c0,0.3,0,0.6,0,1c0,0,0,0.1,0,0.1c-0.2,1.2-0.7,2.1-1.4,3c-1.3,1.6-3,2.7-4.9,3.6c-0.1,0-0.3,0-0.5,0c-1.2-0.5-2.4-1.2-3.5-2.1
              c-1.3-1.1-2.4-2.4-2.8-4.1C-447.7,280.2-447.7,279.9-447.8,279.7z"/>
    </symbol>

    <symbol viewBox="0 0 164.3 83.3" id="shape-method-logo">
        <path fill="#ffffff" d="M163.6,78.7c0,2.5-1.2,3.7-3.6,3.7h-28.9c-2.4,0-3.6-1.2-3.6-3.7V19c0-2.5-0.9-4.7-2.6-6.4
              c-1.8-1.7-3.9-2.6-6.5-2.6h-9.1c-2.6,0-4.7,0.9-6.5,2.6c-1.8,1.7-2.6,3.9-2.6,6.4v59.7c0,2.5-1.2,3.7-3.6,3.7H67.7
              c-2.4,0-3.6-1.2-3.6-3.7V19c0-2.5-0.9-4.7-2.6-6.4c-1.8-1.7-3.9-2.6-6.5-2.6h-9.1c-2.5,0-4.7,0.9-6.5,2.6c-1.8,1.7-2.6,3.9-2.6,6.4
              v59.7c0,2.5-1.2,3.7-3.6,3.7H4.3c-2.4,0-3.6-1.2-3.6-3.7V19c0-4.9,2.7-9.2,8-12.8c5.3-3.6,11.7-5.3,19.2-5.3h45.2
              c3.1,0,6.2,0.4,9,1.2c2.9-0.8,5.9-1.2,9-1.2h45.2c7.5,0,13.9,1.8,19.2,5.3c5.3,3.6,8,7.8,8,12.8V78.7z"/>
    </symbol>

    </svg>

    <header class="header">
        <div class="nav-bar-small small-only">
            <a href="#nav" class="nav-burger-wrap do-show-menu">
                <span class="nav-burger"></span>
            </a>

            <a href="#back" class="nav-back hidden do-menu-back">
                <svg class="shape-arrow-left-red">
                <use xlink:href="#shape-arrow-left-red"></use>
                </svg>
            </a>

            <a href="#close" class="nav-close hidden do-hide-menu">
                <svg class="shape-cross">
                <use xlink:href="#shape-cross"></use>
                </svg>
            </a>

            <a href="#" class="nav-logo">
                <!--<img src="./images/layout/perspective-fighter.png" style="width: 64%;float: right;">-->
                <svg class="shape-hk-logo">
                </svg>
            </a>
        </div>

        <div class="nav-bar small-hidden">
            <a href="#about" class="nav-button left do-show-about do-track-event" data-category="About" data-action="Header">
                <p>
                    Acerca de nosotros
                    <span class="nav-chevron">
                        <svg class="nav-chevron-icon">
                        <use xlink:href="#shape-chevron-left"></use>
                        </svg>
                    </span>
                </p>
                <span class="nav-button-bg"></span>
            </a>

            <a href="#help" class="nav-button right do-show-help do-track-event" data-category="Help" data-action="Header">
                <p>
                    Servicios
                    <span class="nav-chevron">
                        <svg class="nav-chevron-icon">
                        <use xlink:href="#shape-chevron-right"></use>
                        </svg>
                    </span>
                </p>
                <span class="nav-button-bg"></span>
            </a>

            <div class="nav-heart">
                <svg class="header-clip">
                <use xlink:href="#shape-nav-clipping"></use>
                </svg>
                <a href="#" class="heart-btn do-show-nav do-track-event" data-category="Navigation" data-action="Header">
                    <div class="heart-btn-inner">
                        <img src="images/layout/logoA.png" class="heart-icon">
                    </div>
                </a>
            </div>
        </div>
    </header>


    <main class="wrapper fighter">

        <div class="perspective-wrapper">
            <!--error
                        <div class="perspective-layer distortion touch-hidden"></div>
            -->
            <div class="perspective-layer background touch-hidden"></div>
            <div class="perspective-layer foreground touch-hidden"></div>

            <section class="section home" data-section="0">
                <table class="home-letters">
                    <tbody>
                        <tr>
                            <td>s</td>
                            <td>/</td>
                            <td>/</td>
                            <td>t</td>
                            <td>r</td>
                        </tr>
                        <tr>
                            <td>o</td>
                            <td>/</td>
                            <td>/</td>
                            <td>/</td>
                            <td>n</td>
                        </tr>
                        <tr>
                            <td>P</td>
                            <td>E</td>
                            <td>N</td>
                            <td>D</td>
                            <td>O</td>
                            <td>N</td>
                        </tr>
                        <tr>
                            <td>v</td>
                            <td>/</td>
                            <td>/</td>
                            <td>e</td>
                            <td>/</td>
                        </tr>
                    </tbody>
                </table>


            </section>
            <section class="section intro" data-section="1">
                <div class="section-content">
                    <iframe src="./img/index.php" style="width:90%; height:1000px;" allowtransparency="true"  scrolling="no"></iframe>
                </div>
            </section>
        </div>

        <section class="section story" data-section="2">
            <div class="story-bg"></div>
            <div class="story-wrapper">
                <div class="section-content">
                    <svg class="story-icon shape-fighter">
                    <use xlink:href="#shape-fighter"></use>
                    </svg>

                    <h2 class="story-title">QUE HACEMOS</h2>
                    <!--<p class="story-lead">
                      <span class="story-lead-item">IMPRESIÓN GRAN FORMATO</span>
                      <span class="story-lead-item">PUBLICIDAD MÓVIL</span>
                      <span class="story-lead-item">DISEÑO</span>
                                        </p>-->
                    <p class="story-copy">
                        Tenemos la misión de comunicar, de hacer visible una marca, un producto, una empresa; apoyados en la
                        experiencia, y nuestra preparación académica asumimos la responsabilidad de asesorar a nuestros clientes, 
                        de brindarles un servicio de alta calidad, que les permita lograr cada meta que se han propuesto en todo 
                        lo referente al marketing e imagen global.
                    </p>
                    <p class="story-copy">
                        El éxito que perseguimos es la satisfacción de nuestros clientes, porque creemos que solo así nuestra 
                        empresa crece permitiéndonos lograr también nuestros propósitos.
                    </p>
                    <p class="story-copy">
                        Cada día es una oportunidad de capacitación que sabremos aprovechar para poder brindar a quienes confían 
                        en nosotros estrategias innovadoras y productos que se destaquen, efectividad en el servicio, todo esto 
                        de la mano de la honestidad, responsabilidad, transparencia, eficacia, respeto, pero sobre todo guiados 
                        por la verdad.
                    </p>
                </div>
            </div>
        </section>
        <style>
            #owl-demo .item
            {
                margin: 3px;
            }
            #owl-demo .item img
            {
                display: block;
                width: 100%;
                height: 100%;
            }
            #data-section-3{
                margin-top:150px;
                margin-botom:150px;
            }
        </style>
        <section class="section facts" data-section="3" style="bottom: 50px;" id="data-section-3">
            <div class="section-content">
                <div id="owl-demo">
                    <div class="item">
                        <article>
                            <h2 class="facts-title surgeries">IMPRESIÓN GRAN FORMATO</h2>
                            <p>
                                Uno de los más importantes  avances en la producción publicitaria ha sido la impresión gran formato, soporte  gráfico indispensable para cada empresa, en sus diferentes áreas comunicativas que interactúan diversos tipos de públicos a quien van dirigidos.
                                Nuestra trayectoria y experiencia nos permite brindar soluciones en Publicidad Exterior tales como avisos, pasacalles, vallas, rompetráficos etc,  de igual manera en adecuación de espacios, oficinas  y viviendas mediante el sector decorativo.

                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title hospital">PUBLICIDAD MÓVIL</h2>
                            <p>
                                Es de gran utilidad para cada empresa poder focalizar su clientela y llevarles la información pero es una labor que demanda una mayor inversión de tiempo y recursos, donde la publicidad móvil cumple un papel importantísimo y efectivo de mercadeo, nuestra empresa puede brindar a sus clientes campañas contundentes de este tipo de publicidad donde cada empresa puede elegir según sus criterios de efectividad, el momento oportuno donde su información arrojara los mayores resultados.
                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title future">DISEÑO</h2>
                            <p>
                                Conscientes de la responsabilidad que significa el manejo de la imagen de una empresa, nuestro mayor interés como agencia publicitaria consiste en lograr la coherencia entre nuestro lenguaje grafico y los mínimos requerimientos y detalles que las  empresas necesiten comunicar, porque para esto nos hemos preparados, para esto día a día nos capacitamos, porque  para nosotros no es un trabajo, significa un gozo ver logradas las metas para las cuales fuimos buscados: <strong>COMUNICAR</strong>
                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title photo_video">FOTOGRAFIA Y VIDEO</h2>
                            <p>
                                En los medios del lenguaje visual, jamás se podrán apartar estas históricas labores, que ha ido avanzando en tecnología y versatilidad, logrando el posicionamiento que hoy tienen, como unas de las herramientas mas útiles para la comunicación, grandes campañas, y productos sería imposible que salieran al mercado y se lograran masificar si no fuera por la fotografía y el video, por ello nuestra empresa ofrece a sus clientes un departamento calificado.
                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title sennalitica">SEÑALETICA</h2>
                            <p>
                                Actualmente por requerimientos de ley, información y estética no puede faltar en ninguna empresa los sistemas de señalización, que deben ser manejados con criterios estandarizados sin apartar de ellos la incorporación de imagen global de la empresa, podemos asesorar empresas y entidades en el debido manejo de señales informativas que deben interactuar con sus visitantes y clientes y logra así un flujo ágil y efectivo en cada dependencia. 
                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title future">P.O.P</h2>
                            <p>
                                Este sector de la publicidad creemos que toca la parte emocional entre empresa y clientes por que entra a formar parte del posicionamiento de marca de una forma cálida, porque es una extensión de su imagen, de su marca o producto que va a estar en el hogar de sus clientes, desempeñándola función para la cual fue creada y que toda empresa debe tener como primordial LA RECORDACIÓN 

                            </p>
                        </article>
                    </div>
                    <div class="item">
                        <article>
                            <h2 class="facts-title web">WEB</h2>
                            <p>
                                Que su empresa este a la vanguardia de las comunicaciones e información depende  estrictamente de este sector, la agilidad y efectividad de los sistemas actuales de comunicación hacen vital la presencia de cada empresa en las distintas redes sociales de navegación, por ser el medio de información masivo más grande de la actualidad.
                            </p>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <section class="section donate" data-section="4">
            <div class="donate-tile large help small-hidden">
                <div class="tile-content">
                    <h2 class="donate-title underlined">DEPARTAMENTO EDITORIAL</h2>
                    <p>
                        Nuestra empresa ofrece en medios impresos una completa variedad de productos publicitarios 
                        que van desde papelería comercial hasta los más creativos e impactantes brochures, portafolios, 
                        displays y empaques que fortalecen el área comunicativa y comercial de las empresas.<br/>
                        Asesoramos y producimos a nivel organizacional e individual edición de libros revistas, catálogos etc.
                        Nuestro objetivo en este sector orientar a nuestros clientes en un adecuado uso de materiales, 
                        formatos, diseño, información, distribución, presupuestos etc., para lograr un efectiva herramienta de 
                        marketing y presentación.
                    </p>
                </div>
            </div>

            <div class="donate-tile large">
                <div class="donate-tile medium dark-bg">
                    <a href="#" class="modal_contact tile-content rollover do-track-event" data-category="Donate" data-action="CTA Section">
                        <span class="underlined">
                            <span class="rollover-cta">
                                <svg class="shape-arrow-right">
                                <use xlink:href="#shape-arrow-right"></use>
                                </svg>
                                <svg class="shape-heart-cta">
                                <use xlink:href="#shape-heart-cta"></use>
                                </svg>
                            </span>
                        </span>
                        <h2 class="rollover-title">Contactanos</h2>
                        <p class="rollover-copy small-hidden">Conoce más acerca de nosotros.</p>
                    </a>
                </div>

                <a href="#" target="_blank" class="donate-tile small shirt join-bg do-track-event" data-category="Buy the Tee" data-action="CTA Section">
                    <div class="tile-content">
                        <img src="./images/donate/hk-shirt.png" alt="Heart Kids Tee" class="large-only">
                        <span class="underlined large-hidden">
                            <svg class="shape-circle-arrow-white">
                            <use xlink:href="#shape-circle-arrow-white"></use>
                            </svg>
                        </span>
                        <h2 class="small-tile-title text-color mt-r">->servicios<-</h2>
                    </div>
                </a>

                <div class="donate-tile small light-bg">
                    <a href="#video" class="tile-content do-show-video do-track-event" data-category="Watch Video" data-action="CTA Section">
                        <span class="underlined">
                            <svg class="shape-circle-arrow-white">
                            <use xlink:href="#shape-circle-arrow-white"></use>
                            </svg>
                        </span>
                        <h2 class="small-tile-title mt-r">Video de nosotros</h2>
                    </a>

                    <div class="tile-footer large-only">
                        <div class="footer share-message">
                            <a href="#" target="_blank" class="footer-social twitter first do-track-event" data-category="Twitter Share">
                                <svg class="shape-twitter">
                                <use xlink:href="#shape-twitter"></use>
                                </svg>
                            </a>

                            <a href="#" target="_blank" class="footer-social facebook do-track-event" data-category="Facebook Share">
                                <svg class="shape-facebook">
                                <use xlink:href="#shape-facebook"></use>
                                </svg>
                            </a>

                            <a href="#" target="_blank" class="footer-social instagram do-track-event" data-category="Instagram Share">
                                <svg class="shape-instagram">
                                <use xlink:href="#shape-instagram"></use>
                                </svg>
                            </a>
                            <span class="footer-copy">Siguenos</span>

                            <a href="#" target="_blank">
                                <svg class="shape-hk-logo">
                                <use xlink:href="#shape-hk-logo"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
          <section class="section kids small-hidden" data-section="5">
          <div class="section-content">
            <h2 class="kids-title underlined">More Heart Kids stories</h2>
        
            <article class="kid-item-wrapper warrior-small-bg">
          <a href="warrior.html" class="kid-item warrior do-track-event" data-category="Show Warrior">
            <div class="kid-item-inner">
        
              <div class="kid-ring outer warrior-small-bg small-hidden">
                <span class="hover-overlay"></span>
              </div>
        
              <span class="piercer small-hidden"></span>
        
              <span class="hover-arc small-hidden">
                <svg viewBox="0 0 500 500" class="arc-shape">
                  <path stroke="#ffffff" stroke-width="2" d="M83.6,417.6c42.8,42.5,101.7,68.8,166.8,68.8c130.7,0,236.7-106,236.7-236.7c0-65.1-26.3-124-68.8-166.8"/>
                </svg>
              </span>
        
              <div class="kid-ring inner warrior-small-bg small-hidden">
                <span class="hover-overlay"></span>
              </div>
        
              <h3 class="kid-title">
                Born Warrior
                <svg class="shape-arrow-right small-only">
                  <use xlink:href="#shape-arrow-right"></use>
                </svg>
              </h3>
            </div>
          </a>
        </article>
        
        
        <article class="kid-item-wrapper soldier-small-bg">
          <a href="soldier.html" class="kid-item soldier do-track-event" data-category="Show Soldier">
            <div class="kid-item-inner">
        
              <div class="kid-ring outer soldier-small-bg small-hidden">
                <span class="hover-overlay"></span>
              </div>
        
              <span class="piercer small-hidden"></span>
        
              <span class="hover-arc small-hidden">
                <svg viewBox="0 0 500 500" class="arc-shape">
                  <path stroke="#ffffff" stroke-width="2" d="M83.6,417.6c42.8,42.5,101.7,68.8,166.8,68.8c130.7,0,236.7-106,236.7-236.7c0-65.1-26.3-124-68.8-166.8"/>
                </svg>
              </span>
        
              <div class="kid-ring inner soldier-small-bg small-hidden">
                <span class="hover-overlay"></span>
              </div>
        
              <h3 class="kid-title">
                Born Soldier
                <svg class="shape-arrow-right small-only">
                  <use xlink:href="#shape-arrow-right"></use>
                </svg>
              </h3>
            </div>
          </a>
        </article>
        
            <a href="https://donate.heartkids.org.nz/" target="_blank" class="btn-border kids-link do-track-event" data-category="Donate" data-action="Nav Section">donate now</a>
          </div>
          <a href="http://method.kiwi/" target="_blank" class="credits">
            <svg class="shape-method-logo">
              <use xlink:href="#shape-method-logo"></use>
            </svg>
            site donated by method studios</a>
        </section>
        -->
        <style>
            .section.footer{
                background-image: url(././images/perspective/kids-nav-bg.jpg);
                width: 100% !important;
                height: 20% !important;
            }
            .copyfooter{
                display: block;
                margin-bottom: 30px;
                font-size: .875rem;
                font-weight: 200;
                text-transform: uppercase;
                text-align:center;
                padding-top:4%;
            }
            .copyfooter span a{
                font-weight: 900;
            }
        </style>
        <section class="section footer small-hidden" data-section="5">
            <p class="copyfooter">
                &#169; Copyright 2016 <span itemprop="name"><a href="#">UnoA|Publicidad</a>.</span> All Rights Reserved.
                <br>Design by <a target="_blank" href="http://solucionescrv.com/">CRV | SOLUCIONES SOFTWARE</a>
            </p>
        </section>


        <footer class="footer-wrapper-small small-only">
            <div class="footer share-message">
                <a href="https://twitter.com/intent/tweet?text=Visit%20our%20website%20to%20find%20out%20how%20you%20can%20make%20a%20difference%20by%20donating%20to%20Heart%20Kids%20NZ.&amp;url=http%3A%2F%2Fwww.helpingheartkids.org.nz&amp;via=HeartKidsNZ" target="_blank" class="footer-social twitter first do-track-event" data-category="Twitter Share">
                    <svg class="shape-twitter">
                    <use xlink:href="#shape-twitter"></use>
                    </svg>
                </a>

                <a href="https://www.facebook.com/heartkidsnz" target="_blank" class="footer-social facebook do-track-event" data-category="Facebook Share">
                    <svg class="shape-facebook">
                    <use xlink:href="#shape-facebook"></use>
                    </svg>
                </a>

                <a href="https://instagram.com/heartkidsnz" target="_blank" class="footer-social instagram do-track-event" data-category="Instagram Share">
                    <svg class="shape-instagram">
                    <use xlink:href="#shape-instagram"></use>
                    </svg>
                </a>

                <span class="footer-copy">
                </span>

                <a href="http://heartnz.org.nz/" target="_blank">
                    <svg class="shape-hk-logo">
                    <use xlink:href="#shape-hk-logo"></use>
                    </svg>
                </a>
            </div>
        </footer>
    </main>

    <nav class="scroll-nav small-hidden">
        <a href="#home" class="scroll-nav-item active do-scroll" data-section="0">
            <span class="scroll-nav-circle"></span>
        </a>
        <a href="#intro" class="scroll-nav-item do-scroll" data-section="1">
            <span class="scroll-nav-circle"></span>
        </a>
        <a href="#story" class="scroll-nav-item do-scroll" data-section="2">
            <span class="scroll-nav-circle"></span>
        </a>
        <a href="#facts" class="scroll-nav-item do-scroll" data-section="3">
            <span class="scroll-nav-circle"></span>
        </a>
        <a href="#donate" class="scroll-nav-item do-scroll" data-section="4">
            <span class="scroll-nav-circle"></span>
        </a>
    </nav>
    <section class="popup">
        <header class="popup-header">
            <a href="#close" class="popup-close do-close-popup">
                <svg class="shape-cross">
                <use xlink:href="#shape-cross"></use>
                </svg>
                <span class="small-hidden">volver</span>
            </a>
        </header>

        <div class="popup-content" data-popup="help">
            <a href="#" class="modal_contact popup-tile left rollover join-bg do-track-event" data-category="Buy the Tee" data-action="Help Popup">
                <div class="popup-tile-content">
                    <span class="underlined">
                        <span class="rollover-cta">
                            <svg class="shape-arrow-right">
                            <use xlink:href="#shape-arrow-right"></use>
                            </svg>
                            <svg class="shape-heart-cta">
                            <use xlink:href="#shape-heart-cta"></use>
                            </svg>
                        </span>
                    </span>
                    <h2 class="rollover-title">Dumies</h2>
                    <p class="rollover-copy">Contactanos</p>
                </div>
            </a>

            <a href="#" class="modal_contact popup-tile center rollover dark-bg do-track-event" data-category="Donate" data-action="Help Popup">
                <div class="popup-tile-content">
                    <span class="underlined">
                        <span class="rollover-cta">
                            <svg class="shape-arrow-right">
                            <use xlink:href="#shape-arrow-right"></use>
                            </svg>
                            <svg class="shape-heart-cta">
                            <use xlink:href="#shape-heart-cta"></use>
                            </svg>
                        </span>
                    </span>
                    <h2 class="rollover-title">Nuestras oficinas</h2>
                    <p class="rollover-copy">Ve a nuestras oficinas para que conozcas mas de nuestros servicios</p>
                </div>
            </a>
            <div class="popup-tile right rollover text-bg">
                <div class="popup-tile-content">
                    <div class="underlined">
                        <span class="rollover-cta">
                            <svg class="shape-arrow-right">
                            <use xlink:href="#shape-arrow-right"></use>
                            </svg>
                            <svg class="shape-heart-cta">
                            <use xlink:href="#shape-heart-cta"></use>
                            </svg>
                        </span>
                    </div>
                    <h2 class="rollover-title">valla publicitaria</h2>
                    <p class="rollover-copy">que su negocio se vea por lo alto</p>
                </div>
            </div>


        </div>
        <div class="popup-content" data-popup="about">
            <div class="popup-tile left rollover video-wrapper small-hidden">
                <video autoplay loop muted class="video-bg"><!--
                    <source src="./videos/heart-kids-bg.mp4" type="video/mp4">
                    <source src="./videos/heart-kids-bg.webm" type="video/webm">-->
                </video>
                <a href="#video" class="popup-tile-content do-show-video do-track-event" data-category="Watch Video" data-action="About Popup">
                    <span class="underlined">
                        <span class="rollover-cta">
                            <svg class="shape-arrow-right">
                            <use xlink:href="#shape-arrow-right"></use>
                            </svg>
                            <svg class="shape-heart-cta">
                            <use xlink:href="#shape-heart-cta"></use>
                            </svg>
                        </span>
                    </span>
                    <h2 class="rollover-title">video</h2>
                    <p class="rollover-copy">Poner un video de los servicios</p>
                </a>
            </div>

            <div class="popup-tile right about-content">
                <div class="about-header warrior-thumb small-only">
                    <svg class="shape-hk-logo">
                    <img src="images/layout/logo.png" style="width: 80%;margin-left: 10%;margin-top: -10%;">
                    </svg>
                </div>
                <center>
                    <!--<img src="./images/layout/perspective-fighter.png"/>-->
                </center>

                <p class="about-lead">
                    Tenemos la misión de comunicar, de hacer visible una marca, un producto, una empresa; apoyados en la experiencia, y nuestra preparación académica asumimos la responsabilidad de asesorar a nuestros clientes, de brindarles un servicio de alta calidad, que les permita lograr cada meta que se han propuesto en todo lo referente al marketing e imagen global.<br/><br/>
                    El éxito que perseguimos es la satisfacción de nuestros clientes, porque creemos que solo así nuestra empresa crece permitiéndonos lograr también nuestros propósitos.<br/><br/>
                    Cada día es una oportunidad de capacitación que sabremos aprovechar para poder brindar a quienes confían en nosotros estrategias innovadoras y productos que se destaquen, efectividad en el servicio, todo esto de la mano de la honestidad, responsabilidad, transparencia, eficacia, respeto, pero sobre todo guiados por la verdad.<br/>
                </p>
                <p class="about-copy">
                    Nuestra empresa ofrece en medios impresos una completa variedad de productos publicitarios que van desde papelería comercial hasta los más creativos e impactantes brochures, portafolios, displays y empaques que fortalecen el área comunicativa y comercial de las empresas.<br/><br/>
                    Asesoramos y producimos a nivel organizacional e individual edición de libros revistas, catálogos etc.<br/>
                    Nuestro objetivo en este sector orientar a nuestros clientes en un adecuado uso de materiales, formatos, diseño, información, distribución, presupuestos etc., para lograr un efectiva herramienta de marketing y presentación.<br/><br/>
                </p>    
                <a href="#" target="_blank" class="btn-border do-track-event" data-category="Donate" data-action="About Popup">Contactanos</a>
            </div>
        </div>
        <div class="popup-content video-wrapper" data-popup="video">
            <div class="popup-tile">
                <div id="player"></div>
                <script>
                    // This code loads the IFrame Player API code asynchronously.
                    var tag = document.createElement('script');

                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    // This function creates an <iframe> (and YouTube player) after the API code downloads.
                    var player;
                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', {
                            height: '100%',
                            width: '100%',
                            videoId: 'AIZ93NY2f_I',
                            origin: '#',
                            autoplay: 0,
                        });
                    }

                    function playVideo() {
                        player.playVideo();
                    }
                    App.playVideo = playVideo;

                    function stopVideo() {
                        player.stopVideo();
                    }
                    App.stopVideo = stopVideo;
                </script>
            </div>
        </div>


        <footer class="popup-footer small-hidden">
            <div class="footer share-message">
                <a href="https://twitter.com/intent/tweet?text=Visit%20our%20website%20to%20find%20out%20how%20you%20can%20make%20a%20difference%20by%20donating%20to%20Heart%20Kids%20NZ.&amp;url=http%3A%2F%2Fwww.helpingheartkids.org.nz&amp;via=HeartKidsNZ" target="_blank" class="footer-social twitter first do-track-event" data-category="Twitter Share">
                    <svg class="shape-twitter">
                    <use xlink:href="#shape-twitter"></use>
                    </svg>
                </a>

                <a href="https://www.facebook.com/heartkidsnz" target="_blank" class="footer-social facebook do-track-event" data-category="Facebook Share">
                    <svg class="shape-facebook">
                    <use xlink:href="#shape-facebook"></use>
                    </svg>
                </a>

                <a href="https://instagram.com/heartkidsnz" target="_blank" class="footer-social instagram do-track-event" data-category="Instagram Share">
                    <svg class="shape-instagram">
                    <use xlink:href="#shape-instagram"></use>
                    </svg>
                </a>

                <span class="footer-copy">siguenos</span>

                <a href="http://heartnz.org.nz/" target="_blank">
                    <svg class="shape-hk-logo">
                    <use xlink:href="#shape-hk-logo"></use>
                    </svg>
                </a>
            </div>
            <a href="" class="popup-footer-donate dark-bg do-track-event modal_contact" data-category="Donate" data-action="Video Popup">Contactenos</a>
        </footer>
    </section>
    <section class="menu">
        <a href="#nav" class="menu-tile large warrior-thumb do-show-nav-mobile">
            <h2 class="menu-title menu-content">
                Ver más
                <svg class="shape-arrow-right">
                <use xlink:href="#shape-arrow-right"></use>
                </svg>
            </h2>
        </a>

        <a href="#about" class="menu-tile light-bg do-show-about-mobile do-track-event" data-category="About" data-action="Mobile Menu">
            <div class="menu-content">
                <svg class="menu-icon shape-circle-heart">
                <use xlink:href="#shape-circle-heart"></use>
                </svg>
                <h2 class="menu-title text-color">Acerca de nosotros</h2>
            </div>
        </a>

        <a href="#video" class="menu-tile video-tile do-show-video-mobile do-track-event" data-category="Watch Video" data-action="Mobile Menu">
            <div class="menu-content">
                <svg class="menu-icon shape-circle-arrow">
                <use xlink:href="#shape-circle-arrow"></use>
                </svg>
                <h2 class="menu-title text-color">Ver video</h2>
            </div>
        </a>

        <a href="#" target="_blank" class="menu-tile dark-bg do-track-event" data-category="Donate" data-action="Mobile Menu">
            <div class="menu-content">
                <svg class="menu-icon shape-circle-arrow-white">
                <use xlink:href="#shape-circle-arrow-white"></use>
                </svg>
                <h2 class="menu-title">Contacto</h2>
            </div>
        </a>

        <a href="http://www.mrvintage.co.nz/collections/charitee/heart-kids-nz.html" target="_blank" class="menu-tile join-bg do-track-event" data-category="Buy the Tee" data-action="MObile Menu">
            <div class="menu-content">
                <svg class="menu-icon shape-circle-arrow-white">
                <use xlink:href="#shape-circle-arrow-white"></use>
                </svg>
                <h2 class="menu-title">Buy tee</h2>
            </div>
        </a>

        <footer class="footer-wrapper-small small-only">
            <div class="footer share-message">
                <a href="https://twitter.com/intent/tweet?text=Visit%20our%20website%20to%20find%20out%20how%20you%20can%20make%20a%20difference%20by%20donating%20to%20Heart%20Kids%20NZ.&amp;url=http%3A%2F%2Fwww.helpingheartkids.org.nz&amp;via=HeartKidsNZ" target="_blank" class="footer-social twitter first do-track-event" data-category="Twitter Share">
                    <svg class="shape-twitter">
                    <use xlink:href="#shape-twitter"></use>
                    </svg>
                </a>

                <a href="https://www.facebook.com/heartkidsnz" target="_blank" class="footer-social facebook do-track-event" data-category="Facebook Share">
                    <svg class="shape-facebook">
                    <use xlink:href="#shape-facebook"></use>
                    </svg>
                </a>

                <a href="https://instagram.com/heartkidsnz" target="_blank" class="footer-social instagram do-track-event" data-category="Instagram Share">
                    <svg class="shape-instagram">
                    <use xlink:href="#shape-instagram"></use>
                    </svg>
                </a>

                <span class="footer-copy">Nuestras redes</span>

                <a href="http://heartnz.org.nz/" target="_blank">
                    <svg class="shape-hk-logo">
                    <use xlink:href="#shape-hk-logo"></use>
                    </svg>
                </a>
            </div>
        </footer>
    </section>

    <footer class="footer-wrapper small-hidden">
        <div class="footer ">
            <a href="#" target="_blank" class="footer-social twitter first do-track-event" data-category="Twitter Share">
                <svg class="shape-twitter">
                <use xlink:href="#shape-twitter"></use>
                </svg>
            </a>

            <a href="#" target="_blank" class="footer-social facebook do-track-event" data-category="Facebook Share">
                <svg class="shape-facebook">
                <use xlink:href="#shape-facebook"></use>
                </svg>
            </a>

            <a href="#" target="_blank" class="footer-social instagram do-track-event" data-category="Instagram Share">
                <svg class="shape-instagram">
                <use xlink:href="#shape-instagram"></use>
                </svg>
            </a>

            <span class="footer-copy">Siguenos</span>
            <!--
              <a href="#" target="_blank">
                <svg class="shape-hk-logo">
                  <use xlink:href="#shape-hk-logo"></use>
                </svg>
              </a>-->
        </div>
    </footer>

</body>
</html>
