<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-6 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-wide font-bold text-gray-900">{{ $Post['title'] }}</h2>
        <div>
        by
            <a href ="/authors/{{$Post->author->username}}" class="hover:underline, text-base text-gray-500">{{$Post->author->name}}</a> | {{$Post -> created_at -> format ('j F y')}} 
        in 
            <a href="/categories/{{$Post->Category->slug}}" class="hover:underline text-base text-gray-500  ">{{$Post->Category->name}}</a>
         
        </div>
        <P class="my-5 font-light">
            {{$Post ['body']}}
        </P>
        <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo;Back to Posts</a>
        
    </article>
    
    

</x-layout>