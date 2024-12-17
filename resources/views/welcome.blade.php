<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>gofab</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            </style>
        @endif
    </head>
    <body class="font-poppins antialiased bg-bgColor dark:text-gray/50">
        <div class="banner-mg relative">
            <img src="{{'images/Fabio-alpha.svg'}}" alt="" class="w-[860px] absolute -top-16 right-[10%]">
        </div>
       <div id="main-wrapper" class="relative">
     
            <header class="flex sticky z-50 text-primaryColor top-0 mx-20 py-14 justify-between">
                <a href="#home" class="logo text-logoSize font-logoBold">gofab.io</a>

                <nav class="relative">
                    <ul class="flex font-light text-primarySize space-x-6">
                        <li>
                            <a href="#about" class="relative inline-block text-primaryColor after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-primaryColor after:top-5 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-100">about
                            </a>
                        </li>
                        <li>
                            <a href="#expertise" class="relative inline-block text-primaryColor after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-primaryColor after:top-5 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-100">expertise
                            </a>
                        </li>
                        <li>
                            <a href="#clients" class="relative inline-block text-primaryColor after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-primaryColor after:top-5 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-100">clients
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="relative inline-block text-primaryColor after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-primaryColor after:top-5 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-100">contact
                            </a>
                        </li>
                        <li class="space-left-10"><a href=""><i class=" fa-brands fa-linkedin-in text-xl"></i></a></li>
                    </ul>
                </nav>
            </header><!-- end of header -->
            
            <section id="home" class=" relative">
                <div class="grid grid-cols-3 gap-2 relative mx-[16rem] mb-10">
                    <div class="banner-head pt-40 col-span-2 relative ">
                        <h3 class="lowercase leading-loose text-logoSize font-h3Bold">a tech product exec</h3>
                        <h1 class="text-[9.5rem] font-extrabold lowercase">
                            who knows things and gets things done
                        </h1>
                    </div><!-- end of banner-head -->
                </div><!-- end of grid -->
                <div class="hero-text mx-[16rem] my-[10rem]">
                    <h3 class="text-8vh font-h3Bold">A proven tech executive who understands products and people. Helping tech-driven businesses build, scale and sell by implementing <br/> experience-based, <br/> action-oriented strategies.</h3>
                </div><!-- end of hero-text -->
            </section><!-- end of home -->
            <section id="about" class=" pt-20">
                <div class="grid grid-cols-2   mx-[16rem]">
                    <div class="sticky top-20 left-0 h-[calc(100vh-4rem)] core-value-box ml-[9.5rem] ">
                        <p class="text-sm my-4">Core disciplines</p>
                        <h3 class="text-3vh font-logoBold leading-[5.6vh]">product</h3>
                        <p class="text-2vh leading-[4vh] mb-10">concept and ideation <br/>
                            aesthetics and usability <br/>
                            tech and scalability</p>
                            
                        <h3 class="text-3vh font-logoBold leading-[5.6vh]">business</h3>
                        <p class="text-2vh leading-[4vh] mb-10">digital transformation<br/>
                            to-market strategy<br/>
                            growth strategy</p>

                        <h3 class="text-3vh font-logoBold leading-5.6vh">performance</h3>
                        <p class="text-2vh leading-[4vh]">teams<br/>
                            operations<br/>
                            data rooms</p>
                    </div><!-- end of core-value-box -->
                    <div class="core-paragraph text-4vh relative">
                        <p class="leading-[1.5em]">My name is Fabio, a tech enthusiast, business owner, mentor and consultant with 15+ years and 50+ products under my belt</p>  
                        <p class="leading-[1.5em] my-[5rem]">I've had both the pleasure and fortune of working alongside some of the smartest startups, aggressive scale-ups and biggest industry leaders alike - spanning verticals from healthtech, fintech, agritech, retail, FMCG, AI, IoT, Big Data - the list goes on.</p>
                        <p class="leading-[1.5em] my-[5rem]">Most times you can find me building products for clients at touchfoundry, or acting in a fractional capacity as advisor, CIO, CPO & CTO (all the o's) at various organisations. Other times you might find me presenting a talk or guest-judging for tech-driven businesses.</p>
                        <p class="leading-[1.5em] my-[5rem]">The spaces between where strategy, design, technology and marketing meet truly excite me and I believe that success is a combination of hard work, great people, smart ideas and fun - in no particular order.</p> 
                        <p class="leading-[1.5em] my-[5rem]">I come with the plan and the process - my style is to mix 1 part research with 1 part strategy and 2 parts action.</p>
                        <h2 class="text-[2.12rem] font-logoBold">Interested in exploring how I might help? Reach out on <a href="" class="text-primaryColor underline">hello@gofab.io</a> and let’s make it happen.</h2> 
                        <p class="text-[0.87rem] mt-[3rem]">or keep scrolling to learn more…</p>
                    </div><!-- end of core-paragraph -->
                </div>
            </section><!-- end of about -->
            <section id="expertise" class="relative pt-20">
                <h1 class="text-center mt-10 text-16vh capitalize font-extrabold">how i help</h1>
                <div class="grid grid-cols-3 mx-[30rem] relative">
                    <div class="expertise-box sticky top-20 left-0 h-[calc(90vh)]">
                        <ul class="expertise-list  border-l-2  border-listBorderColor">
                            <li class="pl-[2.81rem] pb-[2.81rem]"><a href="#concept" class="text-logoSize text-listColor font-h3Bold hover:text-black transition-all ease-in-out duration-300"><h3>concept development</h3></a></li>
                            <li class="pl-[2.81rem] pb-[2.81rem]"><a href="#product" class="text-logoSize text-listColor font-h3Bold hover:text-black transition-all ease-in-out duration-300"><h3>product audit</h3></a></li>
                            <li class="pl-[2.81rem] pb-[2.81rem]"><a href="#art" class="text-logoSize text-listColor font-h3Bold hover:text-black transition-all ease-in-out duration-300"><h3>art of the mvp</h3></a></li>
                            <li class="pl-[2.81rem] pb-[2.81rem]"><a href="#fraction" class="text-logoSize text-listColor font-h3Bold hover:text-black transition-all ease-in-out duration-300"><h3>fractional cpo</h3></a></li>
                            <li class="pl-[2.81rem]"><a href="#team" class="text-logoSize text-listColor font-h3Bold hover:text-black transition-all ease-in-out duration-300"><h3>team jetfuel</h3></a></li>
                        </ul>    
                    </div><!-- end of expertise-box -->
                    <div  class="expertise-desc col-span-2 relative">
                        <div id="concept" class="expertise-row">
                            <div class="expertise-row text-wrap w-[35rem] my-10">
                                <h2 class="text-[2.5rem] leading-[3.12rem] text-left font-logoBold">
                                    Ideal for businesses that need fresh innovative thinking for a new product.</h2>
                            </div><!-- end of expertise-row -->

                            <div class="grid grid-cols-2 col gap-x-[8rem]">
                                <div class="expertise-content text-[0.875rem]">
                                    <p class="ms-1.5 me-1.5">So you’ve got an idea for “the next big thing” but you don’t quite know how that thing might work, look, monetise, attract customers, convert prospects, operate – the list goes on…</p>
                                </div>
                                <div class="expertise-content text-[0.875rem]">
                                    <p>Using design thinking, I assist you or your teams unlock creative thinking by posing the critical questions and exploring opportunities by leveraging knowledge on industry insights and best practices.</p>
                                </div>
                                <h2 class="mt-14"><a class="text-primaryColor text-[2.125rem] font-logoBold capitalize relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-100 after:h-[2px] after:bg-primaryColor after:bottom-0 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-0" href=""><h2>Let’s innovate</h2></a></h2>
                            </div>    
                        </div><!-- end of expertise-row -->

                        <div id="product" class="expertise-row my-[14rem]">
                            <div class="expertise-row text-wrap w-[35rem] my-10">
                                <h2 class="text-[2.5rem] leading-[3.12rem] text-left font-logoBold">
                                    Ideal for businesses with an existing product seeking to unlock value</h2>
                            </div><!-- end of expertise-row -->

                            <div class="grid grid-cols-2 col gap-x-[8rem]">
                                <div class="expertise-content text-[0.875rem]">
                                    <p class="ms-1.5 me-1.5">So you have “the next best thing” but it’s just not quite reaching its full potential. Its strengths aren’t maximising value, weaknesses are bringing it down, opportunities are slipping you by and threats are looming.</p>
                                </div>
                                <div class="expertise-content text-[0.875rem]">
                                    <p>You get where I’m going with this. With a insight-and-impact-driven SWOT analysis we tear your product apart and put it back together, hopefully, with the right remaining nuts and bolts identified for tightening. </p>
                                </div>
                                <h2 class="mt-14"><a class="text-primaryColor text-[2.125rem] capitalize font-logoBold relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-100 after:h-[2px] after:bg-primaryColor after:bottom-0 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-0" href=""><h2>Let’s optimise</h2></a></h2>
                            </div>    
                        </div><!-- end of expertise-row -->

                        <div id="art" class="expertise-row">
                            <div class="expertise-row text-wrap w-[35rem] my-10">
                                <h2 class="text-[2.5rem] leading-[3.12rem] text-left font-logoBold">
                                    Ideal for businesses well into development but suffering from "the long tail" of production.</h2>
                            </div><!-- end of expertise-row -->

                            <div class="grid grid-cols-2 col gap-x-[8rem]">
                                <div class="expertise-content text-[0.875rem]">
                                    <p class="ms-1.5 me-1.5">You embarked on building your lean startup, your “MVP”. That was over 8 months ago. Entire solar-systems have been born and have died during this time. You see a light at the end of the tunnel, but that may be another train. </p>
                                </div>
                                <div class="expertise-content text-[0.875rem]">
                                    <p>Fortunately, building a product isn’t rocket science – but it is an art. And I’ve built countless of them. We develop a value-driven product roadmap, aggressively discarding what we don’t need and prioritising what absolutely will deliver value, and fast.</p>
                                </div>
                                <h2 class="mt-14"><a class="text-primaryColor text-[2.125rem] font-logoBold capitalize relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-100 after:h-[2px] after:bg-primaryColor after:bottom-0 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-0" href=""><h2>Let’s build</h2></a></h2>
                            </div>    
                        </div><!-- end of expertise-row -->

                        <div id="fraction" class="expertise-row my-[14rem]">
                            <div class="expertise-row text-wrap w-[35rem] my-10">
                                <h2 class="text-[2.5rem] leading-[3.12rem] text-left font-logoBold">
                                    Ideal for businesses that need "drip-fed" expertise to value-engineer outputs.</h2>
                            </div><!-- end of expertise-row -->

                            <div class="grid grid-cols-2 col gap-x-[8rem]">
                                <div class="expertise-content text-[0.875rem]">
                                    <p class="ms-1.5 me-1.5">Your product is running, you’re winning some customers, you lose some – but things are generally good. Although every now and then you cross a “chasm” which is hard to overcome, it cripples your business, frustrates your users and demotivates your team.</p>
                                </div>
                                <div class="expertise-content text-[0.875rem]">
                                    <p>As someone who has crossed chasms for a living for the past decade and a half – I’d like to think I’m a reliable source of knowledge on how to identify (early) and circumvent (often) common pitfalls faced by startups to big engines alike. Use this service when you need as-you-go mentoring.</p>
                                </div>
                                <h2 class="mt-14"><a class="text-primaryColor text-[2.125rem] font-logoBold capitalize relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-100 after:h-[2px] after:bg-primaryColor after:bottom-0 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-0" href=""><h2>Let’s strategise</h2></a></h2>
                            </div>    
                        </div><!-- end of expertise-row -->

                        <div id="team" class="expertise-row">
                            <div class="expertise-row text-wrap w-[35rem] my-10">
                                <h2 class="text-[2.5rem] leading-[3.12rem] text-left font-logoBold">
                                    Ideal for businesses with the right formula but lacking execution.</h2>
                            </div><!-- end of expertise-row -->

                            <div class="grid grid-cols-2 col gap-x-[8rem]">
                                <div class="expertise-content text-[0.875rem]">
                                    <p class="ms-1.5 me-1.5">You have a great product. Nice! You have a bounty of customers chomping at the bit to pay you for it. Great! You have a viable business plan and product roadmap planned out and your next 5 year forecast looks strong. Epic! But you’re missing one fundamental golden thread – motivated and “bought in” talent.</p>
                                </div>
                                <div class="expertise-content text-[0.875rem]">
                                    <p>Having built and worked with teams of all sizes over the years in as many industries and verticals as you can shake a stick at – I know what works, and most importantly, what doesn’t. I help you identify and supercharge operational, organisational and cultural rifts that are preventing your team going from “good” to “great”.</p>
                                </div>
                                <h2 class="mt-14"><a class="text-primaryColor text-[2.125rem] font-logoBold capitalize relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-100 after:h-[2px] after:bg-primaryColor after:bottom-0 after:left-0 after:origin-bottom-left after:transition-transform after:duration-300 hover:after:scale-x-0" href=""><h2>Let’s organise</h2></a></h2>
                            </div>    
                        </div><!-- end of expertise-row -->
                    </div><!-- endo f expertise-desc -->
                </div>
            </section><!-- end of expertise -->
            <section id="clients" class=" pt-20">
                
                <div class="grid grid-cols-1 mx-[16rem]">
                    <h1 class="mt-10 text-16vh capitalize font-extrabold">clients</h1>
                    <h3 class="text-logoSize mb-8">For the last 17 years I've been fortunate enough to work alongside some great brands and bright teams.
                    </h3>
                    <h2 class="text-[2.125rem] font-h3Bold leading-6 antialiased">Ask me how I've
                    </h2>
                </div>

                <div class="b-slider marquee-slider my-40 gap-x-30 overflow-x-hidden ">
                    <div class="b-slider__slide w-[55rem]">
                        <a href="#" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Helped South Africa’s largest retail destination transform their omni-channel data-first digital strategy.</h1>
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                           <h1>Helped a global animal NPO save a 4M+ donor-base from cybercrime disaster.</h1> 
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Helped a global Healthtech enterprise conceive & build a big-data AI product before AI was big.</h1>
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Helped Mazda Japan redefine & deploy the next generation of electric vehicle tech infrastructure.</h1>
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Helped Panasonic solve e-bike logistic and supply chain woes with smart sensor technology.</h1>
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Built and sold IoT tech to Cape Towns largest convention centre.</h1>
                        </a>
                    </div>
                    <div class="b-slider__slide w-[55rem]">
                        <a href="" class="b-slider__ref cursor-grab text-primaryColor text-[3.375rem] leading-[3.875rem] font-h1Bold">
                            <h1>Built & scaled South Africa’s largest food-relief platform alongside government.</h1>
                        </a>
                    </div>
                </div><!-- end of marquee-slider -->
              
                <div class="b-slider mt-4 brands-box brands-marquee gap-x-20 text-10vh overflow-x-hidden">
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                    <div class="b-slider__slide w-[65rem]">
                        <p class="leading-[1em]">⚬ other brands</p>
                    </div>
                </div>

                <div class="solution-wrapper bg-primaryColor text-white">
                    <div class="b-slider solution-marquee gap-x-20 text-10vh overflow-x-hidden">
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                        <div class="b-slider__slide w-[55rem]">
                            <p class="leading-[1em] lowercase">⚬ i've helped</p>
                        </div>
                    </div><!-- endo f solution-marquee -->

                    <div class="client-box mx-[16rem] my-10 py-40">
                        <div class="client-inner grid grid-cols-4 gap-10">
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/ninetyone.png')}}" class="object-contain" alt="ninetyone" />
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/vawaterfront.png')}}" class="object-contain" alt="vawaterfront" />
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/mazda.png')}}" class="object-contain" alt="mazda">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/cticc.png')}}" class="object-contain" alt="cticc">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/tfg.png')}}" class="object-contain" alt="tfg">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/discoveryvitality.png')}}" class="object-contain" alt="discoveryvitality">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/adidas.png')}}" class="object-contain" alt="adidas">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/basecamp.png')}}" class="object-contain" alt="basecamp">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/nhs.png')}}" class="object-contain" alt="nhs">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/woolworths.png')}}" class="object-contain" alt="woolworths">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/virginactive.png')}}" class="object-contain" alt="virginactive">
                            </div>
                            <div class="client-img w-[20.887rem]">
                                <img src="{{asset('images/vodacom.png')}}" class="object-contain" alt="vodacom">
                            </div>
                        </div><!-- end of client-inner -->
                    </div><!-- end of client-box -->
                </div><!-- endo fsolution-wrapper -->

            </section><!-- end of clients -->
            <section id="contact" class="h-screen pt-10">
                <div class="b-slider contact-marquee text-18vh gap-x-20 overflow-x-hidden">
                    <div class="b-slider__slide w-[190rem]">
                        <h2 class="leading-[1.5em] text-stroke">less reading more doing.</h2>
                    </div>
                    <div class="b-slider__slide w-[190rem]">
                        <h2 class="leading-[1.5em] text-stroke">less reading more doing.</h2>
                    </div>
                    <div class="b-slider__slide w-[190rem]">
                        <h2 class="leading-[1.5em] text-stroke">less reading more doing.</h2>
                    </div>
                </div>

                <div class="contact-address mx-[16rem] lowercase mb-[-4rem]">
                    <h2 class="lowercase leading-loose text-[2.125rem] font-logoBold mt-4">let’s take action.</h2>
                    <div class="contact-box text-14vh font-h1Bold leading-[15.4vh]">
                        <h1 class="mb-36">just say hi</h1>
                        <h1 class="mb-36">concept development</h1>
                        <h1 class="mb-36">product audit</h1>
                        <h1 class="mb-36">art of the mvp</h1>
                        <h1 class="mb-36">fractional cpo</h1>
                        <h1 class="mb-36">team jetfuel</h1>
                        <h1 class="mb-36 text-[10vh] leading-[11vh]"><i class="fa-brands text-[3.75rem] leading-[3.75rem] text-primaryColor fa-linkedin mr-4"></i><a href="">connect linkedin</a></h1>
                    </div><!-- end ofcontact-box -->
                </div><!-- end of contact-address -->
            </section><!-- end of contact -->
       </div><!-- endo fo main-wrapper -->

       <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
       <script>

            
            let marqueeSlider = document.querySelector('.marquee-slider');
            let brandsMarquee = document.querySelector('.brands-marquee');
            let solutionMarquee = document.querySelector('.solution-marquee');
            let contactMarquee = document.querySelector('.contact-marquee');
            let marqueeSlide = document.querySelector('.b-slider__ref');
            let mainTicker = new Flickity('.marquee-slider', {
                accessibility: true,
                resize: true,
                wrapAround: true,
                prevNextButtons: false,
                pageDots: false,
                percentPosition: true,
                setGallerySize: true,
            });

            let mainTicker2 = new Flickity('.brands-marquee', {
                accessibility: true,
                resize: true,
                wrapAround: true,
                prevNextButtons: false,
                pageDots: false,
                percentPosition: true,
                setGallerySize: true,
            });

            let mainTicker3 = new Flickity('.solution-marquee', {
                accessibility: true,
                resize: true,
                wrapAround: true,
                prevNextButtons: false,
                pageDots: false,
                percentPosition: true,
                setGallerySize: true,
            });

            let mainTicker4 = new Flickity('.contact-marquee', {
                accessibility: true,
                resize: true,
                wrapAround: true,
                prevNextButtons: false,
                pageDots: false,
                percentPosition: true,
                setGallerySize: true,
            });

            // Set initial position to be 0
            mainTicker.x = 0;
            mainTicker2.x = 0;
            mainTicker3.x = 0;
            mainTicker4.x = 0;

            let scrollSpeed = 0.8; 

            // Start the marquee animation
            play();

            // Main function that 'plays' the marquee.
            function play() {
            // Set the decrement of position x
            mainTicker.x -= 1.5;
            mainTicker2.x -= 1.5;
            mainTicker3.x += 1.5;
            mainTicker4.x -= 1.5;

            // Settle position into the slider
            mainTicker.settle(mainTicker.x);
            mainTicker2.settle(mainTicker2.x);
            mainTicker3.settle(mainTicker3.x);
            mainTicker4.settle(mainTicker4.x);

            // Set the requestId to the local variable
            requestId = window.requestAnimationFrame(play);
            }

            // Main function to cancel the animation.
            function pause() {
            if(requestId) {
                // Cancel the animation
                window.cancelAnimationFrame(requestId)

                // Reset the requestId for the next animation.
                requestId = undefined;
            }
            }

            // Pause on hover/focus
            // marqueeSlider.addEventListener('mouseenter', () => pause());

            // Unpause on mouse out / defocus
            // marqueeSlider.addEventListener('mouseleave', () => play());

       </script>
    </body>
</html>
