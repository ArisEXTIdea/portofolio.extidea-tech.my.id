<!-- Load Theme -->
<?= $this->extend('themes/MainContainer') ?>

<!-- Load Meta Data Addition -->
<?= $this->section('meta_data') ?>
    <link rel="stylesheet" href="/assets/styles/landing.css">
<?= $this->endSection() ?>



<!-- Content -->
<?= $this->section('content') ?>
<div class="relative">
    <div id="navbar" class="px-10 fixed w-full bg-white z-50">
        <nav class="flex flex-1 flex-col md:flex-row">
            <div class="flex flex-1 md:flex-1 flex-row justify-between items-center">
                <div id="logo-section" class="py-3">
                    <img class="logo" src="/assets/storage/images/logo.png" alt="Logo">
                </div>
                <div id="navbar-small-icon" class="md:hidden">
                    <button onclick="openNavMenu()">
                        <i class="fas fa-bars" id="nav-close-icon"></i>
                        <!-- <i class="fas fa-times" id="nav-open-icon"></i> -->
                    </button>
                </div>
            </div>
            <div id="nav-menu-list" class="flex md:flex-1 md:ml-16 justify-center items-center flex-col md:flex-row drop-shadow-xl md:drop-shadow-none" style="display: none">
                <a href="#intro" class="py-3 block inline-block w-1/2 hover:bg-purple-500 hover:text-white hover:w-full md:hover:bg-transparent md:hover:text-lg md:hover:text-black md:w-full md:hover:w-full text-center hover:duration-200">About Me</a>
                <a href="#portofolio" class="py-3 block inline-block w-1/2 hover:bg-purple-500 hover:text-white hover:w-full md:hover:bg-transparent md:hover:text-lg md:hover:text-black md:w-full md:hover:w-full text-center hover:duration-200">Portofolio</a>
                <a href="#skills" class="py-3 block inline-block w-1/2 hover:bg-purple-500 hover:text-white hover:w-full md:hover:bg-transparent md:hover:text-lg md:hover:text-black md:w-full md:hover:w-full text-center hover:duration-200">Skills</a>
                <a href="#contacts" class="py-3 block inline-block w-1/2 hover:bg-purple-500 hover:text-white hover:w-full md:hover:bg-transparent md:hover:text-lg md:hover:text-black md:w-full md:hover:w-full text-center hover:duration-200">Contacts</a>
            </div>
        </nav>
    </div>
    <div id="intro" class="w-full h-screen relative">
        <div class="relative w-full h-full flex justify-center items-end flex-col">
            <div class="w-20 h-20 absolute z-40 border-purple rotate-12" style="top: 20%; left: 10%">
            </div>
            <div class="w-16 h-16 absolute z-40 border-purple -rotate-6" style="top: 10%; right: 10%">
            </div>
            <div class="w-10 h-10 absolute z-40 border-purple rounded-full -rotate-6" style="top: 5%; right: 50%">
            </div>
            <div class="w-10 h-10 absolute z-40 border-purple rounded-full" style="bottom: 10%; right: 60%">
            </div>
            <div class="w-10 h-10 absolute z-40 border-purple rounded-full" style="bottom: 10%; right: 10%">
            </div>
            <div class="w-2/3 h-72 bg-purple-500 absolute purple-box-1 z-10 hidden md:block">
            </div>
            <div class="w-5/12 h-48 bg-purple-400 absolute purple-box-2 z-10 hidden md:block">
                <img src="/assets/storage/images/man.png" class="absolute man-profile hidden md:block" alt="Profil" style="bottom: 0;">
            </div>
            <div class="segitiga1 absolute z-40 -rotate-45" style="bottom: 30%; left: 5%"></div>
            <div class="segitiga2 absolute z-40 -rotate-12" style="bottom: 40%; right: 5%"></div>
            <div class="segitiga3 absolute z-40 rotate-45" style="bottom: 60%; right: 30%"></div>
            <div class="flex w-full h-full px-10 justify-center z-40 flex-col">
                <div class="text-center md:text-left">
                    <h2 class="text-xl md:text-2xl mb-5">Hello, I am Muhammad Aris Widaryani</h2>
                    <h1 class="text-3xl sm:text-4xl md-text-5xl lg:text-6xl font-bold">PROGRAMMER & <span class="text-white text-3xl sm:text-4xl md-text-5xl lg:text-6xl font-bold stroke-text"> DESIGNER </span></h1>
                </div>
                <div class="my-5 text-center md:text-left">
                    <p class="text-md md:text-lg font-semibold">Let’s turn your idea into reality with </p>
                    <p class="text-md md:text-lg font-semibold">programming and design</p>
                </div>
                <div class="mt-10 flex flex-row justify-center md:justify-start">
                    <a class="bg-purple-500 px-5 mx-2 md:ml-0 mr-2 py-3 text-white border-purple2 rounded text-center" href="">App Project</a>
                    <a class="bg-white-500 px-5 mx-2 md:ml-0 mr-2  py-3 box-border border-purple2 rounded text-center" href="">Design Project</a>
                </div>
            </div>
            <div class="w-full px-10 flex flex-row justify-center md:justify-start z-40">
                <a href="https://www.linkedin.com/in/muhammad-aris-widaryani-464145200/" target="_blank">
                    <div class="w-12 h-12 bg-gray-400 hover:bg-sky-600 mr-3 mb-8 flex justify-center rounded items-center hover:duration-500">
                        <i class="fab fa-linkedin-in text-lg text-white"></i>
                    </div>
                </a>
                <a href="https://github.com/ArisEXTIdea" target="_blank">
                    <div class="w-12 h-12 bg-gray-400 hover:bg-stone-800 mr-3 mb-8 flex justify-center rounded items-center hover:duration-500">
                        <i class="fab fa-github text-lg text-white"></i>
                    </div>
                </a>
                <a href="https://www.upwork.com/freelancers/~0158421d7ba8ae0c4a" target="_blank">
                    <div class="w-12 h-12 bg-gray-400 hover:bg-lime-400 mr-3 mb-8 flex justify-center rounded items-center hover:duration-500">
                        <img class="w-5" src="/assets/storage/images/upwork.png" alt="Logo">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="px-10 w-full" id="portofolio">
        <div class="flex justify-center">
            <div class="mt-10 w-96 border-b-4 border-purple-500">
                <h1 class="text-2xl font-bold text-center">APP PROJECT</h1>
                <p class="text-lg text-center">"Technology connects us, Technology unites us, Technology amplifies our power" - Vivienne Harr</p>
            </div>
        </div>
        <div>
            <?php foreach($portoWeb as $index=>$d): ?>
            <div class="my-20 flex flex-col md:flex-row rounded border-grey-100 border-2 md:border-0 <?= $index % 2 == 0? "md:flex-row": "md:flex-row-reverse"?>">
                <div class="w-full md:w-1/2">
                    <img class="drop-shadow-xl" src="/assets/storage/images/<?= $d['img']?>" alt="Web Preview">
                </div>
                <div class="w-full md:w-1/2 <?= $index % 2 == 0? "p-5 md:pl-5 md:pr-0 md:pt-0 md:pb-0": "p-5 md:pr-5 md:pl-0 md:pt-0 md:pb-0"   ?> mt-10 md:mt-0">
                    <h2 class="text-xl font-bold"><?= $d['title'] ?></h2>
                    <p class="mt-5"><?= $d['desc'] ?></p>
                    <div class="mt-5">
                        <img class="w-36 rounded p-2 border-2 border-purple2" src="/assets/storage/images/<?= $d['stack']?>" alt="Web Preview">
                    </div>
                    <div class="flex flex-row mt-10">
                        <a href="<?= $d['address'] ?>" target="_blank">
                            <div class="h-10 px-5 bg-purple-400 hover:bg-purple-500 mr-3 mb-8 flex justify-center rounded items-center hover:duration-500">
                                <p class="text-white">
                                    <i class="fas fa-globe"></i>
                                    More
                                </p>
                            </div>
                        </a>
                        <?php if($d['github_access'] == 1):?>
                        <a href="https://github.com/ArisEXTIdea" target="_blank">
                            <div class="w-10 h-10 bg-gray-400 hover:bg-stone-800 mr-3 mb-8 flex justify-center rounded items-center hover:duration-500">
                                <i class="fab fa-github text-lg text-white"></i>
                            </div>
                        </a>
                        <?php endif;?>
                        <?php if($d['documentation'] != ''):?>
                        <a href="<?= $d['documentation']?>" target="_blank">
                            <div class="h-10 px-5 bg-green-400 hover:bg-green-500 mr-3 mb-8 text-white flex justify-center rounded items-center hover:duration-500">
                                <i class="fas fa-books"></i>
                                Guide
                            </div>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="flex justify-center">
            <div class="mt-10 w-96 border-b-4 border-purple-500">
                <h1 class="text-2xl font-bold text-center">DESIGN PROJECT</h1>
                <p class="text-lg text-center">"Design creates culture. Culture shapes values. Values determine the future." -- Robert L. Peters, designer and author</p>
            </div>
        </div>
        <div class="flex w-full flex-wrap justify-center my-10">
            <?php foreach($portoDesign as $d): ?>
            <div class="w-64 h-64 flex justify-center items-center">
                <div class="w-56 h-56 flex items-center rounded-xl bg-white drop-shadow-xl hover:w-64 hover:h-64 hover:duration-500">
                    <img class="w-full rounded-xl" src="/assets/storage/portofolio/<?= $d?>" alt="Logo">
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div id="skills" class="px-10 w-full" id="portofolio">
        <div class="flex justify-center">
            <div class="mt-10 w-96 border-b-4 border-purple-500">
                <h1 class="text-2xl font-semibold text-center">Skills & Tools</h1>
                <p class="text-lg text-center">"When love and skill work together, expect a masterpiece. -John Ruskin</p>
            </div>
        </div>
        <div class="flex w-full justify-center flex-col md:flex-row my-10">
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Language</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-orange-600 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-html5 text-4xl text-white"></i>
                                </div>
                                <p>HTML 5</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-sky-900 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-php text-4xl text-white"></i>
                                </div>
                                <p>PHP</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-yellow-300 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-js-square text-4xl text-white"></i>
                                </div>
                                <p>Javascript</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-blue-600 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-css3 text-4xl text-white"></i>
                                </div>
                                <p>CSS 3</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-blue-600 rounded-lg flex justify-center items-center mr-3">
                                    <p class="text-2xl text-white font-bold">SQL</p>
                                </div>
                                <p>SQL</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Frontend</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-sky-500 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-react text-4xl text-white"></i>
                                </div>
                                <p>ReactJs</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-stone-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="/assets/storage/images/tailwindlogo.png" alt="Logo">
                                </div>
                                <p>Tailwind</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-yellow-300 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/JQuery/JQuery-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>Jquery</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-yellow-300 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/Bootstrap_(front-end_framework)/Bootstrap_(front-end_framework)-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>Bootsrap</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Backend</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-green-500 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-node text-4xl text-white"></i>
                                </div>
                                <p>NodeJs</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-yellow-300 rounded-lg flex justify-center items-center mr-3">
                                    <i class="fab fa-js-square text-4xl text-white"></i>
                                </div>
                                <p>AJAX</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-red-500 rounded-lg flex justify-center items-center mr-3">
                                    <p class="text-2xl text-white font-bold">API</p>
                                </div>
                                <p>RestFull API</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Framework & Stack</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-stone-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="/assets/storage/images/cilogo.png" alt="Logo">
                                </div>
                                <p>Codeigniter</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-sky-500 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="/assets/storage/images/mernstack.png" alt="Logo">
                                </div>
                                <p>MERN</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Database</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-stone-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/MySQL/MySQL-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>MyQL</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-green-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/MongoDB/MongoDB-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>MongoDB</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-stone-100 drop-shadow-lg flex justify-center rounded-xl">
                    <h2 class="text-lg font-semibold py-5">Others</h2>
                </div>
                <div class="mt-5">
                    <ul>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-sky-500 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/Adobe_Illustrator/Adobe_Illustrator-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>Adobe Ilustrator</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-stone-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="data:image/jpeg;base64,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" alt="Logo">
                                       
                                </div>
                                <p>Figma</p>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-row items-center my-2">
                                <div class="w-16 h-16 bg-stone-100 rounded-lg flex justify-center items-center mr-3">
                                    <img class="w-14" src="https://www.logo.wine/a/logo/Microsoft_Office/Microsoft_Office-Logo.wine.svg" alt="Logo">
                                </div>
                                <p>Microsoft Office</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="contacts" class="px-10 w-full">
        <div class="flex justify-center">
            <div class="mt-10 w-96 border-b-4 border-purple-500">
                <h1 class="text-2xl font-semibold text-center">Contacts</h1>
                <p class="text-lg text-center">"When love and skill work together, expect a masterpiece. -John Ruskin</p>
            </div>
        </div>
        <div class="flex w-full justify-around flex-col md:flex-row mt-10 mb-20">
            <div class="flex flex-col justify-center items-center w-full my-5">
                <div class="w-16 h-16 rounded-full bg-stone-400 flex justify-center items-center">
                    <i class="fab fa-google text-white text-3xl"></i>
                </div>
                <div>
                    <p class="text-center font-semibold">Email</p>
                    <a href="mailto:arisk697@gmail.com">
                        <p class="text-center">arisk697@gmail.com</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center w-full my-5">
                <div class="w-16 h-16 rounded-full bg-stone-400 flex justify-center items-center">
                    <i class="fas fa-phone text-white text-3xl"></i>
                </div>
                <div>
                    <p class="text-center font-semibold">Phone</p>
                    <p class="text-center">+62 8953 7183 9899</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center w-full my-5">
                <div class="w-16 h-16 rounded-full bg-stone-400 flex justify-center items-center">
                    <img class="w-8" src="/assets/storage/images/upwork.png" alt="Logo">
                </div>
                <div>
                    <p class="text-center font-semibold">Upwork</p>
                    <a href="https://www.upwork.com/freelancers/~0158421d7ba8ae0c4a" target="_blank>
                        <p class="text-center">Muhammad Aris Widaryani</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center w-full my-5">
                <div class="w-16 h-16 rounded-full bg-stone-400 flex justify-center items-center">
                    <i class="fab fa-skype text-white text-3xl"></i>
                </div>
                <div>
                    <p class="text-center font-semibold">Skype</p>
                    <a href="https://join.skype.com/invite/yPjXvrColRKc">
                        <p class="text-center">arisk697@gmail.com</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center w-full my-5">
                <div class="w-16 h-16 rounded-full bg-stone-400 flex justify-center items-center">
                    <i class="fab fa-telegram-plane text-white text-3xl"></i>
                </div>
                <div>
                    <p class="text-center font-semibold">Telegram</p>
                    <p class="text-center">@Aris45</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-black">
        <p class="text-white text-center">Muhammad Aris Widaryani - 2022 © EXTIdea</p>
    </div>
</div>

<!-- Navigation Func -->

<script>
    const openNavMenu = () => {
        $(document).ready(function () {
            $("#nav-menu-list").slideToggle();
            $("#nav-menu-list").attr("winSize", "small");
        });
    }

    const onStartLoading = () => {
        if(window.innerWidth < 768){
            $(document).ready(function () {
                $("#nav-menu-list").attr("style", "display:none");
            });
        } else {
            console.log('large');
            $(document).ready(function () {
                $("#nav-menu-list").attr("style", "");
            });
        }
        const navHeight = $("#navbar").height()
        $("#intro").attr("style", `padding-top: ${navHeight * 3}px`);
        $("#portofolio").attr("style", `padding-top: ${navHeight * 3}px`);
        $("#skills").attr("style", `padding-top: ${navHeight * 3}px`);
        $("#contacts").attr("style", `padding-top: ${navHeight * 3}px`);
    }

    const onWindowResize = () => {
        window.onresize = function() {
            const status = $("#nav-menu-list").attr("style");
            if(window.innerWidth <= 790){
                $(document).ready(function () {
                    if($("#nav-menu-list").attr("winSize") == "small"){
                        $("#nav-menu-list").attr("style", "");
                    } else {
                        $("#nav-menu-list").attr("style", "display:none");
                    }
                });
            } else {
                console.log('large');
                $(document).ready(function () {
                    $("#nav-menu-list").attr("style", "");
                    $("#nav-menu-list").removeAttr("winSize");
                });
            }
        }
    }

    console.log('tinggi',$("#navbar").innerHeight());

    onStartLoading();
    onWindowResize();


</script>
<?= $this->endSection() ?>