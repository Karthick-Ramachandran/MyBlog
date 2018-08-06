@extends('layouts.app')


@section('content')
<div class="panel panel-primary">
    <div class="panel-body">
            <table class="table stripped table-hover">
                    <thead>
                        <th>
User name                        </th>
                        <th>
                            image
                        </th>
                        <th>
                            Permission
                        </th>
                       
                                
                    </thead>
                    <tbody>
                            
                       {{-- @foreach ($users as $user )
                     
                           <tr>
                                <td>{{ $user->name }}</td>

                               <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="120px" height="70px" ></td>


                               @if($user->email !== 'blog@blog.com' )

                               @if($user->admin  )
                               <td><a href="{{ route('admin.make', ['id' => $user->id]) }}" class="btn btn-primary">Remove from admin</a></td>
                               <td><a href="{{ route('admin.del', ['id' => $user->id]) }}" class="btn btn-danger">Delete admin</a></td>
                               <td>   Site admins  </td>


                                   @else
                                  
                                   <td><a href="{{ route('user.make', ['id' => $user->id]) }}" class="btn btn-primary">Make admin</a></td>
                                   <td><a href="{{ route('user.remove',  ['id' => $user->id]) }}" class="btn btn-danger">Delete User</a></td>
                                   <td>   custom user  </td>
                                 
                                   @endif
                                   @else
                                   <td>   Admin (main)  </td>
                                   <td>  Not Possible  </td>

                                   <td>  Main Admin  </td>



                                   @endif

                              
                               
                               

                           </tr>
                           
                       @endforeach --}}

                       @foreach($users as $user)
                      <h1>$user->name</h1> 
@endforeach
                          
                    </tbody>
                </table>
    </div>
</div>

@stop