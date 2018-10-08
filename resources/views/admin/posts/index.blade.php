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
                            Title
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                               
                            Delete
                            
                        </th>
                    </thead>
                    <tbody>
                       @foreach ($posts as $post )
                           <tr>
                               
                               <td><img src="{{ $post->image }}" alt="{{ $post->title }}" width="120px" height="70px" ></td>
                               <td>{{ $post->title }}</td>
                               <td> <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary"> Edit </a> </td>
                               <td> <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger"> Trash </a> </td>


                           </tr>
                       @endforeach
                    </tbody>
                </table>
    </div>
</div>

@stop