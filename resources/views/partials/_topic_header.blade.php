        <!-- Hero -->
        <section
            class="relative h-96 flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
@unless(empty($topic['mainImage']))
<div
class="absolute top-0 left-0 w-full h-full opacity-80 bg-no-repeat bg-center bg-tintPrimary bg-blend-multiply"
style="background-image: url('{{ asset("/assets/".$topic['mainImage']) }}')"
></div>
    {{-- <img src = "{{ asset("/assets/".$topic['mainImage']) }}" width="800" /> --}}
@else
<div
class="absolute top-0 left-0 w-full h-full opacity-80 bg-no-repeat bg-center bg-tintPrimary bg-blend-multiply"
style="background-image: url('{{ asset("/assets/".$topic['coverPhoto']) }}')"
></div>
    {{-- <img src = "{{ asset("/assets/".$topic['coverPhoto']) }}" width="800" /> --}}
@endunless        


            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,1)] mb-8">
                    {{$topic['title']}}
                </h1>
                <p class="text-3xl text-white font-semibold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,1)] mt-18 mx-4">
                    {{strip_tags($topic['introText'])}}
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