@extends('layouts.app')
@section('content')







    <div>
        <h2 class="text-md-center">Administratort</h2>
        <h3><a class="btn btn-success" href="/addUser"> Shto Perdoruesit</a></h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Email-i</th>
                <th scope="col">Edito</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($useradmin as $useradmin)
                <tr>

                    <th cope="row">{{$useradmin['name']}}</th>
                    <td>{{$useradmin['email']}}</td>

                    <td><a href="/edit/{{$useradmin['id']}}" class="btn btn-info">Edito</a></td>
                    <td><form action="/user/delete/{{$useradmin['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi</button>
                        </form></td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div>
            <h2 class="text-md-center mt-5">Perdoruesit e thjesht</h2>

        <table class="table mt-5">
            <thead>
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Email-i</th>
                <th scope="col">Edito</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>

                    <th cope="row">{{$user['name']}}</th>
                    <td>{{$user['email']}}</td>

                    <td><a href="/edit/{{$user['id']}}" class="btn btn-info">Edito</a></td>

                    <td>
                        <form action="/user/delete/{{$user['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi</button>
                        </form>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>



@endsection
