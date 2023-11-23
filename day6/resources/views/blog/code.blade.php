<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Welcome to Blog</h1>
    {{-- Menyra me php, pa blade --}}
    {{-- <h1>Welcome <?php echo $username ?></h1>  --}}
    
    {{-- Menyra me blade, te siguron qe scriptat i lexon si string --}}
    {{-- <h1>Welcome  {{ $username }}  </h1> --}}
    <hr>
    {{--Kushtet, if edhe elseif, Switch--}}
    @if(isset($username))
        <h1>Welcome {{$username }}</h1>
    @else
        <h1>Welcome Guest</h1>
    @endif

     @if(isset($username) && strstr($username, '4'))
        <h1>Welcome {{$username }}</h1>
    @elseif(strlen($username)>10)
        <h1>Welcome to long user</h1>
    @else
        <h1>Welcome Guest</h1>
    @endif


    {{-- Switch --}}
    @switch($age)
        @case(10)
            <p>Nen 18</p>
            @break
        @case(18)
            <p>18 vjeq</p>
            @break
        @default
            <p>Mbi 18 vjet</p>
    @endswitch
    <br>
    
    
    
    @for($x=0;$x<=10;$x++)
      <p>  {{$x }}</p>
    @endfor

    <br>
    {{-- {{$x = 0}} --}}
    @php 
        $x = 0
    @endphp
    <br>
    @while($x <= 10)
        {{ $x }}
        @php    
            $x++;
        @endphp
    @endwhile
    <br>
    {{-- Vazhdim --}}
    @php    
        echo implode(", ", $subject);
    @endphp

    <br>

    @foreach($subject as $x)
    {{ $x }},
    @endforeach
    <br>
    @forelse($subject as $sub)
        {{ $sub }},
    @empty
        <p>Eshte e zbazet</p>
    @endforelse

    @auth
        <p>I am authenticated
    @endauth

    @guest
        <p>I am not authenticated</p>
    @endguest

    {{-- Krijimi i nje direktive --}}
    @sayHello
        {{$username}}
     <br>  
    @sayHello
        {{$username}}

        <br>

    @toUpperCase(Arianit);

    
</body>
</html>