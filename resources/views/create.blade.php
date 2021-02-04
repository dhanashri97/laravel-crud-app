@extends('layout')

@section('content')

<style>
    .container {
      margin-top: 50px;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" action="{{ route('students.store') }}">
                    @csrf
                    <div class="card">
                        <h5 class="card-header">Add User</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password"/>
                            </div>
                          </form>
                          <button type="submit" class="btn btn-block btn-success">Create User</button>
                        </div>
                    </div>
                  </form>
            </div>
            <div class="col-md-3"></div>
        </div>
  </div>
