<!DOCTYPE html>
<html lang='en'>
 <head>
  <title>Dashboard</title>
     <meta charset='utf-8'>
        <style>
        </style>
          <script>
          </script>
 </head>
 <body  bgcolor="Pink" >

   @session('key')
      <h2>{{ $value }}</h2>
   @endsession

   @session('key2')
      <h2>{{ $value }}</h2>
   @endsession

   @if(session('status'))
      {{ session('status') }}
   @endif 

    <h1>Hola Master</h1>

    @yield('content')

    <section>
       @yield('more content')
    </section>
    
 </body>
</html>