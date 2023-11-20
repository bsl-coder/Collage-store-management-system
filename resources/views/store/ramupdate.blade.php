@extends('store.index')
@section('main')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card" id="form">
                    <div class="card-body" id="form">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h4 class="bg-success" style="width: 100%;text-align: center;color:azure">Update RAM Data</h4>
                        <form action="{{route('ram.edit',$ram->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$ram->name}}">
                                @if($errors->has('name'))
                            <div class="alert alert-danger">{{$errors->first('name')}}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">RAM id</label>
                                <input type="text" class="form-control"  name="ram_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$ram->ram_id}}">
                                @if($errors->has('ram_id'))
                            <div class="alert alert-danger">{{$errors->first('ram_id')}}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <select name="options" class="form-select" aria-label="Default select example">
                                    <option selected>{{$ram->options}}</option>
                                    <option>Active</option>
                                    <option>Repairable</option>
                                    <option>Damaged</option>
                                  </select>
                                @if($errors->has('options'))
                            <div class="alert alert-danger">{{$errors->first('options')}}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Model</label>
                                <input type="text" name="model" class="form-control" value="{{$ram->model}}">
                            </div>
                            @if($errors->has('model'))
                            <div class="alert alert-danger">{{$errors->first('model')}}</div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">DDR</label>
                                <input type="text" name="ddr" class="form-control" value="{{$ram->ddr}}">
                            </div>
                            @if($errors->has('ddr'))
                            <div class="alert alert-danger">{{$errors->first('ddr')}}</div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">RAM Bus</label>
                                <input type="text" name="rambus" class="form-control" value="{{$ram->rambus}}">
                            </div>
                            @if($errors->has('rambus'))
                            <div class="alert alert-danger">{{$errors->first('rambus')}}</div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">Details</label>
                                <input type="text" name="details" class="form-control" value="{{$ram->details}}">
                            </div>
                            @if($errors->has('details'))
                            <div class="alert alert-danger">{{$errors->first('details')}}</div>
                            @endif
                           <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                           <a href="{{route('ram')}}"><button type="button" id="hide" class="btn btn-danger mt-4 pr-4 pl-4">Cancel</button></a>
                       </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div> 
@endsection