<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Burger House | Laravel Project</title>
		<!-------------------- style.css linking here -------------------->
		<link rel="stylesheet" href="css/style.css">
		<!-------------------- responsive.css linking here -------------------->
		<link rel="stylesheet" href="css/responsive.css">
		<!-------------------- bootstrap.min.css linking here ------------------>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<!------------ owlcarousel css linking here ------------>
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-------------------- fonts.google linking here -------------------->
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&display=swap" rel="stylesheet">
		<!----------- font-awesome.css linking here ------------------>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	</head>
	<!------------------------- header section start ------------------->
<body>
    @include('Layout.header')
        @yield('content')
    @include('Layout.footer')


	<!-------------- bootstrap.bundle.min.js linking here --------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
        0:{
        items:1
        },
        600:{
        items:1
        },
        1000:{
        items:1
        }
        }
        })
    </script>
</body>
</html>








