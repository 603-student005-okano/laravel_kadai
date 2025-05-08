<br>
@foreach($messages as $message)
{{ $message->user->name }} : {{ $message->created_at }}<br>
{!! nl2br(e($message->content)) !!}<br>
@if (Auth::user()->name == $message->user->name)
    -- <a href="{{ route('messages.edit', $message->id) }}">編集</a><br>
@endif
<hr>
@endforeach
{{ $messages->links() }}