<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles --> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
       
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg')}}" alt="logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                <div class=" px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/0000000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto flex" style="max-width:1000px">
            <div class="w-70 mr-5">

                Add idea form goes here. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, aut commodi cum odit officia error quas eum. Expedita a tenetur dolore nemo animi! Asperiores nobis amet ipsa deleniti eveniet, doloremque corporis odit veritatis illum, libero accusantium qui, fugiat nulla perferendis.
            </div>
            <div class="w-175">
                {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, excepturi quaerat. Ipsam quidem obcaecati repellendus quia accusantium? Provident saepe quo temporibus aperiam nobis, ea sint quaerat est voluptatum obcaecati doloribus dicta molestias nesciunt illo ut voluptas. Autem maiores unde, ut doloribus dolorum reprehenderit dolorem doloremque atque non! Excepturi veritatis deserunt voluptatibus voluptate nisi aliquam reprehenderit mollitia saepe doloribus, eius explicabo, nam perspiciatis cumque numquam consectetur, facilis quis porro id dolorum iure commodi accusamus. Vitae culpa labore ullam officia ipsa voluptates voluptas nostrum quos unde rerum veritatis cum debitis dolorum accusamus tempore aut velit explicabo illum consequatur reprehenderit, beatae ad modi autem? Laborum nemo laudantium soluta quod ducimus praesentium quo corrupti sed modi quidem nihil, ipsa provident quia impedit fugit distinctio accusamus est eos omnis nam minus! Perferendis obcaecati aperiam illo laudantium eius quo perspiciatis, similique aut suscipit aliquid cumque voluptatem, nam exercitationem maiores inventore quod nobis optio temporibus qui explicabo. Sunt atque nam nulla provident perferendis, incidunt voluptate. Sit, reiciendis possimus! Rerum similique, eligendi provident impedit facilis ducimus sequi delectus iusto? Culpa, animi ad minus, quod totam consequatur sequi, possimus eaque doloremque laudantium fugiat cupiditate ratione nisi ullam ea earum repellendus error qui accusamus in expedita est adipisci laboriosam. Assumenda? --}}
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li> <a href="#" class="border-b-4 pb-3 border-blue">All ideas (87)</a></li>
                        <li> <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering(5)</a></li>
                        <li> <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress(1)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li> <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented(10)</a></li>
                        <li> <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(8)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>