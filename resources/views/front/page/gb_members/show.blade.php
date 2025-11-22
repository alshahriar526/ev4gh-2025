<h2>{{ $member->full_name }}</h2>

<p><strong>Email:</strong> {{ $member->email }}</p>
<p><strong>Role:</strong> {{ $member->role_ev_gb }}</p>
<p><strong>Designation:</strong> {{ $member->designatation_org }}</p>
<p><strong>Bio:</strong> {{ $member->short_bio }}</p>

@if($member->photo)
    <img src="/storage/photos/{{ $member->photo }}" width="120">
@endif
