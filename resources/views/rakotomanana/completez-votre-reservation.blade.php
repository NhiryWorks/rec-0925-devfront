<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Complétez votre réservation</title>
  <meta name="description" content="Choisissez une formule et complétez votre réservation." />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lato:400,700" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('icomoon/style.css') }}">

</head>
<body class="bg-[#F2F3F5] text-[#2C2C2C] antialiased">

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


  <main id="contenu" class="mx-auto max-w-screen-2xl pt-[65px] pb-[300px]">
    <h2 class="text-[31px] text-[#383838] mb-[58px] font-bold">Complétez votre réservation</h2>
    <!-- Formulaire de choix d’offre -->
    <form action="#" method="post" class="">
      <section>
        <div class="grid gap-[73px] lg:grid-cols-3">
          <!-- Plan : Basic -->
          <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white">
            <div class="rounded-t-[37px] shadow-[0px_3px_6px_#00000029] bg-[#F2F3F5] text-center pt-[14px] pb-[12px]">
              <p class="text-[28px] font-bold">Basic</p>
              <p class="text-xl">Votre test psychotechnique simple</p>
            </div>

            <div class="py-[52px] text-center">
                <div class="border-b border-b-[#7070702B] pb-[32px]">
                    <p class="text-6xl font-bold">+ 0€</p>

                    <div class="mt-6 flex justify-center">
                      <label class="inline-flex items-center">
                        <input type="radio" name="plan" value="basic" class="sr-only peer" />
                        <span class="text-[26px] text-[#353535] bg-[#F2F3F5] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#e5e6e8] peer-checked:bg-[#e5e6e8] after:content[''] after:w-2 after:h-4 after:border-r-2 after:border-b-2 after:rotate-45 relative after:absolute after:top-1/2 after:left-[30px] after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100">
                          Sélectionner
                        </span>
                      </label>
                    </div>
                </div>

              <ul class="py-8 px-10 text-left text-xl gap-6 flex flex-col">
                <li class="flex items-center gap-4">
                  <span class="icon-hand-point text-[22px]"></span>
                  <span>Entraînement illimité et gratuit</span>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-check-circle text-[26px]"></span>
                  <span>Annulation jusqu’à 48 heures</span>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-paperclip text-[22px]"></span>
                  <span>Recevez votre test le jour J</span>
                </li>
              </ul>
            </div>
          </article>

          <!-- Plan : Assurance (mis en avant) -->
          <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white border-4 border-[#0DBC0D] relative">
            <div class="rounded-t-[30px] shadow-[0px_3px_6px_#00000029] bg-[#0DBC0D] text-center pt-[14px] pb-[12px] text-white">
              <p class="text-[28px] font-bold">Assurance</p>
              <p class="text-xl">Votre test psychotechnique sans stress</p>
            </div>

            <div class="py-[52px] text-center">
                <div class="border-b border-b-[#7070702B] pb-[32px]">
                    <p class="text-6xl font-extrabold">+ 40€</p>
                    <p class="mt-1 text-xs text-neutral-500">À peine le prix d’un resto</p>

                    <div class="mt-6 flex justify-center">
                        <label class="inline-flex items-center">
                            <input type="radio" name="plan" value="assurance" class="sr-only peer" checked/>
                            <span class="text-[26px] text-white bg-[#008400] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#0DBC0D] hover:text-[#2C2C2C] peer-checked:bg-[#0DBC0D] peer-checked:text-[#2C2C2C] after:content[''] after:w-2 after:h-4 after:border-r-2 after:border-b-2 after:rotate-45 relative after:absolute after:top-1/2 after:left-[30px] after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100 peer-checked:after:text-[#0DBC0D]">
                                Sélectionner
                            </span>
                        </label>
                    </div>
                </div>

              <ul class="py-8 px-10 text-left text-xl gap-6 flex flex-col">
                <li class="flex items-center gap-4">
                  <span class="icon-hand-point text-[22px] text-[#008400]"></span>
                  <span>Entraînement illimité et gratuit</span>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-check-circle text-[26px] text-[#008400]"></span>
                  <span>Annulation jusqu’à 48 heures</span>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-refresh text-[24px] text-[#008400]"></span>
                  <strong>Repassez votre test pour 0€ (si test échoué)</strong>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-paperclip text-[22px] text-[#008400]"></span>
                  <span>Recevez votre test le jour J</span>
                </li>
                <li class="flex items-center gap-4">
                  <span class="icon-book-open text-[22px] text-[#008400]"></span>
                  <span>Livre de préparation au test psychotechnique</span>
                </li>
              </ul>
            </div>
          </article>

          <!-- Plan : Complet -->
          <article class="shadow-[0px_3px_6px_#00000029] rounded-[37px] bg-white">
            <div class="rounded-t-[37px] shadow-[0px_3px_6px_#00000029] bg-[#36578A] text-center pt-[14px] pb-[12px] text-white">
              <p class="text-[28px] font-bold">Complet</p>
              <p class="text-xl">Votre test psychotechnique tout compris</p>
            </div>

            <div class="py-[52px] text-center">
                <div class="border-b border-b-[#7070702B] pb-[32px]">
                    <p class="text-6xl font-bold">+ 60€</p>
                    <p class="mt-1 text-xs text-neutral-500">À peine le prix de 4 pizzas</p>

                    <div class="mt-6 flex justify-center">
                        <label class="inline-flex items-center">
                            <input type="radio" name="plan" value="complet" class="sr-only peer" checked/>
                            <span class="text-[26px] text-white bg-[#36578A] shadow-[0px_3px_6px_#00000029] rounded-[12px] flex items-center font-bold gap-7 py-[15px] px-6 cursor-pointer before:content-[''] before:block before:w-[19px] before:h-[19px] before:rounded-full before:bg-white hover:bg-[#2E4973] peer-checked:bg-[#2E4973] after:content[''] after:w-2 after:h-4 after:border-r-2 after:border-b-2 after:rotate-45 relative after:absolute after:top-1/2 after:left-[30px] after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100 peer-checked:after:text-[#2E4973]">
                                Sélectionner
                            </span>
                        </label>
                    </div>
                </div>

                <ul class="py-8 px-10 text-left text-xl gap-6 flex flex-col">
                    <li class="flex items-center gap-4">
                    <span class="icon-hand-point text-[22px] text-[#36578A]"></span>
                    <span>Entraînement illimité et gratuit</span>
                    </li>
                    <li class="flex items-center gap-4">
                    <span class="icon-check-circle text-[26px] text-[#36578A]"></span>
                    <span>Annulation jusqu’à 48 heures</span>
                    </li>
                    <li class="flex items-center gap-4">
                    <span class="icon-refresh text-[24px] text-[#36578A]"></span>
                    <strong>Repassez votre test pour 0€ (si test échoué)</strong>
                    </li>
                    <li class="flex items-center gap-4">
                    <span class="icon-paperclip text-[22px] text-[#36578A]"></span>
                    <span>Recevez votre test le jour J</span>
                    </li>
                    <li class="flex items-center gap-4">
                    <span class="icon-book-open text-[22px] text-[#36578A]"></span>
                    <span>Livre de préparation au test psychotechnique</span>
                    </li>
                    <li class="flex items-center gap-3">
                    <span class="icon-download text-[22px] text-[#36578A]"></span>
                    <span>Téléchargez vos résultats en illimité</span>
                    </li>
                </ul>
            </div>
          </article>
        </div>
      </section>

      <!-- Récap / barre fixe bas -->
      <aside class="fixed inset-x-0 bottom-0 bg-[#353535] text-white">
        <div class="mx-auto max-w-screen-2xl py-8">
          <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <!-- Cartouche rendez-vous -->
            <div class="flex-none basis-max">
              <div class="flex items-center gap-4 bg-[#F2F3F5] border border-[#70707040] rounded-[20px] py-6 pl-[30px] pr-18">
                <div class="icon-calendar-check text-[28px] text-[#BF2A6B]"></div>
                <div class="text-[#36578A]">
                  <p class="font-bold text-2xl">
                    Test psychotechnique le <time datetime="2025-03-28T14:00">28 mars à 14:00</time>
                  </p>
                  <p class="text-xl">15 rue de la république Montgeron 91230</p>
                </div>
              </div>
            </div>

            <!-- Total + CTA -->
            <div class="flex items-center flex-col gap-[14px]">
              <div class="w-full flex items-center justify-between text-white">
                <p class="text-2xl">Total</p>
                <p class="text-5xl font-bold">135€</p>
              </div>
              <a href="/rakotomanana-paiement" class="bg-[#BF2A6B] text-white text-[26px] font-bold p-3 min-w-[286px] rounded-xl flex justify-center items-center gap-[18px] hover:bg-[#9E2257] shadow-[0px_3px_6px_#00000029]">
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
