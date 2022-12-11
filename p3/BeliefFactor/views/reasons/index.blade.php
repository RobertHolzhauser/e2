@extends('templates/master')

@section('title')
    All Reasons
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Reasons</h2>
    <div class="container">
        <div id="reason-index">
            <table class="table table-striped table-secondary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Goal or Action</th>
                        <th scope="col">Rank Type</th>
                        <th scope="col">Perspective</th>
                        <th scope="col">Because</th>
                        <th scope="col">Therefore</th>
                        <th scope="col">After</th>
                        <th scope="col">While</th>
                        <th scope="col">Whenever</th>
                        <th scope="col">So That</th>
                        <th scope="col">If</th>
                        <th scope="col">Although</th>
                        <th scope="col">In The Same Way That</th>
                        <th scope="col">Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reasons as $reason)
                        <tr>
                            <th scope="row"><a class="reason-link"
                                    href='/reason?id={{ $reason['reasons_id'] }}'>{{ $reason['reasons_id'] }}</a></th>
                            <td>
                                @if (empty($reason['action_id']))
                                    <a test='goal-link' class="goal-link"
                                        href="/goal?id={{ $reason['goal_id'] }}">{{ $reason['goal_name'] }} </a>
                                @else
                                    <a class='action-link' test='action-link'
                                        href="/action?id={{ $reason['action_id'] }}">{{ $reason['action_name'] }}</a>
                                @endif
                            </td>
                            <td>{{ ucfirst($reason['rank_type']) }}</td>
                            <td>{{ $reason['perspective'] }}</td>
                            <td>{{ $reason['because'] }}</td>
                            <td>{{ $reason['therefore'] }}</td>
                            <td>{{ $reason['after_'] }}</td>
                            <td>{{ $reason['while_'] }}</td>
                            <td>{{ $reason['whenever'] }}</td>
                            <td>{{ $reason['so_that'] }}</td>
                            <td>{{ $reason['if_'] }}</td>
                            <td>{{ $reason['although'] }}</td>
                            <td>{{ $reason['in_the_same_way_that'] }}</td>
                            <td>
                                <a class="bi bi-clipboard" href="/reasons/edit/"></a>
                                <a class="bi bi-trash" href="/reasons/delete/"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
