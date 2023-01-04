        <!-- Hero -->
        <section
            class="relative h-1/3 bg-laravel flex flex-col justify-center align-center text-center space-y-4"
        >
@unless(empty($subTopic['mainImage']))
<div
class="absolute top-0 left-0 w-full h-full opacity-50 bg-no-repeat bg-center"
style="background-image: url('{{ asset("/assets/".$subTopic['mainImage']) }}');background-size:cover;"
></div>
@endunless        


            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    {{$subTopic['title']}}
                </h1>
                <p class="text-3xl text-gray-200 font-bold mt-36 mx-4">
                    {{$subTopic['subTitle']}}
                </p>                
                {{-- <div>
                    <a
                        href="register.html"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up to List a Gig</a
                    >
                </div> --}}
            </div>
        </section>