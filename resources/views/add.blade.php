@extends('pages.main')

@section('main-section')
    <style>
        input {
            width: 100%;
        }

        .form-box {
            justify-content: center;
            align-content: center;
            align-items: center;
            display: flex;
            width: 100%;
        }

        .form {
            box-shadow: 0px 5px 5px #bbb, 0px -5px 5px #bbb;
            padding: 30px;
            display: inline-block;
            width: 600px;
        }

        select {
            width: 100% !important;
            display: inline-block;
        }
    </style>
    <div class="form-box p-4">



        <form action="{{ url('/') }}/insert" method="post" class="form">
            @csrf
            <div>
                <h1 class="text-center">CREATE NEW USER</h1>
            </div>

            <div class="form-group">
                <label for="">username</label>
                <input type="text" class="form-control" name="name" placeholder="please enter your name">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" name="email" placeholder="please enter your email">
            </div>
            <div class="form-group">
                <label for="">phone</label>
                <input type="phone" class="form-control" name="phone" placeholder="please enter your phone">
            </div>
            <label for="">address</label>
            <div class="form-group">
                <textarea style="resize: none;" name="address" id="address" cols="70" rows="5"
                    placeholder="please enter your address"></textarea>
            </div>
            <div class="form-group">
                <label for="city">select city</label>
                <select class="form-control" name="city" id="city">
                    <option value="0">Dhaka</option>
                    <option value="1">Mymansingh</option>
                    <option value="3">Cattogram</option>
                    <option value="4">Cox'z Banzar</option>
                    <option value="5">Bandarban</option>
                    <option value="6">Seilete</option>
                    <option value="6">Gorakpur</option>
                    <option value="6">Rajesthan</option>
                    <option value="6">Delhi</option>
                    <option value="6">mumbai</option>
                    <option value="6">Jodpur</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">select state</label>
                <select class="form-control" name="state" id="state">
                    <option value="0">Bangladesh</option>
                    <option value="1">India</option>
                    <option value="3">Dubai</option>
                    <option value="4">Malaysia</option>
                    <option value="5">Japan</option>
                    <option value="6">China</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">select status</label>
                <select class="form-control" name="status" id="status">
                    <option value="0">InActive</option>
                    <option value="1">Active</option>
                </select>
            </div>

            <div class="form-group">
                <label for="state">select your gender</label>
                <select class="form-control" name="gender" id="state">

                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="0">Custom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date time"></label>
                <input type="datetime-local" name="date" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>
@endsection
