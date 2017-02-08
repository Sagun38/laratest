@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Livre D'Or</h1>
                    <p>Merci de laisser un petit message sur notre livre d'or pour améliorer la qualité de notre service</p>
                </div>
                <div class="panel-body">
                  {{ Form::open(['url' => 'livredor/new']) }}
                  {{ Form::label('Nom :')}}
                  <br>
                  {{ Form::text('name')}}
                  <br>
                  {{ Form::label('Message :')}}
                  <br>
                  {{ Form::textarea('content') }}
                  <br>
                  {{Form::submit('Valider')}}
                  {{ Form::close() }}
                  </div>
                  <br>
                  <table id="livredor">
                  <ul>
                  @foreach ($guestbooks as $guestbook)
                      <li>{{$guestbook->name}} : {{$guestbook->content}}</li>
                  @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
