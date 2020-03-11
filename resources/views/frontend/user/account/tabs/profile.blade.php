<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.frontend.user.profile.avatar') }}</th>
        <td><img src="{{ url('public/uploads/profile/',$data->image)}} " height="200" width="200" class="user-profile-image" /></td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.name') }}</th>
        <td>{{ $data->first_name." ".$data->last_name}}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.email') }}</th>
        <td>{{ Auth::User()->email }}</td>
    </tr>
    <tr>
        <th>Phone No</th>
        <td>{{ $data->phone_no}}</td>
    </tr>
    <tr>
        <th>Quotes</th>
        <td>{{ $data->quotes}}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.created_at') }}</th>
        <td>{{ Auth::User()->created_at }} ({{ Auth::User()->created_at->diffForHumans() }})</td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.last_updated') }}</th>
        <td>{{ $logged_in_user->updated_at }} ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
    </tr>
</table>