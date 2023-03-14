<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firanex
 */

get_header();
?>
    <main class="hero__content w">
        <h1 class="hero__content__header">
            Wystrój i aranżacja okien w Golubiu-Dobrzyniu i okolicach
        </h1>
        <h2 class="hero__content__subheader">
            Zmieniamy Twoje wnętrza dzięki naszym wyjątkowym dekoracjom okiennym!
        </h2>

        <a class="btn btn--hero" href="#kontakt">
            Zapytaj o ofertę
        </a>
    </main>
    </div>

    <!-- ABOUT US -->
    <div class="about w flex">
        <div class="about__left">
            <figure class="about__left__image">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/o-nas-1.png"; ?>" alt="o-nas" />
            </figure>
            <figure class="about__left__image">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/o-nas-2.png?n=1"; ?>" alt="o-nas" />
            </figure>
        </div>
        <div class="about__right">
            <h3 class="sectionHeader">
                Czym się zajmujemy?
            </h3>
            <p class="about__right__lead">
                Kompleksowe aranżacje okien z dojazdem do Klienta - firany, karnisze, tkaniny Golub-Dobrzyń.
            </p>
            <div class="about__right__text">
                <p>
                    Z powodzeniem rozwijamy swoją markę na rynku od roku 2011. Kompleksowo realizujemy usługi związane z wystrojem oraz aranżacją okien. Współpraca z nami obejmuje profesjonalny pomiar, kosztorys oraz projekt aranżacji okiennej, a także docięcie oraz montaż karniszy i szyn aluminiowych uznanych marek takich jak Marcin Dekor i Inter Decor Pro. Jako nasz Klient, nie trzeba się o nic martwić.
                </p>
                <p>
                    W naszej ofercie posiadamy wszelkiego rodzaju tkaniny firanowe (woale, markizety, tkaniny typu sable i Frost) znanych marek takich jak Polder Rajder, MDM czy Dip Textil, oraz tkaniny obrusowe i zasłonowe. Prowadzimy stacjonarny punkt krawiecki oraz realizujemy haft komputerowy.
                </p>
                <p>
                    Nasze projekty realizowane są zarówno dla osób prywatnych, jak i firm oraz instytucji publicznych - hoteli, pensjonatów, zajazdów, sal weselnych, szkół i urzędów.
                </p>
                <p>
                    Jesteśmy mobilni i dyspozycyjni, a nasze usługi realizujemy wraz z dojazdem do klienta. Lubimy wyzwania, dlatego zawsze jesteśmy otwarci na nowe współprace i projekty.
                </p>
                <p>
                    Zapraszamy do naszego punktu stacjonarnego w Golubiu-Dobrzyniu, który mieści się przy ul. Piłsudskiego 14/1.
                </p>
            </div>
        </div>
    </div>

    <!-- OFFER -->
    <div id="oferta" class="offer">
        <div class="w">
            <h3 class="sectionHeader">
                Nasze usługi
            </h3>
            <div class="offer__main flex">
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon1.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Firany
                        </h4>
                        <p class="offer__main__item__content__text">
                            Firany dostępne na miejscu oraz na zamówienie pod wymiar.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon2.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Pomiary i aranżacja z dojazdem do Klienta
                        </h4>
                        <p class="offer__main__item__content__text">
                            Pomiar w Twoim domu wraz z projektem.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon3.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Szyny aluminiowe i karnisze, karnisze elektryczne
                        </h4>
                        <p class="offer__main__item__content__text">
                            Montaż kompletów z dojazdem do Klienta.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon4.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Haft komputerowy
                        </h4>
                        <p class="offer__main__item__content__text">
                            Wykończenie odzieży haftem wysokiej jakości, np. odzież reklamowa lub robocza.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon5.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Kompleksowe doradztwo
                        </h4>
                        <p class="offer__main__item__content__text">
                            Wykorzystujemy swoją wiedzę i doświadczenie, aby Ci pomóc.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon6.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Ręczniki, pościele, koce
                        </h4>
                        <p class="offer__main__item__content__text">
                            Wysokiej jakości materiały i ciekawy design - to cechy naszych produktów.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon7.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Rolety rzymskie
                        </h4>
                        <p class="offer__main__item__content__text">
                            Sprawdzą się idealnie jako zamiennik tradycyjnych firan czy zasłon.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon8.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Tkaniny holenderskie
                        </h4>
                        <p class="offer__main__item__content__text">
                            Wysokiej jakości oryginalne tkaniny holenderskie.
                        </p>
                    </div>
                </div>
                <div class="offer__main__item flex">
                    <figure class="offer__main__item__image center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/icon9.svg"; ?>" alt="firany" />
                    </figure>
                    <div class="offer__main__item__content">
                        <h4 class="offer__main__item__content__header">
                            Tekstylia domowe
                        </h4>
                        <p class="offer__main__item__content__text">
                            Koce, narzuty, poszewki, obrusy i inne tkaniny, które zadbają o wystrój i wygodę.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OUR TEAM -->
    <div id="onas" class="team w">
        <h3 class="sectionHeader">
            Poznaj nasz zespół
        </h3>
        <div class="team__main flex">
            <div class="team__main__item">
                <figure class="team__main__item__image">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zespol-1.png?n=1"; ?>" alt="zespol" />
                </figure>
                <h4 class="team__main__item__name">
                    Anna Beck
                </h4>
                <h5 class="team__main__item__post">
                    Właściciel
                </h5>
                <a class="team__main__item__phoneNumber"
                   href="tel:+48516126855">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                    516 126 855
                </a>
            </div>
            <div class="team__main__item">
                <figure class="team__main__item__image">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zespol-2.png?n=2"; ?>" alt="zespol" />
                </figure>
                <h4 class="team__main__item__name">
                    Agnieszka Beck-Wilczewska
                </h4>
                <h5 class="team__main__item__post">
                    Aranżer-dekorator, doradca klienta
                </h5>
                <a class="team__main__item__phoneNumber"
                   href="tel:+48509656946">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                    509 656 946
                </a>
            </div>
            <div class="team__main__item">
                <figure class="team__main__item__image">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zespol-3.png?n=3"; ?>" alt="zespol" />
                </figure>
                <h4 class="team__main__item__name">
                    Żaneta Iglewska
                </h4>
                <h5 class="team__main__item__post">
                    Aranżer-dekorator, doradca klienta
                </h5>
                <a class="team__main__item__phoneNumber"
                   href="tel:+48509656946">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                    509 656 946
                </a>
            </div>
        </div>
    </div>

    <!-- BRANDS -->
    <div class="brands w">
        <h3 class="sectionHeader">
            Dostawcy
        </h3>

        <div class="brands__main flex">
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/polder-rajder.png"; ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    POLDER & RAJDER
                </h4>
                <p class="brands__main__item__text">
                    Hurtownia tekstyliów domowych z ponad 25-letnim doświadczeniem. Tkaniy i firany do wystroju
                    każdego rodzaju okien.
                </p>
            </div>
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mdm.png?n=1"; ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    MDM Firany
                </h4>
                <p class="brands__main__item__text">
                    Wyczucie stylu, nowoczesne wzornictwo jak i podążanie za trendami doceniane przez klientów
                    od 2010 roku.
                </p>
            </div>
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/m-styl.png"; ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    M STYL
                </h4>
                <p class="brands__main__item__text">
                    Stylowe firany w różnych wzorach i kolorach. Każda z nich wykonana z dużą starannością
                    i dbałością o detale.
                </p>
            </div>
        </div>

        <h5 class="brands__secondHeader">
            A także inne popularne marki z branży...
        </h5>
        <div class="brands__others">
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://reczniki-zwoltex.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zwoltex.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://www.diptextil.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/dip-textil.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://ania.biz.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/ania-hurtownia-tkanin.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://vadain.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/vadain.svg"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://www.agora-firany.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/agora-firany.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://mlmtekstylia.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mlm-tekstylia.jpg"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://natalia.com.pl/pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/natalia.jpg"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://lech-pol.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/lechpol.svg"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="http://koldrexpol.com.pl/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/koldrexpol.webp"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://eds-studio.com.pl">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/eds.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://haftex.com/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/haftex.png"; ?>" alt="zwoltex" />
            </a>
            <a class="brands__others__link"
               rel="noreferrer"
               href="https://interdecorpro.pl/polityka-prywatnosci-rodo/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/idp.png"; ?>" alt="zwoltex" />
            </a>
        </div>
    </div>

    <!-- CLUB -->
    <div class="club w">
        <h3 class="sectionHeader">
            Klub Firanex
        </h3>

        <div class="club__section flex">
            <figure class="club__section__left">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/klub.png"; ?>" alt="klub" />
            </figure>
            <div class="club__section__right">
                <h4 class="club__section__right__header">
                    Dołącz do klubu i zyskaj!
                </h4>
                <p class="club__section__right__text">
                    Korzystaj z dodatkowych promocji, rabatów i zdobywaj nagrody jako członek Klubu Firanex. Wystarczy wypełnić prosty formularz rejestracyjny dostępny w naszym sklepie stacjonarnym, aby zyskać szereg korzyści.
                </p>
                <p class="club__section__right__text">
                    <span>
                        Jak działa Klub Firanex?
                    </span>
                    Każde wydane 200 zł w naszym sklepie to jedna pieczątka rabatowa, którą przystawiamy na Twoją kartę członkowską. Dziesięć pieczątek w okresie 365 dni oznacza 200 zł rabatu na kolejne zakupy w sklepie Firanex. Karta członkowska dotyczy tylko osób prywatnych.
                </p>
                <p class="club__section__right__text">
                    <span>
                        Jak dołączyć do Klubu?
                    </span>
                    Wystarczy odwiedzić nasz sklep stacjonarny mieszczący się w Golubiu-Dobrzyniu przy ul. Piłsudskiego 14/1 (naprzeciwko komisariatu policji). Na miejscu należy wypełnić prosty formularz rejestracyjny i... Gotowe!
                </p>
            </div>
        </div>

        <div class="club__section flex">
            <div class="club__section__right">
                <h4 class="club__section__right__header">
                    Bon Podarunkowy - idealny na prezent
                </h4>
                <p class="club__section__right__text">
                    Jeśli chcesz sprawić komuś radość i podarować możliwość dokonania zakupów w naszym sklepie, wypróbuj Bon Podarunkowy.
                </p>
                <p class="club__section__right__text">
                    Za równowartość Bonu można zakupić wybrane produkty lub skorzystać z jednej z naszych usług, np. projektu i aranżacji okna z dojazdem do domu Klienta.
                </p>
            </div>
            <figure class="club__section__left">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/bon.png"; ?>" alt="bon-podarunkowy" />
            </figure>
        </div>
    </div>

    <!-- PORTFOLIO -->
    <div id="realizacje" class="portfolio">
        <h3 class="sectionHeader w">
            Ostatnie realizacje
        </h3>
        <div class="portfolio__main w">
            <div class="portfolio__main__carousel">
                <button class="portfolio__main__carousel__item" onclick="openGallery(0)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-1.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Elegancki zestaw  wykonany z białego gładkiego woalu
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Zasłony z tkaniny EFE (dostępne w różnej kolorystyce). Do całości został zastosowany system "WAVE".
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(1)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-2.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                             Aranżacja okienna uszyta na taśmie "SMOK"
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Lambrekin wykończony lamówką atłasową. Firanka uszyta z białego woalu, falbanki i lambrekin wykonany z tkaniny imitującej len.
                            Lalka wypalana laserowo.
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(2)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-3.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Zasłony i firany uszyte na przelotkach firmy Marcin Dekor
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Firana ze srebrną nitką delikatnie połyskująca, dół wykończony ołowianką.
         Zasłona wykonana z tkaniny drukowanej w duże kwiaty, kolor turkus z szarością.
        Do kompletu aranżacji zostały dopasowane poszewki wraz  z narzutą.
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(3)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-4.jpg?n=1"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Panel wykonany z tkaniny gładkiej
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Wykończony ażurem wypalanym laserowo. Dół dodatkowo został obciążony listwą pcv.
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(4)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-5.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Aranżacja wykonana na taśmie "SMOK".
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                             Firana z miękkiej tkaniny z efektem "deszczyku". Zasłonki uszyte z tkaniny EFE (dostępne w różnej kolorystyce).
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(5)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-6.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Atrapa rolety rzymskiej z doszyta tkaniną EFE
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Posiada 3 zakładki + wiązania z kokardkami.
         Firana  z  batystu z dodatkiem kryształku.
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(6)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-7.png?n=1"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Aranżacja uszyta na taśmie "SMOK"
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Firanka bardzo delikatna na kryształku w stylu Glamour.
         Zasłony z tkaniny EFE (dostępne w różnej kolorystyce).
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(7)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-8.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Firana ze srebrną nitką delikatnie połyskująca
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Dół wykończony ołowianką.
           Zasłony uszyte na przelotkach z tkaniny EFE (dostępne w różnej kolorystyce).
                        </span>
                    </span>
                </button>
                <button class="portfolio__main__carousel__item" onclick="openGallery(8)">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-9.jpg"; ?>" alt="realizacje" />
                    <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            Roleta rzymska "DUO"  uszyta z tkanin z firmy VADAIN
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            Firana  z tkaniny ANOTHER NR 10. Zasłona z tkaniny CONCRETE – DIM OUT.
                        </span>
                    </span>
                </button>
            </div>

            <div class="portfolio__main__controls flex">
                <button class="btn btn--control btn--prev" onclick="portfolioPrev()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="prev" />
                </button>

                <a class="btn btn--portfolioFacebook"
                   target="_blank"
                   rel="noreferrer"
                   href="https://www.facebook.com/firanex.decor">
                    Zobacz wszystkie realizacje
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
                </a>

                <button class="btn btn--control btn--next" onclick="portfolioNext()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="prev" />
                </button>
            </div>
        </div>

    </div>

    <!-- CONTACT -->
    <div id="kontakt" class="contact">
        <h3 class="sectionHeader w">
            Jak nas znaleźć?
        </h3>
        <div class="contact__main w">
            <div class="contact__main__form">
                <h5 class="contact__main__form__header">
                    Skontaktuj się z nami lub odwiedź nasz punkt stacjonarny
                </h5>
                <p class="contact__main__form__text">
                    Wypełnij formularz kontaktowy, a my odezwiemy się do Ciebie w celu konsultacji.
                </p>

                <?php
                    echo do_shortcode('[contact-form-7 id="5" title="Formularz 1"]');
                ?>
            </div>
            <div class="contact__main__map">
                <?php
                    echo do_shortcode('[wpgmza id="1"]')
                ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>