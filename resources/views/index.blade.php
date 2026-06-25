<x-layout>
<h3>Home page</h3>
</x-layout>

@foreach ($jobs as $job)
    <div>{{ $job['title'] }}: {{ $job['salary'] }}

    </div>

    @endforeach
