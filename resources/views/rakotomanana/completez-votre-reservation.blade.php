<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Complétez votre réservation</title>
        <meta name="description" content="Choisissez une formule et complétez votre réservation." />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=lato:400,700" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('icomoon/style.css') }}" />

        @vite('resources/js/app.js')
    </head>
    <body class="bg-quaternary text-[#2C2C2C] antialiased">
        <header class="bg-white">
            <!-- Bande du haut avec logo -->
            <div class="container mx-auto px-4 py-5 md:py-6">
                <a href="/rakotomanana-completez-votre-reservation" class="flex items-center w-[250px] md:w-[312px]">
                    <img src="{{ asset('images/centre-national-de-tests-psychotechniques-v5.png') }}" alt="AAAP - Centre national des tests psychotechniques" class="w-full h-full object-cover" />
                </a>
            </div>

            <!-- Bande avec titre -->
            <div class="bg-white shadow-[0px_3px_14px_#00000029]">
                <div class="mx-auto container px-4 py-5 md:py-10">
                    <h1 class="text-2xl lg:text-[33px] font-bold text-primary leading-tight">
                        Test psychotechnique pour permis de conduire à Montgeron
                    </h1>
                </div>
            </div>
        </header>

        <main id="contenu" class="mx-auto container px-4 pt-12 md:pt-16 pb-[400px] lg:pb-[300px]">
            <h2 class="text-2xl lg:text-[31px] text-[#383838] mb-10 md:mb-14 font-bold">Complétez votre réservation</h2>
            <!-- Formulaire de choix d’offre -->
            <form action="#" method="post" class="">
                <section>
                    <div class="grid gap-11 xl:gap-16 lg:grid-cols-3">
                        <!-- Plan : Basic -->
                        <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white">
                            <div class="rounded-t-[30px] shadow-[0px_3px_6px_#00000029] bg-quaternary text-center pt-[14px] pb-[12px] px-2 xl:px-0">
                                <h3 class="text-xl lg:text-[28px] font-bold">Basic</h3>
                                <p class="text-base lg:text-xl">Votre test psychotechnique simple</p>
                            </div>

                            <div class="py-10 md:py-[52px] text-center">
                                <div class="border-b border-b-[#7070702B] pb-[32px]">
                                    <p class="text-5xl lg:text-6xl font-bold">+ 0€</p>

                                    <div class="mt-6 lg:mt-16 flex justify-center">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="plan" value="basic" class="sr-only peer" />
                                            <span
                                                class="text-xl lg:text-[26px] text-[#353535] bg-quaternary shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#e5e6e8] peer-checked:bg-[#e5e6e8] after:content-['\e90d'] after:font-icomoon relative after:absolute after:top-1/2 after:left-[27px] after:-translate-y-1/2 after:opacity-0 after:text-[10px] peer-checked:after:opacity-100 transition-all duration-300"
                                            >
                                                Sélectionner
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <ul class="p-5 md:p-8 text-left text-lg gap-4 md:gap-6 flex flex-col">
                                    <li class="flex items-center gap-4">
                                        <span class="icon-hand-point text-[22px] text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Entraînement illimité et gratuit</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-check-circle text-[26px] text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Annulation jusqu’à 48 heures</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-paperclip text-[22px] text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Recevez votre test le jour J</span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <!-- Plan : Assurance (mis en avant) -->
                        <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white border-4 border-[#0DBC0D] relative">
                            <div class="rounded-t-[30px] shadow-[0px_3px_6px_#00000029] bg-secondary text-center pt-[14px] pb-[12px] text-white px-2 xl:px-0">
                                <h3 class="text-xl lg:text-[28px] font-bold">Assurance</h3>
                                <p class="text-base lg:text-xl">Votre test psychotechnique sans stress</p>
                            </div>

                            <div class="py-10 md:py-[52px] text-center">
                                <div class="border-b border-b-[#7070702B] pb-[32px]">
                                    <p class="text-5xl lg:text-6xl font-extrabold leading-[120%]">+ 40€</p>
                                    <p class="text-base">À peine le prix d’un resto</p>

                                    <div class="mt-6 flex justify-center">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="plan" value="assurance" class="sr-only peer" checked />
                                            <span
                                                class="text-xl lg:text-[26px] text-white bg-secondary shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#0DBC0D] hover:text-[#2C2C2C] peer-checked:bg-[#0DBC0D] peer-checked:text-[#2C2C2C] after:content-['\e90d'] after:font-icomoon relative after:absolute after:top-1/2 after:left-[27px] after:-translate-y-1/2 after:opacity-0 after:text-[10px] peer-checked:after:opacity-100 peer-checked:after:text-[#0DBC0D] transition-all duration-300"
                                            >
                                                Sélectionner
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <ul class="p-5 md:p-8 text-left text-lg gap-4 md:gap-6 flex flex-col">
                                    <li class="flex items-center gap-4">
                                        <span class="icon-hand-point text-[22px] text-secondary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Entraînement illimité et gratuit</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-check-circle text-[26px] text-secondary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Annulation jusqu’à 48 heures</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-refresh text-[24px] text-secondary text-center min-w-[26px]"></span>
                                        <strong class="text-base lg:text-lg leading-tight">Repassez votre test pour 0€ (si test échoué)</strong>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-paperclip text-[22px] text-secondary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Recevez votre test le jour J</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-book-open text-[22px] text-secondary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Livre de préparation au test psychotechnique</span>
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <!-- Plan : Complet -->
                        <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white">
                            <div class="rounded-t-[30px] shadow-[0px_3px_6px_#00000029] bg-primary text-center pt-[14px] pb-[12px] text-white px-2 xl:px-0">
                                <h3 class="text-xl lg:text-[28px] font-bold">Complet</h3>
                                <p class="text-base lg:text-xl">Votre test psychotechnique tout compris</p>
                            </div>

                            <div class="py-10 md:py-[52px] text-center">
                                <div class="border-b border-b-[#7070702B] pb-[32px]">
                                    <p class="text-5xl lg:text-6xl font-bold leading-[120%]">+ 60€</p>
                                    <p class="text-base">À peine le prix de 4 pizzas</p>

                                    <div class="mt-6 md:mt-7 flex justify-center">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="plan" value="complet" class="sr-only peer" />
                                            <span
                                                class="text-xl lg:text-[26px] text-white bg-primary shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#2E4973] peer-checked:bg-[#2E4973] after:content-['\e90d'] after:font-icomoon relative after:absolute after:top-1/2 after:left-[27px] after:-translate-y-1/2 after:opacity-0 after:text-[10px] peer-checked:after:opacity-100 peer-checked:after:text-[#2E4973] transition-all duration-300"
                                            >
                                                Sélectionner
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <ul class="p-5 md:p-8 text-left text-lg gap-4 md:gap-6 flex flex-col">
                                    <li class="flex items-center gap-4">
                                        <span class="icon-hand-point text-[22px] text-primary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Entraînement illimité et gratuit</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-check-circle text-[26px] text-primary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Annulation jusqu’à 48 heures</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-refresh text-[24px] text-primary text-center min-w-[26px]"></span>
                                        <strong class="text-base lg:text-lg leading-tight">Repassez votre test pour 0€ (si test échoué)</strong>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-paperclip text-[22px] text-primary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Recevez votre test le jour J</span>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <span class="icon-book-open text-[22px] text-primary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Livre de préparation au test psychotechnique</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <span class="icon-download text-[22px] text-primary text-center min-w-[26px]"></span>
                                        <span class="text-base lg:text-lg leading-tight">Téléchargez vos résultats en illimité</span>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>

                <!-- Récap / barre fixe bas -->
                <aside class="fixed inset-x-0 bottom-0 bg-[#353535] text-white">
                    <div class="mx-auto container px-4 py-8">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-center md:justify-between">
                            <!-- Cartouche rendez-vous -->
                            <div class="flex-none basis-max">
                                <div class="flex items-center gap-4 bg-quaternary border border-[#70707040] rounded-[20px] py-6 pl-[30px] pr-18">
                                    <div class="icon-calendar-check text-[28px] text-tertiary"></div>
                                    <div class="text-primary">
                                        <p class="font-bold text-xl lg:text-2xl">Test psychotechnique le <time datetime="2025-03-28T14:00">28 mars à 14:00</time></p>
                                        <p class="text-base lg:text-xl">15 rue de la république Montgeron 91230</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Total + CTA -->
                            <div class="flex items-start lg:items-center flex-col gap-[14px]">
                                <div class="w-full flex items-center lg:justify-between text-white gap-3">
                                    <p class="text-xl lg:text-2xl">Total</p>
                                    <p class="text-4xl lg:text-5xl font-bold">135€</p>
                                </div>
                                <a
                                    href="/rakotomanana-paiement"
                                    class="bg-tertiary text-white text-xl lg:text-[26px] font-bold p-3 min-w-[286px] rounded-xl flex justify-center items-center gap-[18px] hover:bg-[#9E2257] shadow-[0px_3px_6px_#00000029] transition-all duration-300"
                                >
                                    Suivant <span class="icon-arrow-right text-[22px]"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </form>
        </main>
    </body>
</html>
