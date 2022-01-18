@extends('layouts.app-master')
@section('content')
<style>
   
</style>
    <div class="p-1 rounded">

        @guest

        <h1>New News {{isset($news['totalArticles']) ? $news['totalArticles'] : 0}}</h1>
        

        @endguest
        
    </div>
    <div class="row">

        @if (isset($news['articles']))

        @foreach ($news['articles'] as $key => $val)
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-4">
                    <img src="{{$val['image']}}" style="object-fit:cover;" alt="element 01" class="h-100 w-100 rounded-left">
                    </div>
                    <div class="col-md-12 col-lg-8">
                    <div class="card-header">
                        <h4 class="card-title">{{$val['title']}}</h4>
                        </div>
                    <div class="card-body">
                        <p class="card-text text-ellipsis">
                            {{$val['description']}}
                        </p>
                        <a href="{{$val['url']}}" target="blank" class="btn btn-outline-primary">Go somewhere</a>
                        
                        <p class="mt-1">
                        <strong class="mt-1">{{date("d, M Y", strtotime($val['publishedAt']))}}</strong> - <strong class="text-primary">{{$val['source']['name']}}</strong>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        @else
        <h3>   <strong class="text-danger"> {{isset($news['errors']) ? $news['errors'][0] : "You got any server side error, please update your api key."}} </strong></h3>
        @endif
    </div>
@endsection
