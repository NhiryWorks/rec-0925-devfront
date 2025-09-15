<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Paiement</title>
  <meta name="description" content="Paiement" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lato:400,700" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('icomoon/style.css') }}">
</head>
<body class="bg-white text-[#2C2C2C] antialiased">

    <header class="border border-neutral-200 bg-white">
        <!-- Bande du haut avec logo -->
        <div class="mx-auto max-w-screen-2xl py-6">
            <a href="/rakotomanana-completez-votre-reservation" class="flex items-center w-[312px]">
                <img src="{{ asset('images/centre-national-de-tests-psychotechniques-v5.png') }}" alt="AAAP - Centre national des tests psychotechniques" class="w-full h-full object-cover" />
            </a>
        </div>

        <!-- Bande avec titre -->
        <div class="bg-white shadow-[0px_3px_14px_#00000029]">
            <div class="mx-auto max-w-screen-2xl py-10">
                <h1 class="text-[33px] font-bold text-[#36578A] leading-tight">
                    Test psychotechnique pour permis de conduire à Montgeron
                </h1>
            </div>
        </div>
    </header>

    <main class="py-10">
        <div class="mx-auto max-w-screen-2xl">
            <!-- Grid: contenu + récap sticky -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- ============ COLONNE GAUCHE (2/3) ============ -->
                <div class="lg:col-span-2 space-y-8">
                    <h2 class="text-[31px] text-[#383838] mb-5 font-bold">Confirmer et payer</h2>
                    <!-- Alerte “forte demande” -->
                    <div class="rounded-xl bg-white border border-[#7070702B] p-5 mb-5 flex gap-5 items-center">
                        <div class="icon-trending-up text-[#BF2A6B] text-[26px]"></div>
                        <div class="text-2xl">Date de réservation en forte demande <br/>Les réservations sont fréquentes pour ce centre</div>
                    </div>

                    <!-- Vos informations personnelles -->
                    <section class="space-y-4 border-b border-[#7070702B] pb-5">
                        <h3 class="font-bold text-[26px]">Vos informations personnelles</h3>

                        <div class="space-y-3">
                            <input type="text" placeholder="Nom Prénom"
                                class="w-full text-[16px] bg-[#F2F3F5] rounded-xl border border-[#7070702B] px-4 py-3 outline-none focus:ring-2 focus:ring-[#36578A]" />
                            <input type="email" placeholder="Email"
                                class="w-full text-[16px] bg-[#F2F3F5] rounded-xl border border-[#7070702B] px-4 py-3 outline-none focus:ring-2 focus:ring-[#36578A]" />
                            <input type="tel" placeholder="Numéro de téléphone"
                                class="w-full text-[16px] bg-[#F2F3F5] rounded-xl border border-[#7070702B] px-4 py-3 outline-none focus:ring-2 focus:ring-[#36578A]" />
                        </div>
                    </section>

                    <!-- Votre test psychotechnique -->
                    <section class="space-y-4 border-b border-[#7070702B] pb-5">
                        <h3 class="font-bold text-[26px]">Votre test psychotechnique</h3>

                        <div class="space-y-4">
                            <!-- Ligne: Date -->
                            <div class="flex items-center gap-4">
                                <!-- Icône placeholder -->
                                <span class="icon-calendar text-[22px]"></span>
                                <div class="text-xl leading-none">
                                    <strong>Date</strong> <br/>
                                    <span>12 mai 2025</span>
                                </div>
                            </div>

                            <!-- Ligne: Horaire -->
                            <div class="flex items-center gap-4">
                                 <!-- Icône placeholder -->
                                <span class="icon-clock text-[22px]"></span>
                                <div class="text-xl leading-none">
                                    <strong>Horaire</strong> <br/>
                                    <span>12:30</span>
                                </div>
                            </div>

                            <!-- Ligne: Adresse -->
                            <div class="flex items-center gap-4">
                                 <!-- Icône placeholder -->
                                <span class="icon-map-pin text-[24px]"></span>
                                <div class="text-xl leading-none">
                                    <strong>Adresse</strong> <br/>
                                    <span>39 Rue Emile Steiner, 27200 Vernon</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Paiement -->
                    <section class="space-y-4">
                    <div class="">
                        <h3 class="font-bold text-[26px]">Choisissez votre moyen de paiement</h3>
                        <div class="text-base flex items-start gap-1">
                            <span class="icon-padlock text-[22px]"></span>
                            <span>100% SÉCURISÉ</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <!-- Carte bancaire -->
                        <label class="flex items-center gap-3 cursor-pointer border-b border-[#7070702B] pb-5">
                            <input type="radio" name="pay" class="sr-only peer">
                            <span class="w-5 h-5 rounded-full border border-gray-300 grid place-items-center
                                        before:content-[''] before:w-2.5 before:h-2.5 before:rounded-full before:bg-[#BF2A6B] before:opacity-0
                                        peer-checked:before:opacity-100"></span>
                            <span class="text-xl">Carte bancaire</span>
                        </label>

                        <!-- Apple Pay -->
                        <label class="flex items-center gap-3 cursor-pointer border-b border-[#7070702B] pb-5">
                            <input type="radio" name="pay" class="sr-only peer">
                            <span class="w-5 h-5 rounded-full border border-gray-300 grid place-items-center
                                        before:content-[''] before:w-2.5 before:h-2.5 before:rounded-full before:bg-[#BF2A6B] before:opacity-0
                                        peer-checked:before:opacity-100"></span>
                            <span class="text-xl">Apple Pay</span>
                        </label>

                        <!-- Paypal -->
                        <label class="flex items-center gap-3 cursor-pointer border-b border-[#7070702B] pb-5">
                            <input type="radio" name="pay" class="sr-only peer">
                            <span class="w-5 h-5 rounded-full border border-gray-300 grid place-items-center
                                        before:content-[''] before:w-2.5 before:h-2.5 before:rounded-full before:bg-[#BF2A6B] before:opacity-0
                                        peer-checked:before:opacity-100"></span>
                            <span class="text-xl">Paypal</span>
                        </label>

                        <!-- Alma -->
                        <label class="flex items-center gap-3 cursor-pointer border-b border-[#7070702B] pb-5">
                            <input type="radio" name="pay" class="sr-only peer">
                            <span class="w-5 h-5 rounded-full border border-gray-300 grid place-items-center
                                        before:content-[''] before:w-2.5 before:h-2.5 before:rounded-full before:bg-[#BF2A6B] before:opacity-0
                                        peer-checked:before:opacity-100"></span>
                            <span class="text-xl">Alma</span>
                        </label>
                    </div>

                        <!-- CTA -->
                        <button
                            class="bg-[#BF2A6B] text-white text-[26px] mt-12 font-bold p-3 w-full rounded-xl flex justify-center items-center gap-[26px] hover:bg-[#9E2257] shadow-[0px_3px_6px_#00000029] cursor-pointer">
                            Je réserve mon test psychotechnique <span class="icon-arrow-right text-[22px]"></span>
                        </button>
                    </section>

                </div>

                <!-- ============ COLONNE DROITE (1/3) STICKY ============ -->
                <aside class="lg:sticky lg:top-6 h-max">
                    <div class="rounded-xl bg-white border border-[#7070702B] p-10 mb-5">
                        <h3 class="text-[#BF2A6B] text-xl font-bold mb-5">Récapitulatif de votre test psychotechnique</h3>

                        <div class="text-lg mb-4">Total à payer : <strong>130.00€</strong></div>

                        <p class="text-[14px]">
                        En passant votre commande, vous acceptez les conditions générales de vente de la société AAEP.
                        Veuillez consulter notre politique de protection des données.
                        </p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 pt-2">
                        <div class="text-center">
                            <div class="icon-hand-click h-14 w-14 mx-auto rounded-full shadow-[0px_3px_14px_#00000029] text-[30px] text-[#0DBC0D] flex items-center justify-center"></div>
                            <div class="mt-5 text-base leading-none"><strong>Entraînement</strong><br>Gratuit illimité</div>
                        </div>
                        <div class="text-center">
                            <div class="icon-file-checked h-14 w-14 mx-auto rounded-full shadow-[0px_3px_14px_#00000029] text-[30px] text-[#0DBC0D] flex items-center justify-center"></div>
                            <div class="mt-5 text-base leading-none"><strong>Résultats</strong><br>le jour même</div>
                        </div>
                        <div class="text-center">
                            <div class="icon-check-circle h-14 w-14 mx-auto rounded-full shadow-[0px_3px_14px_#00000029] text-[30px] text-[#0DBC0D] flex items-center justify-center"></div>
                            <div class="mt-5 text-base leading-none"><strong>Annulation</strong><br>gratuite jusqu’à 48h</div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </main>
</body>
</html>
