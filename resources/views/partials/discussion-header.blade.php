<div class="card-header">
    <img src="{{ Gravatar::src($discussion->user->email) }}" class="rounded-circle" width="40px" height="40px" alt="">
    <strong class="ml-2">{{ $discussion->user->name }}</strong>
    <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn btn-success btn-sm float-right">View</a>
</div>