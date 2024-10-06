<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['user'])) {
  header('Location: ./app/views/app.php');
  exit();
}

include './app/views/partials/_navbar.php';

?>
<section class="relative pt-[12rem] -mt-[5.25rem]">
  <div class="container relative mx-auto">
    <div class="relative z-1 max-w-[62rem] mx-auto text-center mb-[3.875rem] md:mb-20 lg:mb-[6.25rem] z-10">
      <h1 class="text-6xl font-bold mb-6 leading-tight">Explore the Possibilities of&nbsp;AI&nbsp;Chatting with
        <span class="inline-block relative">Brainwave
          <img src="https://silver-sunshine-319abc.netlify.app/assets/curve-DplsLMf8.png" class="absolute top-full left-0 w-full xl:-mt-2" width="624" height="28" alt="Curve">
        </span>
      </h1>
      <p class="max-w-3xl mx-auto mb-6 text-n-2 lg:mb-8 text-xl leading-8">Unleash the power of AI within Brainwave. Upgrade your productivity with Brainwave, the open AI chat app.</p>
      <a href="/pricing" class="button relative inline-flex items-center justify-center h-11 transition-colors hover:text-color-1 px-7 text-n-8 ">
        <span class="relative z-10 text-[#0e0c15] sc-font uppercase font-bold text-sm">Get started</span>
        <svg class="absolute top-0 left-0" width="21" height="44" viewBox="0 0 21 44">
          <path fill="white" stroke="white" stroke-width="2" d="M21,43.00005 L8.11111,43.00005 C4.18375,43.00005 1,39.58105 1,35.36365 L1,8.63637 C1,4.41892 4.18375,1 8.11111,1 L21,1"></path>
        </svg>
        <svg class="absolute top-0 left-[1.3125rem] w-[calc(100%-2.625rem)]" height="44" viewBox="0 0 100 44" preserveAspectRatio="none" fill="white">
          <polygon fill="white" fill-rule="nonzero" points="100 0 100 44 0 44 0 0"></polygon>
        </svg>
        <svg class="absolute top-0 right-0" width="21" height="44" viewBox="0 0 21 44">
          <path fill="white" stroke="white" stroke-width="2" d="M0,43.00005 L5.028,43.00005 L12.24,43.00005 C16.526,43.00005 20,39.58105 20,35.36365 L20,16.85855 C20,14.59295 18.978,12.44425 17.209,10.99335 L7.187,2.77111 C5.792,1.62675 4.034,1 2.217,1 L0,1"></path>
        </svg>
      </a>
    </div>
  </div>
  <div class="relative max-w-[23rem] mx-auto md:max-w-5xl xl:mb-24">
    <div class="relative z-1 p-0.5 rounded-2xl bg-conic-gradient z-10">
      <div class="relative bg-n-8 rounded-[1rem]">
        <div class="h-[1.4rem] bg-n-10 rounded-t-[0.9rem]"></div>
        <div class="aspect-[33/40] overflow-hidden md:aspect-[688/490] lg:aspect-[1024/490]">
          <img src="https://images.nightcafe.studio/jobs/FyhI1KzYj4NLJ4Tn0lFv/FyhI1KzYj4NLJ4Tn0lFv--1--fc6wc.jpg?tr=w-1600,c-at_max" class="w-full scale-[1.7] translate-y-[8%] md:scale-[1] md:-translate-y-[10%] object-cover object-top" width="1024" height="490" alt="AI">
          <div class="flex items-center h-[3.5rem] px-6 bg-n-8 rounded-[1.7rem] absolute left-4 right-4 bottom-5 md:left-1/2 md:right-auto md:bottom-8 md:w-[31rem] md:-translate-x-1/2 text-base">
            <img class="w-5 h-5 mr-4" src="https://silver-sunshine-319abc.netlify.app/assets/loading-CllQEGx_.png" alt="Loading">AI is generating
          </div>
          <span style="width: 100%; height: 100%; display: inline-block; user-select: none; pointer-events: none; position: absolute; top: 0px; left: 0px; z-index: initial;">
            <span style="backface-visibility: hidden; position: relative; width: 100%; height: 100%; display: inline-block; user-select: initial; pointer-events: initial; will-change: transform; transform: translate3d(0px, 5.78143px, 0px);">
              <ul class="hidden absolute -left-[5.5rem] bottom-[7.5rem] px-1 py-1 bg-n-9/40 backdrop-blur border border-[#ffffff1a] rounded-2xl xl:flex">
                <li class="p-5"><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M8.12602%2014.0007C8.57006%2015.7259%2010.1362%2017.0007%2012%2017.0007C13.8638%2017.0007%2015.4299%2015.7259%2015.874%2014.0007M11.0177%202.76473L4.23539%208.03986C3.78202%208.39248%203.55534%208.56879%203.39203%208.78959C3.24737%208.98518%203.1396%209.20552%203.07403%209.43978C3%209.70425%203%209.99143%203%2010.5658V17.8007C3%2018.9208%203%2019.4809%203.21799%2019.9087C3.40973%2020.285%203.71569%2020.591%204.09202%2020.7827C4.51984%2021.0007%205.07989%2021.0007%206.2%2021.0007H17.8C18.9201%2021.0007%2019.4802%2021.0007%2019.908%2020.7827C20.2843%2020.591%2020.5903%2020.285%2020.782%2019.9087C21%2019.4809%2021%2018.9208%2021%2017.8007V10.5658C21%209.99143%2021%209.70425%2020.926%209.43978C20.8604%209.20552%2020.7526%208.98518%2020.608%208.78959C20.4447%208.56879%2020.218%208.39248%2019.7646%208.03986L12.9823%202.76473C12.631%202.49148%2012.4553%202.35485%2012.2613%202.30233C12.0902%202.25599%2011.9098%202.25599%2011.7387%202.30233C11.5447%202.35485%2011.369%202.49148%2011.0177%202.76473Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e" width="24" height="25" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M8.12602%2014.0007C8.57006%2015.7259%2010.1362%2017.0007%2012%2017.0007C13.8638%2017.0007%2015.4299%2015.7259%2015.874%2014.0007M11.0177%202.76473L4.23539%208.03986C3.78202%208.39248%203.55534%208.56879%203.39203%208.78959C3.24737%208.98518%203.1396%209.20552%203.07403%209.43978C3%209.70425%203%209.99143%203%2010.5658V17.8007C3%2018.9208%203%2019.4809%203.21799%2019.9087C3.40973%2020.285%203.71569%2020.591%204.09202%2020.7827C4.51984%2021.0007%205.07989%2021.0007%206.2%2021.0007H17.8C18.9201%2021.0007%2019.4802%2021.0007%2019.908%2020.7827C20.2843%2020.591%2020.5903%2020.285%2020.782%2019.9087C21%2019.4809%2021%2018.9208%2021%2017.8007V10.5658C21%209.99143%2021%209.70425%2020.926%209.43978C20.8604%209.20552%2020.7526%208.98518%2020.608%208.78959C20.4447%208.56879%2020.218%208.39248%2019.7646%208.03986L12.9823%202.76473C12.631%202.49148%2012.4553%202.35485%2012.2613%202.30233C12.0902%202.25599%2011.9098%202.25599%2011.7387%202.30233C11.5447%202.35485%2011.369%202.49148%2011.0177%202.76473Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e"></li>
                <li class="p-5"><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M14%2011H8M10%2015H8M16%207H8M20%206.8V17.2C20%2018.8802%2020%2019.7202%2019.673%2020.362C19.3854%2020.9265%2018.9265%2021.3854%2018.362%2021.673C17.7202%2022%2016.8802%2022%2015.2%2022H8.8C7.11984%2022%206.27976%2022%205.63803%2021.673C5.07354%2021.3854%204.6146%2020.9265%204.32698%2020.362C4%2019.7202%204%2018.8802%204%2017.2V6.8C4%205.11984%204%204.27976%204.32698%203.63803C4.6146%203.07354%205.07354%202.6146%205.63803%202.32698C6.27976%202%207.11984%202%208.8%202H15.2C16.8802%202%2017.7202%202%2018.362%202.32698C18.9265%202.6146%2019.3854%203.07354%2019.673%203.63803C20%204.27976%2020%205.11984%2020%206.8Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e" width="24" height="25" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M14%2011H8M10%2015H8M16%207H8M20%206.8V17.2C20%2018.8802%2020%2019.7202%2019.673%2020.362C19.3854%2020.9265%2018.9265%2021.3854%2018.362%2021.673C17.7202%2022%2016.8802%2022%2015.2%2022H8.8C7.11984%2022%206.27976%2022%205.63803%2021.673C5.07354%2021.3854%204.6146%2020.9265%204.32698%2020.362C4%2019.7202%204%2018.8802%204%2017.2V6.8C4%205.11984%204%204.27976%204.32698%203.63803C4.6146%203.07354%205.07354%202.6146%205.63803%202.32698C6.27976%202%207.11984%202%208.8%202H15.2C16.8802%202%2017.7202%202%2018.362%202.32698C18.9265%202.6146%2019.3854%203.07354%2019.673%203.63803C20%204.27976%2020%205.11984%2020%206.8Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e"></li>
                <li class="p-5"><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11%202C6.02944%202%202%206.02944%202%2011C2%2015.9706%206.02944%2020%2011%2020C13.125%2020%2015.078%2019.2635%2016.6177%2018.0319L20.2929%2021.7071C20.6834%2022.0976%2021.3166%2022.0976%2021.7071%2021.7071C22.0976%2021.3166%2022.0976%2020.6834%2021.7071%2020.2929L18.0319%2016.6177C19.2635%2015.078%2020%2013.125%2020%2011C20%206.02944%2015.9706%202%2011%202ZM4%2011C4%207.13401%207.13401%204%2011%204C14.866%204%2018%207.13401%2018%2011C18%2014.866%2014.866%2018%2011%2018C7.13401%2018%204%2014.866%204%2011Z'%20fill='white'/%3e%3c/svg%3e" width="24" height="25" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11%202C6.02944%202%202%206.02944%202%2011C2%2015.9706%206.02944%2020%2011%2020C13.125%2020%2015.078%2019.2635%2016.6177%2018.0319L20.2929%2021.7071C20.6834%2022.0976%2021.3166%2022.0976%2021.7071%2021.7071C22.0976%2021.3166%2022.0976%2020.6834%2021.7071%2020.2929L18.0319%2016.6177C19.2635%2015.078%2020%2013.125%2020%2011C20%206.02944%2015.9706%202%2011%202ZM4%2011C4%207.13401%207.13401%204%2011%204C14.866%204%2018%207.13401%2018%2011C18%2014.866%2014.866%2018%2011%2018C7.13401%2018%204%2014.866%204%2011Z'%20fill='white'/%3e%3c/svg%3e"></li>
                <li class="p-5"><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M12%208V16M8%2012H16M7.8%2021H16.2C17.8802%2021%2018.7202%2021%2019.362%2020.673C19.9265%2020.3854%2020.3854%2019.9265%2020.673%2019.362C21%2018.7202%2021%2017.8802%2021%2016.2V7.8C21%206.11984%2021%205.27976%2020.673%204.63803C20.3854%204.07354%2019.9265%203.6146%2019.362%203.32698C18.7202%203%2017.8802%203%2016.2%203H7.8C6.11984%203%205.27976%203%204.63803%203.32698C4.07354%203.6146%203.6146%204.07354%203.32698%204.63803C3%205.27976%203%206.11984%203%207.8V16.2C3%2017.8802%203%2018.7202%203.32698%2019.362C3.6146%2019.9265%204.07354%2020.3854%204.63803%2020.673C5.27976%2021%206.11984%2021%207.8%2021Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e" width="24" height="25" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M12%208V16M8%2012H16M7.8%2021H16.2C17.8802%2021%2018.7202%2021%2019.362%2020.673C19.9265%2020.3854%2020.3854%2019.9265%2020.673%2019.362C21%2018.7202%2021%2017.8802%2021%2016.2V7.8C21%206.11984%2021%205.27976%2020.673%204.63803C20.3854%204.07354%2019.9265%203.6146%2019.362%203.32698C18.7202%203%2017.8802%203%2016.2%203H7.8C6.11984%203%205.27976%203%204.63803%203.32698C4.07354%203.6146%203.6146%204.07354%203.32698%204.63803C3%205.27976%203%206.11984%203%207.8V16.2C3%2017.8802%203%2018.7202%203.32698%2019.362C3.6146%2019.9265%204.07354%2020.3854%204.63803%2020.673C5.27976%2021%206.11984%2021%207.8%2021Z'%20stroke='white'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e"></li>
              </ul>
            </span></span><span style="width: 100%; height: 100%; display: inline-block; user-select: none; pointer-events: none; position: absolute; top: 0px; left: 0px; z-index: initial;">
            <span style="backface-visibility: hidden; position: relative; width: 100%; height: 100%; display: inline-block; user-select: initial; pointer-events: initial; will-change: transform; transform: translate3d(0px, 5.78143px, 0px);">
              <div class="absolute -right-[5.5rem] bottom-[11rem] w-[18rem] xl:flex flex items-center p-4 pr-6 bg-n-9/40 backdrop-blur border border-[#ffffff1a] rounded-2xl gap-5">
                <img src="https://silver-sunshine-319abc.netlify.app/assets/image-1-CTP7EhT0.png" width="62" height="62" alt="image" class="rounded-xl">
                <div class="flex-1">
                  <h6 class="mb-1 font-semibold text-base">Code generation</h6>
                  <div class="flex items-center justify-between">
                    <ul class="flex -m-0.5 gap-2">
                      <li class="flex w-6 h-6 border border-gray-200 rounded-full overflow-hidden"><img src="https://img.freepik.com/free-photo/medium-shot-boy-relaxing-nature_23-2150753072.jpg" class="h-full w-full object-cover" alt=""></li>
                      <li class="flex w-6 h-6 border border-gray-200 rounded-full overflow-hidden"><img src="https://img.freepik.com/free-photo/medium-shot-boy-relaxing-nature_23-2150753072.jpg" class="h-full w-full object-cover" alt=""></li>
                      <li class="flex w-6 h-6 border border-gray-200 rounded-full overflow-hidden"><img src="https://img.freepik.com/free-photo/medium-shot-boy-relaxing-nature_23-2150753072.jpg" class="h-full w-full object-cover" alt=""></li>
                    </ul>
                    <div class="body-2 text-gray-500">1m ago</div>
                  </div>
                </div>
              </div>
            </span></span>
        </div>
      </div>
      <div class="h-[1.4rem] bg-n-10 rounded-b-[0.9rem]"></div>
    </div>
    <div class="absolute -top-[54%] left-1/2 w-[234%] -translate-x-1/2 md:-top-[46%] md:w-[138%] lg:-top-[104%] -z-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/hero-background-DUbyVUlq.jpg" class="w-full" width="1440" height="1800" alt="hero"></div>
    <div class="absolute -top-[42.375rem] left-1/2 w-[78rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 md:-top-[38.5rem] xl:-top-[32rem]">
      <div class="absolute top-1/2 left-1/2 w-[65.875rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[51.375rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[36.125rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[23.125rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div><span style="width: 100%; height: 100%; display: inline-block; user-select: none; pointer-events: none; position: relative; top: 0px; left: 0px; z-index: initial;"><span style="backface-visibility: hidden; position: relative; width: 100%; height: 100%; display: inline-block; user-select: initial; pointer-events: initial; will-change: auto; transform: translate3d(-5.4477px, 22.837px, 0px);">
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[46deg]">
            <div class="w-2 h-2 -ml-1 -mt-36 bg-gradient-to-b from-[#DD734F] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[56deg]">
            <div class="w-4 h-4 -ml-1 -mt-32 bg-gradient-to-b from-[#DD734F] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[54deg]">
            <div class="hidden w-4 h-4 -ml-1 mt-[12.9rem] bg-gradient-to-b from-[#B9AEDF] to-[#1A1A32] rounded-full xl:block transit transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[65deg]">
            <div class="w-3 h-3 -ml-1.5 mt-52 bg-gradient-to-b from-[#B9AEDF] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[85deg]">
            <div class="w-6 h-6 -ml-3 -mt-3 bg-gradient-to-b from-[#88E5BE] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[70deg]">
            <div class="w-6 h-6 -ml-3 -mt-3 bg-gradient-to-b from-[#88E5BE] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
        </span></span>
    </div>
  </div>
  <div class="hidden relative z-10 mt-20 lg:block">
    <h5 class="tagline mb-6 text-center text-gray-500">Helping people create beautiful content at</h5>
    <ul class="flex">
      <li class="flex items-center justify-center flex-1 h-[8.5rem]">
        <img src="https://silver-sunshine-319abc.netlify.app/assets/yourlogo-C6EMCCmQ.svg" width="134" height="28" alt="your logo img">
      </li>
      <li class="flex items-center justify-center flex-1 h-[8.5rem]">
        <img src="https://silver-sunshine-319abc.netlify.app/assets/yourlogo-C6EMCCmQ.svg" width="134" height="28" alt="your logo img">
      </li>
      <li class="flex items-center justify-center flex-1 h-[8.5rem]">
        <img src="https://silver-sunshine-319abc.netlify.app/assets/yourlogo-C6EMCCmQ.svg" width="134" height="28" alt="your logo img">
      </li>
      <li class="flex items-center justify-center flex-1 h-[8.5rem]">
        <img src="https://silver-sunshine-319abc.netlify.app/assets/yourlogo-C6EMCCmQ.svg" width="134" height="28" alt="your logo img">
      </li>
      <li class="flex items-center justify-center flex-1 h-[8.5rem]">
        <img src="https://silver-sunshine-319abc.netlify.app/assets/yourlogo-C6EMCCmQ.svg" width="134" height="28" alt="your logo img">
      </li>
    </ul>
  </div>
</section>

<section class="relative py-10 lg:py-16 xl:py-20">
  <div class="container relative z-2 mx-auto">
    <div class="md:max-w-md lg:max-w-2xl max-w-[50rem] mx-auto mb-12 lg:mb-20 md:text-center">
      <h2 class="text-5xl font-semibold px-5">Chat Smarter, Not Harder with Brainwave</h2>
    </div>
    <div class="flex flex-wrap gap-10 mb-10 justify-center">
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-1.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Ask anything</h5>
          <p class="body-2 mb-6 text-n-3">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
          <div class="flex items-center mt-auto">
            <img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%23AC6AFF'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M15%2021.4V29.2747C15%2031.1327%2015%2032.0617%2015.3646%2032.484C15.6809%2032.8503%2016.1545%2033.0415%2016.6364%2032.9975C17.1921%2032.9468%2017.8371%2032.2782%2019.1272%2030.9411L20.0563%2029.9781C20.4043%2029.6174%2020.5783%2029.4371%2020.7832%2029.3079C20.9648%2029.1935%2021.1637%2029.109%2021.3722%2029.0578C21.6073%2029%2021.8579%2029%2022.3592%2029H26.6C28.8402%2029%2029.9603%2029%2030.816%2028.564C31.5686%2028.1805%2032.1805%2027.5686%2032.564%2026.816C33%2025.9603%2033%2024.8402%2033%2022.6V21.4C33%2019.1598%2033%2018.0397%2032.564%2017.184C32.1805%2016.4314%2031.5686%2015.8195%2030.816%2015.436C29.9603%2015%2028.8402%2015%2026.6%2015H21.4C19.1598%2015%2018.0397%2015%2017.184%2015.436C16.4314%2015.8195%2015.8195%2016.4314%2015.436%2017.184C15%2018.0397%2015%2019.1598%2015%2021.4ZM20%2023C20.5523%2023%2021%2022.5523%2021%2022C21%2021.4477%2020.5523%2021%2020%2021C19.4477%2021%2019%2021.4477%2019%2022C19%2022.5523%2019.4477%2023%2020%2023ZM25%2022C25%2022.5523%2024.5523%2023%2024%2023C23.4477%2023%2023%2022.5523%2023%2022C23%2021.4477%2023.4477%2021%2024%2021C24.5523%2021%2025%2021.4477%2025%2022ZM28%2023C28.5523%2023%2029%2022.5523%2029%2022C29%2021.4477%2028.5523%2021%2028%2021C27.4477%2021%2027%2021.4477%2027%2022C27%2022.5523%2027.4477%2023%2028%2023Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Ask anything">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Ask anything" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-2.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Improve everyday</h5>
          <p class="body-2 mb-6 text-n-3">The app uses natural language processing to understand user queries and provide accurate and relevant responses.</p>
          <div class="flex items-center mt-auto"><img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%23FFC876'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M30%2033H18C16.3432%2033%2015%2031.6569%2015%2030V18C15%2016.3432%2016.3432%2015%2018%2015H30C31.6569%2015%2033%2016.3432%2033%2018V30C33%2031.6569%2031.6569%2033%2030%2033ZM29%2020.4142L24.4142%2025H26C26.5523%2025%2027%2025.4477%2027%2026C27%2026.5523%2026.5523%2027%2026%2027H22C21.4477%2027%2021%2026.5523%2021%2026V22C21%2021.4477%2021.4477%2021%2022%2021C22.5523%2021%2023%2021.4477%2023%2022V23.5858L27.5858%2019H26C25.4477%2019%2025%2018.5523%2025%2018C25%2017.4477%2025.4477%2017%2026%2017H30C30.5523%2017%2031%2017.4477%2031%2018V22C31%2022.5523%2030.5523%2023%2030%2023C29.4477%2023%2029%2022.5523%2029%2022V20.4142Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Improve everyday">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute top-0 left-1/4 w-full aspect-square bg-radial-gradient from-[#28206C] to-[#28206C]/0 to-70% pointer-events-none"></div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Improve everyday" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-3.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Connect everywhere</h5>
          <p class="body-2 mb-6 text-n-3">Connect with the AI chatbot from anywhere, on any device, making it more accessible and convenient.</p>
          <div class="flex items-center mt-auto"><img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%237ADB78'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M31%2029.5C31%2028.6716%2030.3284%2028%2029.5%2028H20C17.2386%2028%2015%2025.7614%2015%2023C15%2020.2386%2017.2386%2018%2020%2018H23V20H20C18.3432%2020%2017%2021.3432%2017%2023C17%2024.6569%2018.3432%2026%2020%2026H29.5C31.433%2026%2033%2027.567%2033%2029.5C33%2031.433%2031.433%2033%2029.5%2033H16C15.4477%2033%2015%2032.5523%2015%2032C15%2031.4477%2015.4477%2031%2016%2031H29.5C30.3284%2031%2031%2030.3284%2031%2029.5Z'%20fill='%230E0C15'/%3e%3cpath%20d='M32%2016H28V18H32C32.5523%2018%2033%2017.5523%2033%2017C33%2016.4477%2032.5523%2016%2032%2016Z'%20fill='%230E0C15'/%3e%3cpath%20d='M32%2020H28V22H32C32.5523%2022%2033%2021.5523%2033%2021C33%2020.4477%2032.5523%2020%2032%2020Z'%20fill='%230E0C15'/%3e%3cpath%20d='M21%2019C21%2016.7909%2022.7909%2015%2025%2015H29C29.5523%2015%2030%2015.4477%2030%2016V22C30%2022.5523%2029.5523%2023%2029%2023H25C22.7909%2023%2021%2021.2091%2021%2019Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Connect everywhere">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Connect everywhere" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-4.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Fast responding</h5>
          <p class="body-2 mb-6 text-n-3">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
          <div class="flex items-center mt-auto"><img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%23FF776F'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M31%2029.5C31%2028.6716%2030.3284%2028%2029.5%2028H20C17.2386%2028%2015%2025.7614%2015%2023C15%2020.2386%2017.2386%2018%2020%2018H23V20H20C18.3432%2020%2017%2021.3432%2017%2023C17%2024.6569%2018.3432%2026%2020%2026H29.5C31.433%2026%2033%2027.567%2033%2029.5C33%2031.433%2031.433%2033%2029.5%2033H16C15.4477%2033%2015%2032.5523%2015%2032C15%2031.4477%2015.4477%2031%2016%2031H29.5C30.3284%2031%2031%2030.3284%2031%2029.5Z'%20fill='%230E0C15'/%3e%3cpath%20d='M32%2016H28V18H32C32.5523%2018%2033%2017.5523%2033%2017C33%2016.4477%2032.5523%2016%2032%2016Z'%20fill='%230E0C15'/%3e%3cpath%20d='M32%2020H28V22H32C32.5523%2022%2033%2021.5523%2033%2021C33%2020.4477%2032.5523%2020%2032%2020Z'%20fill='%230E0C15'/%3e%3cpath%20d='M21%2019C21%2016.7909%2022.7909%2015%2025%2015H29C29.5523%2015%2030%2015.4477%2030%2016V22C30%2022.5523%2029.5523%2023%2029%2023H25C22.7909%2023%2021%2021.2091%2021%2019Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Fast responding">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute top-0 left-1/4 w-full aspect-square bg-radial-gradient from-[#28206C] to-[#28206C]/0 to-70% pointer-events-none"></div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Fast responding" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-5.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Ask anything</h5>
          <p class="body-2 mb-6 text-n-3">Lets users quickly find answers to their questions without having to search through multiple sources.</p>
          <div class="flex items-center mt-auto">
            <img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%23AC6AFF'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M15%2021.4V29.2747C15%2031.1327%2015%2032.0617%2015.3646%2032.484C15.6809%2032.8503%2016.1545%2033.0415%2016.6364%2032.9975C17.1921%2032.9468%2017.8371%2032.2782%2019.1272%2030.9411L20.0563%2029.9781C20.4043%2029.6174%2020.5783%2029.4371%2020.7832%2029.3079C20.9648%2029.1935%2021.1637%2029.109%2021.3722%2029.0578C21.6073%2029%2021.8579%2029%2022.3592%2029H26.6C28.8402%2029%2029.9603%2029%2030.816%2028.564C31.5686%2028.1805%2032.1805%2027.5686%2032.564%2026.816C33%2025.9603%2033%2024.8402%2033%2022.6V21.4C33%2019.1598%2033%2018.0397%2032.564%2017.184C32.1805%2016.4314%2031.5686%2015.8195%2030.816%2015.436C29.9603%2015%2028.8402%2015%2026.6%2015H21.4C19.1598%2015%2018.0397%2015%2017.184%2015.436C16.4314%2015.8195%2015.8195%2016.4314%2015.436%2017.184C15%2018.0397%2015%2019.1598%2015%2021.4ZM20%2023C20.5523%2023%2021%2022.5523%2021%2022C21%2021.4477%2020.5523%2021%2020%2021C19.4477%2021%2019%2021.4477%2019%2022C19%2022.5523%2019.4477%2023%2020%2023ZM25%2022C25%2022.5523%2024.5523%2023%2024%2023C23.4477%2023%2023%2022.5523%2023%2022C23%2021.4477%2023.4477%2021%2024%2021C24.5523%2021%2025%2021.4477%2025%2022ZM28%2023C28.5523%2023%2029%2022.5523%2029%2022C29%2021.4477%2028.5523%2021%2028%2021C27.4477%2021%2027%2021.4477%2027%2022C27%2022.5523%2027.4477%2023%2028%2023Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Ask anything">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Ask anything" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
      <div class="block relative p-0.5 bg-no-repeat bg-[length:100%_100%] md:max-w-[24rem]" style="background-image: url(&quot;./src/assets/benefits/card-6.svg&quot;);">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-[2.4rem] pointer-events-none z-10">
          <h5 class="text-2xl mb-5">Improve everyday</h5>
          <p class="body-2 mb-6 text-n-3">The app uses natural language processing to understand user queries and provide accurate and relevant responses.</p>
          <div class="flex items-center mt-auto"><img src="data:image/svg+xml,%3csvg%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='48'%20height='48'%20rx='12'%20fill='%23FFC876'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M30%2033H18C16.3432%2033%2015%2031.6569%2015%2030V18C15%2016.3432%2016.3432%2015%2018%2015H30C31.6569%2015%2033%2016.3432%2033%2018V30C33%2031.6569%2031.6569%2033%2030%2033ZM29%2020.4142L24.4142%2025H26C26.5523%2025%2027%2025.4477%2027%2026C27%2026.5523%2026.5523%2027%2026%2027H22C21.4477%2027%2021%2026.5523%2021%2026V22C21%2021.4477%2021.4477%2021%2022%2021C22.5523%2021%2023%2021.4477%2023%2022V23.5858L27.5858%2019H26C25.4477%2019%2025%2018.5523%2025%2018C25%2017.4477%2025.4477%2017%2026%2017H30C30.5523%2017%2031%2017.4477%2031%2018V22C31%2022.5523%2030.5523%2023%2030%2023C29.4477%2023%2029%2022.5523%2029%2022V20.4142Z'%20fill='%230E0C15'/%3e%3c/svg%3e" width="48" height="48" alt="Improve everyday">
            <p class="ml-auto font-code text-xs font-bold text-n-1 uppercase tracking-wider">Explore more</p><svg class="ml-5 fill-n-1" width="24" height="24">
              <path d="M8.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L13.586 12 8.293 6.707a1 1 0 0 1 0-1.414z"></path>
            </svg>
          </div>
        </div>
        <div class="absolute inset-0.5 bg-n-8" style="clip-path: url(&quot;#benefits&quot;);">
          <div class="absolute inset-0 opacity-0 transition-opacity hover:opacity-10"><img src="https://silver-sunshine-319abc.netlify.app/assets/image-2-DhSZK1Xt.png" width="380" height="362" alt="Improve everyday" class="w-full h-full object-cover"></div>
        </div><svg class="block" width="0" height="0">
          <clipPath id="benefits" clipPathUnits="objectBoundingBox">
            <path d="M0.079,0 h0.756 a0.079,0.083,0,0,1,0.058,0.026 l0.086,0.096 A0.079,0.083,0,0,1,1,0.179 V0.917 c0,0.046,-0.035,0.083,-0.079,0.083 H0.079 c-0.044,0,-0.079,-0.037,-0.079,-0.083 V0.083 C0,0.037,0.035,0,0.079,0"></path>
          </clipPath>
        </svg>
      </div>
    </div>
  </div>
</section>
<div class="relative container mx-auto mb-12 lg:mb-20 md:px-20 px-4">
  <div class="relative z-1 flex items-center h-[39rem] mb-5 p-8 border border-[#ffffff1a] rounded-3xl overflow-hidden lg:p-20 xl:h-[46rem] bg-gradient-to-r from-gray-950 to-gray-900">
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none md:w-3/5 xl:w-auto">
      <img class="w-full h-full object-cover md:object-right shadow-lg" width="800" alt="Smartest AI" height="730" src="https://silver-sunshine-319abc.netlify.app/assets/service-1-bvSONSha.png">
    </div>

    <div class="relative z-1 max-w-[17rem] ml-auto text-white">
      <h4 class="h4 mb-4">Smartest AI</h4>
      <p class="body-2 mb-[3rem] text-n-3">Brainwave unlocks the potential of AI-powered applications</p>

      <ul class="body-2">
        <li class="flex items-start py-4 border-t border-[#ffffff1a]">
          <img width="24" height="24" src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='24'%20height='24'%20rx='12'%20fill='%23AC6AFF'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M17.8047%207.52925C18.0651%207.7896%2018.0651%208.21171%2017.8047%208.47206L10.4714%2015.8054C10.2111%2016.0657%209.78894%2016.0657%209.5286%2015.8054L6.19526%2012.4721C5.93491%2012.2117%205.93491%2011.7896%206.19526%2011.5292C6.45561%2011.2689%206.87772%2011.2689%207.13807%2011.5292L10%2014.3912L16.8619%207.52925C17.1223%207.2689%2017.5444%207.2689%2017.8047%207.52925Z'%20fill='%230E0C15'/%3e%3c/svg%3e">
          <p class="ml-4">Photo generating</p>
        </li>
        <li class="flex items-start py-4 border-t border-[#ffffff1a]">
          <img width="24" height="24" src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='24'%20height='24'%20rx='12'%20fill='%23AC6AFF'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M17.8047%207.52925C18.0651%207.7896%2018.0651%208.21171%2017.8047%208.47206L10.4714%2015.8054C10.2111%2016.0657%209.78894%2016.0657%209.5286%2015.8054L6.19526%2012.4721C5.93491%2012.2117%205.93491%2011.7896%206.19526%2011.5292C6.45561%2011.2689%206.87772%2011.2689%207.13807%2011.5292L10%2014.3912L16.8619%207.52925C17.1223%207.2689%2017.5444%207.2689%2017.8047%207.52925Z'%20fill='%230E0C15'/%3e%3c/svg%3e">
          <p class="ml-4">Photo enhance</p>
        </li>
        <li class="flex items-start py-4 border-t border-[#ffffff1a]">
          <img width="24" height="24" src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='24'%20height='24'%20rx='12'%20fill='%23AC6AFF'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M17.8047%207.52925C18.0651%207.7896%2018.0651%208.21171%2017.8047%208.47206L10.4714%2015.8054C10.2111%2016.0657%209.78894%2016.0657%209.5286%2015.8054L6.19526%2012.4721C5.93491%2012.2117%205.93491%2011.7896%206.19526%2011.5292C6.45561%2011.2689%206.87772%2011.2689%207.13807%2011.5292L10%2014.3912L16.8619%207.52925C17.1223%207.2689%2017.5444%207.2689%2017.8047%207.52925Z'%20fill='%230E0C15'/%3e%3c/svg%3e">
          <p class="ml-4">Seamless Integration</p>
        </li>
      </ul>

      <!-- Add Call-to-Action Button -->
      <button class="mt-6 px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all">Learn More</button>
    </div>

    <!-- Testimonial Section -->
    <div class="absolute bottom-16 left-8 text-white w-[15rem]">
      <p class="italic">"Brainwave transformed our workflow, making AI accessible and seamless."</p>
      <p class="text-sm mt-2">- John Doe, CTO</p>
    </div>

    <!-- AI Generating Message -->
    <div class="flex items-center h-[3.5rem] px-6 bg-n-8/80 rounded-[1.7rem] absolute left-4 right-4 bottom-4 border-[#ffffff1a] border lg:left-1/2 lg-right-auto lg:bottom-8 lg:-translate-x-1/2 text-base">
      <img class="w-5 h-5 mr-4" src="https://silver-sunshine-319abc.netlify.app/assets/loading-CllQEGx_.png" alt="Loading">
      AI is generating
    </div>
  </div>
  <div class="relative z-1 grid gap-5 lg:grid-cols-2">
    <div class="relative min-h-[39rem] border border-[#ffffff1a] rounded-3xl overflow-hidden">
      <div class="absolute inset-0"><img src="https://silver-sunshine-319abc.netlify.app/assets/service-2-C-pPDQl7.png" class="h-full w-full object-cover" width="630" height="750" alt="robot"></div>
      <div class="absolute inset-0 flex flex-col justify-end p-8 bg-gradient-to-b from-n-8/0 to-n-8/90 lg:p-15">
        <h4 class="h4 mb-4">Photo editing</h4>
        <p class="body-2 mb-[3rem] text-n-3">Automatically enhance your photos using our AI app's photo editing feature. Try it now!</p>
      </div>
      <div class="absolute top-8 right-8 max-w-[17.5rem] py-6 px-8 bg-black rounded-t-xl rounded-bl-xl font-code text-base lg:top-16 lg:right-[8.75rem] lg:max-w-[17.5rem]">Hey Brainwave, enhance this photo<svg class="absolute left-full bottom-0" xmlns="http://www.w3.org/2000/svg" width="26" height="37">
          <path class="" d="M21.843 37.001c3.564 0 5.348-4.309 2.829-6.828L3.515 9.015A12 12 0 0 1 0 .53v36.471h21.843z"></path>
        </svg></div>
    </div>
    <div class="p-4 bg-n-7 rounded-3xl overflow-hidden lg:min-h-[46rem]">
      <div class="py-12 px-4 xl:px-8">
        <h4 class="h4 mb-4">Video generation</h4>
        <p class="body-2 mb-[2rem] text-n-3">The world’s most powerful AI photo and video art generation engine. What will you create?</p>
        <ul class="flex items-center justify-between">
          <li class="rounded-2xl flex items-center justify-center bg-n-6 w-16 h-16">
            <div class=""><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M12%201C5.92487%201%201%205.92487%201%2012C1%2018.0751%205.92487%2023%2012%2023C18.0751%2023%2023%2018.0751%2023%2012C23%205.92487%2018.0751%201%2012%201ZM14%206C14.5523%206%2015%206.44772%2015%207V17C15%2017.5523%2014.5523%2018%2014%2018C13.4477%2018%2013%2017.5523%2013%2017V7C13%206.44772%2013.4477%206%2014%206ZM11%209C11%208.44772%2010.5523%208%2010%208C9.44771%208%209%208.44772%209%209V15C9%2015.5523%209.44772%2016%2010%2016C10.5523%2016%2011%2015.5523%2011%2015V9ZM7%2011C7%2010.4477%206.55228%2010%206%2010C5.44772%2010%205%2010.4477%205%2011V13C5%2013.5523%205.44772%2014%206%2014C6.55228%2014%207%2013.5523%207%2013V11ZM19%2011C19%2010.4477%2018.5523%2010%2018%2010C17.4477%2010%2017%2010.4477%2017%2011V13C17%2013.5523%2017.4477%2014%2018%2014C18.5523%2014%2019%2013.5523%2019%2013V11Z'%20fill='white'/%3e%3c/svg%3e" width="24" height="24" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M12%201C5.92487%201%201%205.92487%201%2012C1%2018.0751%205.92487%2023%2012%2023C18.0751%2023%2023%2018.0751%2023%2012C23%205.92487%2018.0751%201%2012%201ZM14%206C14.5523%206%2015%206.44772%2015%207V17C15%2017.5523%2014.5523%2018%2014%2018C13.4477%2018%2013%2017.5523%2013%2017V7C13%206.44772%2013.4477%206%2014%206ZM11%209C11%208.44772%2010.5523%208%2010%208C9.44771%208%209%208.44772%209%209V15C9%2015.5523%209.44772%2016%2010%2016C10.5523%2016%2011%2015.5523%2011%2015V9ZM7%2011C7%2010.4477%206.55228%2010%206%2010C5.44772%2010%205%2010.4477%205%2011V13C5%2013.5523%205.44772%2014%206%2014C6.55228%2014%207%2013.5523%207%2013V11ZM19%2011C19%2010.4477%2018.5523%2010%2018%2010C17.4477%2010%2017%2010.4477%2017%2011V13C17%2013.5523%2017.4477%2014%2018%2014C18.5523%2014%2019%2013.5523%2019%2013V11Z'%20fill='white'/%3e%3c/svg%3e"></div>
          </li>
          <li class="rounded-2xl flex items-center justify-center bg-n-6 w-16 h-16">
            <div class=""><img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%3e%3cpath%20fill='%23FFF'%20fill-rule='evenodd'%20d='M1%207C1.55228%207%202%207.44772%202%208L2%2012C2%2012.5523%201.55228%2013%201%2013%20.44772%2013%200%2012.5523%200%2012L0%208C0%207.44772.44772%207%201%207ZM5.5%203C6.05228%203%206.5%203.44772%206.5%204L6.5%2016C6.5%2016.5523%206.05229%2017%205.5%2017%204.94772%2017%204.5%2016.5523%204.5%2016L4.5%204C4.5%203.44772%204.94772%203%205.5%203ZM10%200C10.5523%200%2011%20.44772%2011%201L11%2019C11%2019.5523%2010.5523%2020%2010%2020%209.4477%2020%209%2019.5523%209%2019L9%201C9%20.44772%209.4477%200%2010%200ZM14.5%203C15.0523%203%2015.5%203.44772%2015.5%204L15.5%2016C15.5%2016.5523%2015.0523%2017%2014.5%2017%2013.9477%2017%2013.5%2016.5523%2013.5%2016L13.5%204C13.5%203.44772%2013.9477%203%2014.5%203ZM19%207C19.5523%207%2020%207.44772%2020%208L20%2012C20%2012.5523%2019.5523%2013%2019%2013%2018.4477%2013%2018%2012.5523%2018%2012L18%208C18%207.44772%2018.4477%207%2019%207Z'%20transform='translate(2%202)'/%3e%3c/svg%3e" width="24" height="24" alt="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%3e%3cpath%20fill='%23FFF'%20fill-rule='evenodd'%20d='M1%207C1.55228%207%202%207.44772%202%208L2%2012C2%2012.5523%201.55228%2013%201%2013%20.44772%2013%200%2012.5523%200%2012L0%208C0%207.44772.44772%207%201%207ZM5.5%203C6.05228%203%206.5%203.44772%206.5%204L6.5%2016C6.5%2016.5523%206.05229%2017%205.5%2017%204.94772%2017%204.5%2016.5523%204.5%2016L4.5%204C4.5%203.44772%204.94772%203%205.5%203ZM10%200C10.5523%200%2011%20.44772%2011%201L11%2019C11%2019.5523%2010.5523%2020%2010%2020%209.4477%2020%209%2019.5523%209%2019L9%201C9%20.44772%209.4477%200%2010%200ZM14.5%203C15.0523%203%2015.5%203.44772%2015.5%204L15.5%2016C15.5%2016.5523%2015.0523%2017%2014.5%2017%2013.9477%2017%2013.5%2016.5523%2013.5%2016L13.5%204C13.5%203.44772%2013.9477%203%2014.5%203ZM19%207C19.5523%207%2020%207.44772%2020%208L20%2012C20%2012.5523%2019.5523%2013%2019%2013%2018.4477%2013%2018%2012.5523%2018%2012L18%208C18%207.44772%2018.4477%207%2019%207Z'%20transform='translate(2%202)'/%3e%3c/svg%3e"></div>
          </li>
          <li class="rounded-2xl flex items-center justify-center w-[3rem] h-[3rem] p-0.25 bg-conic-gradient md:w-[4.5rem] md:h-[4.5rem] p-0.5">
            <div class="flex items-center justify-center w-full h-full bg-n-7 rounded-[1rem]"><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M1%2012C1%205.92487%205.92487%201%2012%201C18.0751%201%2023%205.92487%2023%2012C23%2018.0751%2018.0751%2023%2012%2023C5.92487%2023%201%2018.0751%201%2012ZM12%2015C13.6569%2015%2015%2013.6569%2015%2012C15%2010.3431%2013.6569%209%2012%209C10.3431%209%209%2010.3431%209%2012C9%2013.6569%2010.3431%2015%2012%2015ZM15.4291%204.77031C14.9302%204.53333%2014.3337%204.74562%2014.0967%205.24448C13.8598%205.74334%2014.0721%206.33985%2014.5709%206.57683C16.6003%207.54091%2018%209.60796%2018%2011.9999C18%2012.5522%2018.4477%2012.9999%2019%2012.9999C19.5523%2012.9999%2020%2012.5522%2020%2011.9999C20%208.80713%2018.1296%206.05317%2015.4291%204.77031ZM6%2011.9999C6%2011.4476%205.55228%2010.9999%205%2010.9999C4.44772%2010.9999%204%2011.4476%204%2011.9999C4%2014.9112%205.55568%2017.4581%207.87631%2018.8564C8.34935%2019.1415%208.9639%2018.989%209.24894%2018.516C9.53398%2018.043%209.38157%2017.4284%208.90852%2017.1434C7.16348%2016.0919%206%2014.1813%206%2011.9999Z'%20fill='white'/%3e%3c/svg%3e" width="24" height="24" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M1%2012C1%205.92487%205.92487%201%2012%201C18.0751%201%2023%205.92487%2023%2012C23%2018.0751%2018.0751%2023%2012%2023C5.92487%2023%201%2018.0751%201%2012ZM12%2015C13.6569%2015%2015%2013.6569%2015%2012C15%2010.3431%2013.6569%209%2012%209C10.3431%209%209%2010.3431%209%2012C9%2013.6569%2010.3431%2015%2012%2015ZM15.4291%204.77031C14.9302%204.53333%2014.3337%204.74562%2014.0967%205.24448C13.8598%205.74334%2014.0721%206.33985%2014.5709%206.57683C16.6003%207.54091%2018%209.60796%2018%2011.9999C18%2012.5522%2018.4477%2012.9999%2019%2012.9999C19.5523%2012.9999%2020%2012.5522%2020%2011.9999C20%208.80713%2018.1296%206.05317%2015.4291%204.77031ZM6%2011.9999C6%2011.4476%205.55228%2010.9999%205%2010.9999C4.44772%2010.9999%204%2011.4476%204%2011.9999C4%2014.9112%205.55568%2017.4581%207.87631%2018.8564C8.34935%2019.1415%208.9639%2018.989%209.24894%2018.516C9.53398%2018.043%209.38157%2017.4284%208.90852%2017.1434C7.16348%2016.0919%206%2014.1813%206%2011.9999Z'%20fill='white'/%3e%3c/svg%3e"></div>
          </li>
          <li class="rounded-2xl flex items-center justify-center bg-n-6 w-16 h-16">
            <div class=""><img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%3e%3cpath%20fill='%23FFF'%20fill-rule='evenodd'%20d='M17.2413003,1.9999997%20L6.7587003,1.9999997%20C5.9537403,1.9999997%205.2893703,1.9999997%204.7481803,2.04419%20C4.1860803,2.09012%203.6693703,2.18868%203.1840403,2.43598%20C2.4313903,2.81947%201.8194703,3.43139%201.4359803,4.18404%20C1.1886803,4.66937%201.0901203,5.18608%201.0441903,5.74818%20C1,6.28937%201,6.95372%201,7.75869%20L1,16.2413%20C1,17.0463%201,17.7106%201.0441903,18.2518%20C1.0901203,18.8139%201.1886803,19.3306%201.4359803,19.816%20C1.8194703,20.5686%202.4313903,21.1805%203.1840403,21.564%20C3.6693703,21.8113%204.1860803,21.9099%204.7481803,21.9558%20C5.2893703,21.9999997%205.9537203,21.9999997%206.7586803,21.9999997%20L17.2413003,21.9999997%20C18.0463003,21.9999997%2018.7106003,21.9999997%2019.2518003,21.9558%20C19.8139003,21.9099%2020.3306003,21.8113%2020.8160003,21.564%20C21.5686003,21.1805%2022.1805003,20.5686%2022.5640003,19.816%20C22.8113003,19.3306%2022.9099003,18.8139%2022.9558003,18.2518%20C23,17.7106%2023,17.0463%2023,16.2413%20L23,7.75868%20C23,6.95372%2023,6.28937%2022.9558003,5.74818%20C22.9099003,5.18608%2022.8113003,4.66937%2022.5640003,4.18404%20C22.1805003,3.43139%2021.5686003,2.81947%2020.8160003,2.43598%20C20.3306003,2.18868%2019.8139003,2.09012%2019.2518003,2.04419%20C18.7106003,1.9999997%2018.0463003,1.9999997%2017.2413003,1.9999997%20Z%20M4.0060803,9.93935%20C4.0671303,9.39045%204.5615903,8.99497%205.1104903,9.05602%20C7.3669203,9.30698%209.4708003,10.3183%2011.0762003,11.9237%20C12.6816003,13.529%2013.6929003,15.6329%2013.9438003,17.8894%20C14.0049003,18.4383%2013.6094003,18.9327%2013.0605003,18.9938%20C12.5116003,19.0548%2012.0171003,18.6593%2011.9561003,18.1104%20C11.7553003,16.3053%2010.9463003,14.6222%209.6620003,13.3379%20C8.3776603,12.0536%206.6945603,11.2445%204.8894103,11.0438%20C4.3405103,10.9827%203.9450303,10.4883%204.0060803,9.93935%20Z%20M4.0201203,13.9001%20C4.1304903,13.3589%204.6586403,13.0097%205.1997803,13.1201%20C6.3528503,13.3552%207.4113103,13.9243%208.2434403,14.7564%20C9.0755703,15.5885%209.6446003,16.647%209.8798003,17.8%20C9.9901003,18.3412%209.6409003,18.8693%209.0997803,18.9797%20C8.5586403,19.0901%208.0304903,18.7409%207.9201203,18.1997%20C7.7633503,17.431%207.3839803,16.7254%206.8292303,16.1706%20C6.2744803,15.6159%205.5688403,15.2365%204.8001203,15.0797%20C4.2589803,14.9693%203.9097603,14.4412%204.0201203,13.9001%20Z%20M4.9999503,16.9999%20C4.4476703,16.9999%203.9999503,17.4476%203.9999503,17.9999%20C3.9999503,18.5522%204.4476703,18.9999%204.9999503,18.9999%20L5.0099503,18.9999%20C5.5622403,18.9999%206.0099503,18.5522%206.0099503,17.9999%20C6.0099503,17.4476%205.5622403,16.9999%205.0099503,16.9999%20L4.9999503,16.9999%20Z'/%3e%3c/svg%3e" width="24" height="24" alt="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%3e%3cpath%20fill='%23FFF'%20fill-rule='evenodd'%20d='M17.2413003,1.9999997%20L6.7587003,1.9999997%20C5.9537403,1.9999997%205.2893703,1.9999997%204.7481803,2.04419%20C4.1860803,2.09012%203.6693703,2.18868%203.1840403,2.43598%20C2.4313903,2.81947%201.8194703,3.43139%201.4359803,4.18404%20C1.1886803,4.66937%201.0901203,5.18608%201.0441903,5.74818%20C1,6.28937%201,6.95372%201,7.75869%20L1,16.2413%20C1,17.0463%201,17.7106%201.0441903,18.2518%20C1.0901203,18.8139%201.1886803,19.3306%201.4359803,19.816%20C1.8194703,20.5686%202.4313903,21.1805%203.1840403,21.564%20C3.6693703,21.8113%204.1860803,21.9099%204.7481803,21.9558%20C5.2893703,21.9999997%205.9537203,21.9999997%206.7586803,21.9999997%20L17.2413003,21.9999997%20C18.0463003,21.9999997%2018.7106003,21.9999997%2019.2518003,21.9558%20C19.8139003,21.9099%2020.3306003,21.8113%2020.8160003,21.564%20C21.5686003,21.1805%2022.1805003,20.5686%2022.5640003,19.816%20C22.8113003,19.3306%2022.9099003,18.8139%2022.9558003,18.2518%20C23,17.7106%2023,17.0463%2023,16.2413%20L23,7.75868%20C23,6.95372%2023,6.28937%2022.9558003,5.74818%20C22.9099003,5.18608%2022.8113003,4.66937%2022.5640003,4.18404%20C22.1805003,3.43139%2021.5686003,2.81947%2020.8160003,2.43598%20C20.3306003,2.18868%2019.8139003,2.09012%2019.2518003,2.04419%20C18.7106003,1.9999997%2018.0463003,1.9999997%2017.2413003,1.9999997%20Z%20M4.0060803,9.93935%20C4.0671303,9.39045%204.5615903,8.99497%205.1104903,9.05602%20C7.3669203,9.30698%209.4708003,10.3183%2011.0762003,11.9237%20C12.6816003,13.529%2013.6929003,15.6329%2013.9438003,17.8894%20C14.0049003,18.4383%2013.6094003,18.9327%2013.0605003,18.9938%20C12.5116003,19.0548%2012.0171003,18.6593%2011.9561003,18.1104%20C11.7553003,16.3053%2010.9463003,14.6222%209.6620003,13.3379%20C8.3776603,12.0536%206.6945603,11.2445%204.8894103,11.0438%20C4.3405103,10.9827%203.9450303,10.4883%204.0060803,9.93935%20Z%20M4.0201203,13.9001%20C4.1304903,13.3589%204.6586403,13.0097%205.1997803,13.1201%20C6.3528503,13.3552%207.4113103,13.9243%208.2434403,14.7564%20C9.0755703,15.5885%209.6446003,16.647%209.8798003,17.8%20C9.9901003,18.3412%209.6409003,18.8693%209.0997803,18.9797%20C8.5586403,19.0901%208.0304903,18.7409%207.9201203,18.1997%20C7.7633503,17.431%207.3839803,16.7254%206.8292303,16.1706%20C6.2744803,15.6159%205.5688403,15.2365%204.8001203,15.0797%20C4.2589803,14.9693%203.9097603,14.4412%204.0201203,13.9001%20Z%20M4.9999503,16.9999%20C4.4476703,16.9999%203.9999503,17.4476%203.9999503,17.9999%20C3.9999503,18.5522%204.4476703,18.9999%204.9999503,18.9999%20L5.0099503,18.9999%20C5.5622403,18.9999%206.0099503,18.5522%206.0099503,17.9999%20C6.0099503,17.4476%205.5622403,16.9999%205.0099503,16.9999%20L4.9999503,16.9999%20Z'/%3e%3c/svg%3e"></div>
          </li>
          <li class="rounded-2xl flex items-center justify-center bg-n-6 w-16 h-16">
            <div class=""><img src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M3%209L14.126%209C14.5701%2010.7252%2016.1362%2012%2018%2012C20.2091%2012%2022%2010.2091%2022%208C22%205.79086%2020.2091%204%2018%204C16.1362%204%2014.5701%205.27477%2014.126%207L3%207C2.44772%207%202%207.44772%202%208C2%208.55228%202.44772%209%203%209Z'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M21%2015L9.87398%2015C9.42994%2013.2748%207.86384%2012%206%2012C3.79086%2012%202%2013.7909%202%2016C2%2018.2091%203.79086%2020%206%2020C7.86384%2020%209.42994%2018.7252%209.87398%2017L21%2017C21.5523%2017%2022%2016.5523%2022%2016C22%2015.4477%2021.5523%2015%2021%2015Z'%20fill='white'/%3e%3c/svg%3e" width="24" height="24" alt="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M3%209L14.126%209C14.5701%2010.7252%2016.1362%2012%2018%2012C20.2091%2012%2022%2010.2091%2022%208C22%205.79086%2020.2091%204%2018%204C16.1362%204%2014.5701%205.27477%2014.126%207L3%207C2.44772%207%202%207.44772%202%208C2%208.55228%202.44772%209%203%209Z'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M21%2015L9.87398%2015C9.42994%2013.2748%207.86384%2012%206%2012C3.79086%2012%202%2013.7909%202%2016C2%2018.2091%203.79086%2020%206%2020C7.86384%2020%209.42994%2018.7252%209.87398%2017L21%2017C21.5523%2017%2022%2016.5523%2022%2016C22%2015.4477%2021.5523%2015%2021%2015Z'%20fill='white'/%3e%3c/svg%3e"></div>
          </li>
        </ul>
      </div>
      <div class="relative h-[20rem] bg-n-8 rounded-xl overflow-hidden md:h-[25rem]"><img src="https://images.nightcafe.studio/jobs/xM0Pwpb57LJnNNF8sLKv/xM0Pwpb57LJnNNF8sLKv--1--xikcr.jpg?tr=w-1600,c-at_max" class="w-full h-full object-cover object-center" width="520" height="400" alt="Scary robot">
        <div class="absolute top-8 left-[3.125rem] w-full max-w-[14rem] pt-2.5 pr-2.5 pb-7 pl-5 bg-n-6 rounded-t-xl rounded-br-xl font-code text-base md:max-w-[17.5rem]">Video generated!<div class="absolute left-5 -bottom-[1.125rem] flex items-center justify-center w-[2.25rem] h-[2.25rem] bg-[#ac6aff] rounded-[0.75rem]"><img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='48'%20height='48'%20viewBox='0%200%2048%2048'%3e%3cpolygon%20fill='%23FFFFFF'%20points='38.831%2015.118%2038.823%209.905%2029.203%203.617%2029.203%207.639%2035.548%2011.817%2035.553%2015.019%2032.605%2017.015%2030.594%2015.548%2030.594%2013.063%2027.317%2010.821%2027.317%2015.344%2022.122%2018.532%2022.113%2026.952%2018.44%2029.02%2016.554%2027.543%2016.554%2025.105%2018.786%2023.576%2018.786%2023.556%2018.786%2019.783%2014.769%2022.471%2011.698%2020.473%208.893%2022.31%2013.277%2025.311%2013.277%2027.154%2010.117%2029.291%206.894%2027.109%206.894%2019.848%2011.679%2016.608%2011.684%2013.492%2017.82%2017.445%2022.978%2014.011%2019.834%2012.177%2017.776%2013.564%2013.294%2010.6%2018.349%207.654%2022.727%2010.22%2022.727%206.393%2018.354%203.828%208.411%209.625%208.404%2014.84%203.617%2018.082%203.617%2028.874%208.404%2032.116%208.411%2037.332%2018.032%2043.617%2018.032%2039.598%2011.686%2035.42%2011.681%2032.218%2014.629%2030.222%2016.64%2031.689%2016.64%2034.174%2019.917%2036.416%2019.917%2031.892%2025.186%2028.705%2025.245%2020.285%2028.795%2018.217%2030.68%2019.694%2030.68%2022.131%2028.448%2023.661%2028.448%2023.68%2028.448%2027.454%2032.465%2024.765%2035.536%2026.764%2038.341%2024.927%2033.958%2021.923%2033.958%2020.083%2037.117%2017.946%2040.34%2020.128%2040.34%2027.389%2035.556%2030.629%2035.551%2033.744%2029.414%2029.79%2024.256%2033.201%2027.401%2035.033%2029.459%2033.672%2033.941%2036.636%2028.886%2039.583%2024.507%2037.016%2024.507%2040.842%2028.881%2043.406%2038.823%2037.612%2038.831%2032.396%2043.617%2029.154%2043.617%2018.361'/%3e%3c/svg%3e" width="26" height="26" alt="Brainwave"></div>
          <p class="tagline absolute right-2.5 bottom-1 text-[0.625rem] text-n-3 uppercase">just now</p><svg class="absolute right-full bottom-0 -scale-x-100 fill-gray" xmlns="http://www.w3.org/2000/svg" width="26" height="37">
            <path class="fill-n-6" d="M21.843 37.001c3.564 0 5.348-4.309 2.829-6.828L3.515 9.015A12 12 0 0 1 0 .53v36.471h21.843z"></path>
          </svg>
        </div>
        <div class="absolute left-0 bottom-0 w-full flex items-center p-6"><img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='24'%20height='24'%20fill='none'%3e%3cpath%20d='M8.006%202.802l.036.024%2010.549%207.032.805.567c.227.183.494.437.648.808a2%202%200%200%201%200%201.532c-.154.371-.421.625-.648.808-.217.175-.5.364-.805.567L8.006%2021.198l-.993.627c-.285.154-.676.331-1.132.303a2%202%200%200%201-1.476-.79c-.276-.365-.346-.788-.375-1.111S4%2019.502%204%2019.054V4.99v-.043l.029-1.174c.03-.323.1-.746.375-1.11a2%202%200%200%201%201.476-.79c.456-.027.847.149%201.132.304s.62.378.993.627z'%20fill='%23fff'%20/%3e%3c/svg%3e" width="24" height="24" alt="Play" class="object-contain mr-3">
          <div class="flex-1 bg-[#D9D9D9]">
            <div class="w-1/2 h-0.5 bg-color-1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute top-0 -left-[10rem] w-[56.625rem] h-[56.625rem] opacity-50 mix-blend-color-dodge pointer-events-none">
    <img class="absolute top-1/2 left-1/2 w-[79.5625rem] max-w-[79.5625rem] h-[88.5625rem] -translate-x-1/2 -translate-y-1/2" src="https://silver-sunshine-319abc.netlify.app/assets/gradient-BMjsV91j.png" width="1417" height="1417" alt="Gradient">
  </div>
</div>

<section class="relative py-10 lg:py-16 xl:py-20 px-5">
  <div class="container relative z-2 mx-auto">
    <div class="md:max-w-md lg:max-w-2xl max-w-[50rem] mx-auto mb-12 lg:mb-20 md:text-center">
      <h2 class="text-5xl font-bold text-gray-200">Frequently Asked Questions</h2>
    </div>
    <div class="flex flex-wrap gap-10 mb-10 justify-center">
      <!-- Card 1 -->
      <div class="block relative p-0.5 bg-n-7 rounded-lg shadow-lg hover:shadow-xl transition-shadow md:max-w-[24rem]">
        <div class="absolute top-0 left-1/4 w-full aspect-square bg-radial-gradient from-[#28206C] to-[#28206C]/0 to-70% pointer-events-none"></div>
        <div class="relative z-10 bg-n-7 flex flex-col min-h-[22rem] p-6">
          <div class="flex items-center mb-5">
            <i class="bx bx-brain text-4xl text-purple-500 mr-3"></i>
            <h5 class="text-2xl font-semibold">What is Brainwave?</h5>
          </div>
          <p class="text-base text-gray-300">Brainwave is an AI-powered chat app that helps users quickly find answers to their questions without having to search through multiple sources.</p>
          <div class="mt-auto flex items-center bg-purple-500 w-14 h-14 justify-center rounded-lg">
            <i class="bx bx-chat text-3xl text-white"></i>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="block relative p-0.5 bg-n-7 rounded-lg shadow-lg hover:shadow-xl transition-shadow md:max-w-[24rem]">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-6">
          <div class="flex items-center mb-5">
            <i class="bx bx-cog text-4xl text-purple-500 mr-3"></i>
            <h5 class="text-2xl font-semibold">How does Brainwave work?</h5>
          </div>
          <p class="text-base text-gray-300">Brainwave uses natural language processing (NLP) and machine learning algorithms to understand user queries and provide relevant answers.</p>
          <div class="mt-auto flex items-center bg-purple-500 w-14 h-14 justify-center rounded-lg">
            <i class="bx bx-brain text-3xl text-white"></i>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="block relative p-0.5 bg-n-7 rounded-lg shadow-lg hover:shadow-xl transition-shadow md:max-w-[24rem]">
        <div class="relative z-2 flex flex-col min-h-[22rem] p-6">
          <div class="flex items-center mb-5">
            <i class="bx bx-dollar-circle text-4xl text-purple-500 mr-3"></i>
            <h5 class="text-2xl font-semibold">Is Brainwave free to use?</h5>
          </div>
          <p class="text-base text-gray-300">Yes, Brainwave is completely free to use. You can ask as many questions as you want without any limitations or costs.</p>
          <div class="mt-auto flex items-center bg-purple-500 w-14 h-14 justify-center rounded-lg">
            <i class="bx bx-check-circle text-3xl text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include './app/views/partials/_footer.php' ?>