@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Services</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Big Image</th>
                    <th scope="col">Small Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Client</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{$portfolio->id}}</th>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->sub_title}}</td>
                                <td>{{Str::limit(strip_tags($portfolio->description),40)}}</td>
                                <td>
                                    <img style="height: 10vh" src="{{url($portfolio->big_image)}}" alt="big_image">
                                </td>
                                <td>
                                    <img style="height: 10vh" src="{{url($portfolio->small_image)}}" alt="big_image">
                                </td>
                                <td>{{$portfolio->client}}</td>
                                <td>{{$portfolio->category}}</td>
                                <td>
                                    <div class="row">
                                        <div>
                                            <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary m-2">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{route('admin.portfolios.destroy', $portfolio->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @endif
                  
                </tbody>
              </table>
    </main>
@endsection
                
                