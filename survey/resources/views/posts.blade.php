<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $Post)
        
    

    <article class="py-6 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{$Post['slug']}}" class="hover:underline">
            <h2 class="mb-2 text-3xl tracking-wide">{{ $Post['title']}}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href ="/authors/{{$Post->author->id}}" class="hover:underline">{{$Post->author->name}}</a> | {{$Post -> created_at -> format ('j F y')}} 
        </div>
        <P class="my-5 font-light">
            {{ Str::limit($Post ['body'], 50)}}
        </P>
        <a href="/posts/{{$Post['slug']}}" class="font-medium text-blue-600 hover:underline">&laquo;Read More </a>
        
    </article>
    
    @endforeach

</x-layout>

