@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Category table</h6>
                        <a class="badge badge-sm bg-gradient-success" href="{{route('category.create')}}">Create category</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated at</th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <h4 class="mb-0 text-sm">{{$category->id}}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$category->name}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$category->created_at}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$category->updated_at}}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('category.show', $category->id)}}" class="badge badge-sm bg-gradient-success text-xs" data-toggle="tooltip" data-original-title="Show category">
                                                Show
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('category.edit', $category->id)}}" class="badge badge-sm bg-gradient-success text-xs" data-toggle="tooltip" data-original-title="Edit category">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{route('category.destroy', $category->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="deletebtn" value="Delete" class="badge-sm bg-gradient-success text-xs" style="border-radius: 0.45rem; color: #fff; display: inline-block; font-size: .75em; font-weight: 700; line-height: 1; padding: 0.55em 0.9em; text-align: center; vertical-align: baseline; white-space: nowrap; border: 0; text-transform: uppercase;">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection