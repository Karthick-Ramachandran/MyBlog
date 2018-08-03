@extends('layouts.app')


@section('content')
<div class="panel panel-primary">
    <div class="panel-body">
            <table class="table stripped table-hover">
                    <thead>
                        <th>
                            Category name
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                    </thead>
                    <tbody>
                       
                            @foreach ($categories as $category )
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                        <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                            </tr>
                                
                            @endforeach
                        
                    </tbody>
                </table>
    </div>
</div>

@stop