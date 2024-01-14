<x-main-layout>
    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Jurse 2025</h1>
            <div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://jurse2023.org/images/forth.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://jurse2023.org/images/rslab.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://jurse2023.org/images/ccbs.png" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($events as $event)
                    <div class="lg:flex bg-slate-100 rounded-md">
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                            src="{{ asset('/storage/' . $event->image) }}" alt="{{ $event->title }}">

                        <div class="flex flex-col justify-between py-6 lg:mx-6">
                            <a href="{{ route('eventShow', $event->id) }}"
                                class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                                {{ $event->title }}
                            </a>

                            <span
                                class="text-sm text-white dark:text-gray-300 bg-indigo-400 rounded-md p-2">{{ $event->country->name }}</span>
                            <span class="flex flex-wrap space-x-2">
                                @foreach ($event->tags as $tag)
                                    <p class="text-sm p-1 bg-slate-200 rounded-md">{{ $tag->name }}</p>
                                @endforeach
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <footer class="text-center text-lg-start bg-footer">
            <div class="container p-4">
                <section class="footer-text">
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-2">
                                <h4 class="white">Stay connected!</h4>
                            </div>
                            <a href="https://www.facebook.com/rslabgr/" target="_blank" class="social-icon inline-block si-dark si-small mb-0 pb-0 si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="https://twitter.com/JURSE2023/" target="_blank" class="social-icon inline-block si-dark si-small si-borderless mb-0 si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="https://www.youtube.com/playlist?list=PLyHJqeu2tpN5iLzj1HaVP9oCirvFoBN7r" target="_blank" class="social-icon inline-block si-dark si-small si-borderless mb-0 si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>

                        <hr class="w-100 clearfix d-md-none mt-3">

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-1">
                                <h4 class="white mb-0">Contact person</h4>
                            </div>
                            Nektarios Chrysoulakis<br>
                            zedd2@iacm.forth.gr<br>
                            +30 2810-391-762 <br>
                            +30 6932-929-775
                        </div>

                        <hr class="w-100 clearfix d-md-none mt-3">

                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                            <div class="mb-1">
                                <h4 class="white mb-0">Venue</h4>
                            </div>
                            Cultural Conference Center of Heraklion<br>
                            N. Plastira Avenue 49, Heraklion, 71201 Greece
                        </div>
                    </div>

                </section>
            </div>
            <div class="text-center p-3 footer-text" style="background-color: rgba(0, 0, 0, 0.2)">
                © Copyright <span id="year">2024</span>: Remote Sensing Laboratory, Foundation for Research and Technology - Hellas (FORTH)
            </div>

        </footer>
</x-main-layout>
