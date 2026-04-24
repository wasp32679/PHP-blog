<?php require_once ROOT . "/src/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/views/shared/navbar.php"; ?>


<!--Title-->
<div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-indigo-500 font-bold">04 AUGUST 2023 <span class="text-white">/</span> GETTING STARTED</p>
    <h1 class="text-white font-bold break-normal text-3xl md:text-5xl">Welcome to Ghostwind CSS</h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-cover mt-8 rounded" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <div class=" w-full p-8 md:p-24 text-xl md:text-2xl text-white leading-normal" style="font-family:Georgia,serif;">

            <!--Post Content-->


            <!--Lead Para-->
            <p class="text-2xl md:text-3xl mb-5">
                Welcome fellow <a class="text-white hover:text-indigo-500 no-underline border-b-2 border-indigo-500" href="https://www.tailwindcss.com">Tailwind CSS</a> and <a class="text-white hover:text-indigo-500 no-underline border-b-2 border-indigo-500" href="https://www.ghost.org">Ghost</a> fan. This starter template is an attempt to replicate the default Ghost theme <a class="text-white hover:text-indigo-500 no-underline border-b-2 border-indigo-500" href="https://demo.ghost.io/welcome">"Casper"</a> using Tailwind CSS and vanilla Javascript.
            </p>

            <p class="py-6">The basic blog page layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>

            <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>

            <ol>
                <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>
                <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
                <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
            </ol>

            <blockquote class="border-l-4 border-indigo-500 italic my-8 pl-8 md:pl-12">
                Crocodiles are easy. They try to kill and eat you. People are harder. Sometimes they pretend to be your friend first.
                <br> - Steve Irwin
            </blockquote>

            <p class="py-6">What's the output?</p>
            <pre class="bg-gray-700 rounded border border-gray-600 text-white font-mono text-base p-4">
					<code class=" whitespace-pre-wrap">
                        let a = 3;
                        let b = new Number(3);
                        let c = 3;

                        console.log(a == b);
                        console.log(a === b);
                        console.log(b === c);
					</code>
				</pre>
        </div>
        <!--/ Post Content-->



        <!--Subscribe-->
        <div class="container font-sans bg-indigo-100 rounded mt-8 p-4 md:p-24 text-center">
            <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
            <h3 class="font-bold break-normal text-white text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>
            <div class="w-full text-center pt-4">
                <form action="#">
                    <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
                        <input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-white mr-2 focus:outline-none">
                        <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-indigo-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-indigo-400">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Subscribe-->


        <!--Author-->
        <div class="flex w-full text-white items-center font-sans p-8 md:p-24">
            <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
            <div class="flex-1">
                <p class="text-base font-bold md:text-xl leading-none">Ghostwind CSS</p>
                <p class="text-white text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a class="text-white hover:text-indigo-500 no-underline border-b-2 border-indigo-500" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
            </div>
            <div class="justify-end">

            </div>
            <!--/Author-->

        </div>


    </div>

</div>



<?php require_once ROOT . "/src/views/shared/footer.php"; ?>