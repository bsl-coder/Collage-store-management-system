@extends('store.index')
@section('main')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12 mt-5"> 
                    <div class="card-body" id="table">
                        <h2 class="bg-primary" style="width: 100%;text-align: center;color:azure">Lab 1 Casings Information</h2>
                        <button id="show" class="btn btn-primary ml-5 mt-4 pr-4 pl-4">Add</button>
                        <div class="data-tables" >
                            <table id="data" class="table  datanew ">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>SI NO</th>
                                        <th>ID NO</th>
                                        <th>Name</th>
                                        <th>Casing id</th>
                                        <th>Condition</th>
                                        <th>Model</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trashed as $key=>$value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->casing_id}}</td>
                                        <td>{{$value->options}}</td>
                                        <td>{{$value->model}}</td>
                                        <td>{{$value->details}}</td>
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

@endsection