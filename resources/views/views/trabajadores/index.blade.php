@extends('layouts.blog')


@section('title', 'todos los usuarios')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script>
        
        $(document).ready(function() {                

            let url = 'http://localhost:8000/api/trabajadores';
            let token = JSON.parse(sessionStorage.getItem('access_token'));

            let h = new Headers();
            h.append('Authorization', `Bearer ${token}`);

            let req = new Request(url, {
                method: 'GET',
                mode: 'cors',
                headers: h
            });
            fetch(req)
                .then(resp => resp.json())
                .then(data => {
                    console.log(data);
                })
                .catch(err => {
                    console.error(err.message);
                })
        })
  
        
   </script>



