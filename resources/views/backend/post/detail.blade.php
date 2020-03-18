@extends('backend.layouts.general')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    {{$post->title}}
                    <div class="float-right">
                        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <ul class="list-group">
                        @foreach ($category['parentOf'] as $key => $value)
                            <li class="list-group-item">
                                <a href="{{route('admin.categories.detail' , $value->slug )}}">{{$value->name}} {{$value->id}}</a>
                            </li>
                        @endforeach
                    </ul> --}}
                {!! $post->content !!}
                </div>
            </div>




        </div>
    </div>
@endsection
