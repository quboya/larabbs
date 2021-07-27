<!DOCTYPE html>
<html>
<head>
  <title> @yield('content')- Laravel 新手入门教程</title>
</head>
<body>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <div class="flash-message">
      <p class="alert alert-{{ $msg }}">
        {{ session()->get($msg) }}
        session()->flash('success', 'This is a success alert—check it out!');
        session()->flash('danger', 'This is a danger alert—check it out!');
        session()->flash('warning', 'This is a warning alert—check it out!');
        session()->flash('info', 'This is a info alert—check it out!');
      </p>
    </div>
  @endif
@endforeach
</body>
</html>
