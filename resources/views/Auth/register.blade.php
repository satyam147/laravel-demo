@extends('base')

@section('title','Registration')

@section('header')
    <link rel="stylesheet" href="{{ mix('css/toastr.css') }}">
@endsection


@section('body')
    <section class="row justify-content-center align-items-center h-100 mr-0" id="registration">
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center h1 bg-info text-white">
                    Registration
                </div>
                <div class="card-body">
                    <form @submit.prevent="register">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" id="username" v-model="username"
                                   ref="username"
                                   placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"
                                   class="form-control" name="password" id="password" v-model="password" ref="password"
                                   placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-primary" ref="submit">
                                <a href="#" class="float-right">Login?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ mix('js/auth/register.js') }}"></script>
@endsection