@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('send.feedback') }}">
                        @csrf
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="message">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
