@extends('layout.layout')

@section('content')

        <div class="row">
            <div class="col-3">
             </div>
            <div class="col-6">
                @include('shared.submit-idea')
                <hr>
                @foreach($ideas as $idea)
                <div class="mt-3">
                   @include('shared.idea-card')
                </div>
                @endforeach
                {{ $ideas->links() }}
            </div>
            </div>   
        </div>
@endsection    
 