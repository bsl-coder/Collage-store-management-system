@extends('store.index')
@section('main')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12 mt-5">
                <div style="display: none" class="card" id="form">
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
                        <h4 class="bg-info" style="width: 100%;text-align: center;color:azure">Add Other Componemt Data</h4>
                        <form action="{{route('othercm2.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                @if($errors->has('name'))
                            <div class="alert alert-danger">{{$errors->first('name')}}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product id</label>
                                <input type="text" class="form-control"  name="product_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                @if($errors->has('product_id'))
                            <div class="alert alert-danger">{{$errors->first('product_id')}}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <select name="options" class="form-select" aria-label="Default select example">
                                    <option selected>Place Select Condition</option>
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
                                <input type="text" name="model" class="form-control">
                            </div>
                            @if($errors->has('model'))
                            <div class="alert alert-danger">{{$errors->first('model')}}</div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">Details</label>
                                <input type="text" name="details" class="form-control">
                            </div>
                            @if($errors->has('details'))
                            <div class="alert alert-danger">{{$errors->first('details')}}</div>
                            @endif
                           <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                           <a href="{{route('othercm2')}}"><button type="button" id="hide" class="btn btn-danger mt-4 pr-4 pl-4">Cancel</button></a>
                       </form>
                    </div>
                </div>

                    <div class="card-body" id="table">
                        <h2 class="bg-primary" style="width: 100%;text-align: center;color:azure">Lab 2 Other Componemts Information</h2>
                        <button id="show" class="btn btn-primary ml-5 mt-4 pr-4 pl-4 mb-3">Add</button>
                        <div class="data-tables" >
                            <table id="dataTable" class="table  datanew ">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>SI NO</th>
                                        <th>ID NO</th>
                                        <th>Name</th>
                                        <th>Product id</th>
                                        <th>Condition</th>
                                        <th>Model</th>
                                        <th>Details</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($othercm as $key=>$value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->product_id}}</td>
                                        <td>@if($value['options']=='Active')
                                            <span style="color: green">{{$value->options}}</span>
                                        @endif
                                        @if($value['options']=='Repairable')
                                            <span style="color: yellow">{{$value->options}}</span>
                                        @endif
                                        @if($value['options']=='Damaged')
                                            <span style="color: red">{{$value->options}}</span>
                                        @endif</td>
                                        <td>{{$value->model}}</td>
                                        <td>{{$value->details}}</td>
                                        <td><a href="{{route('othercm2.update',$value->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="" class="text-danger"></a>
                                            <form action="{{route('othercm2.delete',$value->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"><i class="ti-trash">Delete</i></button>
                                            </form></td>
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

@push('jq')
    <script>
        $(document).ready(function(){
                $('#show').click(function(){
                    $('#form').show();
                    $('#show').hide();
                    $('#table').hide();
                });
                $('#hide').click(function(){
                    $('#form').hide();
                    $('#show').show();
                    $('#table').show();
                });
            });

       </script>
@endpush
@endsection
