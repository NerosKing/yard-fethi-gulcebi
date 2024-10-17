<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
</head>
<?php include_once './_partials/nav.php'; ?>
<body>
<main> <!-- Verander h-screen naar min-h-screen en voeg padding-bottom toe -->

    <!--    SECTION 1    -->
    <div class="container mx-auto mt-0 sm:mt-14 px-16 sm:py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 items-start">
            <!-- Image Section (with space below on smaller screens) -->
            <div class="order-1 sm:order-2 rounded-xl w-full lg:w-[700px] mt-8">
                <img src="images/foto1.jpeg" alt="Afbeelding" class="w-full h-auto rounded-xl shadow-lg">
            </div>

            <!-- Text Section -->
            <div class="order-2 sm:order-1 flex flex-col justify-start items-start gap-4">
                <h1>
                    <span class="text-4xl sm:text-5xl font-bold">Fethican Gulcebi</span>
                </h1>
                <p class="text-xl sm:text-base leading-relaxed">
                    Mijn naam is Fethican, ik ben 19 jaar oud. Ik heb een grote passie voor bodybuilding, wat me helpt
                    fit en gedisciplineerd te blijven. Fitness is niet alleen een manier om mijn lichaam in topvorm te
                    houden, maar het heeft me ook belangrijke levensvaardigheden geleerd, zoals doorzettingsvermogen en
                    zelfdiscipline.
                    <br><br>
                    Naast fitness hou ik van coderen. Ik vind het geweldig om nieuwe technologieën en programmeertalen
                    te verkennen. Ik ben momenteel bezig met HTML, CSS, JavaScript en PHP, en ik beschouw mezelf als
                    vrij bedreven in deze talen. Coderen biedt me de mogelijkheid om mijn creativiteit te uiten en
                    praktische oplossingen te ontwikkelen voor verschillende problemen.
                    <br><br>
                    Ik beschouw mezelf als een sociaal persoon. Ik ben altijd bereid om contact te maken met anderen en
                    mijn interesses te delen, of het nu gaat om sport, technologie of andere onderwerpen. Het balanceren
                    van mijn liefde voor fitness en coderen houdt me gemotiveerd en stelt me in staat om op
                    verschillende gebieden van mijn leven te groeien. Ik ben vastbesloten om mijn vaardigheden verder te
                    ontwikkelen en positieve bijdragen te leveren aan de gemeenschappen waar ik deel van uitmaak.
                    <br><br>
                    <button id="bottomButton" onclick="bottomFunction()"
                            class="bg-transparent hover:bg-[#00BBFF] text-blue-700 text-2xl sm:text-base font-semibold hover:text-white py-4 px-6 sm:py-2 sm:px-4 border border-blue-500 hover:border-transparent rounded">
                        Skills
                    </button>
            </div>
        </div>

        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">Mijn skills</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/foto2.jpeg">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h2 class="text-3xl sm:text-2xl font-semibold mb-5">HTML / CSS</h2>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Ik ben momenteel bezig met HTML en CSS en heb deze talen goed onder de knie. Het ontwerpen van
                        webpagina's en het creëren van aantrekkelijke lay-outs zijn voor mij een uitdagende en leuke
                        ervaring. Met HTML kan ik de structuur van een website opbouwen, terwijl ik met CSS de visuele
                        presentatie kan vormgeven. Deze combinatie stelt me in staat om functionele en esthetische
                        webinterfaces te creëren. </p>
                </section>

                <section class="mb-10">
                    <h2 class="text-3xl sm:text-2xl font-semibold mb-5">Javascript</h2>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Daarnaast heb ik een goed begrip van JavaScript en begrijp ik de syntax goed. Ik kan effectief
                        werken met deze programmeertaal om interactieve elementen aan webpagina's toe te voegen. Door
                        JavaScript kan ik de gebruikerservaring verbeteren en dynamische functionaliteit creëren, wat
                        mijn vaardigheden in webontwikkeling verder versterkt.
                    </p>
                </section>

                <section class="mb-10">
                    <h2 class="text-3xl sm:text-2xl font-semibold mb-5">PHP</h2>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Op dit moment ben ik me volop aan het verdiepen in PHP en ben ik bezig met het opbouwen van mijn
                        kennis over deze server-side programmeertaal. PHP stelt me in staat om dynamische websites te
                        maken en met databases te werken. Ik ben enthousiast om meer te leren over de mogelijkheden van
                        PHP en hoe ik het kan toepassen in mijn projecten.
                    </p>
                </section>
            </div>
        </div>
    </div>
</main>

<?php include_once './_partials/footer.php'; ?>
</body>
<script src="./js/app.js"></script>
</html>