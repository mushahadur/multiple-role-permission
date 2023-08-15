<!DOCTYPE html>
<html lang="en">

<head>
 {{--Incldue All meta link --}}
 @include('backend.layout.partials.meta')

  {{-- extends all title --}}
  <title> @yield('title') | Multiple Role Permission</title>

  {{-- Incldue all style css --}}
  @include('backend.layout.partials.style')

</head>

<body>
	<div class="wrapper">

    {{-- left-sidebar Section include --}}
    @include('backend.layout.partials.left-sidebar')

		<div class="main">
      {{-- Nav section include --}}
      @include('backend.layout.partials.nav')

      {{-- extends all content --}}
      @yield('content')
- JavaScript section include --}}
  @include('backend.layout.partials.script')

</body>

</html>