<!DOCTYPE html>
<html lang="en">

<head>
 {{--Incldue All meta link --}}
 @include('admin.layout.partials.meta')

  {{-- extends all title --}}
  <title> @yield('title') | Multiple Role Permission</title>

  {{-- Incldue all style css --}}
  @include('admin.layout.partials.style')

</head>

<body>
	<div class="wrapper">

    {{-- left-sidebar Section include --}}
    @include('admin.layout.partials.left-sidebar')

		<div class="main">
      {{-- Nav section include --}}
      @include('admin.layout.partials.nav')

      {{-- extends all content --}}
      @yield('content')

      {{-- Footer section include --}}
      @include('admin.layout.partials.footer')
		</div>
	</div>
  {{-- JavaScript section include --}}
  @include('admin.layout.partials.script')

</body>

</html>