<?php
include_once '../config/db.php';
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartupConnect - Events</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-black min-h-screen text-gray-200">
    <!-- Nav bar -->
    <nav class="px-6 py-4 m-3 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="../Home/main.php" class="flex items-center">
                <!-- Logo -->
                <span class="text-white text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold ml-2">ElevateX</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-8">
            <!-- exprtimental area -->


            <a href="./aboutus.php" class="text-white hover:text-gray-300 transition-colors z-10">About Us</a>
            <a href="../Listingpage/Startup/startups.php"
                class="text-white hover:text-gray-300 transition-colors">Startups
            </a>

            <a href="../Pitch/pitch.php" class="text-white hover:text-gray-300 transition-colors">Pitch</a>
            <a href="../Eventpage/events.php" class="text-white hover:text-gray-300 transition-colors">Events</a>

            <!-- Dropdown Menus -->
            <div class="relative group">
                <button class="flex items-center px-3 py-2 text-white cursor-pointer">
                    Community
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-1 transform transition-transform duration-300 group-hover:rotate-180">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 w-120 bg-black border border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible z-50">
                    <div class="p-6 flex">
                        <!-- Left large area (40%) -->
                        <div class="w-2/5  border border-gray-700 rounded-lg mr-5">
                            <!-- For image area is left mfs -->
                            <img src="../Images/events-01.jpg" alt="" class="w-full h-full object-cover rounded-lg mb-4" id="nav-img">
                        </div>

                        <!-- Right side with three lists (60%) -->
                        <div class="w-3/5">
                            <ul class="space-y-6">
                                <li id="founder-img">
                                    <h3 class="text-sm font-medium text-white">Founders</h3>
                                    <a href="../Listingpage/Founder/Founders.php">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Helping
                                            founders connect, collaborate, and
                                            scale their visionary startups.</p>
                                    </a>
                                </li>
                                <li id="investor-img">
                                    <h3 class="text-sm font-medium text-white">Investors</h3>
                                    <a href="../Listingpage/Investor/investor.php">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Empowering
                                            investors to fund startups with
                                            seamless and strategic connections
                                        </p>
                                    </a>
                                </li>
                                <li id="contributor-img">
                                    <h3 class="text-sm font-medium text-white">Contibuters</h3>
                                    <a href="#">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Join as a
                                            contributor to support startups
                                            with skills, ideas, and expertise.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Auth Buttons -->

        <div class="flex items-center space-x-6">
            <button class="text-white hover:text-gray-300 flex items-center transition-colors cursor-pointer">
                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff" class="h-6 w-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>user-profile</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Combined-Shape" fill="#ffffff" transform="translate(42.666667, 42.666667)">
                                <path
                                    d="M209.854555,426.638876 L213.333333,426.666667 C212.11355,426.666667 210.896158,426.656429 209.681238,426.636036 C208.570181,426.617387 207.461015,426.590239 206.353979,426.554656 C206.286264,426.55248 206.218215,426.550261 206.150175,426.548009 C205.038095,426.511215 203.928426,426.465921 202.820973,426.412183 C202.790586,426.410708 202.759563,426.409196 202.728542,426.407678 C201.599261,426.352392 200.472879,426.288364 199.348869,426.21563 C199.304813,426.212779 199.260112,426.209873 199.215415,426.206953 C198.113342,426.134948 197.014189,426.054626 195.917379,425.966008 C195.843781,425.960062 195.770067,425.954068 195.696363,425.948036 C194.611053,425.859218 193.528114,425.762284 192.447534,425.657288 C192.39216,425.651907 192.337128,425.646538 192.282101,425.641148 C191.198891,425.53505 190.11772,425.420812 189.038988,425.298528 C188.961425,425.289736 188.884057,425.280923 188.806702,425.272068 C187.76499,425.152828 186.725414,425.026066 185.688174,424.891854 C185.556342,424.874796 185.424963,424.857671 185.293621,424.840428 C184.317386,424.71226 183.342876,424.57744 182.370492,424.436061 C182.191508,424.410037 182.013494,424.383924 181.835552,424.357591 C180.866836,424.214238 179.899471,424.064248 178.934278,423.907783 C178.791983,423.884715 178.649977,423.861547 178.508019,423.838238 C177.508066,423.674055 176.510184,423.502871 175.514695,423.324781 C175.410597,423.306158 175.305918,423.287351 175.201266,423.268467 C174.207679,423.089177 173.217086,422.903124 172.228933,422.71025 C172.086491,422.682447 171.944487,422.654579 171.802533,422.62657 C170.836096,422.435883 169.871396,422.23854 168.909091,422.03471 C168.763114,422.003789 168.617805,421.972851 168.472552,421.941765 C167.509262,421.73561 166.547845,421.522828 165.588891,421.303585 C165.458271,421.273722 165.328004,421.243809 165.197782,421.213777 C164.217319,420.987663 163.239237,420.754741 162.263791,420.51511 C162.148274,420.486732 162.032321,420.458143 161.916406,420.429459 C160.945212,420.189129 159.977238,419.942303 159.011934,419.688882 C158.891899,419.65737 158.771961,419.62577 158.652065,419.594068 C157.683102,419.337867 156.716547,419.074937 155.752747,418.805408 C155.645281,418.775355 155.537713,418.745182 155.430181,418.714927 C154.431336,418.433891 153.435704,418.145837 152.443098,417.850754 C152.375042,417.830522 152.307114,417.810291 152.239199,417.790027 C151.234635,417.49029 150.233114,417.183332 149.234759,416.869231 C149.165524,416.847449 149.095936,416.825516 149.026364,416.803548 C146.930877,416.141887 144.84973,415.448876 142.783112,414.724954 C142.767465,414.719474 142.751522,414.713887 142.735579,414.708298 L142.701246,414.696259 C139.588277,413.604376 136.5083,412.442347 133.463211,411.212069 C133.36973,411.1743 133.276624,411.136606 133.183552,411.098849 C132.229558,410.711836 131.278741,410.318012 130.331419,409.917541 C130.2915,409.900666 130.25178,409.88386 130.212066,409.867043 C129.248242,409.458901 128.287884,409.043808 127.331211,408.621891 C127.249402,408.585811 127.167304,408.549542 127.085233,408.513222 C126.151203,408.099874 125.220943,407.680132 124.294262,407.253944 C124.227167,407.223086 124.160437,407.192354 124.093726,407.161589 C123.17809,406.739327 122.26572,406.310655 121.356909,405.875738 C121.243027,405.82124 121.128935,405.766515 121.0149,405.711692 C120.13776,405.290004 119.264105,404.862572 118.393828,404.429369 C118.275624,404.37053 118.157882,404.311784 118.040202,404.252933 C117.166805,403.816152 116.296223,403.373244 115.429111,402.924562 C115.330378,402.873474 115.232011,402.822476 115.133689,402.771405 C114.27459,402.325164 113.418751,401.873165 112.566381,401.415542 C112.426005,401.340176 112.285621,401.264603 112.145332,401.188877 C111.293062,400.728837 110.444278,400.263166 109.599031,399.791914 C109.519008,399.747298 109.439349,399.702819 109.359721,399.658289 C108.481489,399.167167 107.60677,398.669832 106.735939,398.16652 C106.652992,398.118579 106.570004,398.07054 106.487052,398.022447 C105.649079,397.536615 104.814727,397.045251 103.984037,396.548397 C103.843093,396.464095 103.702426,396.379739 103.561865,396.295226 C102.75613,395.810771 101.953598,395.320984 101.154577,394.826067 C101.04355,394.757297 100.932632,394.688453 100.821782,394.61951 C99.9912589,394.102969 99.1644817,393.58084 98.3415666,393.053213 C98.2402396,392.988246 98.1386116,392.922964 98.0370427,392.857598 C97.2170734,392.329894 96.4013484,391.796988 95.5895207,391.258673 C95.4985151,391.198328 95.407605,391.137947 95.3167439,391.077497 C94.4980986,390.532855 93.6833241,389.982635 92.8725812,389.426961 C92.7809486,389.364157 92.689408,389.301311 92.5979189,389.238396 C91.7605711,388.662568 90.9276324,388.080981 90.0990676,387.49363 C90.0482094,387.457578 89.9972737,387.421437 89.9463545,387.385274 C83.7400904,382.977624 77.7797929,378.246386 72.090021,373.216132 C72.023062,373.156934 71.9562295,373.097774 71.8894343,373.038573 C70.3322557,371.658425 68.795314,370.255766 67.2792108,368.831185 C67.1968327,368.75378 67.1147087,368.676491 67.032646,368.599138 C66.3987179,368.001594 65.7682497,367.400019 65.14148,366.794639 C24.9762443,327.999259 2.84217094e-14,273.583054 2.84217094e-14,213.333333 C2.84217094e-14,95.5125867 95.5125867,3.55271368e-14 213.333333,3.55271368e-14 C269.912851,3.55271368e-14 324.175019,22.4761259 364.18278,62.4838867 C404.190541,102.491647 426.666667,156.753816 426.666667,213.333333 C426.666667,273.585043 401.688773,328.002853 361.522928,366.79682 C361.520898,366.799478 361.521527,366.804157 361.522155,366.808836 C351.439362,376.540155 340.403853,385.287453 328.569429,392.896702 C328.514318,392.931764 328.459328,392.967092 328.40432,393.002395 C327.568306,393.539209 326.728257,394.070021 325.884283,394.595103 C325.777796,394.661262 325.671405,394.727333 325.564953,394.793313 C324.74392,395.302195 323.918817,395.80581 323.090062,396.303953 C322.98562,396.366873 322.880512,396.429936 322.775345,396.49291 C321.93817,396.993994 321.09783,397.489342 320.253833,397.979067 C320.156885,398.035657 320.059719,398.09194 319.962505,398.148149 C318.131928,399.206125 316.284353,400.237952 314.420157,401.242845 C314.293167,401.311915 314.165336,401.380659 314.037426,401.449276 C313.197359,401.899275 312.354444,402.34417 311.508221,402.78356 C311.389058,402.846139 311.270176,402.907727 311.151229,402.969206 C310.329108,403.393402 309.503546,403.813285 308.674915,404.227931 C308.489213,404.321624 308.302627,404.414653 308.115885,404.507416 C307.324076,404.899955 306.530028,405.28823 305.733238,405.671698 C305.555744,405.757928 305.37736,405.843474 305.19884,405.928779 C304.384302,406.317179 303.567852,406.700941 302.748598,407.079658 C302.574006,407.161194 302.399241,407.241695 302.224348,407.321968 C301.383282,407.707168 300.539278,408.087888 299.69238,408.463256 C299.550045,408.527172 299.407245,408.590277 299.264364,408.653229 C298.381876,409.041213 297.496639,409.424059 296.608325,409.801056 C296.482475,409.855284 296.356686,409.908525 296.230834,409.961648 C295.307254,410.350691 294.380172,410.73431 293.44983,411.111554 C293.297264,411.174211 293.144439,411.235972 292.991525,411.29756 C292.129853,411.64383 291.265732,411.985297 290.398875,412.321261 C290.222273,412.390466 290.045066,412.458869 289.867745,412.527043 C288.999446,412.860129 288.128773,413.188322 287.255416,413.510962 C287.115822,413.563248 286.976537,413.614535 286.837183,413.665681 C285.966564,413.984518 285.092863,414.298703 284.216545,414.607326 C284.02484,414.675511 283.8325,414.742935 283.640034,414.810091 C282.764935,415.114784 281.887698,415.414446 281.007912,415.708531 C280.854333,415.760485 280.700635,415.811663 280.546858,415.862671 C279.636311,416.164103 278.723091,416.460163 277.8072,416.750208 C277.679123,416.791331 277.55137,416.831652 277.423565,416.871856 C276.449164,417.177836 275.471495,417.477646 274.49087,417.770591 C274.427934,417.789899 274.365194,417.808608 274.302443,417.82729 C273.301532,418.12478 272.297314,418.41569 271.29008,418.699388 C271.15444,418.738041 271.019181,418.775991 270.883866,418.81381 C269.925978,419.081108 268.965015,419.342425 268.001384,419.597167 C267.876068,419.630688 267.750527,419.663751 267.624941,419.696701 C266.673011,419.946089 265.718639,420.189414 264.761722,420.42628 C264.641986,420.456259 264.521685,420.485924 264.401345,420.515486 C263.431666,420.753369 262.459932,420.984831 261.485648,421.209619 C261.348404,421.241574 261.210775,421.273181 261.073096,421.304655 C260.143094,421.516983 259.211208,421.723426 258.277056,421.923751 C258.097044,421.962597 257.916686,422.001026 257.736244,422.039227 C256.805768,422.235988 255.873538,422.426825 254.939116,422.611559 C254.789285,422.64138 254.639199,422.670882 254.489056,422.700226 C252.360575,423.116051 250.22088,423.500399 248.070379,423.852587 C247.985813,423.866561 247.901127,423.880377 247.816425,423.894142 C246.762702,424.065279 245.706563,424.228793 244.647898,424.384529 C244.551145,424.398855 244.454553,424.412996 244.35794,424.427072 C243.323969,424.577631 242.287465,424.720882 241.248614,424.856658 C241.158831,424.868461 241.068879,424.880159 240.978908,424.8918 C239.945241,425.025491 238.909387,425.151835 237.87127,425.270726 C237.76735,425.282674 237.663688,425.294469 237.560004,425.306189 C236.522723,425.4234 235.48288,425.533248 234.440837,425.635598 C234.341371,425.645398 234.242029,425.655085 234.142667,425.664704 C233.09981,425.765633 232.054465,425.859107 231.006978,425.945013 C230.900661,425.953751 230.793967,425.96242 230.68725,425.971011 C229.608835,426.057813 228.528374,426.136598 227.44571,426.207305 C227.400239,426.210284 227.355211,426.213211 227.310178,426.216123 C226.178062,426.289336 225.043081,426.353749 223.905761,426.409256 C223.891372,426.409962 223.876694,426.410677 223.862016,426.41139 C222.74309,426.465766 221.622181,426.511515 220.499076,426.548584 L220.456403,426.549989 C218.091582,426.627572 215.717023,426.666667 213.333333,426.666667 C212.171548,426.666667 211.011932,426.65738 209.854555,426.638876 Z M234.666667,298.666667 L192,298.666667 C158.016898,298.666667 128.295724,318.663564 114.632567,347.902712 L113.088,351.445333 L114.425218,352.433677 C138.741109,369.754783 167.79213,380.859353 199.258857,383.427964 C199.302467,383.43151 199.34549,383.435005 199.388516,383.438483 L199.258857,383.427964 C200.198067,383.504631 201.139428,383.573694 202.08288,383.63509 L199.388516,383.438483 C200.305656,383.51262 201.224359,383.579478 202.144557,383.63902 L202.08288,383.63509 C202.994611,383.694422 203.908295,383.746595 204.823875,383.791553 L202.144557,383.63902 C203.09566,383.700561 204.048361,383.754287 205.002584,383.800156 L204.823875,383.791553 C205.50866,383.825177 206.194505,383.854766 206.881389,383.880296 L213.333333,384 L216.007901,383.979451 C216.09157,383.978165 216.175229,383.976818 216.258877,383.975411 C217.160222,383.960281 218.059919,383.938143 218.957862,383.909068 L216.258877,383.975411 C217.168023,383.96012 218.075929,383.937709 218.982532,383.908213 L218.957862,383.909068 C219.872348,383.879457 220.785015,383.842652 221.695809,383.798707 L218.982532,383.908213 C219.923797,383.877589 220.863656,383.839328 221.802041,383.793468 L221.695809,383.798707 C222.644844,383.752917 223.591846,383.699376 224.536752,383.638145 L221.802041,383.793468 C222.726586,383.748285 223.6497,383.695724 224.571313,383.635825 L224.536752,383.638145 C225.460763,383.578267 226.38277,383.511037 227.302716,383.43651 L224.571313,383.635825 C225.511928,383.57469 226.450981,383.50591 227.388399,383.429524 L227.302716,383.43651 C228.196243,383.364124 229.087825,383.284856 229.977408,383.198758 L227.388399,383.429524 C228.321346,383.353502 229.252673,383.269947 230.182311,383.178897 L229.977408,383.198758 C260.393388,380.254961 288.473405,369.327262 312.095822,352.537298 L313.557333,351.445333 L312.034862,347.907108 C298.970316,319.938868 271.207611,300.423341 239.074565,298.779209 L234.666667,298.666667 Z M213.333333,42.6666667 C119.076736,42.6666667 42.6666667,119.076736 42.6666667,213.333333 C42.6666667,254.036861 56.9158894,291.412304 80.6981785,320.743507 C102.726317,282.071479 144.318498,256 192,256 L234.666667,256 C282.349887,256 323.943349,282.073359 345.967784,320.740809 C369.750452,291.413157 384,254.037325 384,213.333333 C384,119.076736 307.589931,42.6666667 213.333333,42.6666667 Z M213.333333,64 C260.461632,64 298.666667,102.205035 298.666667,149.333333 C298.666667,195.033502 262.742006,232.343016 217.592327,234.562233 L213.333333,234.666667 C166.205035,234.666667 128,196.461632 128,149.333333 C128,103.633165 163.924661,66.3236506 209.074339,64.1044332 L213.333333,64 Z M213.333333,106.666667 C189.769184,106.666667 170.666667,125.769184 170.666667,149.333333 C170.666667,172.897483 189.769184,192 213.333333,192 C236.897483,192 256,172.897483 256,149.333333 C256,125.769184 236.897483,106.666667 213.333333,106.666667 Z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="ml-2"><a href="../SignUps/login/index.php">Log in</a></span>
            </button>

            <!-- Join Now Button -->
            <button onclick="toggleModal()" id="joinButton"
                class="bg-gradient-to-r from-[#E94560] to-purple-600  text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center cursor-pointer">
                Join Now
            </button>

            <!-- Modal -->
            <div id="joinModal"
                class="fixed inset-0 bg-gradient-to-br from-gray-900 to-black bg-opacity-10 flex items-center justify-center z-50 hidden">
                <div class="bg-gradient-to-tl from-gray-900 to-black border border-gray-700 text-white p-6 rounded-xl w-80 shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-center">Join As</h2>
                    <div class="flex flex-col gap-3">
                        <button
                            class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/startup/index.php">Startup</a></button>
                        <button
                            class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/collaborators/index.php">Collaborator</a></button>
                        <button
                            class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/investor/index.php">Investor</a></button>
                    </div>
                    <button onclick="toggleModal()"
                        class="mt-6 text-sm text-gray-400 hover:text-white transition text-center block mx-auto cursor-pointer">Cancel</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Startup <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#E94560] to-purple-600">Events</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto">Connect with founders, investors, and collaborators at these upcoming events. Expand your network and find opportunities to grow your startup.</p>
        </div>


        <!-- Featured Event -->
        <div class="bg-gradient-to-br from-gray-900 to-black p-6 md:p-8 rounded-2xl mb-12 border border-gray-800 relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 bg-gradient-to-l from-[#E94560] to-purple-600 text-white px-6 py-2 rounded-bl-xl font-semibold">Featured</div>
            <div class="md:flex space-y-6 md:space-y-0 md:space-x-8 relative z-10">
                <div class="md:w-1/3">
                    <div class="rounded-xl overflow-hidden h-64 bg-gray-800">
                        <img src="../Images/featured-event.jpg" alt="TechCrunch Disrupt 2025" class="w-full h-full object-cover" />
                    </div>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center mb-4 text-sm">
                        <span class="bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full">Conference</span>
                        <span class="mx-3 text-gray-500">•</span>
                        <span class="text-gray-400"><i class="far fa-calendar-alt mr-2"></i>April 28-30, 2025</span>
                        <span class="mx-3 text-gray-500">•</span>
                        <span class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>San Francisco</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-3">TechCrunch Disrupt 2025</h2>
                    <p class="text-gray-400 mb-6">Join the tech industry's most important event where startups, investors, and innovators gather to showcase revolutionary technologies and discuss the future of startups.</p>
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-6 py-3 rounded-lg shadow-lg shadow-cyan-500/20 transition flex items-center cursor-pointer">
                            <i class="fas fa-ticket-alt mr-2"></i> Register Now
                        </button>
                        <button class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition flex items-center cursor-pointer">
                            <i class="far fa-calendar-plus mr-2"></i> Add to Calendar
                        </button>
                        <div class="flex items-center text-gray-400">
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800" />
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800 -ml-2" />
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800 -ml-2" />
                            <span class="ml-2">+245 attending</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Filters -->
        <div class="bg-gradient-to-br from-gray-900 to-black backdrop-blur-sm p-6 rounded-xl mb-12 border border-gray-700/50">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Event Type</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Types</option>
                        <option>Pitch Competitions</option>
                        <option>Networking</option>
                        <option>Workshops</option>
                        <option>Conferences</option>
                        <option>Hackathons</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Location</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Locations</option>
                        <option>Virtual</option>
                        <option>San Francisco</option>
                        <option>New York</option>
                        <option>London</option>
                        <option>Berlin</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Date</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>Any Time</option>
                        <option>Today</option>
                        <option>This Week</option>
                        <option>This Month</option>
                        <option>Next Month</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Industry</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Industries</option>
                        <option>Fintech</option>
                        <option>Healthtech</option>
                        <option>AI & Machine Learning</option>
                        <option>SaaS</option>
                        <option>E-commerce</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <h2 class="text-2xl font-bold mb-6">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Event Card 1 -->

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $eventName = $row['eventName'];
                    $eventType = $row['eventType'];
                    $startDate = $row['startDate'];
                    $endDate = $row['endDate'];
                    $locationType = $row['locationType'];
                    $location = $row['location'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $email = $row['email'];
                    echo '
                    <div class="bg-gradient-to-tr from-gray-900 to-black rounded-xl overflow-hidden border border-gray-700/50 hover:border-gray-700 transition group">
                        <div class="h-48 overflow-hidden relative">
                            <img src="../Images/events-01.jpg" alt="Startup Weekend" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                            <div class="absolute top-0 right-0 bg-cyan-500 text-white px-3 py-1 text-sm rounded-bl-lg font-medium">' . $eventType . '</div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between text-sm text-gray-400 mb-3">
                                <span><i class="far fa-calendar-alt mr-1"></i>' . $startDate . '</span>
                                <span><i class="far fa-calendar-alt mr-1"></i>' . $endDate . '</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>' . $location . '</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">' . $eventName . '</h3>
                            <p class="text-gray-400 text-sm mb-4">' . $description . '</p>
                            <div class="flex justify-between items-center">
                                <span class="text-cyan-400 font-medium">$' . $price . '</span>
                                <a href="#" class="text-blue-400 hover:text-blue-300 transition">Learn more →</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo "<script>alert('No events found');</script>";
            }
            ?>
        </div>

        <!-- Load More -->
        <div class="text-center">
            <button class="border border-purple-500 text-purple-400 hover:bg-purple-500 hover:text-white px-8 py-3 rounded-lg transition duration-300">Load More Events</button>
        </div>

        <!-- Host Your Own Event -->
        <div class="mt-20 bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 lg:p-12 border border-gray-700/50 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-[#E94560]/20 to-purple-600/20 rounded-full blur-3xl -mr-20 -mt-20"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl -ml-20 -mb-20"></div>
            <div class="relative z-10 lg:flex items-center justify-between">
                <div class="lg:w-3/5 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Host Your Own <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#E94560] to-purple-600">Startup Event</span></h2>
                    <p class="text-gray-400 mb-6">Have an idea for a startup event? Use our platform to organize and promote your workshop, networking meetup, or conference to our community of founders and investors.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Reach thousands of startup founders and investors</span>
                        </li>
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Manage registrations and ticketing</span>
                        </li>
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Access promotional tools and analytics</span>
                        </li>
                    </ul>
                    <a href="./addEventForm.php">
                        <button class="bg-gradient-to-r from-[#E94560] to-purple-600 hover:from-[#E94560] hover:to-purple-700 text-white px-8 py-3 rounded-lg shadow-lg shadow-purple-500/20 transition cursor-pointer"
                            id="submit-btn">
                            Submit Your Event
                        </button>
                    </a>
                </div>
                <div class="lg:w-2/5">
                    <img src="../Images/host-event.jpg" alt="Host an event" class="rounded-xl shadow-2xl" />
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="text-xl font-bold mb-2 text-white">ElevateX</div>
                    <p class="text-gray-400 text-sm max-w-md">Connecting founders, investors, and talent to build the
                        next
                        generation of innovative companies.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Platform</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Discover</a></li>
                            <li><a href="#" class="hover:text-white">Startups</a></li>
                            <li><a href="#" class="hover:text-white">Investors</a></li>
                            <li><a href="#" class="hover:text-white">Talent</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Resources</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Guides</a></li>
                            <li><a href="#" class="hover:text-white">Events</a></li>
                            <li><a href="#" class="hover:text-white">Podcast</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Press</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Legal</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Privacy</a></li>
                            <li><a href="#" class="hover:text-white">Terms</a></li>
                            <li><a href="#" class="hover:text-white">Security</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500">© 2025 ElevateX. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>