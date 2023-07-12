<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de complétion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    
</head>
<body>

    <?php echo form_open('Completion/process_form'); ?>
            
    <div class="content-wrapper">
        <div class="row default_cursor_cs">
            <h2 class="col-12 text-center my-2 my-lg-3 default_cursor_cs">
                <span class="text-purple pe-sm-1"> Formulaire de <span class="text-pink ps-1 default_cursor_cs">complétion</span></span>
                <br class="d-sm-none">
            </h2>
        </div>
        <div class="row bg-red">
            <div class="col-12 default_cursor_cs">
                <form name="bmi" method="post" action="/resultats-imc" autocomplete="off" novalidate="novalidate" class="col-12 pt-4 default_cursor_cs" id="form-bmi" data-controller="bmi-home">
                <div class="loader" data-bmi-home-target="loader"><div class="img-loader"></div></div>
                <fieldset>
                    <div class="row g-0 justify-content-center">
                        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                            <div class="row g-0 align-items-center justify-content-center default_cursor_cs">
                                <div class="col-12 col-sm-8 default_cursor_cs">
                                    <div class="row g-0 form-group justify-content-center align-items-center mb-2 default_cursor_cs">
                                        <span class="col-2 col-md-2 text-start label who-are ps-0 default_cursor_cs">Genre :</span>
                                        <div class="col-4 ps-2">
                                            <div class="form-check me-0 mb-0 d-flex justify-content-center align-items-center default_cursor_cs">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                                                <label for="customRadio2" class="custom-control-label"></label><svg class="svg-inline--fa fa-female fa-w-8 default_cursor_cs" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="female" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" cursorshover="true"><path fill="currentColor" d="M128 0c35.346 0 64 28.654 64 64s-28.654 64-64 64c-35.346 0-64-28.654-64-64S92.654 0 128 0m119.283 354.179l-48-192A24 24 0 0 0 176 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H80a24 24 0 0 0-23.283 18.179l-48 192C4.935 369.305 16.383 384 32 384h56v104c0 13.255 10.745 24 24 24h32c13.255 0 24-10.745 24-24V384h56c15.591 0 27.071-14.671 23.283-29.821z"></path></svg><!-- <i class="fas fa-female"></i> -->
                                                &nbsp;Femme
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4 ps-2">
                                            <div class="form-check me-0 mb-0 d-flex justify-content-center align-items-center default_cursor_cs">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" checked="">
                                                <label for="customRadio1" class="custom-control-label"></label><svg class="svg-inline--fa fa-male fa-w-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="male" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M96 0c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64S60.654 0 96 0m48 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H48c-26.51 0-48 21.49-48 48v136c0 13.255 10.745 24 24 24h16v136c0 13.255 10.745 24 24 24h64c13.255 0 24-10.745 24-24V352h16c13.255 0 24-10.745 24-24V192c0-26.51-21.49-48-48-48z"></path></svg><!-- <i class="fas fa-male"></i> -->
                                                &nbsp;Homme
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-0 default_cursor_cs">
                                        <div class="form-floating col-6 pe-1 col-sm-3 mb-2">
                                            <input type="number" id="bmi_age" name="bmi[age]" placeholder="ex: 39" maxlength="2" class="d-block form-control" data-bmi-home-target="age" data-action="input->bmi-home#inputChange">
                                            <label class="pe-lg-4 text-lg-right label mb-0" for="bmi_age">Mon âge</label>
                                            <span class="unit">ans</span>
                                        </div>
                                        <div class="form-floating col-6 ps-1 pe-sm-1 col-sm-3 mb-2">
                                            <input type="number" id="bmi_height" name="bmi[height]" placeholder="ex: 165" maxlength="3" class="d-block form-control" data-bmi-home-target="tall" data-action="input->bmi-home#inputChange">
                                            <label class="pe-lg-4 text-lg-right label mb-0" for="bmi_height">Ma taille</label>
                                            <span class="unit">cm</span>
                                        </div>
                                        <div class="form-floating col-6 pe-1 ps-sm-1 col-sm-3 mb-2">
                                            <input type="number" id="bmi_weight" name="bmi[weight]" placeholder="ex: 80" maxlength="3" class="form-control" data-bmi-home-target="weight" data-action="input->bmi-home#inputChange">
                                            <label class="pe-lg-4 text-lg-right label mb-0" for="bmi_weight">Mon poids</label>
                                            <span class="unit">kg</span>
                                        </div>
                                        <div class="form-floating col-6 ps-1 col-sm-3 mb-2">
                                            <select class="form-control" id="goal" name="goal">
                                                <option>Augmenter Poid</option>
                                                <option>Diminuer Poid</option>
                                            </select>
                                            <label class="pe-lg-4 text-lg-right label mb-0" for="bmi_goal">Mon objectif</label>
                                            <span class="unit"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <div class="row align-items-center justify-content-center mb-3">
                                <div class="col-12 col-sm-9 col-md-8 col-lg-7 legals mb-2 d-none">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="bmi_authorise" name="bmi[authorise]" class="custom-control-input" value="on">
                                        <label class="custom-control-label rgpd-check" for="bmi_authorise">En validant ce formulaire, j'accepte d'être contacté(e) par la société COMME J'AIME pour recevoir plus d'informations sur nos programmes<a class="actionLink" id="privacyModalLink" href=""> En savoir plus</a></label>
                                    </div>
                                </div>
                                <div class="col-12 text-center default_cursor_cs">
                                    <input id="btn-bmi-home" class="btn cta-white text-uppercase default_pointer_cs" type="submit" value="Formation du regime" data-action="click->bmi-home#submit" data-bmi-home-target="btnSend" cursorshover="true">
                                </div>
                            </div>
                            <input type="hidden" id="bmi__token" name="bmi[_token]" value="be5c71827f53797acdf8d303c614.O3fTiUvCiZMrESG-4lEosHcnPzUCXYKq3vhVP4FQg4Y.Yh-5vCissOdIJUXL1hYQ3TRDfkxYLMbApo8GfNIWzORkNoH9I_Lh92NzeA">
                        </form>
                    </div>
        </div> 
    </div>

    <?php echo form_close(); ?>


    <div class="col-12 text-center default_cursor_cs">
        <button onclick="calculerIMC()">Calculer IMC</button>
    </div>

                                                    
    <script>
        const Input_height = document.getElementById('bmi_height');
        const Input_weight = document.getElementById('bmi_weight');
        const height = document.getElementById('bmi_height').value;
        const weight = document.getElementById('bmi_weight').value;

        var selectElement = document.getElementById('goal');

        Input_height.addEventListener('input',  remplaceElement());
        Input_weight.addEventListener('input',  remplaceElement());
        
        function remplaceElement(){
            var newOption = document.createElement('option');
            newOption.setAttribute('id', 'imcoption'); 

            newOption.innerHTML = calculerMeilleurPoids(height, weight);

            // Remplacer l'option existante avec id="imcoption" s'il existe déjà
            var existingOption = document.getElementById('imcoption');
            if (existingOption) {
                selectElement.replaceChild(newOption, existingOption);
            } else {
                selectElement.add(newOption);
            }
        }

        function calculerMeilleurPoids(height, weight) {
            if(height==''||height==null||weight==''||weight==null){
                return 'veuillez entrer votre poids et votre taille pour obtenir votre IMC idéal';
            }
            // Effectuer le calcul du poids de la personne pour avoir l'IMC idéale : 21.7
            const ideal = 21.7;
            const BestWeight = ideal * (height * height);

            const poidsToGet = weight - BestWeight;
            // Retourner l'IMC calculé
            if(poidsToGet<0){
                return 'perdre '+poidsToGet*-1+' pour meilleur IMC';
            }
            return 'obtenir '+poidsToGet+' pour meilleur IMC';
        }
    </script>
</body>
</html>
