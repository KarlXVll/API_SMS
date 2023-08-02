@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Senders') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('ID') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($senders as $sender)
                                <tr>
                                    <td>{{ $sender->id }}</td>
                                    <td>{{ $sender->name }}</td>
                                    <td>{{ $sender->email }}</td>
                                    <td>
                                        <a href="{{ route('senders.show', $sender->id) }}" class="btn btn-primary">{{ __('View') }}</a>
                                        <a href="{{ route('senders.edit', $sender->id) }}" class="btn btn-secondary">{{ __('Edit') }}</a>
                                        <form action="{{ route('senders.destroy', $sender->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $senders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
