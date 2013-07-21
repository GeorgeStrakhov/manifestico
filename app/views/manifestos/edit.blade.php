@extends('layouts.scaffold')

@section('main')

<h1>Edit Manifesto</h1>
{{ Form::model($manifesto, array('method' => 'PATCH', 'route' => array('manifestos.update', $manifesto->id))) }}
    <ul>
        <li>
            {{ Form::label('text', 'Text:') }}
            {{ Form::textarea('text') }}
        </li>

        <li>
            {{ Form::label('signature', 'Signature:') }}
            {{ Form::text('signature') }}
        </li>

        <li>
            {{ Form::label('theme', 'Theme:') }}
            {{ Form::text('theme') }}
        </li>

        <li>
            {{ Form::label('custom_css', 'Custom_css:') }}
            {{ Form::textarea('custom_css') }}
        </li>

        <li>
            {{ Form::label('custom_artwork', 'Custom_artwork:') }}
            {{ Form::text('custom_artwork') }}
        </li>

        <li>
            {{ Form::label('link', 'Link:') }}
            {{ Form::text('link') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('secret', 'Secret:') }}
            {{ Form::text('secret') }}
        </li>

        <li>
            {{ Form::label('views', 'Views:') }}
            {{ Form::text('views') }}
        </li>

        <li>
            {{ Form::label('stars', 'Stars:') }}
            {{ Form::input('number', 'stars') }}
        </li>

        <li>
            {{ Form::label('pic_url', 'Pic_url:') }}
            {{ Form::text('pic_url') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('manifestos.show', 'Cancel', $manifesto->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop