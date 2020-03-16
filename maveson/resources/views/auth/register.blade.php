@extends('layouts.app')

@section('content')
<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow"
                                width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item"><a href="#">Breadcrumb</a> <svg class="breadcrumb-arrow"
                                width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Register</h3>
                        <form>
                            <div class="form-group"><label>Email address</label> <input type="email"
                                    class="form-control" placeholder="Enter email"></div>
                            <div class="form-group"><label>Password</label> <input type="password"
                                    class="form-control" placeholder="Password"></div>
                            <div class="form-group"><label>Repeat Password</label> <input type="password"
                                    class="form-control" placeholder="Password"></div><button type="submit"
                                class="btn btn-primary mt-4">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site__body / end -->
@endsection
