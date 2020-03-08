@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Notification</div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($notifications as $notification)
            <li class="list-group-item">
                @if ($notification->type == 'LaravelForum\Notifications\NewReplyAdded')
                    A New reply was added to your discussion.
                    <strong>
                        {{ $notification->data['discussion']['title']}}
                    </strong>  
                    <a href="{{ route('discussions.show', $notification->data['discussion']['slug'])}}" class="float-right btn btn-sm btn-info">View Discussion</a>
                @endif
                @if ($notification->type == 'LaravelForum\Notifications\ReplyMarkedAsBestReply')
                    Your reply to the discussion 
                    <strong>
                        {{ $notification->data['discussion']['title'] }}
                    </strong> 
                    was marked as best reply.
                    <a href="{{ route('discussions.show', $notification->data['discussion']['slug'])}}" class="float-right btn btn-sm btn-info">View Discussion</a>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
