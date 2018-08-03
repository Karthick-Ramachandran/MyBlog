@extends('layouts.app')


@section('content')
<a href="{{ route('tag.create') }}" class="btn btn-primary" style="float:right">Create tag</a>

<div class="panel panel-primary" style="margin-top:50px;">
    <div class="panel-body">
            <table class="table stripped table-hover">
                    <thead>
                        <th>
                            Tag name
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                    </thead>
                    <tbody>
                       
                            @foreach ($tags as $tag )
                            <tr>
                                <td>{{ $tag->tag }}</td>
                                <td>
                                    <a href="{{ route('tag.edit',['id'=>$tag->id]) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                        <a href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                            </tr>
                                
                            @endforeach
                        
                    </tbody>
                </table>
    </div>
</div>

@stop