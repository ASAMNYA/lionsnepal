@foreach($members as $member)
    <li>
        @if(!empty($member->image))
            <img src="{{url('public/uploads', $member->image)}}"
                 alt="image" width="100"
                 height="80">
            <a href="{{url('clubmember/detail/'.$member->id)}}" target="_blank">{!! $member->title !!}</a>
            <br>
            {{$member->position}}
        @endif

        @if ($member->children)
            <ul>
                @include('frontend.humanity.chart-partials', ['members' => $member->children])
            </ul>
        @endif
    </li>
@endforeach