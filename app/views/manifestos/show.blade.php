@extends('layouts.scaffold')

@section('main')

<h1>Show Manifesto</h1>

<p>{{ link_to_route('manifestos.index', 'Return to all manifestos') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Text</th>
				<th>Signature</th>
				<th>Theme</th>
				<th>Custom_css</th>
				<th>Custom_artwork</th>
				<th>Link</th>
				<th>Email</th>
				<th>Secret</th>
				<th>Views</th>
				<th>Stars</th>
				<th>Pic_url</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $manifesto->text }}}</td>
					<td>{{{ $manifesto->signature }}}</td>
					<td>{{{ $manifesto->theme }}}</td>
					<td>{{{ $manifesto->custom_css }}}</td>
					<td>{{{ $manifesto->custom_artwork }}}</td>
					<td>{{{ $manifesto->link }}}</td>
					<td>{{{ $manifesto->email }}}</td>
					<td>{{{ $manifesto->secret }}}</td>
					<td>{{{ $manifesto->views }}}</td>
					<td>{{{ $manifesto->stars }}}</td>
					<td>{{{ $manifesto->pic_url }}}</td>
                    <td>{{ link_to_route('manifestos.edit', 'Edit', array($manifesto->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('manifestos.destroy', $manifesto->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop