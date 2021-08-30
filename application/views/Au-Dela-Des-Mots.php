<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="<?php echo base_url();?>/resources/img/favicon.ico" />
    <title>Humanitaire</title>
    <!-- styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/humanitaire.css" />
    <!-- web-font loader-->

    <script>
        WebFontConfig = {

            google: {

                families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

            }

        }

        function font() {

            var wf = document.createElement('script')

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>
</head>

<body>

    <div class="page-wrapper">
        <!-- aside dropdown end-->
        <!-- header start-->
        <div class="aside-dropdown">
            <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
                <div class="aside-dropdown__item d-lg-none d-block">
                    <ul class="aside-menu">
                        </li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="<?php echo site_url("Home");?>"><span>Accueil</span></a>
                            <!-- sub menu start-->

                            <!-- sub menu end-->
                        </li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="#QuiSommeNous"><span>A Propos de Nous</span></a>
                            <!-- sub menu start-->

                            <!-- sub menu end-->
                        </li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="#devenirBenevole"><span>Devenir Bénevole</span></a>
                        </li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#Contact1"><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="aside-dropdown__item">
                    <!-- aside menu start-->
                    <ul class="aside-menu">
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#">Culturel</a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="<?php echo site_url("Cultuel");?>">Cultuel</a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="<?php echo site_url("Humanitaire");?>">Humanitaire</a></li>

                    </ul>
                    <!-- aside menu end-->
                    <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">Bureau@centre-des-lumieres.fr</a></div>
                    <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:06 72 23 00 00">06 72 23 00 00</a><a class="aside-inner__link" href="tel:06 72 23 00 00">06 72 23 00 00</a></div>
                    <ul class="aside-socials">
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i
                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i
									class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i
									class="fa fa-youtube-play" aria-hidden="true"></i></a></li>


                    </ul>
                </div>
                <div class="aside-dropdown__item"><a class="form__submit_violet" href="<?php echo site_url("donate");?>" style="margin-left:30px;"><span>Faire un don</span></a>
                </div>
            </div>
        </div>
        <!-- aside dropdown end-->
        <!-- top bar start-->
        <div class="top-bar d-none d-lg-block" style="background:#7E42AE">
            <div class="container-fluid">
                <div class="row align-items-end">
                    <div class="col-lg-9"><a class="top-bar__link" href="tel:06 72 23 00 00">06 72 23 00 00</a><a class="top-bar__link" href="mailto:Bureau@centre-des-lumieres.fr">Bureau@centre-des-lumieres.fr</a></div>
                    <div class="col-lg-3 text-right">
                        <ul class="socials">
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook"
										aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-twitter"
										aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram"
										aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-youtube-play"
										aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar end-->
        <!-- header start-->
        <!-- header start-->
        <!-- header start-->
        <header class="header header--front_3">
            <div class="container-fluid">


                <div class="row no-gutters justify-content-between" style="height:80px;">
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-logo">
                            <a class="header-logo__link"><img class="header-logo__img logo--light" src="<?php echo base_url();?>/resources/img/Favicon.png" alt="logo" id="img_mob"><img class="header-logo__img logo--dark" src="<?php echo base_url();?>/resources/img/Logo-Horizontal.png" alt="logo" id="logo_img" style="height:300px"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <!-- main menu start-->
                        <nav>
                            <ul class="main-menu">

                                <li id="Accueil" class="main-menu__item main-menu__item--has-child main-menu__item--active"><a class="main-menu__link" href="<?php echo site_url("Home");?>"><span>Accueil</span></a>
                                </li>
                                <li id="Somme" class="main-menu__item main-menu__item--has-child
											"><a class="main-menu__link" href="#aprop"><span>A Propos</span></a>
                                </li>
                                <li id="Horaire" class="main-menu__item main-menu__item--has-child
											"><a class="main-menu__link" href="#projet"><span>Projets</span></a>
                                </li>
                                <li id="Benevole" class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="#devenirBenevole"><span>Devenir Bénevole</span></a>

                                    <li id="Contact" class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="#Contact1"><span>Contact</span></a>

                                    </li>
                                    <li id="participer" class="main-menu__item main-menu__item--has-child"><a class="form__submit_violet" href="<?php echo site_url("donate");?>" style="margin-top:15px;"><span>Faire un don</span></a>

                                    </li>

                            </ul>

                        </nav>
                        <!-- main menu end-->
                    </div>



                    <div class="col-auto d-flex align-items-center">
                        <!-- lang select start-->
                        <ul class="lang-select">

                            <div class="col-auto d-flex align-items-center">
                                <div class="dropdown-trigger dropdown-trigger--inner d-none d-sm-block">
                                    <div class="dropdown-trigger__item"></div>
                                </div>
                                <!--
																	<div class="header-logo" style="visibility: hidden"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>	<div class="header-logo" style="visibility: hidden"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>	<div class="header-logo" style="visibility: hidden"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>	<div class="header-logo" style="visibility: hidden"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>	<div class="header-logo" style="visibility: hidden"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>	 -->
                            </div>
                        </ul>
                        <!-- lang select end-->

                        <div class="dropdown-trigger dropdown-trigger--inner d-block d-sm-none">
                            <div class="dropdown-trigger__item"></div>
                        </div>
                    </div>





                </div>
            </div>
        </header>
        <!-- header end-->
        <main class="main">

            <!-- promo start-->
            <div class="main" id="Accueil1">
                <section class="promo promo--front_3">
                    <div class="promo-slider">
                        <div class="promo-slider__item promo-slider__item--style-3">
                            <picture>
                                <source srcset="<?php echo base_url();?>/resources/img/slider-1.png" media="(min-width: 835px)" />
                                <source srcset="<?php echo base_url();?>/resources/img/slider-1.png" media="(min-width: 376px)" /><img class="img--bg" src="<?php echo base_url();?>/resources/img/slider-1.png" alt="img" />
                            </picture>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-7">
                                        <div class="align-container">
                                            <div class="align-container__item">
                                                <div class="promo-slider__wrapper-1">
                                                    <h2 class="promo-slider__title"><span>Helpo Volounteers</span><br/><span>Help to Animals</span></h2>
                                                </div>
                                                <div class="promo-slider__wrapper-2">
                                                    <p class="promo-slider__subtitle" style="color:#ffffff">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo-slider__item promo-slider__item--style-2">
                            <picture>
                                <source srcset="<?php echo base_url();?>/resources/img/slider-2.png" media="(min-width: 835px)" />
                                <source srcset="<?php echo base_url();?>/resources/img/slider-2.png" media="(min-width: 376px)" /><img class="img--bg" src="<?php echo base_url();?>/resources/img/slider-2.png" alt="img" />
                            </picture>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 offset-xl-6 text-left">
                                        <div class="align-container" id="pic_align">
                                            <div class="align-container__item">
                                                <div class="promo-slider__wrapper-1">
                                                    <h2 class="promo-slider__title"><span>We Help Animals</span><br/><span>Around the world</span></h2>
                                                </div>
                                                <div class="promo-slider__wrapper-2">
                                                    <p class="promo-slider__subtitle" style="color:#ffffff">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="promo-slider__item promo-slider__item--style-1">
                            <picture>
                                <source srcset="<?php echo base_url();?>/resources/img/slider-3.png" media="(min-width: 835px)" />
                                <source srcset="<?php echo base_url();?>/resources/img/slider-3.png" media="(min-width: 376px)" /><img class="img--bg" src="<?php echo base_url();?>/resources/img/slider-3.png" alt="img" />
                            </picture>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="align-container">
                                            <div class="align-container__item">
                                                <div class="promo-slider__wrapper-1">
                                                    <h2 class="promo-slider__title"><span>Animals need helps</span><br/><span>around the world.</span></h2>
                                                </div>
                                                <div class="promo-slider__wrapper-2">
                                                    <p class="promo-slider__subtitle" style="color:#ffffff">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- slider nav start-->
                    <div class="slider__nav slider__nav--promo">
                        <div class="promo-slider__count"></div>
                        <div class="slider__arrows">
                            <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </div>
                            <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <!-- slider nav end-->
                </section>
            </div>
            <!-- promo end-->
            <div class="col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                <div class="container event-item" style="margin-top:-80px;">
                    <div class="event-item__content">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-2 col-md-2 col-lg-2 m-0">
                                <span style="color: blueviolet;"><i class="fas fa-donate fa-3x"></i></span>

                            </div>
                            <div class="col-5 col-md-5 col-lg-5 m-0">
                                <span class="don-text" style="color: blueviolet;"> Faites un don maintenant <br>et aidez-nous a changer des vies </span>
                            </div>
                            <div class="col-5 col-md-3 col-lg-2 m-0 p-0">
                                <a class=" form__submit_violet  text-center" style="border-radius: 15px;" data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php echo site_url("donate");?>">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonials style-1 end-->
            </section>
            <!--floating img-->
            <a href="<?php echo site_url("donate");?>" id="StikyButton" style="visibility: hidden; width:65px;height: 65px ; top:85%;box-shadow: 1px 1px 4px 0px white;left:90%" class="float">
                <img class="img-float" src="<?php echo base_url();?>/resources/img/Asset 1.png" />
            </a>
            <!--About us Start-->
            <section class="section" id="aprop">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-5">
                            <div class="heading heading--primary">
                                <h2 class="heading__title primary-color" id="titleAL"><span style="color: black;font-weight:lighter;font-size: xx-large;">À PROPOS DE</span>
                                    <br/>
                                    <span style="font-weight:lighter;">AU DELÀ DES MOTS </span></h2>
                            </div>
                            <div class="col-lg-6 col-xl-6 offset-xl-1" id="ZakatL">
                                <div class="img-box">
                                    <div class="img-box__img"><img class="img--bg" src="<?php echo base_url();?>/resources/img/prop.png" alt="img" id="imgL" />
                                    </div>


                                </div>
                            </div>
                            <p>Pour les musulmans, les actes humanitaires constituent un élément essentiel de la pratique religieuse. Nombreux sont les textes coraniques et prophétiques qui plaident en faveur de l’action humanitaire en la définissant et en ordonnant de la pratiquer. Ils sont soit de nature obligatoire, soit de nature incitative et n’excluent pas les non-musulmans de l’aide humanitaire. Pour le musulman, accomplir un acte humanitaire est une façon de recevoir l’aide du ciel, de racheter ses péchés et de mériter le paradis. Les mécanismes établis par la religion (p. ex. la zakat, le waqf et la kaffara) ont eu un impact sans précédent sur la vie de la population : affranchissement des esclaves, soutien significatif aux plus vulnérables et expansion du système d’éducation et de santé. Aujourd’hui, "Au-Delà-Des-Mots", fondée sur la foi, se réfère à ces textes pour lancer ses programmes humanitaires dans divers domaines.
                            </p>
                            <a class="form__submit_violet" onclick="show()" style="margin-top:15px;"><span>Voir la suite</span></a>
                        </div>
                        <div class="col-lg-6 col-xl-6" id="ZakatR">
                            <div class="img-box">
                                <div class="img-box__img"><img class="img--bg" src="<?php echo base_url();?>/resources/img/prop.png" alt="img" id="imgR" />
                                </div>


                            </div>


                        </div>
                    </div>
                    <p style="display:none;" id="para">L’humanitaire est un des principes fondamentaux de la religion musulmane.<br>
Faire un don ou secourir un sinistré sont des actes qui ne sont pas laissés à la libre appréciation du croyant mais sont parfois obligatoires au même titre que la prière, le jeûne du Ramadan ou le pèlerinage à La Mecque. L’exercice de l’acte humanitaire chez le musulman est donc une composante essentielle de la pratique religieuse, qu’il se limite à un don en argent ou en nature ou qu’il revête une forme plus pratique telle que, par exemple, don de soi, secours ou distribution d’aide.<br>
Cette dimension religieuse motive, canalise et intensifie les autres dimensions que sont l’affectif et le sens du devoir.<br>
Les textes coraniques ou prophétiques qui incitent à l’action humanitaire, qui la définissent ou qui la réglementent sont très nombreux. Ils ont soit un caractère obligatoire, soit un caractère incitatif. Pour un musulman, entreprendre une action humanitaire est un moyen de recevoir l’aide du ciel, d’effacer ses péchés, d’échapper au châtiment, de remercier le Seigneur pour ses bienfaits et de mériter le paradis.</p>
                </div>
            </section>
            <script>
                function show(){
                    document.getElementById("para").style.display="unset";
                }
            </script>
            <!----About us End---->


            <!---START2-->
            <section class="Quotes" style="background-color:#7E42AE;">
                <div class="container">
                <div class="row">
                        <div class="col-xl-12 text-center mt-3"><i class="fas fa-quote-left fa-2x" style="color: #fff;"></i></div>
                        <div class="col-xl-12 text-center m-2">
                        <div class="col-xl-12 text-center mb-3" style="color: whitesmoke;">Le hadith du Prophète rapporté par Al Hakim </div>
                            <h2 class="Quote_1" style="letter-spacing: 0.6px;font-weight:lighter ;text-align:center">« Si, dans une commune, un homme décède de famine,<br>
alors tous les résidants de cette commune se mettent hors de la protection de Dieu<br>
et de son prophète…» 
                            </h2>
                        </div>
                        <br>
                        <div class="col-xl-12 text-center mb-3" style="color: whitesmoke;">_ Al-Hakim, Al-Moustadrak</div>
                    </div>

                </div>
            </section>
            <section class="section action-section">
                <div class="jarallax">
                    <picture>
                        <source srcset="<?php echo base_url();?>/resources/img/sectiondon.png" media="(min-width: 992px)" /><img class="jarallax-img" src="<?php echo base_url();?>/resources/img/sectiondon.png" alt="img" />
                    </picture>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-10 text-left">
                            <p style="color:black; font-size:30px;font-weight:700"> Plus on aide les autres, plus on est heureux ;<br>Plus on est heureux, plus on a envie<br>d'aider les autres  </p>
                            <div class="col-10 text-left">
                            <p style="color: black;font-size:25px">-Frédéric Lenoir</p>
                            </div>
                            <div class="col-10 text-left">

                                <a class="form__submit_violet"  style="margin-bottom:20px"href=""<?php echo site_url("donate");?>""><span>Faire un don</span></a>

                            </div>
                            <div class="col-10 text-left">
                            <p style="color: black; font-size:25px" >Votre grandeur n'est pas ce que vous avez<br>C'est ce que vous donnez !</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--END-->
            <!---Counter-->
            <section class="section action-section">
            <div class="jarallax">
		<picture>
			<source srcset="<?php echo base_url();?>/resources/img/compteur.png" media="(min-width: 992px)" /><img class="jarallax-img" src="<?php echo base_url();?>/resources/img/compteur.png"
				alt="img" />
		</picture>
	</div>
            <div class="container" style=" font-family: 'Montserrat';">
                <hr style="margin-bottom: 60px;">
                <div class="row offset-margin">
                    <div class="col-md-3 text-center">
                        <div class="counter-item counter-item--style-3">

                            <div class="counter-item counter-item--style-3  d-flex align-items-center flex-column">
                            <div class="counter-item__num" style=" color : white;"><span class="js-counter">3,689
                                        </span></div>    
                            <div class="counter-item__top">
                                    <h6 class="counter-item__title" style=" color : black;">
                                        <img class="asset_img" src="<?php echo base_url();?>/resources/img/comp1.png" alt="img" />

                                    </h6>
                                </div>

                               
                                <div class="counter-item__top">
                                    <h6 class="counter-item__titles_stat" style="color:white">Dons Collectés
                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="counter-item counter-item--style-3">

                            <div class="counter-item counter-item--style-3  d-flex align-items-center flex-column">
                            <div class="counter-item__num" style=" color: white;"><span class="js-counter">25</span></div>
                                <div class="counter-item__top">
                                    <h6 class="counter-item__title" style=" color : black;"> <img class="asset_img" src="<?php echo base_url();?>/resources/img/comp2.png" alt="img" width="100" /> </h6>
                                </div>
                                <div class="counter-item__top">
                                    <h6 class="counter-item__titles_stat" style="color:white">Echange</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="counter-item counter-item--style-3">

                            <div class="counter-item counter-item--style-3  d-flex align-items-center flex-column">
                            <div class="counter-item__num" style="color:white"><span class="js-counter">25</span></div>
                                <div class="counter-item__top">
                                    <h6 class="counter-item__title" style=" color : black;"> <img class="asset_img" src="<?php echo base_url();?>/resources/img/comp3.png" alt="img" width="100" />
                                    </h6>
                                </div>
                              
                                <div class="counter-item__top">
                                    <h6 class="counter-item__titles_stat" style="color:white">Orientation</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="counter-item counter-item--style-3  d-flex align-items-center flex-column">
                        <div class="counter-item__num" style="color:white"><span class="js-counter">
                                        1,865
                                    </span></div>
                            <div class="counter-item__top">
                                <h6 class="counter-item__title" style=" color : black;"> <img class="asset_img" src="<?php echo base_url();?>/resources/img/comp4.png" alt="img" width="100" />
                                </h6>
                            </div>
                            
                            <div class="counter-item__top">
                                <h6 class="counter-item__titles_stat" style="color:white">Plat</h6>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
            </div>
            </section>
            <!--end Counter-->
            <!--modal 1 start-->
            <div id="modalScrollableCenter1" class="modal fade bd-example-modal-xl" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <section style="background-image:url(<?php echo base_url();?>/resources/img/imgmodal.jpg);background-repeat: no-repeat;background-size: cover;height:180px">

                            <button type="button" class="close" data-dismiss="modal" style="color:white;" id="modalx">X</button>
                        </section>
                        <div class="modal-body" style="margin-right:5%;margin-left: 5%;margin-bottom: 2%;">
                            <center>
                                <div class="col-12">
                                    <h4 style="color:#7E42AE">Nom du projet</h4>
                                </div>
                                <br>
                                <div class="row" style="background-color: #7E42AE;border:1px solid white; border-radius:10px;width:100%">
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;"> Date
                                        <br>
                                        <p style="font-weight: lighter;">10.07.2021</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Lieu
                                        <br>
                                        <p style="font-weight: lighter;">Paris</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Participants
                                        <br>
                                        <p style="font-weight: lighter;">153 </p>

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="margin-bottom:2% ;">
                                    <p>La laïcité repose sur trois principes et valeurs : la liberté de conscience et celle de manifester ses convictions dans les limites du respect de l’ordre public, la séparation des.C’est à partir d’une vision de l’Humain
                                        en général (femmes et hommes) et de sa condition vulnérable en particulier, que le centre des lumières puise la légitimité de ses actions cultuelles culturelles et humanitaires. Les Hommes doivent être au service
                                        les uns des autres. C’est par le don et le partage qu’ils s’accomplissent.</p>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="background-color:lightgrey;border:1px solid white; border-radius:10px;width:100%">
                                    <p style="color:black; margin-top:15px;font-size: 15px;">don récoltés lors de cette action : 5000€</p>

                                </div>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <!--modal 1 end-->
            <!--modal 2 start-->
            <div id="modalScrollableCenter2" class="modal fade bd-example-modal-xl" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <section style="background-image:url(<?php echo base_url();?>/resources/img/imgmodal.jpg);background-repeat: no-repeat;background-size: cover;height:180px">

                            <button type="button" class="close" data-dismiss="modal" style="color:white;" id="modalx">X</button>
                        </section>
                        <div class="modal-body" style="margin-right:5%;margin-left: 5%;margin-bottom: 2%;">
                            <center>
                                <div class="col-12">
                                    <h4 style="color:#7E42AE">Nom du projet</h4>
                                </div>
                                <br>
                                <div class="row" style="background-color: #7E42AE;border:1px solid white; border-radius:10px;width:100%">
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;"> Date
                                        <br>
                                        <p style="font-weight: lighter;">10.07.2021</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Lieu
                                        <br>
                                        <p style="font-weight: lighter;">Paris</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Participants
                                        <br>
                                        <p style="font-weight: lighter;">153 </p>

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="margin-bottom:2% ;">
                                    <p>La laïcité repose sur trois principes et valeurs : la liberté de conscience et celle de manifester ses convictions dans les limites du respect de l’ordre public, la séparation des.C’est à partir d’une vision de l’Humain
                                        en général (femmes et hommes) et de sa condition vulnérable en particulier, que le centre des lumières puise la légitimité de ses actions cultuelles culturelles et humanitaires. Les Hommes doivent être au service
                                        les uns des autres. C’est par le don et le partage qu’ils s’accomplissent.</p>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="background-color:lightgrey;border:1px solid white; border-radius:10px;width:100%">
                                    <p style="color:black; margin-top:15px;font-size: 15px;">don récoltés lors de cette action : 5000€</p>

                                </div>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <!--modal 2 end-->
            <!--modal 3 start-->
            <div id="modalScrollableCenter3" class="modal fade bd-example-modal-xl" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <section style="background-image:url(<?php echo base_url();?>/resources/img/imgmodal.jpg);background-repeat: no-repeat;background-size: cover;height:180px">

                            <button type="button" class="close" data-dismiss="modal" style="color:white;" id="modalx">X</button>
                        </section>
                        <div class="modal-body" style="margin-right:5%;margin-left: 5%;margin-bottom: 2%;">
                            <center>
                                <div class="col-12">
                                    <h4 style="color:#7E42AE">Nom du projet</h4>
                                </div>
                                <br>
                                <div class="row" style="background-color: #7E42AE;border:1px solid white; border-radius:10px;width:100%">
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;"> Date
                                        <br>
                                        <p style="font-weight: lighter;">10.07.2021</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Lieu
                                        <br>
                                        <p style="font-weight: lighter;">Paris</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Participants
                                        <br>
                                        <p style="font-weight: lighter;">153 </p>

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="margin-bottom:2% ;">
                                    <p>La laïcité repose sur trois principes et valeurs : la liberté de conscience et celle de manifester ses convictions dans les limites du respect de l’ordre public, la séparation des.C’est à partir d’une vision de l’Humain
                                        en général (femmes et hommes) et de sa condition vulnérable en particulier, que le centre des lumières puise la légitimité de ses actions cultuelles culturelles et humanitaires. Les Hommes doivent être au service
                                        les uns des autres. C’est par le don et le partage qu’ils s’accomplissent.</p>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="background-color:lightgrey;border:1px solid white; border-radius:10px;width:100%">
                                    <p style="color:black; margin-top:15px;font-size: 15px;">don récoltés lors de cette action : 5000€</p>

                                </div>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <!--modal 3 end-->
            <!--modal 4 start-->
            <div id="modalScrollableCenter4" class="modal fade bd-example-modal-xl" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <section style="background-image:url(<?php echo base_url();?>/resources/img/imgmodal.jpg);background-repeat: no-repeat;background-size: cover;height:180px">

                            <button type="button" class="close" data-dismiss="modal" style="color:white;" id="modalx">X</button>
                        </section>
                        <div class="modal-body" style="margin-right:5%;margin-left: 5%;margin-bottom: 2%;">
                            <center>
                                <div class="col-12">
                                    <h4 style="color:#7E42AE">Nom du projet</h4>
                                </div>
                                <br>
                                <div class="row" style="background-color: #7E42AE;border:1px solid white; border-radius:10px;width:100%">
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;"> Date
                                        <br>
                                        <p style="font-weight: lighter;">10.07.2021</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Lieu
                                        <br>
                                        <p style="font-weight: lighter;">Paris</p>

                                    </div>
                                    <div class="col" style="color:#fff;font-size: 15px;font-weight: bold;margin-top:10px ;">Participants
                                        <br>
                                        <p style="font-weight: lighter;">153 </p>

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="margin-bottom:2% ;">
                                    <p>La laïcité repose sur trois principes et valeurs : la liberté de conscience et celle de manifester ses convictions dans les limites du respect de l’ordre public, la séparation des.C’est à partir d’une vision de l’Humain
                                        en général (femmes et hommes) et de sa condition vulnérable en particulier, que le centre des lumières puise la légitimité de ses actions cultuelles culturelles et humanitaires. Les Hommes doivent être au service
                                        les uns des autres. C’est par le don et le partage qu’ils s’accomplissent.</p>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                    <div class="col">
                                        <img class="img-fluid_modal" src="<?php echo base_url();?>/resources/img/Palestine.jpg">

                                    </div>
                                </div>
                                <br>
                                <div class="col-12" style="background-color:lightgrey;border:1px solid white; border-radius:10px;width:100%">
                                    <p style="color:black; margin-top:15px;font-size: 15px;">don récoltés lors de cette action : 5000€</p>

                                </div>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <!--modal 4 end-->
            <section class="section elements elements--testimonials no-padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <h4 class="elements__title"></h4>
                        </div>
                    </div>
                </div>
                <!-- testimonials style-3 start-->

                <section class="section testimonials testimonials--style-3" id="projet">



                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="row align-items-end">
                                <div class="col-sm-8 col-md-6 col-xl-12">
                                        <div class="primary-color"><span class="heading__pre-titl primary-colore"></span>
                                            <h2 class="heading__title primary-color"><span>NOS <br> PROJET</span><br /></h2>
                                        </div>
                                        <p>ici à AU DELÀ DES MOTS, nous faisons de notre mieux pour aider les autres à travers nos projets et nos événements</p>
                                    </div>
                                    <div class="col-sm-4 col-md-6 col-xl-12">
                                        <!-- slider nav start-->
                                        <div class="slider__nav testimonials-style-3__nav">
                                            <div class="slider__arrows">
                                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                </div>
                                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- slider nav end-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="testimonials__slider-holder">
                                    <div class="testimonials-slider testimonials-slider--style-3">
                                        <div class="testimonials-slider__item">
                                            <div class="testimonials-slider__icon primary-color">“</div>
                                            <div class="testimonials-slider__text">
                                                <h4>Projet 1</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 m-0 p-0 col-lg-8 col-md-8">
                                                        <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder!</p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <img class="img-fluid" src="<?php echo base_url();?>/resources/img/prj1.jpg">
                                                </div>

                                                <div class="testimonials-slider__author">

                                                    <a href="#modalScrollableCenter1" role="button" class="form__submit_violet  m-2" data-toggle="modal">Plus de détail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-slider__item">
                                            <div class="testimonials-slider__icon primary-color">“</div>
                                            <div class="testimonials-slider__text">
                                                <h4>Projet 2</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 m-0 p-0 col-lg-8 col-md-8">
                                                        <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder!</p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <img class="img-fluid" src="<?php echo base_url();?>/resources/img/prj2.jpg">
                                                </div>

                                                <div class="testimonials-slider__author">
                                                    <a href="#modalScrollableCenter2"  role="button" class="form__submit_violet  m-2" data-toggle="modal">Plus de détail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-slider__item">
                                            <div class="testimonials-slider__icon primary-color">“</div>
                                            <div class="testimonials-slider__text">
                                                <h4>Projet 3</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 m-0 p-0 col-lg-8 col-md-8">
                                                        <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder!</p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <img class="img-fluid" src="<?php echo base_url();?>/resources/img/prj3.jpg">
                                                </div>

                                                <div class="testimonials-slider__author">
                                                    <a href="#modalScrollableCenter3" role="button" class="form__submit_violet  m-2" data-toggle="modal">Plus de détail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonials-slider__item">
                                            <div class="testimonials-slider__icon primary-color">“</div>
                                            <div class="testimonials-slider__text">
                                                <h4>Projet 4</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 m-0 p-0 col-lg-8 col-md-8">
                                                        <p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder!</p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <img class="img-fluid" src="<?php echo base_url();?>/resources/img/Palestine.jpg">
                                                </div>

                                                <div class="testimonials-slider__author">
                                                    <a href="#modalScrollableCenter4" role="button" class="form__submit_violet  m-2" data-toggle="modal">Plus de détail</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonials style-3 end-->
            </section>
            <section class="Quotes" style="background-color:#7E42AE;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 text-center mt-3"><i class="fas fa-quote-left fa-2x" style="color: #fff;"></i></div>
                        <div class="col-xl-12 text-center m-2">
                        <div class="col-xl-12 text-center mb-3" style="color: whitesmoke;"> </div>
                            <h2 class="Quote_1" style="letter-spacing: 0.6px;font-weight:lighter ;text-align:center">Les aumônes sont destinées aux pauvres, aux nécessiteux, à ceux qui sont chargés de la collecter, à ceux dont les cœurs sont à gagner, au rachat des captifs, aux insolvables, à ceux qui se consacrent à la cause d'Allâh et aux
                                voyageurs.
                            </h2>
                        </div>
                        <br>
                        <div class="col-xl-12 text-center mb-3" style="color: whitesmoke;">(Coran, S.9 V.60)</div>
                    </div>

                </div>
            </section>
<?php

// Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     
     $nom = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone-number'];
     $msg = $_POST['message'];

 // Plusieurs destinataires
     $to  = 'test@miraiphi.com'; // notez la virgule

     // Sujet
     $subject = 'Contact';

     // message
     $message = '
     <html>
      <head>
       <title>Envoi MSG de la part de M./Mme '.$nom.' </title>
      </head>
      <body>
       <p>Envoi MSG de la part de M./Mme '.$nom.' Ayan le numero '.$phone.' et voici son message :</p>
       <p>'.$msg.'</p>
       
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Test<test@miraiphi.com>';
     $headers[] = 'From: '.$nom.'<'.$email.'>';
     $headers[] = 'Cc: anniversaire_archive@example.com';
     $headers[] = 'Bcc: anniversaire_verif@example.com';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

    
  }
?>
            <section>
                <div>
                    <div class="row justify-content-end">
                        <br>
                        <div class="col-xl-6" id="devenirBenevole" style="
                                  background-image: url(<?php echo base_url();?>/resources/img/benevole.png);
    background-repeat: no-repeat;
    background-size: cover;">  <div class="row">
                        <div class="col-12"style="margin-left:50px;margin-top:90px">
                            


                              <h6 style="color: white"> PARTICIPER A UNE ACTION </h6>
                           
                            <h2 class="action-section__title mt-3" style="color: white"> DEVENIR BÉNÉVOLE </h2>
                            <p style="color: white; font-size:20px">Vivre, c'est aider à vivre. Il faut créer<br>d'autres bonheurs pour être heureux.<br></p>
                        </div>
                    </div></div>
                        <div class="col-xl-6 p-xl-5">
                            <form class="form message-form_ben" action="<?php echo base_url()?>index.php/Humanitaire/form_benevole" method="post" onsubmit="alert('message envoyé !')">
                                <h4 class="justify-content-center" style="color:blueviolet;">Devenir Bénévole</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="form__field form_fshadow" type="text" name="last-name" placeholder="Nom" required="required" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field form_fshadow" type="text" name="first-name" placeholder="Prenom" required="required" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field form_fshadow" type="email" name="email" placeholder="Email" required="required" />
                                    </div>

                                    <div class="col-lg-6">
                                        <input class="form__field form_fshadow" type="tel" name="phone-number" placeholder="Tél" />
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form__message form__field form_fshadow" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="form__submit_violet" type="submit form_fshadow" name="submit"  style="margin: 0%;">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--Quote start-->
            <!--Quote end-->
            <!-- Participe start-->
            <!-- Participe end-->
            <!-- info banner start-->
            <section class="section no-padding-top">
                <div class="container">
                    <div class="row">
                        <img src="<?php echo base_url();?>/resources/img/03.png" class="imgmaintenant" alt="img" />
                        <div class="col-12">
                            <div class="info-banner">
                                <div class="row align-items-center">

                                    <div class="col-lg-5">
                                        <div class="heading--LogoContact">
                                            <img src="<?php echo base_url();?>/resources/img/02.png" alt="img" />
                                        </div>
                                        <br><br>
                                        <div class="heading heading--primary heading--centerContact">
                                            <h2><span style="color:#7E42AE;">Télécharger</span> <span style="color:black">l'application</span></h2>

                                        </div>
                                        <div class="heading heading--primary heading--testContact">
                                            <img src="<?php echo base_url();?>/resources/img/03.png" alt="img" />
                                        </div><br><br>
                                        <br>
                                        <div class="info-banner__imgContact">
                                            <p style="color:black">Téléchargez l'application et profitez des widgets islamiques .</p>
                                        </div>
                                        <div class="But">
                                            <a href="https://apps.apple.com/ml/app/centre-des-lumi%C3%A8res/id1544302544"><img class="AppButtGooglePlay" src="<?php echo base_url();?>/resources/img/AppStore.png"></a>
                                            <br>
                                            <a href="https://play.google.com/store/apps/details?id=com.masjidbox.centredeslumieres5fbdbf96612b4900151187c7&hl=en&gl=US"><img class="AppButtGooglePlay" src="<?php echo base_url();?>/resources/img/GooglePlay.png"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-banner__img"><img src="<?php echo base_url();?>/resources/img/01.png" alt="img" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- info banner end-->
            <!--contact start-->
            <div class="main" id="Contact1">
                <section class="section contacts">
                    <div class="container style">
                        <div class="row margin-bottom">
                            <div class="col-12" style="margin-bottom: -75px;">
                                <div class="d-flex justify-content-center text-center">
                                    <h2 class="heading__title" style="color:blueviolet"><span>Contactez Nous</span> </h2>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row offset-margin">
                            <div class="col-sm-4 col-lg-4">
                                <div class="icon-item">

                                    <div class="icon-item__text" style="margin-bottom:-20px">
                                        <p>Adresse</p>
                                    </div>
                                    <div class="icon-item__text"> 577 Bellevue Avenue <br> Malden,MA 02148</div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="icon-item">

                                    <div class="icon-item__text" style="margin-bottom:-20px">
                                        <p>Messagerie</p>
                                    </div>
                                    <div class="icon-item__text"></div> <a class="icon-item__link" href="mailto:Bureau@centre-des-lumieres.fr">au.dela.des.mots@gmail.com</a><br>+1 222-345-0000
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="icon-item">
                                    <div class="icon-item__text" style="margin-bottom:-20px">
                                        <p>Suivez nous </p>
                                    </div>
                                    <div class="icon-item__text">
                                        <!-- socials start-->
                                        <ul class="socials">
                                            <li class="socials__item"><a class="socials__link" href="#"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="socials__item"><a class="socials__link" href="#"><i
														class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="socials__item"><a class="socials__link" href="#"><i
														class="fa fa-youtube-play" aria-hidden="true"></i></a></li>


                                        </ul>
                                        <!-- socials end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- section end-->
                    <!-- section start contact-->
                    </br>
<?php

// Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     
     $nom = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone-number'];
     $msg = $_POST['message'];

 // Plusieurs destinataires
     $to  = 'test@miraiphi.com'; // notez la virgule

     // Sujet
     $subject = 'Contact';

     // message
     $message = '
     <html>
      <head>
       <title>Envoi MSG de la part de M./Mme '.$nom.' </title>
      </head>
      <body>
       <p>Envoi MSG de la part de M./Mme '.$nom.' Ayan le numero '.$phone.' et voici son message :</p>
       <p>'.$msg.'</p>
       
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Test<test@miraiphi.com>';
     $headers[] = 'From: '.$nom.'<'.$email.'>';
     $headers[] = 'Cc: anniversaire_archive@example.com';
     $headers[] = 'Bcc: anniversaire_verif@example.com';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

    
  }
?>
                    <div class="container">

                        <!-- contacts start-->
                        <!-- contacts start-->
                        <section class="section contacts no-padding-top" style=" font-family: 'Montserrat';">
                            <div class="contacts-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 justify-content-end" style="margin-top: 50px;">
                                        <form class="form message-form" action="<?php echo base_url()?>index.php/Humanitaire/form_contact" method="post" onsubmit="alert('message envoyé !')">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input class="form__field form_fshadow" type="text" name="last-name" placeholder="nom*" required="required" />
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input class="form__field form_fshadow" type="text" name="first-name" placeholder="prenom*" required="required" />
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input class="form__field form_fshadow" type="email" name="email" placeholder="Email" required="required" />
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <input class="form__field form_fshadow" type="tel" name="phone-number" placeholder="Tél" />
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea class="form__message form__field form_fshadow" name="message" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="form__submit_violet" type="submit form_fshadow" name="submit"  style="margin: 0%;">Envoyer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 justify-content-end" style="margin-top: 50px;">
                                        <div id="imgcont1">         
                                       <div class="img-box">
                                           <div class="img-box__img"><img class="img--bg" src="<?php echo base_url();?>/resources/img/cont.jpg" alt="img"style="height:80%" /></div>
                                       </div>
                                   
                                                   </div>
</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--contact end-->


        </main>
        <!-- footer start-->
        <footer class="footer footer--front_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">

                        <div class="footer-contacts">
                            <p class="footer-contacts__address">Rue Galilée Zac de la Vilette aux aulnes 77290 mitry-mory
                            </p>
                            <p class="footer-contacts__phone">Phone: <a href="tel:06 72 23 00 00">06 72 23 00 00</a>
                            </p>
                            <p class="footer-contacts__mail">Email: <a href="mailto:support@helpo.org">Bureau@centre-des-lumieres.fr</a></p>
                        </div>
                        <!-- footer socials start-->
                        <ul class="footer-socials">
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

                        </ul>
                        <!-- footer socials end-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 offset-xl-1">

                        <!-- footer nav start-->

                        <!-- footer nav end-->
                    </div>
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <h6 class="footer__title" style="font-weight: 500 ;">Menus et liens</h6>
                        <div class="footer__form">
                            <nav>
                                <ul class="footer-menu">
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo site_url("Home");?>">Accueil</a></li>

                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#">Culturel</a>
                                    </li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#aprop">A
                                            Propos </a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo site_url("Cultuel");?>">Cultuel</a>
                                    </li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#projet">Projets</a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo site_url("Humanitaire");?>">Humanitaire</a>
                                    </li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#devenirBenevole">Devenir Bénévole</a>
                                    </li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" style="visibility: hidden;">
                                            Contact</a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#Contact1">Contact</a>
                                    </li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#" style="visibility:hidden;" type="hidden">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row align-items-baseline">
                    <div class="col-md-12">
                        <p class="footer-copyright" style="text-align: center;">Copyright © 2021 Centre des lumieres | Powered by MiraiΦ Solutions
                        </p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- footer end-->
        </div>
        <!-- libs-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/resources/js/libs.min.js"></script>
        <!-- scripts-->
        <script src="<?php echo base_url();?>/resources/js/common.min.js"></script>
        <script>
            window.onscroll = () => {
                console.log(scrollY);
                var elementL1 = document.getElementById("StikyButton");




                if (window.scrollY < 450) {
                    elementL1.style.visibility = "hidden";


                } else {
                    elementL1.style.visibility = "visible";

                }






            };
        </script>

        </script>
        </div>
</body>

</html>