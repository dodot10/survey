<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
 
        
    {{-- <article class="py-6 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-wide font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
        by
            <a href ="/authors/{{$post->author->username}}" class="hover:underline, text-base text-gray-500">{{$post->author->name}}</a> | {{$post -> created_at -> format ('j F y')}} 
        in 
            <a href="/categories/{{$post->Category->slug}}" class="hover:underline text-base text-gray-500  ">{{$post->Category->name}}</a>
         
        </div>
        <P class="my-5 font-light">
            {{$post ['body']}}
        </P>
        <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo;Back to Posts</a>
        
    </article> --}}

 

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline"> &laquo; back to all post</a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="/authors/{{$Post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$Post->author->name}}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-2">{{ $Post->created_at->diffForHumans() }}</p>
                            <a href="/categories/{{$Post->category->slug}}">
                                <span
                                    class="bg-{{ optional($Post->category)->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $Post->category->name }} 
                                </span>
                            </a>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$Post->title}}</h1>
            </header>
            <p>{{$Post->body}}</p>
        </article>
    </div>
</main>

 
    

</x-layout>