<!DOCTYPE html>
<html lang="en">
<head>
    @include('/backend/master/layouts/head')
</head>
<body>

    @include('/backend/master/layouts/header')
    @include('/backend/master/layouts/sidebar')
	@yield('main')

</body>
</html>