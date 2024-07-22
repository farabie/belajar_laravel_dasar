<x-app-layout>
    <h1>Tasks Page</h1>

    <form action="/tasks/{{ $task->id }}" method="post" style="margin-bottom: 15px">
        @method('put')
        @csrf
        <input type="text" name="list" placeholder="The name of list" value = {{ $task->list }}>
        <button type="submit">Edit</button>
    </form>

</x-app-layout>
