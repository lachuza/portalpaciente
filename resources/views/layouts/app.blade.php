<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Portal del Paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/portaldelpaciente.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div id="app">
         <nav class="navbar navbar-default navbar-static-top" style="margin: 0;">
            <div class="divsalir"> 
               <a class="salir" href="http://www.portaldelpaciente.com.ar/salir">Salir</a>
            </div>
            <div class="container">
               <div class="navbar-header header-logo">                  
                  {{Html::image('img/stuvi-logo.png', 'alt text', array('witdh' => '150px')) }}
                  <p>Bienvenido <span>jorge pablo orona</span> al portal del paciente</p>
                  <div style="float: right;">
                     <a href="javascript:;" onclick="dcJs.startSend()"><img style="border: 0px; display: inline-block;" id="dc_ImgStatus" src="http://dattachat.com/chat/img/wid/59c319525c609109587325/?rnd=0.7708367795165862">
                  </div>
               </div>
            </div>
         </nav>
         <div class="container home-container"></div>
         <div class="home-body">
            <ul class="topnav" id="myTopnav">
               <li class="icon">
                  <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">MENU ☰</a>
               </li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/datospersonales" style="display:none">index</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/bienvenido">DATOS PERSONALES</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/rx">RX</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/tac">TAC</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/eco">ECO</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/lab">LAB</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/bienvenido#" onclick="turnos()">TURNOS</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/estudios/26254559">RESULTADOS DE LABORATORIO</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/ambulatorio/26254559">AMBULATORIOS</a></li>
               <li class="boton"><a href="http://www.portaldelpaciente.com.ar/terminos">TERMINOS LEGALES</a></li>
            </ul>
            @yield('content')
         </div>
      </div>
      <footer>
         <p>Copyright 2017 © Sanatorio Modelo de Caseros</p>
         <div class="footerrigth">
            <img src="./Portal Del Paciente_files/dpd.jpg">
            <p>Soporte "Portal del Paciente"<br>
               <b>Telefono:</b> 4716 - 3200 - int 526<br>
               <b>Email:</b> soporte@sanatoriomodelo.com.ar<br>
               Sanatorio Modelo de Caseros SA<br>
            </p>
         </div>
      </footer>
      <script src="./Portal Del Paciente_files/app.js"></script>
      <script type="text/javascript">
         function turnos(){
         	window.open('http://www.techmedica-online.com.ar/turnos/smcx/');
         }
      </script>
      <div id="messageBoxInvitation" style="z-index: 10000;">
         <div id="dattachat_announcement" style="display: none;position: fixed; z-index: 10002; float: none; box-shadow: none; bottom: 1px; border: none; padding: 0px; height: auto; max-height: 156px;min-height: 95px; width: 457px;  color: rgb(255, 255, 255); overflow: hidden;right:0; bottom:0;">
            <div id="dattachat_announcement_content" style="width: 435px;position:absolute; right:10px;border-radius: 5px 5px 5px 5px;box-shadow: 0 1px 4px #7A7A7A;font-size: 18px;max-height: 151px;min-height: 90px;background-color:rgba(0, 0, 0, 0);background-color:#666666;background-image: -ms-linear-gradient(top, #666666 0%, #262626 100%);background-image: -moz-linear-gradient(top, #666666 0%, #262626 100%);background-image: -o-linear-gradient(top, #666666 0%, #262626 100%);background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #666666), color-stop(1, #262626));background-image: -webkit-linear-gradient(top, #666666 0%, #262626 100%);background-image: linear-gradient(to bottom, #666666 0%, #262626 100%);border: solid 2px rgb(6, 6, 6);">
               <a href="javascript:dcJs.RejectAnnouncement();" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 20px;font-weight: bold;line-height: 20px;color: rgb(255, 255, 255) !important;                                            position: absolute; right: 10px; opacity: 0.4;                                            text-shadow: rgb(0, 0, 0) 0px 1px 0px; text-decoration: none;">×</a>
               <div style="width: 100%; margin-left: 6px;">
                  <div style="font-weight:normal; text-decoration: none; font-style: normal; color: rgb(255, 255, 255) !important; font-family:Arial;margin-bottom: 10px;font-size:18px; margin-top: 0; padding: 10px; text-align: center;position: absolute;left: 0px;top: 0;width: 90%;text-align: center;">¿Necesitas ayuda?</div>
                  <div style="text-align:center; position: absolute;left: 0px;width: 90%;text-align: center;top: 50px;"><a style="display:inline-block; border-radius: 4px 4px 4px 4px;font-size: 11px; padding: 8px 18px; text-decoration: none; text-transform: uppercase;background-color: rgb(102, 102, 102);background-image: -ms-linear-gradient(top, #868686 0%, #666666 100%);background-image: -moz-linear-gradient(top, #868686 0%, #666666 100%);background-image: -o-linear-gradient(top, #868686 0%, #666666 100%);background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #868686), color-stop(1, #666666));background-image: -webkit-linear-gradient(top, #868686 0%, #666666 100%);background-image: linear-gradient(to bottom, #868686 0%, #666666 100%);font-family:Arial; border: solid 1px rgb(70, 70, 70); color: rgb(255, 255, 255) !important;" href="javascript:dcJs.AcceptAnnouncement();"><span style="font-weight:normal; text-decoration: none; font-style: normal;">Iniciar chat</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <div id="__dc_chat_window_container" style="display:none; border-width: 1px 1px medium; border-style: solid solid none; border-radius: 3px 3px 0 0; border:solid 1px #666; border-bottom:none; box-shadow: 0px 0px 3px #666; position:fixed;right:10px; bottom:0;z-index: 10000; width: 300px; min-height: 26px;height:26px;">
            <div id="__dc_open_chat_window_tab" style="box-shadow: 0 -17px 0 -5px rgba(255,255,255,.2) inset;height:15px;border-bottom: solid 1px #666; padding:5px;font-family: Arial;background:#000000; color:#ffffff !important; border-radius: 3px 3px 0 0; font-size:12px; text-decoration: none;height: 28px !important;padding: 7px !important;">                            <a id="__dc_chat_window_open_link" href="http://www.portaldelpaciente.com.ar/bienvenido#" style="display:block; position:absolute;z-index:2; height:20px; color:#ffffff !important;width:83%;font-weight:normal;text-decoration:none;font-style:normal;text-align:left">Chat en vivo</a><a href="http://www.portaldelpaciente.com.ar/bienvenido#" id="__dc_chat_window_open_icon" style="text-decoration:none;font-size: 17px; font-weight:bold;font-family: Tahoma,Arial; color: #ffffff !important; position: absolute; opacity:0.7; top: 0px;right: 28px; z-index: 0;">+</a><a href="http://www.portaldelpaciente.com.ar/bienvenido#" style="font-weight: bold; color:#ffffff !important; position: absolute; right: 10px; z-index: 0; text-decoration: none; font-size: 14px; top: 1px; font-family: Tahoma,Arial; opacity: 0.7;" id="__dc_chat_window_close_link">x</a></div>
            <iframe id="__dc_iframe" frameborder="0" style="overflow:hidden; width:100%; height:0; border:0;background:url(http://dattachat.com/img/circular-loader-client.gif) no-repeat center 100px #e4e4e4;" src="./Portal Del Paciente_files/saved_resource.html"></iframe>
         </div>
      </div>
    </body>
</html>