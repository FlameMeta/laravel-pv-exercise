<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

 @foreach ($posts as $post)
     
  <article class="py-8 max-w-creen-md border-b border-grey-200">
    <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-800">{{ $post['title'] }}</h2>
    <div>
      <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 90) }}</p>
      <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>

@endforeach
</x-layout>