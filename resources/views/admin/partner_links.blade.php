@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Partner Links') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('ID') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('URL') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($partnerLinks as $partnerLink)
                                <tr>
                                    <td>{{ $partnerLink->id }}</td>
                                    <td>{{ $partnerLink->name }}</td>
                                    <td>{{ $partnerLink->url }}</td>
                                    <td>
                                        <a href="{{ route('partner_links.show', $partnerLink->id) }}" class="btn btn-primary">{{ __('View') }}</a>
                                        <a href="{{ route('partner_links.edit', $partnerLink->id) }}" class="btn btn-secondary">{{ __('Edit') }}</a>
                                        <form action="{{ route('partner_links.destroy', $partnerLink->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $partnerLinks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
