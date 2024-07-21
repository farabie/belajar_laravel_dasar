<x-app-layout>
    <h1>Tasks Page</h1>


    <ol>
        @foreach($tasks as $task)
            <li>{{ $task->list }}</li>
        @endforeach
    </ol>
</x-app-layout>
