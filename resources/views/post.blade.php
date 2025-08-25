<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="py-8 max-w-creen-md border-b">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-800">{{ $post['title'] }}</h2>
    <div>
      <a href="#">{{ $post['author'] }}</a> | 20 agustus 2030
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
      <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Read more;</a>
  </article>

</x-layout>