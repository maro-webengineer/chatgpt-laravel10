<h1>Tasks</h1>
<form action="/" method="post">
    @csrf
    <input type="text" name="title" placeholder="New Task">
    <button type="submit">Add</button>
</form>
<ul>
@foreach($tasks as $task)
    <li>
        {{ $task->title }}
        <form action="/{{ $task->id }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
</ul>