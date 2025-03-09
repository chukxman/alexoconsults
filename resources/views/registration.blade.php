<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alexo Consult - Recruitment of Nurses and Tech experts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Nurses and Tech Experts Travel Consultants" name="keywords">
    <meta content="The best overseas job consultant for nurses and Tech experts" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/extra/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>No. 175 Wilhelmstraße, 44388 Dortmund, Germany</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+2348130350663</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@alexoconsults.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://x.com/alexoconsults"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://web.facebook.com/profile.php?id=61561232475483"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/alexoconsults/"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCD3PqkBBwU9h3cJvmQizGPg"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ url('/')}}" class="navbar-brand p-0">
                 <img class="logo" src="./img/alexblue.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/')}}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/about')}}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{ url('/testimonial')}}" class="nav-item nav-link">Testimonial</a>
                    <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                    <a href="{{ url('/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{ url('/registration')}}" class="btn btn-primary py-2 px-4 ms-3 active">Apply</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Apply</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Registration</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Registration Form</h5>
                <h1 class="mb-0">Registration form</h1>
            </div>

            <div class="row g-5">
                <div class="contact_from wow fadeIn" data-wow-delay="0.3s" style="position: relative">
                    <form name="application" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="First Name" name="firstname" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Last Name" name="lastname" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Other Names" name="othername" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" name="email" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Full Address" name="address" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Address Line 2" name="address2"style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control border-0 bg-light px-4" placeholder="Phone Number" name="phone" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control border-0 bg-light px-4" placeholder="Date of Birth" name="dob" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select bg-light border-0" name="gender" style="height: 55px;">
                                    <option selected>Select Sex</option required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" id="country" name="country" default="Select Country" required>
                                </select>                           
                            </div>
                            <div class="col-md-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" id="state" name="state" default="Select state" onchange="getCities()">
                                </select>                          
                            </div>
                            <div class="col-md-6">
                                <input type="text" list="lga" class="form-control border-0 bg-light px-4" placeholder="Local Government" name="lga" style="height: 55px;" required>
                                <datalist id="lga">
                                    <option value="Aba North">
                                    <option value="Aba South">
                                    <option value="Arochukwu">
                                    <option value="Bende">
                                    <option value="Ikwuano">
                                    <option value="Isiala Ngwa North">
                                    <option value="Isiala Ngwa South">
                                    <option value="Isiukwuato">
                                    <option value="Obi Ngwa">
                                    <option value="Ohafia">
                                    <option value="Osisioma Ngwa">
                                    <option value="Ugwunagbo">
                                    <option value="Ukwa East">
                                    <option value="Ukwa West">
                                    <option value="Umuahia North">
                                    <option value="Umuahia South">
                                    <option value="Umunneochi">
                                    <option value="Demsa">
                                    <option value="Fufore">
                                    <option value="Ganye">
                                    <option value="Girei">
                                    <option value="Gombi">
                                    <option value="Guyuk">
                                    <option value="Hong">
                                    <option value="Jada">
                                    <option value="Lamurde">
                                    <option value="Madagali">
                                    <option value="Maiha">
                                    <option value="Mayo-Belwa">
                                    <option value="Michika">
                                    <option value="Mubi North">
                                    <option value="Mubi South">
                                    <option value="Numan">
                                    <option value="Shelleng">
                                    <option value="Song">
                                    <option value="Toungo">
                                    <option value="Yola North">
                                    <option value="Yola South">
                                    <option value="Abak">
                                    <option value="Eastern Obolo">
                                    <option value="Eket">
                                    <option value="Esit Eket">
                                    <option value="Essien Udim">
                                    <option value="Etim Ekpo">
                                    <option value="Etinan">
                                    <option value="Ibeno">
                                    <option value="Ibesikpo Asutan">
                                    <option value="Ibiono-Ibom">
                                    <option value="Ika">
                                    <option value="Ikono">
                                    <option value="Ikot Abasi">
                                    <option value="Ikot Ekpene">
                                    <option value="Ini">
                                    <option value="Itu">
                                    <option value="Mbo">
                                    <option value="Mkpat-Enin">
                                    <option value="Nsit-Atai">
                                    <option value="Nsit-Ibom">
                                    <option value="Nsit-Ubium">
                                    <option value="Obot Akara">
                                    <option value="Okobo">
                                    <option value="Onna">
                                    <option value="Oron">
                                    <option value="Oruk Anam">
                                    <option value="Udung-Uko">
                                    <option value="Ukanafun">
                                    <option value="Uruan">
                                    <option value="Urue-Offong/Oruko">
                                    <option value="Uyo">
                                    <option value="Aguata">
                                    <option value="Anambra East">
                                    <option value="Anambra West">
                                    <option value="Anaocha">
                                    <option value="Awka North">
                                    <option value="Awka South">
                                    <option value="Ayamelum">
                                    <option value="Dunukofia">
                                    <option value="Ekwusigo">
                                    <option value="Idemili North">
                                    <option value="Idemili South">
                                    <option value="Ihiala">
                                    <option value="Njikoka">
                                    <option value="Nnewi North">
                                    <option value="Nnewi South">
                                    <option value="Ogbaru">
                                    <option value="Onitsha North">
                                    <option value="Onitsha South">
                                    <option value="Orumba North">
                                    <option value="Orumba South">
                                    <option value="Oyi">
                                    <option value="Alkaleri">
                                    <option value="Bauchi">
                                    <option value="Bogoro">
                                    <option value="Damban">
                                    <option value="Darazo">
                                    <option value="Dass">
                                    <option value="Gamawa">
                                    <option value="Ganjuwa">
                                    <option value="Giade">
                                    <option value="Itas/Gadau">
                                    <option value="Jama'are">
                                    <option value="Katagum">
                                    <option value="Kirfi">
                                    <option value="Misau">
                                    <option value="Ningi">
                                    <option value="Shira">
                                    <option value="Tafawa Balewa">
                                    <option value="Toro">
                                    <option value="Warji">
                                    <option value="Zaki">
                                    <option value="Brass">
                                    <option value="Ekeremor">
                                    <option value="Kolokuma/Opokuma">
                                    <option value="Nembe">
                                    <option value="Ogbia">
                                    <option value="Sagbama">
                                    <option value="Southern Ijaw">
                                    <option value="Yenagoa">
                                    <option value="Ado">
                                    <option value="Agatu">
                                    <option value="Apa">
                                    <option value="Buruku">
                                    <option value="Gboko">
                                    <option value="Guma">
                                    <option value="Gwer East">
                                    <option value="Gwer West">
                                    <option value="Katsina-Ala">
                                    <option value="Konshisha">
                                    <option value="Kwande">
                                    <option value="Logo">
                                    <option value="Makurdi">
                                    <option value="Obi">
                                    <option value="Ogbadibo">
                                    <option value="Ohimini">
                                    <option value="Oju">
                                    <option value="Okpokwu">
                                    <option value="Otukpo">
                                    <option value="Tarka">
                                    <option value="Ukum">
                                    <option value="Ushongo">
                                    <option value="Vandeikya">
                                    <option value="Abadam">
                                    <option value="Askira/Uba">
                                    <option value="Bama">
                                    <option value="Bayo">
                                    <option value="Biu">
                                    <option value="Chibok">
                                    <option value="Damboa">
                                    <option value="Dikwa">
                                    <option value="Gubio">
                                    <option value="Guzamala">
                                    <option value="Gwoza">
                                    <option value="Hawul">
                                    <option value="Jere">
                                    <option value="Kaga">
                                    <option value="Kala/Balge">
                                    <option value="Konduga">
                                    <option value="Kukawa">
                                    <option value="Kwaya Kusar">
                                    <option value="Mafa">
                                    <option value="Magumeri">
                                    <option value="Maiduguri">
                                    <option value="Marte">
                                    <option value="Mobbar">
                                    <option value="Monguno">
                                    <option value="Ngala">
                                    <option value="Nganzai">
                                    <option value="Shani">
                                    <option value="Abi">
                                    <option value="Akamkpa">
                                    <option value="Akpabuyo">
                                    <option value="Bakassi">
                                    <option value="Bekwarra">
                                    <option value="Biase">
                                    <option value="Boki">
                                    <option value="Calabar Municipal">
                                    <option value="Calabar South">
                                    <option value="Etung">
                                    <option value="Ikom">
                                    <option value="Obanliku">
                                    <option value="Obubra">
                                    <option value="Obudu">
                                    <option value="Odukpani">
                                    <option value="Ogoja">
                                    <option value="Yakurr">
                                    <option value="Yala">
                                    <option value="Aniocha North">
                                    <option value="Aniocha South">
                                    <option value="Bomadi">
                                    <option value="Burutu">
                                    <option value="Ethiope East">
                                    <option value="Ethiope West">
                                    <option value="Ika North East">
                                    <option value="Ika South">
                                    <option value="Isoko North">
                                    <option value="Isoko South">
                                    <option value="Ndokwa East">
                                    <option value="Ndokwa West">
                                    <option value="Okpe">
                                    <option value="Oshimili North">
                                    <option value="Oshimili South">
                                    <option value="Patani">
                                    <option value="Sapele">
                                    <option value="Udu">
                                    <option value="Ughelli North">
                                    <option value="Ughelli South">
                                    <option value="Ukwuani">
                                    <option value="Uvwie">
                                    <option value="Warri North">
                                    <option value="Warri South">
                                    <option value="Warri South West">
                                    <option value="Abakaliki">
                                    <option value="Afikpo North">
                                    <option value="Afikpo South">
                                    <option value="Ebonyi">
                                    <option value="Ezza North">
                                    <option value="Ezza South">
                                    <option value="Ikwo">
                                    <option value="Ishielu">
                                    <option value="Ivo">
                                    <option value="Izzi">
                                    <option value="Ohaozara">
                                    <option value="Ohaukwu">
                                    <option value="Onicha">
                                    <option value="Akoko-Edo">
                                    <option value="Egor">
                                    <option value="Esan Central">
                                    <option value="Esan North-East">
                                    <option value="Esan South-East">
                                    <option value="Esan West">
                                    <option value="Etsako Central">
                                    <option value="Etsako East">
                                    <option value="Etsako West">
                                    <option value="Igueben">
                                    <option value="Ikpoba-Okha">
                                    <option value="Oredo">
                                    <option value="Orhionmwon">
                                    <option value="Ovia North-East">
                                    <option value="Ovia South-West">
                                    <option value="Owan East">
                                    <option value="Owan West">
                                    <option value="Uhunmwonde">
                                    <option value="Ado-Ekiti">
                                    <option value="Efon">
                                    <option value="Ekiti East">
                                    <option value="Ekiti South-West">
                                    <option value="Ekiti West">
                                    <option value="Emure">
                                    <option value="Gbonyin">
                                    <option value="Ido-Osi">
                                    <option value="Ijero">
                                    <option value="Ikere">
                                    <option value="Ikole">
                                    <option value="Ilejemeje">
                                    <option value="Irepodun/Ifelodun">
                                    <option value="Ise/Orun">
                                    <option value="Moba">
                                    <option value="Oye">
                                    <option value="Aninri">
                                    <option value="Awgu">
                                    <option value="Enugu East">
                                    <option value="Enugu North">
                                    <option value="Enugu South">
                                    <option value="Ezeagu">
                                    <option value="Igbo Etiti">
                                    <option value="Igbo Eze North">
                                    <option value="Igbo Eze South">
                                    <option value="Isi Uzo">
                                    <option value="Nkanu East">
                                    <option value="Nkanu West">
                                    <option value="Nsukka">
                                    <option value="Oji River">
                                    <option value="Udenu">
                                    <option value="Udi">
                                    <option value="Uzo Uwani">
                                    <option value="Akko">
                                    <option value="Balanga">
                                    <option value="Billiri">
                                    <option value="Dukku">
                                    <option value="Funakaye">
                                    <option value="Gombe">
                                    <option value="Kaltungo">
                                    <option value="Kwami">
                                    <option value="Nafada">
                                    <option value="Shongom">
                                    <option value="Yamaltu/Deba">
                                    <option value="Aboh Mbaise">
                                    <option value="Ahiazu Mbaise">
                                    <option value="Ehime Mbano">
                                    <option value="Ezinihitte Mbaise">
                                    <option value="Ideato North">
                                    <option value="Ideato South">
                                    <option value="Ihitte/Uboma">
                                    <option value="Ikeduru">
                                    <option value="Isiala Mbano">
                                    <option value="Isu">
                                    <option value="Mbaitoli">
                                    <option value="Ngor Okpala">
                                    <option value="Njaba">
                                    <option value="Nkwerre">
                                    <option value="Nwangele">
                                    <option value="Obowo">
                                    <option value="Oguta">
                                    <option value="Ohaji/Egbema">
                                    <option value="Okigwe">
                                    <option value="Onuimo">
                                    <option value="Orlu">
                                    <option value="Orsu">
                                    <option value="Oru East">
                                    <option value="Oru West">
                                    <option value="Owerri Municipal">
                                    <option value="Owerri North">
                                    <option value="Owerri West">
                                    <option value="Auyo">
                                    <option value="Babura">
                                    <option value="Biriniwa">
                                    <option value="Birnin Kudu">
                                    <option value="Buji">
                                    <option value="Dutse">
                                    <option value="Gagarawa">
                                    <option value="Garki">
                                    <option value="Gumel">
                                    <option value="Guri">
                                    <option value="Gwaram">
                                    <option value="Gwiwa">
                                    <option value="Hadejia">
                                    <option value="Jahun">
                                    <option value="Kafin Hausa">
                                    <option value="Kaugama">
                                    <option value="Kazaure">
                                    <option value="Kirikasamma">
                                    <option value="Kiyawa">
                                    <option value="Maigatari">
                                    <option value="Malam Madori">
                                    <option value="Miga">
                                    <option value="Ringim">
                                    <option value="Roni">
                                    <option value="Sule Tankarkar">
                                    <option value="Taura">
                                    <option value="Yankwashi">
                                    <option value="Birnin Gwari">
                                    <option value="Chikun">
                                    <option value="Giwa">
                                    <option value="Igabi">
                                    <option value="Ikara">
                                    <option value="Jaba">
                                    <option value="Jema'a">
                                    <option value="Kachia">
                                    <option value="Kaduna North">
                                    <option value="Kaduna South">
                                    <option value="Kagarko">
                                    <option value="Kajuru">
                                    <option value="Kaura">
                                    <option value="Kauru">
                                    <option value="Kubau">
                                    <option value="Kudan">
                                    <option value="Lere">
                                    <option value="Makarfi">
                                    <option value="Sabon Gari">
                                    <option value="Sanga">
                                    <option value="Soba">
                                    <option value="Zangon Kataf">
                                    <option value="Zaria">
                                    <option value="Ajingi">
                                    <option value="Albasu">
                                    <option value="Bagwai">
                                    <option value="Bebeji">
                                    <option value="Bichi">
                                    <option value="Bunkure">
                                    <option value="Dala">
                                    <option value="Dambatta">
                                    <option value="Dawakin Kudu">
                                    <option value="Dawakin Tofa">
                                    <option value="Doguwa">
                                    <option value="Fagge">
                                    <option value="Gabasawa">
                                    <option value="Garko">
                                    <option value="Garun Mallam">
                                    <option value="Gaya">
                                    <option value="Gezawa">
                                    <option value="Gwale">
                                    <option value="Gwarzo">
                                    <option value="Kabo">
                                    <option value="Kano Municipal">
                                    <option value="Karaye">
                                    <option value="Kibiya">
                                    <option value="Kiru">
                                    <option value="Kumbotso">
                                    <option value="Kunchi">
                                    <option value="Kura">
                                    <option value="Madobi">
                                    <option value="Makoda">
                                    <option value="Minjibir">
                                    <option value="Nasarawa">
                                    <option value="Rano">
                                    <option value="Rimin Gado">
                                    <option value="Rogo">
                                    <option value="Shanono">
                                    <option value="Sumaila">
                                    <option value="Takai">
                                    <option value="Tarauni">
                                    <option value="Tofa">
                                    <option value="Tsanyawa">
                                    <option value="Tudun Wada">
                                    <option value="Ungogo">
                                    <option value="Warawa">
                                    <option value="Wudil">
                                    <option value="Bakori">
                                    <option value="Batagarawa">
                                    <option value="Batsari">
                                    <option value="Baure">
                                    <option value="Bindawa">
                                    <option value="Charanchi">
                                    <option value="Dan Musa">
                                    <option value="Dandume">
                                    <option value="Danja">
                                    <option value="Daura">
                                    <option value="Dutsi">
                                    <option value="Dutsin-Ma">
                                    <option value="Faskari">
                                    <option value="Funtua">
                                    <option value="Ingawa">
                                    <option value="Jibia">
                                    <option value="Kafur">
                                    <option value="Kaita">
                                    <option value="Kankara">
                                    <option value="Kankia">
                                    <option value="Katsina">
                                    <option value="Kurfi">
                                    <option value="Kusada">
                                    <option value="Mai'Adua">
                                    <option value="Malumfashi">
                                    <option value="Mani">
                                    <option value="Mashi">
                                    <option value="Matazu">
                                    <option value="Musawa">
                                    <option value="Rimi">
                                    <option value="Sabuwa">
                                    <option value="Safana">
                                    <option value="Sandamu">
                                    <option value="Zango">
                                    <option value="Aleiro">
                                    <option value="Arewa Dandi">
                                    <option value="Argungu">
                                    <option value="Augie">
                                    <option value="Bagudo">
                                    <option value="Birnin Kebbi">
                                    <option value="Bunza">
                                    <option value="Dandi">
                                    <option value="Fakai">
                                    <option value="Gwandu">
                                    <option value="Jega">
                                    <option value="Kalgo">
                                    <option value="Koko/Besse">
                                    <option value="Maiyama">
                                    <option value="Ngaski">
                                    <option value="Sakaba">
                                    <option value="Shanga">
                                    <option value="Suru">
                                    <option value="Danko/Wasagu">
                                    <option value="Yauri">
                                    <option value="Zuru">
                                    <option value="Adavi">
                                    <option value="Ajaokuta">
                                    <option value="Ankpa">
                                    <option value="Bassa">
                                    <option value="Dekina">
                                    <option value="Ibaji">
                                    <option value="Idah">
                                    <option value="Igalamela-Odolu">
                                    <option value="Ijumu">
                                    <option value="Kabba/Bunu">
                                    <option value="Kogi">
                                    <option value="Lokoja">
                                    <option value="Mopa-Muro">
                                    <option value="Ofu">
                                    <option value="Ogori/Magongo">
                                    <option value="Okehi">
                                    <option value="Okene">
                                    <option value="Olamaboro">
                                    <option value="Omala">
                                    <option value="Yagba East">
                                    <option value="Yagba West">
                                    <option value="Asa">
                                    <option value="Baruten">
                                    <option value="Edu">
                                    <option value="Ekiti">
                                    <option value="Ifelodun">
                                    <option value="Ilorin East">
                                    <option value="Ilorin South">
                                    <option value="Ilorin West">
                                    <option value="Irepodun">
                                    <option value="Isin">
                                    <option value="Kaiama">
                                    <option value="Moro">
                                    <option value="Offa">
                                    <option value="Oke Ero">
                                    <option value="Oyun">
                                    <option value="Pategi">
                                    <option value="Agege">
                                    <option value="Ajeromi-Ifelodun">
                                    <option value="Alimosho">
                                    <option value="Amuwo-Odofin">
                                    <option value="Apapa">
                                    <option value="Badagry">
                                    <option value="Epe">
                                    <option value="Eti-Osa">
                                    <option value="Ibeju-Lekki">
                                    <option value="Ifako-Ijaiye">
                                    <option value="Ikeja">
                                    <option value="Ikorodu">
                                    <option value="Kosofe">
                                    <option value="Lagos Island">
                                    <option value="Lagos Mainland">
                                    <option value="Mushin">
                                    <option value="Ojo">
                                    <option value="Oshodi-Isolo">
                                    <option value="Shomolu">
                                    <option value="Surulere">
                                    <option value="Akwanga">
                                    <option value="Awe">
                                    <option value="Doma">
                                    <option value="Karu">
                                    <option value="Keana">
                                    <option value="Keffi">
                                    <option value="Kokona">
                                    <option value="Lafia">
                                    <option value="Nasarawa">
                                    <option value="Nasarawa Egon">
                                    <option value="Obi">
                                    <option value="Toto">
                                    <option value="Wamba">
                                    <option value="Agaie">
                                    <option value="Agwara">
                                    <option value="Bida">
                                    <option value="Borgu">
                                    <option value="Bosso">
                                    <option value="Chanchaga">
                                    <option value="Edati">
                                    <option value="Gbako">
                                    <option value="Gurara">
                                    <option value="Katcha">
                                    <option value="Kontagora">
                                    <option value="Lapai">
                                    <option value="Lavun">
                                    <option value="Magama">
                                    <option value="Mariga">
                                    <option value="Mashegu">
                                    <option value="Mokwa">
                                    <option value="Munya">
                                    <option value="Paikoro">
                                    <option value="Rafi">
                                    <option value="Rijau">
                                    <option value="Shiroro">
                                    <option value="Suleja">
                                    <option value="Tafa">
                                    <option value="Wushishi">
                                    <option value="Abeokuta North">
                                    <option value="Abeokuta South">
                                    <option value="Ado-Odo/Ota">
                                    <option value="Egbado North">
                                    <option value="Egbado South">
                                    <option value="Ewekoro">
                                    <option value="Ifo">
                                    <option value="Ijebu East">
                                    <option value="Ijebu North">
                                    <option value="Ijebu North East">
                                    <option value="Ijebu Ode">
                                    <option value="Ikenne">
                                    <option value="Imeko Afon">
                                    <option value="Ipokia">
                                    <option value="Obafemi Owode">
                                    <option value="Odeda">
                                    <option value="Odogbolu">
                                    <option value="Ogun Waterside">
                                    <option value="Remo North">
                                    <option value="Shagamu">
                                    <option value="Akoko North-East">
                                    <option value="Akoko North-West">
                                    <option value="Akoko South-East">
                                    <option value="Akoko South-West">
                                    <option value="Akure North">
                                    <option value="Akure South">
                                    <option value="Ese Odo">
                                    <option value="Idanre">
                                    <option value="Ifedore">
                                    <option value="Ilaje">
                                    <option value="Ile Oluji/Okeigbo">
                                    <option value="Irele">
                                    <option value="Odigbo">
                                    <option value="Okitipupa">
                                    <option value="Ondo East">
                                    <option value="Ondo West">
                                    <option value="Ose">
                                    <option value="Owo">
                                    <option value="Aiyedaade">
                                    <option value="Aiyedire">
                                    <option value="Atakumosa East">
                                    <option value="Atakumosa West">
                                    <option value="Boluwaduro">
                                    <option value="Boripe">
                                    <option value="Ede North">
                                    <option value="Ede South">
                                    <option value="Egbedore">
                                    <option value="Ejigbo">
                                    <option value="Ife Central">
                                    <option value="Ife East">
                                    <option value="Ife North">
                                    <option value="Ife South">
                                    <option value="Ifedayo">
                                    <option value="Ifelodun">
                                    <option value="Ila">
                                    <option value="Ilesa East">
                                    <option value="Ilesa West">
                                    <option value="Irepodun">
                                    <option value="Irewole">
                                    <option value="Isokan">
                                    <option value="Iwo">
                                    <option value="Obokun">
                                    <option value="Odo Otin">
                                    <option value="Ola Oluwa">
                                    <option value="Olorunda">
                                    <option value="Oriade">
                                    <option value="Orolu">
                                    <option value="Osogbo">
                                    <option value="Afijio">
                                    <option value="Akinyele">
                                    <option value="Atiba">
                                    <option value="Atisbo">
                                    <option value="Egbeda">
                                    <option value="Ibadan North">
                                    <option value="Ibadan North-East">
                                    <option value="Ibadan North-West">
                                    <option value="Ibadan South-East">
                                    <option value="Ibadan South-West">
                                    <option value="Ibarapa Central">
                                    <option value="Ibarapa East">
                                    <option value="Ibarapa North">
                                    <option value="Ido">
                                    <option value="Irepo">
                                    <option value="Iseyin">
                                    <option value="Itesiwaju">
                                    <option value="Iwajowa">
                                    <option value="Kajola">
                                    <option value="Lagelu">
                                    <option value="Ogo Oluwa">
                                    <option value="Ogbomosho North">
                                    <option value="Ogbomosho South">
                                    <option value="Olorunsogo">
                                    <option value="Oluyole">
                                    <option value="Ona Ara">
                                    <option value="Orelope">
                                    <option value="Ori Ire">
                                    <option value="Oyo East">
                                    <option value="Oyo West">
                                    <option value="Saki East">
                                    <option value="Saki West">
                                    <option value="Surulere">
                                    <option value="Barkin Ladi">
                                    <option value="Bassa">
                                    <option value="Bokkos">
                                    <option value="Jos East">
                                    <option value="Jos North">
                                    <option value="Jos South">
                                    <option value="Kanam">
                                    <option value="Kanke">
                                    <option value="Langtang North">
                                    <option value="Langtang South">
                                    <option value="Mangu">
                                    <option value="Mikang">
                                    <option value="Pankshin">
                                    <option value="Qua'an Pan">
                                    <option value="Riyom">
                                    <option value="Shendam">
                                    <option value="Wase">
                                    <option value="Abua/Odual">
                                    <option value="Ahoada East">
                                    <option value="Ahoada West">
                                    <option value="Akuku-Toru">
                                    <option value="Andoni">
                                    <option value="Asari-Toru">
                                    <option value="Bonny">
                                    <option value="Degema">
                                    <option value="Eleme">
                                    <option value="Emuoha">
                                    <option value="Etche">
                                    <option value="Gokana">
                                    <option value="Ikwerre">
                                    <option value="Khana">
                                    <option value="Obio/Akpor">
                                    <option value="Ogba/Egbema/Ndoni">
                                    <option value="Ogu/Bolo">
                                    <option value="Okrika">
                                    <option value="Omuma">
                                    <option value="Opobo/Nkoro">
                                    <option value="Oyigbo">
                                    <option value="Port Harcourt">
                                    <option value="Tai">
                                    <option value="Binji">
                                    <option value="Bodinga">
                                    <option value="Dange Shuni">
                                    <option value="Gada">
                                    <option value="Goronyo">
                                    <option value="Gudu">
                                    <option value="Gwadabawa">
                                    <option value="Illela">
                                    <option value="Isa">
                                    <option value="Kebbe">
                                    <option value="Kware">
                                    <option value="Rabah">
                                    <option value="Sabon Birni">
                                    <option value="Shagari">
                                    <option value="Silame">
                                    <option value="Sokoto North">
                                    <option value="Sokoto South">
                                    <option value="Tambuwal">
                                    <option value="Tangaza">
                                    <option value="Tureta">
                                    <option value="Wamako">
                                    <option value="Wurno">
                                    <option value="Yabo">
                                    <option value="Ardo Kola">
                                    <option value="Bali">
                                    <option value="Donga">
                                    <option value="Gashaka">
                                    <option value="Gassol">
                                    <option value="Ibi">
                                    <option value="Jalingo">
                                    <option value="Karim Lamido">
                                    <option value="Kurmi">
                                    <option value="Lau">
                                    <option value="Sardauna">
                                    <option value="Takum">
                                    <option value="Ussa">
                                    <option value="Wukari">
                                    <option value="Yorro">
                                    <option value="Zing">
                                    <option value="Bade">
                                    <option value="Bursari">
                                    <option value="Damaturu">
                                    <option value="Fika">
                                    <option value="Fune">
                                    <option value="Geidam">
                                    <option value="Gujba">
                                    <option value="Gulani">
                                    <option value="Jakusko">
                                    <option value="Karasuwa">
                                    <option value="Machina">
                                    <option value="Nangere">
                                    <option value="Nguru">
                                    <option value="Potiskum">
                                    <option value="Tarmuwa">
                                    <option value="Yunusari">
                                    <option value="Yusufari">
                                    <option value="Anka">
                                    <option value="Bakura">
                                    <option value="Birnin Magaji/Kiyaw">
                                    <option value="Bukkuyum">
                                    <option value="Bungudu">
                                    <option value="Gummi">
                                    <option value="Gusau">
                                    <option value="Kaura Namoda">
                                    <option value="Maradun">
                                    <option value="Maru">
                                    <option value="Shinkafi">
                                    <option value="Talata Mafara">
                                    <option value="Chafe">
                                    <option value="Zurmi">
                                    <option value="Abaji">
                                    <option value="Bwari">
                                    <option value="Gwagwalada">
                                    <option value="Kuje">
                                    <option value="Kwali">
                                    <option value="Municipal Area Council">
                                  </datalist>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Qualification" name="qualification" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Specialization (if any)" name="specialization" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Certifications" name="certifications" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Years of Experience" name="experience" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <label id="cv-label" class="form-label">Upload CV/Resume (docx,pdf,jpd,png)</label>
                                <input type="file" class="form-control border-0 bg-light px-4" name="cv" style="height: 55px;" onclick="setLabelText('cv-label', 'Upload CV/Resume')" required>
                            </div>
                            <div class="col-md-6">
                                <label id="certificate-label" class="form-label">Upload Certificate (docx,pdf,jpd,png)</label>
                                <input type="file" class="form-control border-0 bg-light px-4" name="certificate" style="height: 55px;" onclick="setLabelText('certificate-label', 'Upload Certificate')" required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Brief description about yourself" name="info" required></textarea>
                            </div>
                            <div class="col-12" style="align-content: center">
                                <button class="btn btn-primary py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{ url('/')}}" class="navbar-brand">
                            <img class="logo" src="./img/alexwhite.png" alt="logo">
                        </a>
                        <p class="mt-3 mb-4">Sign Up for our newsletter to get update on Latest information from our team, also you get advice on how to get started with your global journey</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">No. 175 Wilhelmstraße, 44388 Dortmund, Germany</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@alexoconsults.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+2348130350663</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://x.com/alexoconsults"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://web.facebook.com/profile.php?id=61561232475483"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.youtube.com/channel/UCD3PqkBBwU9h3cJvmQizGPg"><i class="fab fa-youtube fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://www.instagram.com/alexoconsults/"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{ url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{ url('/registration')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Apply</a>
                                <a class="text-light mb-2" href="{{ url('/testimonial')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Testimonial</a>
                                {{-- <a class="text-light mb-2" href="{{ url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a> --}}
                                <a class="text-light" href="{{ url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{ url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{ url('/service')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="{{ url('/registration')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Apply</a>
                                <a class="text-light mb-2" href="{{ url('/testimonial')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Testimonial</a>
                                <a class="text-light" href="{{ url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">alexoconsult.com</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Script for fetching the Country,State and City dropdown -->
   

   

    <script>
        // Countries
var country_arr = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Angola", "Anguilla", "Antartica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Ashmore and Cartier Island", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Clipperton Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czeck Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Europa Island", "Falkland Islands (Islas Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern and Antarctic Lands", "Gabon", "Gambia, The", "Gaza Strip", "Georgia", "Germany", "Ghana", "Gibraltar", "Glorioso Islands", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (Vatican City)", "Honduras", "Hong Kong", "Howland Island", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Ireland, Northern", "Israel", "Italy", "Jamaica", "Jan Mayen", "Japan", "Jarvis Island", "Jersey", "Johnston Atoll", "Jordan", "Juan de Nova Island", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Man, Isle of", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Midway Islands", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcaim Islands", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romainia", "Russia", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Scotland", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and South Sandwich Islands", "Spain", "Spratly Islands", "Sri Lanka", "Sudan", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Tobago", "Toga", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands", "Wales", "Wallis and Futuna", "West Bank", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Badakhshan|Badghis|Baghlan|Balkh|Bamian|Farah|Faryab|Ghazni|Ghowr|Helmand|Herat|Jowzjan|Kabol|Kandahar|Kapisa|Konar|Kondoz|Laghman|Lowgar|Nangarhar|Nimruz|Oruzgan|Paktia|Paktika|Parvan|Samangan|Sar-e Pol|Takhar|Vardak|Zabol";
s_a[2] = "Berat|Bulqize|Delvine|Devoll (Bilisht)|Diber (Peshkopi)|Durres|Elbasan|Fier|Gjirokaster|Gramsh|Has (Krume)|Kavaje|Kolonje (Erseke)|Korce|Kruje|Kucove|Kukes|Kurbin|Lezhe|Librazhd|Lushnje|Malesi e Madhe (Koplik)|Mallakaster (Ballsh)|Mat (Burrel)|Mirdite (Rreshen)|Peqin|Permet|Pogradec|Puke|Sarande|Shkoder|Skrapar (Corovode)|Tepelene|Tirane (Tirana)|Tirane (Tirana)|Tropoje (Bajram Curri)|Vlore";
s_a[3] = "Adrar|Ain Defla|Ain Temouchent|Alger|Annaba|Batna|Bechar|Bejaia|Biskra|Blida|Bordj Bou Arreridj|Bouira|Boumerdes|Chlef|Constantine|Djelfa|El Bayadh|El Oued|El Tarf|Ghardaia|Guelma|Illizi|Jijel|Khenchela|Laghouat|M'Sila|Mascara|Medea|Mila|Mostaganem|Naama|Oran|Ouargla|Oum el Bouaghi|Relizane|Saida|Setif|Sidi Bel Abbes|Skikda|Souk Ahras|Tamanghasset|Tebessa|Tiaret|Tindouf|Tipaza|Tissemsilt|Tizi Ouzou|Tlemcen";
s_a[4] = "Eastern|Manu'a|Rose Island|Swains Island|Western";
s_a[5] = "Andorra la Vella|Bengo|Benguela|Bie|Cabinda|Canillo|Cuando Cubango|Cuanza Norte|Cuanza Sul|Cunene|Encamp|Escaldes-Engordany|Huambo|Huila|La Massana|Luanda|Lunda Norte|Lunda Sul|Malanje|Moxico|Namibe|Ordino|Sant Julia de Loria|Uige|Zaire";
s_a[6] = "Anguilla";
s_a[7] = "Antartica";
s_a[8] = "Barbuda|Redonda|Saint George|Saint John|Saint Mary|Saint Paul|Saint Peter|Saint Philip";
s_a[9] = "Antartica e Islas del Atlantico Sur|Buenos Aires|Buenos Aires Capital Federal|Catamarca|Chaco|Chubut|Cordoba|Corrientes|Entre Rios|Formosa|Jujuy|La Pampa|La Rioja|Mendoza|Misiones|Neuquen|Rio Negro|Salta|San Juan|San Luis|Santa Cruz|Santa Fe|Santiago del Estero|Tierra del Fuego|Tucuman";
s_a[10] = "Aragatsotn|Ararat|Armavir|Geghark'unik'|Kotayk'|Lorri|Shirak|Syunik'|Tavush|Vayots' Dzor|Yerevan";
s_a[11] = "Aruba";
s_a[12] = "Ashmore and Cartier Island";
s_a[13] = "Australian Capital Territory|New South Wales|Northern Territory|Queensland|South Australia|Tasmania|Victoria|Western Australia";
s_a[14] = "Burgenland|Kaernten|Niederoesterreich|Oberoesterreich|Salzburg|Steiermark|Tirol|Vorarlberg|Wien";
s_a[15] = "Abseron Rayonu|Agcabadi Rayonu|Agdam Rayonu|Agdas Rayonu|Agstafa Rayonu|Agsu Rayonu|Ali Bayramli Sahari|Astara Rayonu|Baki Sahari|Balakan Rayonu|Barda Rayonu|Beylaqan Rayonu|Bilasuvar Rayonu|Cabrayil Rayonu|Calilabad Rayonu|Daskasan Rayonu|Davaci Rayonu|Fuzuli Rayonu|Gadabay Rayonu|Ganca Sahari|Goranboy Rayonu|Goycay Rayonu|Haciqabul Rayonu|Imisli Rayonu|Ismayilli Rayonu|Kalbacar Rayonu|Kurdamir Rayonu|Lacin Rayonu|Lankaran Rayonu|Lankaran Sahari|Lerik Rayonu|Masalli Rayonu|Mingacevir Sahari|Naftalan Sahari|Naxcivan Muxtar Respublikasi|Neftcala Rayonu|Oguz Rayonu|Qabala Rayonu|Qax Rayonu|Qazax Rayonu|Qobustan Rayonu|Quba Rayonu|Qubadli Rayonu|Qusar Rayonu|Saatli Rayonu|Sabirabad Rayonu|Saki Rayonu|Saki Sahari|Salyan Rayonu|Samaxi Rayonu|Samkir Rayonu|Samux Rayonu|Siyazan Rayonu|Sumqayit Sahari|Susa Rayonu|Susa Sahari|Tartar Rayonu|Tovuz Rayonu|Ucar Rayonu|Xacmaz Rayonu|Xankandi Sahari|Xanlar Rayonu|Xizi Rayonu|Xocali Rayonu|Xocavand Rayonu|Yardimli Rayonu|Yevlax Rayonu|Yevlax Sahari|Zangilan Rayonu|Zaqatala Rayonu|Zardab Rayonu";
s_a[16] = "Acklins and Crooked Islands|Bimini|Cat Island|Exuma|Freeport|Fresh Creek|Governor's Harbour|Green Turtle Cay|Harbour Island|High Rock|Inagua|Kemps Bay|Long Island|Marsh Harbour|Mayaguana|New Providence|Nicholls Town and Berry Islands|Ragged Island|Rock Sound|San Salvador and Rum Cay|Sandy Point";
s_a[17] = "Al Hadd|Al Manamah|Al Mintaqah al Gharbiyah|Al Mintaqah al Wusta|Al Mintaqah ash Shamaliyah|Al Muharraq|Ar Rifa' wa al Mintaqah al Janubiyah|Jidd Hafs|Juzur Hawar|Madinat 'Isa|Madinat Hamad|Sitrah";
s_a[18] = "Barguna|Barisal|Bhola|Jhalokati|Patuakhali|Pirojpur|Bandarban|Brahmanbaria|Chandpur|Chittagong|Comilla|Cox's Bazar|Feni|Khagrachari|Lakshmipur|Noakhali|Rangamati|Dhaka|Faridpur|Gazipur|Gopalganj|Jamalpur|Kishoreganj|Madaripur|Manikganj|Munshiganj|Mymensingh|Narayanganj|Narsingdi|Netrokona|Rajbari|Shariatpur|Sherpur|Tangail|Bagerhat|Chuadanga|Jessore|Jhenaidah|Khulna|Kushtia|Magura|Meherpur|Narail|Satkhira|Bogra|Dinajpur|Gaibandha|Jaipurhat|Kurigram|Lalmonirhat|Naogaon|Natore|Nawabganj|Nilphamari|Pabna|Panchagarh|Rajshahi|Rangpur|Sirajganj|Thakurgaon|Habiganj|Maulvi bazar|Sunamganj|Sylhet";
s_a[19] = "Bridgetown|Christ Church|Saint Andrew|Saint George|Saint James|Saint John|Saint Joseph|Saint Lucy|Saint Michael|Saint Peter|Saint Philip|Saint Thomas";
s_a[20] = "Brestskaya (Brest)|Homyel'skaya (Homyel')|Horad Minsk|Hrodzyenskaya (Hrodna)|Mahilyowskaya (Mahilyow)|Minskaya|Vitsyebskaya (Vitsyebsk)";
s_a[21] = "Antwerpen|Brabant Wallon|Brussels Capitol Region|Hainaut|Liege|Limburg|Luxembourg|Namur|Oost-Vlaanderen|Vlaams Brabant|West-Vlaanderen";
s_a[22] = "Belize|Cayo|Corozal|Orange Walk|Stann Creek|Toledo";
s_a[23] = "Alibori|Atakora|Atlantique|Borgou|Collines|Couffo|Donga|Littoral|Mono|Oueme|Plateau|Zou";
s_a[24] = "Devonshire|Hamilton|Hamilton|Paget|Pembroke|Saint George|Saint Georges|Sandys|Smiths|Southampton|Warwick";
s_a[25] = "Bumthang|Chhukha|Chirang|Daga|Geylegphug|Ha|Lhuntshi|Mongar|Paro|Pemagatsel|Punakha|Samchi|Samdrup Jongkhar|Shemgang|Tashigang|Thimphu|Tongsa|Wangdi Phodrang";
s_a[26] = "Beni|Chuquisaca|Cochabamba|La Paz|Oruro|Pando|Potosi|Santa Cruz|Tarija";
s_a[27] = "Federation of Bosnia and Herzegovina|Republika Srpska";
s_a[28] = "Central|Chobe|Francistown|Gaborone|Ghanzi|Kgalagadi|Kgatleng|Kweneng|Lobatse|Ngamiland|North-East|Selebi-Pikwe|South-East|Southern";
s_a[29] = "Acre|Alagoas|Amapa|Amazonas|Bahia|Ceara|Distrito Federal|Espirito Santo|Goias|Maranhao|Mato Grosso|Mato Grosso do Sul|Minas Gerais|Para|Paraiba|Parana|Pernambuco|Piaui|Rio de Janeiro|Rio Grande do Norte|Rio Grande do Sul|Rondonia|Roraima|Santa Catarina|Sao Paulo|Sergipe|Tocantins";
s_a[30] = "Anegada|Jost Van Dyke|Tortola|Virgin Gorda";
s_a[31] = "Belait|Brunei and Muara|Temburong|Tutong";
s_a[32] = "Blagoevgrad|Burgas|Dobrich|Gabrovo|Khaskovo|Kurdzhali|Kyustendil|Lovech|Montana|Pazardzhik|Pernik|Pleven|Plovdiv|Razgrad|Ruse|Shumen|Silistra|Sliven|Smolyan|Sofiya|Sofiya-Grad|Stara Zagora|Turgovishte|Varna|Veliko Turnovo|Vidin|Vratsa|Yambol";
s_a[33] = "Bale|Bam|Banwa|Bazega|Bougouriba|Boulgou|Boulkiemde|Comoe|Ganzourgou|Gnagna|Gourma|Houet|Ioba|Kadiogo|Kenedougou|Komandjari|Kompienga|Kossi|Koupelogo|Kouritenga|Kourweogo|Leraba|Loroum|Mouhoun|Nahouri|Namentenga|Naumbiel|Nayala|Oubritenga|Oudalan|Passore|Poni|Samentenga|Sanguie|Seno|Sissili|Soum|Sourou|Tapoa|Tuy|Yagha|Yatenga|Ziro|Zondomo|Zoundweogo";
s_a[34] = "Ayeyarwady|Bago|Chin State|Kachin State|Kayah State|Kayin State|Magway|Mandalay|Mon State|Rakhine State|Sagaing|Shan State|Tanintharyi|Yangon";
s_a[35] = "Bubanza|Bujumbura|Bururi|Cankuzo|Cibitoke|Gitega|Karuzi|Kayanza|Kirundo|Makamba|Muramvya|Muyinga|Mwaro|Ngozi|Rutana|Ruyigi";
s_a[36] = "Banteay Mean Cheay|Batdambang|Kampong Cham|Kampong Chhnang|Kampong Spoe|Kampong Thum|Kampot|Kandal|Kaoh Kong|Keb|Kracheh|Mondol Kiri|Otdar Mean Cheay|Pailin|Phnum Penh|Pouthisat|Preah Seihanu (Sihanoukville)|Preah Vihear|Prey Veng|Rotanah Kiri|Siem Reab|Stoeng Treng|Svay Rieng|Takev";
s_a[37] = "Adamaoua|Centre|Est|Extreme-Nord|Littoral|Nord|Nord-Ouest|Ouest|Sud|Sud-Ouest";
s_a[38] = "Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon Territory";
s_a[39] = "Boa Vista|Brava|Maio|Mosteiros|Paul|Porto Novo|Praia|Ribeira Grande|Sal|Santa Catarina|Santa Cruz|Sao Domingos|Sao Filipe|Sao Nicolau|Sao Vicente|Tarrafal";
s_a[40] = "Creek|Eastern|Midland|South Town|Spot Bay|Stake Bay|West End|Western";
s_a[41] = "Bamingui-Bangoran|Bangui|Basse-Kotto|Gribingui|Haut-Mbomou|Haute-Kotto|Haute-Sangha|Kemo-Gribingui|Lobaye|Mbomou|Nana-Mambere|Ombella-Mpoko|Ouaka|Ouham|Ouham-Pende|Sangha|Vakaga";
s_a[42] = "Batha|Biltine|Borkou-Ennedi-Tibesti|Chari-Baguirmi|Guera|Kanem|Lac|Logone Occidental|Logone Oriental|Mayo-Kebbi|Moyen-Chari|Ouaddai|Salamat|Tandjile";
s_a[43] = "Aisen del General Carlos Ibanez del Campo|Antofagasta|Araucania|Atacama|Bio-Bio|Coquimbo|Libertador General Bernardo O'Higgins|Los Lagos|Magallanes y de la Antartica Chilena|Maule|Region Metropolitana (Santiago)|Tarapaca|Valparaiso";
s_a[44] = "Anhui|Beijing|Chongqing|Fujian|Gansu|Guangdong|Guangxi|Guizhou|Hainan|Hebei|Heilongjiang|Henan|Hubei|Hunan|Jiangsu|Jiangxi|Jilin|Liaoning|Nei Mongol|Ningxia|Qinghai|Shaanxi|Shandong|Shanghai|Shanxi|Sichuan|Tianjin|Xinjiang|Xizang (Tibet)|Yunnan|Zhejiang";
s_a[45] = "Christmas Island";
s_a[46] = "Clipperton Island";
s_a[47] = "Direction Island|Home Island|Horsburgh Island|North Keeling Island|South Island|West Island";
s_a[48] = "Amazonas|Antioquia|Arauca|Atlantico|Bolivar|Boyaca|Caldas|Caqueta|Casanare|Cauca|Cesar|Choco|Cordoba|Cundinamarca|Distrito Capital de Santa Fe de Bogota|Guainia|Guaviare|Huila|La Guajira|Magdalena|Meta|Narino|Norte de Santander|Putumayo|Quindio|Risaralda|San Andres y Providencia|Santander|Sucre|Tolima|Valle del Cauca|Vaupes|Vichada";
// <!-- -->
s_a[49] = "Anjouan (Nzwani)|Domoni|Fomboni|Grande Comore (Njazidja)|Moheli (Mwali)|Moroni|Moutsamoudou";
s_a[50] = "Bandundu|Bas-Congo|Equateur|Kasai-Occidental|Kasai-Oriental|Katanga|Kinshasa|Maniema|Nord-Kivu|Orientale|Sud-Kivu";
s_a[51] = "Bouenza|Brazzaville|Cuvette|Kouilou|Lekoumou|Likouala|Niari|Plateaux|Pool|Sangha";
s_a[52] = "Aitutaki|Atiu|Avarua|Mangaia|Manihiki|Manuae|Mauke|Mitiaro|Nassau Island|Palmerston|Penrhyn|Pukapuka|Rakahanga|Rarotonga|Suwarrow|Takutea";
s_a[53] = "Alajuela|Cartago|Guanacaste|Heredia|Limon|Puntarenas|San Jose";
s_a[54] = "Abengourou|Abidjan|Aboisso|Adiake'|Adzope|Agboville|Agnibilekrou|Ale'pe'|Bangolo|Beoumi|Biankouma|Bocanda|Bondoukou|Bongouanou|Bouafle|Bouake|Bouna|Boundiali|Dabakala|Dabon|Daloa|Danane|Daoukro|Dimbokro|Divo|Duekoue|Ferkessedougou|Gagnoa|Grand Bassam|Grand-Lahou|Guiglo|Issia|Jacqueville|Katiola|Korhogo|Lakota|Man|Mankono|Mbahiakro|Odienne|Oume|Sakassou|San-Pedro|Sassandra|Seguela|Sinfra|Soubre|Tabou|Tanda|Tiassale|Tiebissou|Tingrela|Touba|Toulepleu|Toumodi|Vavoua|Yamoussoukro|Zuenoula";
s_a[55] = "Bjelovarsko-Bilogorska Zupanija|Brodsko-Posavska Zupanija|Dubrovacko-Neretvanska Zupanija|Istarska Zupanija|Karlovacka Zupanija|Koprivnicko-Krizevacka Zupanija|Krapinsko-Zagorska Zupanija|Licko-Senjska Zupanija|Medimurska Zupanija|Osjecko-Baranjska Zupanija|Pozesko-Slavonska Zupanija|Primorsko-Goranska Zupanija|Sibensko-Kninska Zupanija|Sisacko-Moslavacka Zupanija|Splitsko-Dalmatinska Zupanija|Varazdinska Zupanija|Viroviticko-Podravska Zupanija|Vukovarsko-Srijemska Zupanija|Zadarska Zupanija|Zagreb|Zagrebacka Zupanija";
s_a[56] = "Camaguey|Ciego de Avila|Cienfuegos|Ciudad de La Habana|Granma|Guantanamo|Holguin|Isla de la Juventud|La Habana|Las Tunas|Matanzas|Pinar del Rio|Sancti Spiritus|Santiago de Cuba|Villa Clara";
s_a[57] = "Famagusta|Kyrenia|Larnaca|Limassol|Nicosia|Paphos";
s_a[58] = "Brnensky|Budejovicky|Jihlavsky|Karlovarsky|Kralovehradecky|Liberecky|Olomoucky|Ostravsky|Pardubicky|Plzensky|Praha|Stredocesky|Ustecky|Zlinsky";
s_a[59] = "Arhus|Bornholm|Fredericksberg|Frederiksborg|Fyn|Kobenhavn|Kobenhavns|Nordjylland|Ribe|Ringkobing|Roskilde|Sonderjylland|Storstrom|Vejle|Vestsjalland|Viborg";
s_a[60] = "'Ali Sabih|Dikhil|Djibouti|Obock|Tadjoura";
s_a[61] = "Saint Andrew|Saint David|Saint George|Saint John|Saint Joseph|Saint Luke|Saint Mark|Saint Patrick|Saint Paul|Saint Peter";
s_a[62] = "Azua|Baoruco|Barahona|Dajabon|Distrito Nacional|Duarte|El Seibo|Elias Pina|Espaillat|Hato Mayor|Independencia|La Altagracia|La Romana|La Vega|Maria Trinidad Sanchez|Monsenor Nouel|Monte Cristi|Monte Plata|Pedernales|Peravia|Puerto Plata|Salcedo|Samana|San Cristobal|San Juan|San Pedro de Macoris|Sanchez Ramirez|Santiago|Santiago Rodriguez|Valverde";
// <!-- -->
s_a[63] = "Azuay|Bolivar|Canar|Carchi|Chimborazo|Cotopaxi|El Oro|Esmeraldas|Galapagos|Guayas|Imbabura|Loja|Los Rios|Manabi|Morona-Santiago|Napo|Orellana|Pastaza|Pichincha|Sucumbios|Tungurahua|Zamora-Chinchipe";
s_a[64] = "Ad Daqahliyah|Al Bahr al Ahmar|Al Buhayrah|Al Fayyum|Al Gharbiyah|Al Iskandariyah|Al Isma'iliyah|Al Jizah|Al Minufiyah|Al Minya|Al Qahirah|Al Qalyubiyah|Al Wadi al Jadid|As Suways|Ash Sharqiyah|Aswan|Asyut|Bani Suwayf|Bur Sa'id|Dumyat|Janub Sina'|Kafr ash Shaykh|Matruh|Qina|Shamal Sina'|Suhaj";
s_a[65] = "Ahuachapan|Cabanas|Chalatenango|Cuscatlan|La Libertad|La Paz|La Union|Morazan|San Miguel|San Salvador|San Vicente|Santa Ana|Sonsonate|Usulutan";
s_a[66] = "Annobon|Bioko Norte|Bioko Sur|Centro Sur|Kie-Ntem|Litoral|Wele-Nzas";
s_a[67] = "Akale Guzay|Barka|Denkel|Hamasen|Sahil|Semhar|Senhit|Seraye";
s_a[68] = "Harjumaa (Tallinn)|Hiiumaa (Kardla)|Ida-Virumaa (Johvi)|Jarvamaa (Paide)|Jogevamaa (Jogeva)|Laane-Virumaa (Rakvere)|Laanemaa (Haapsalu)|Parnumaa (Parnu)|Polvamaa (Polva)|Raplamaa (Rapla)|Saaremaa (Kuessaare)|Tartumaa (Tartu)|Valgamaa (Valga)|Viljandimaa (Viljandi)|Vorumaa (Voru)"
s_a[69] = "Adis Abeba (Addis Ababa)|Afar|Amara|Dire Dawa|Gambela Hizboch|Hareri Hizb|Oromiya|Sumale|Tigray|YeDebub Biheroch Bihereseboch na Hizboch";
s_a[70] = "Europa Island";
s_a[71] = "Falkland Islands (Islas Malvinas)"
s_a[72] = "Bordoy|Eysturoy|Mykines|Sandoy|Skuvoy|Streymoy|Suduroy|Tvoroyri|Vagar";
s_a[73] = "Central|Eastern|Northern|Rotuma|Western";
s_a[74] = "Aland|Etela-Suomen Laani|Ita-Suomen Laani|Lansi-Suomen Laani|Lappi|Oulun Laani";
s_a[75] = "Alsace|Aquitaine|Auvergne|Basse-Normandie|Bourgogne|Bretagne|Centre|Champagne-Ardenne|Corse|Franche-Comte|Haute-Normandie|Ile-de-France|Languedoc-Roussillon|Limousin|Lorraine|Midi-Pyrenees|Nord-Pas-de-Calais|Pays de la Loire|Picardie|Poitou-Charentes|Provence-Alpes-Cote d'Azur|Rhone-Alpes";
s_a[76] = "French Guiana";
s_a[77] = "Archipel des Marquises|Archipel des Tuamotu|Archipel des Tubuai|Iles du Vent|Iles Sous-le-Vent";
s_a[78] = "Adelie Land|Ile Crozet|Iles Kerguelen|Iles Saint-Paul et Amsterdam";
s_a[79] = "Estuaire|Haut-Ogooue|Moyen-Ogooue|Ngounie|Nyanga|Ogooue-Ivindo|Ogooue-Lolo|Ogooue-Maritime|Woleu-Ntem";
s_a[80] = "Banjul|Central River|Lower River|North Bank|Upper River|Western";
s_a[81] = "Gaza Strip";
s_a[82] = "Abashis|Abkhazia or Ap'khazet'is Avtonomiuri Respublika (Sokhumi)|Adigenis|Ajaria or Acharis Avtonomiuri Respublika (Bat'umi)|Akhalgoris|Akhalk'alak'is|Akhalts'ikhis|Akhmetis|Ambrolauris|Aspindzis|Baghdat'is|Bolnisis|Borjomis|Ch'khorotsqus|Ch'okhatauris|Chiat'ura|Dedop'listsqaros|Dmanisis|Dushet'is|Gardabanis|Gori|Goris|Gurjaanis|Javis|K'arelis|K'ut'aisi|Kaspis|Kharagaulis|Khashuris|Khobis|Khonis|Lagodekhis|Lanch'khut'is|Lentekhis|Marneulis|Martvilis|Mestiis|Mts'khet'is|Ninotsmindis|Onis|Ozurget'is|P'ot'i|Qazbegis|Qvarlis|Rust'avi|Sach'kheris|Sagarejos|Samtrediis|Senakis|Sighnaghis|T'bilisi|T'elavis|T'erjolis|T'et'ritsqaros|T'ianet'is|Tqibuli|Ts'ageris|Tsalenjikhis|Tsalkis|Tsqaltubo|Vanis|Zestap'onis|Zugdidi|Zugdidis";
s_a[83] = "Baden-Wuerttemberg|Bayern|Berlin|Brandenburg|Bremen|Hamburg|Hessen|Mecklenburg-Vorpommern|Niedersachsen|Nordrhein-Westfalen|Rheinland-Pfalz|Saarland|Sachsen|Sachsen-Anhalt|Schleswig-Holstein|Thueringen";
s_a[84] = "Ashanti|Brong-Ahafo|Central|Eastern|Greater Accra|Northern|Upper East|Upper West|Volta|Western";
s_a[85] = "Gibraltar";
s_a[86] = "Ile du Lys|Ile Glorieuse";
s_a[87] = "Aitolia kai Akarnania|Akhaia|Argolis|Arkadhia|Arta|Attiki|Ayion Oros (Mt. Athos)|Dhodhekanisos|Drama|Evritania|Evros|Evvoia|Florina|Fokis|Fthiotis|Grevena|Ilia|Imathia|Ioannina|Irakleion|Kardhitsa|Kastoria|Kavala|Kefallinia|Kerkyra|Khalkidhiki|Khania|Khios|Kikladhes|Kilkis|Korinthia|Kozani|Lakonia|Larisa|Lasithi|Lesvos|Levkas|Magnisia|Messinia|Pella|Pieria|Preveza|Rethimni|Rodhopi|Samos|Serrai|Thesprotia|Thessaloniki|Trikala|Voiotia|Xanthi|Zakinthos";
s_a[88] = "Avannaa (Nordgronland)|Kitaa (Vestgronland)|Tunu (Ostgronland)"
s_a[89] = "Carriacou and Petit Martinique|Saint Andrew|Saint David|Saint George|Saint John|Saint Mark|Saint Patrick";
s_a[90] = "Basse-Terre|Grande-Terre|Iles de la Petite Terre|Iles des Saintes|Marie-Galante";
s_a[91] = "Guam";
s_a[92] = "Alta Verapaz|Baja Verapaz|Chimaltenango|Chiquimula|El Progreso|Escuintla|Guatemala|Huehuetenango|Izabal|Jalapa|Jutiapa|Peten|Quetzaltenango|Quiche|Retalhuleu|Sacatepequez|San Marcos|Santa Rosa|Solola|Suchitepequez|Totonicapan|Zacapa";
s_a[93] = "Castel|Forest|St. Andrew|St. Martin|St. Peter Port|St. Pierre du Bois|St. Sampson|St. Saviour|Torteval|Vale";
s_a[94] = "Beyla|Boffa|Boke|Conakry|Coyah|Dabola|Dalaba|Dinguiraye|Dubreka|Faranah|Forecariah|Fria|Gaoual|Gueckedou|Kankan|Kerouane|Kindia|Kissidougou|Koubia|Koundara|Kouroussa|Labe|Lelouma|Lola|Macenta|Mali|Mamou|Mandiana|Nzerekore|Pita|Siguiri|Telimele|Tougue|Yomou";
s_a[95] = "Bafata|Biombo|Bissau|Bolama-Bijagos|Cacheu|Gabu|Oio|Quinara|Tombali";
s_a[96] = "Barima-Waini|Cuyuni-Mazaruni|Demerara-Mahaica|East Berbice-Corentyne|Essequibo Islands-West Demerara|Mahaica-Berbice|Pomeroon-Supenaam|Potaro-Siparuni|Upper Demerara-Berbice|Upper Takutu-Upper Essequibo";
s_a[97] = "Artibonite|Centre|Grand'Anse|Nord|Nord-Est|Nord-Ouest|Ouest|Sud|Sud-Est";
s_a[98] = "Heard Island and McDonald Islands";
s_a[99] = "Holy See (Vatican City)"
s_a[100] = "Atlantida|Choluteca|Colon|Comayagua|Copan|Cortes|El Paraiso|Francisco Morazan|Gracias a Dios|Intibuca|Islas de la Bahia|La Paz|Lempira|Ocotepeque|Olancho|Santa Barbara|Valle|Yoro";
s_a[101] = "Hong Kong";
s_a[102] = "Howland Island";
s_a[103] = "Bacs-Kiskun|Baranya|Bekes|Bekescsaba|Borsod-Abauj-Zemplen|Budapest|Csongrad|Debrecen|Dunaujvaros|Eger|Fejer|Gyor|Gyor-Moson-Sopron|Hajdu-Bihar|Heves|Hodmezovasarhely|Jasz-Nagykun-Szolnok|Kaposvar|Kecskemet|Komarom-Esztergom|Miskolc|Nagykanizsa|Nograd|Nyiregyhaza|Pecs|Pest|Somogy|Sopron|Szabolcs-Szatmar-Bereg|Szeged|Szekesfehervar|Szolnok|Szombathely|Tatabanya|Tolna|Vas|Veszprem|Veszprem|Zala|Zalaegerszeg";
s_a[104] = "Akranes|Akureyri|Arnessysla|Austur-Bardhastrandarsysla|Austur-Hunavatnssysla|Austur-Skaftafellssysla|Borgarfjardharsysla|Dalasysla|Eyjafjardharsysla|Gullbringusysla|Hafnarfjordhur|Husavik|Isafjordhur|Keflavik|Kjosarsysla|Kopavogur|Myrasysla|Neskaupstadhur|Nordhur-Isafjardharsysla|Nordhur-Mulasys-la|Nordhur-Thingeyjarsysla|Olafsfjordhur|Rangarvallasysla|Reykjavik|Saudharkrokur|Seydhisfjordhur|Siglufjordhur|Skagafjardharsysla|Snaefellsnes-og Hnappadalssysla|Strandasysla|Sudhur-Mulasysla|Sudhur-Thingeyjarsysla|Vesttmannaeyjar|Vestur-Bardhastrandarsysla|Vestur-Hunavatnssysla|Vestur-Isafjardharsysla|Vestur-Skaftafellssysla";
s_a[105] = "Andaman and Nicobar Islands|Andhra Pradesh|Arunachal Pradesh|Assam|Bihar|Chandigarh|Chhattisgarh|Dadra and Nagar Haveli|Daman and Diu|Delhi|Goa|Gujarat|Haryana|Himachal Pradesh|Jammu and Kashmir|Jharkhand|Karnataka|Kerala|Lakshadweep|Madhya Pradesh|Maharashtra|Manipur|Meghalaya|Mizoram|Nagaland|Orissa|Pondicherry|Punjab|Rajasthan|Sikkim|Tamil Nadu|Tripura|Uttar Pradesh|Uttaranchal|West Bengal";
s_a[106] = "Aceh|Bali|Banten|Bengkulu|East Timor|Gorontalo|Irian Jaya|Jakarta Raya|Jambi|Jawa Barat|Jawa Tengah|Jawa Timur|Kalimantan Barat|Kalimantan Selatan|Kalimantan Tengah|Kalimantan Timur|Kepulauan Bangka Belitung|Lampung|Maluku|Maluku Utara|Nusa Tenggara Barat|Nusa Tenggara Timur|Riau|Sulawesi Selatan|Sulawesi Tengah|Sulawesi Tenggara|Sulawesi Utara|Sumatera Barat|Sumatera Selatan|Sumatera Utara|Yogyakarta";
s_a[107] = "Ardabil|Azarbayjan-e Gharbi|Azarbayjan-e Sharqi|Bushehr|Chahar Mahall va Bakhtiari|Esfahan|Fars|Gilan|Golestan|Hamadan|Hormozgan|Ilam|Kerman|Kermanshah|Khorasan|Khuzestan|Kohgiluyeh va Buyer Ahmad|Kordestan|Lorestan|Markazi|Mazandaran|Qazvin|Qom|Semnan|Sistan va Baluchestan|Tehran|Yazd|Zanjan";
s_a[108] = "Al Anbar|Al Basrah|Al Muthanna|Al Qadisiyah|An Najaf|Arbil|As Sulaymaniyah|At Ta'mim|Babil|Baghdad|Dahuk|Dhi Qar|Diyala|Karbala'|Maysan|Ninawa|Salah ad Din|Wasit";
s_a[109] = "Carlow|Cavan|Clare|Cork|Donegal|Dublin|Galway|Kerry|Kildare|Kilkenny|Laois|Leitrim|Limerick|Longford|Louth|Mayo|Meath|Monaghan|Offaly|Roscommon|Sligo|Tipperary|Waterford|Westmeath|Wexford|Wicklow";
s_a[110] = "Antrim|Ards|Armagh|Ballymena|Ballymoney|Banbridge|Belfast|Carrickfergus|Castlereagh|Coleraine|Cookstown|Craigavon|Derry|Down|Dungannon|Fermanagh|Larne|Limavady|Lisburn|Magherafelt|Moyle|Newry and Mourne|Newtownabbey|North Down|Omagh|Strabane";
s_a[111] = "Central|Haifa|Jerusalem|Northern|Southern|Tel Aviv";
s_a[112] = "Abruzzo|Basilicata|Calabria|Campania|Emilia-Romagna|Friuli-Venezia Giulia|Lazio|Liguria|Lombardia|Marche|Molise|Piemonte|Puglia|Sardegna|Sicilia|Toscana|Trentino-Alto Adige|Umbria|Valle d'Aosta|Veneto";
s_a[113] = "Clarendon|Hanover|Kingston|Manchester|Portland|Saint Andrew|Saint Ann|Saint Catherine|Saint Elizabeth|Saint James|Saint Mary|Saint Thomas|Trelawny|Westmoreland";
s_a[114] = "Jan Mayen";
s_a[115] = "Aichi|Akita|Aomori|Chiba|Ehime|Fukui|Fukuoka|Fukushima|Gifu|Gumma|Hiroshima|Hokkaido|Hyogo|Ibaraki|Ishikawa|Iwate|Kagawa|Kagoshima|Kanagawa|Kochi|Kumamoto|Kyoto|Mie|Miyagi|Miyazaki|Nagano|Nagasaki|Nara|Niigata|Oita|Okayama|Okinawa|Osaka|Saga|Saitama|Shiga|Shimane|Shizuoka|Tochigi|Tokushima|Tokyo|Tottori|Toyama|Wakayama|Yamagata|Yamaguchi|Yamanashi";
s_a[116] = "Jarvis Island";
s_a[117] = "Jersey";
s_a[118] = "Johnston Atoll";
s_a[119] = "'Amman|Ajlun|Al 'Aqabah|Al Balqa'|Al Karak|Al Mafraq|At Tafilah|Az Zarqa'|Irbid|Jarash|Ma'an|Madaba";
s_a[120] = "Juan de Nova Island";
s_a[121] = "Almaty|Aqmola|Aqtobe|Astana|Atyrau|Batys Qazaqstan|Bayqongyr|Mangghystau|Ongtustik Qazaqstan|Pavlodar|Qaraghandy|Qostanay|Qyzylorda|Shyghys Qazaqstan|Soltustik Qazaqstan|Zhambyl";
s_a[122] = "Central|Coast|Eastern|Nairobi Area|North Eastern|Nyanza|Rift Valley|Western";
s_a[123] = "Abaiang|Abemama|Aranuka|Arorae|Banaba|Banaba|Beru|Butaritari|Central Gilberts|Gilbert Islands|Kanton|Kiritimati|Kuria|Line Islands|Line Islands|Maiana|Makin|Marakei|Nikunau|Nonouti|Northern Gilberts|Onotoa|Phoenix Islands|Southern Gilberts|Tabiteuea|Tabuaeran|Tamana|Tarawa|Tarawa|Teraina";
s_a[124] = "Chagang-do (Chagang Province)|Hamgyong-bukto (North Hamgyong Province)|Hamgyong-namdo (South Hamgyong Province)|Hwanghae-bukto (North Hwanghae Province)|Hwanghae-namdo (South Hwanghae Province)|Kaesong-si (Kaesong City)|Kangwon-do (Kangwon Province)|Namp'o-si (Namp'o City)|P'yongan-bukto (North P'yongan Province)|P'yongan-namdo (South P'yongan Province)|P'yongyang-si (P'yongyang City)|Yanggang-do (Yanggang Province)"
s_a[125] = "Ch'ungch'ong-bukto|Ch'ungch'ong-namdo|Cheju-do|Cholla-bukto|Cholla-namdo|Inch'on-gwangyoksi|Kangwon-do|Kwangju-gwangyoksi|Kyonggi-do|Kyongsang-bukto|Kyongsang-namdo|Pusan-gwangyoksi|Soul-t'ukpyolsi|Taegu-gwangyoksi|Taejon-gwangyoksi|Ulsan-gwangyoksi";
s_a[126] = "Al 'Asimah|Al Ahmadi|Al Farwaniyah|Al Jahra'|Hawalli";
s_a[127] = "Batken Oblasty|Bishkek Shaary|Chuy Oblasty (Bishkek)|Jalal-Abad Oblasty|Naryn Oblasty|Osh Oblasty|Talas Oblasty|Ysyk-Kol Oblasty (Karakol)"
s_a[128] = "Attapu|Bokeo|Bolikhamxai|Champasak|Houaphan|Khammouan|Louangnamtha|Louangphabang|Oudomxai|Phongsali|Salavan|Savannakhet|Viangchan|Viangchan|Xaignabouli|Xaisomboun|Xekong|Xiangkhoang";
s_a[129] = "Aizkraukles Rajons|Aluksnes Rajons|Balvu Rajons|Bauskas Rajons|Cesu Rajons|Daugavpils|Daugavpils Rajons|Dobeles Rajons|Gulbenes Rajons|Jekabpils Rajons|Jelgava|Jelgavas Rajons|Jurmala|Kraslavas Rajons|Kuldigas Rajons|Leipaja|Liepajas Rajons|Limbazu Rajons|Ludzas Rajons|Madonas Rajons|Ogres Rajons|Preilu Rajons|Rezekne|Rezeknes Rajons|Riga|Rigas Rajons|Saldus Rajons|Talsu Rajons|Tukuma Rajons|Valkas Rajons|Valmieras Rajons|Ventspils|Ventspils Rajons";
s_a[130] = "Beyrouth|Ech Chimal|Ej Jnoub|El Bekaa|Jabal Loubnane";
s_a[131] = "Berea|Butha-Buthe|Leribe|Mafeteng|Maseru|Mohales Hoek|Mokhotlong|Qacha's Nek|Quthing|Thaba-Tseka";
s_a[132] = "Bomi|Bong|Grand Bassa|Grand Cape Mount|Grand Gedeh|Grand Kru|Lofa|Margibi|Maryland|Montserrado|Nimba|River Cess|Sinoe";
s_a[133] = "Ajdabiya|Al 'Aziziyah|Al Fatih|Al Jabal al Akhdar|Al Jufrah|Al Khums|Al Kufrah|An Nuqat al Khams|Ash Shati'|Awbari|Az Zawiyah|Banghazi|Darnah|Ghadamis|Gharyan|Misratah|Murzuq|Sabha|Sawfajjin|Surt|Tarabulus|Tarhunah|Tubruq|Yafran|Zlitan";
s_a[134] = "Balzers|Eschen|Gamprin|Mauren|Planken|Ruggell|Schaan|Schellenberg|Triesen|Triesenberg|Vaduz";
s_a[135] = "Akmenes Rajonas|Alytaus Rajonas|Alytus|Anyksciu Rajonas|Birstonas|Birzu Rajonas|Druskininkai|Ignalinos Rajonas|Jonavos Rajonas|Joniskio Rajonas|Jurbarko Rajonas|Kaisiadoriu Rajonas|Kaunas|Kauno Rajonas|Kedainiu Rajonas|Kelmes Rajonas|Klaipeda|Klaipedos Rajonas|Kretingos Rajonas|Kupiskio Rajonas|Lazdiju Rajonas|Marijampole|Marijampoles Rajonas|Mazeikiu Rajonas|Moletu Rajonas|Neringa Pakruojo Rajonas|Palanga|Panevezio Rajonas|Panevezys|Pasvalio Rajonas|Plunges Rajonas|Prienu Rajonas|Radviliskio Rajonas|Raseiniu Rajonas|Rokiskio Rajonas|Sakiu Rajonas|Salcininku Rajonas|Siauliai|Siauliu Rajonas|Silales Rajonas|Silutes Rajonas|Sirvintu Rajonas|Skuodo Rajonas|Svencioniu Rajonas|Taurages Rajonas|Telsiu Rajonas|Traku Rajonas|Ukmerges Rajonas|Utenos Rajonas|Varenos Rajonas|Vilkaviskio Rajonas|Vilniaus Rajonas|Vilnius|Zarasu Rajonas";
s_a[136] = "Diekirch|Grevenmacher|Luxembourg";
s_a[137] = "Macau";
s_a[138] = "Aracinovo|Bac|Belcista|Berovo|Bistrica|Bitola|Blatec|Bogdanci|Bogomila|Bogovinje|Bosilovo|Brvenica|Cair (Skopje)|Capari|Caska|Cegrane|Centar (Skopje)|Centar Zupa|Cesinovo|Cucer-Sandevo|Debar|Delcevo|Delogozdi|Demir Hisar|Demir Kapija|Dobrusevo|Dolna Banjica|Dolneni|Dorce Petrov (Skopje)|Drugovo|Dzepciste|Gazi Baba (Skopje)|Gevgelija|Gostivar|Gradsko|Ilinden|Izvor|Jegunovce|Kamenjane|Karbinci|Karpos (Skopje)|Kavadarci|Kicevo|Kisela Voda (Skopje)|Klecevce|Kocani|Konce|Kondovo|Konopiste|Kosel|Kratovo|Kriva Palanka|Krivogastani|Krusevo|Kuklis|Kukurecani|Kumanovo|Labunista|Lipkovo|Lozovo|Lukovo|Makedonska Kamenica|Makedonski Brod|Mavrovi Anovi|Meseista|Miravci|Mogila|Murtino|Negotino|Negotino-Poloska|Novaci|Novo Selo|Oblesevo|Ohrid|Orasac|Orizari|Oslomej|Pehcevo|Petrovec|Plasnia|Podares|Prilep|Probistip|Radovis|Rankovce|Resen|Rosoman|Rostusa|Samokov|Saraj|Sipkovica|Sopiste|Sopotnika|Srbinovo|Star Dojran|Staravina|Staro Nagoricane|Stip|Struga|Strumica|Studenicani|Suto Orizari (Skopje)|Sveti Nikole|Tearce|Tetovo|Topolcani|Valandovo|Vasilevo|Veles|Velesta|Vevcani|Vinica|Vitoliste|Vranestica|Vrapciste|Vratnica|Vrutok|Zajas|Zelenikovo|Zileno|Zitose|Zletovo|Zrnovci";
s_a[139] = "Antananarivo|Antsiranana|Fianarantsoa|Mahajanga|Toamasina|Toliara";
s_a[140] = "Balaka|Blantyre|Chikwawa|Chiradzulu|Chitipa|Dedza|Dowa|Karonga|Kasungu|Likoma|Lilongwe|Machinga (Kasupe)|Mangochi|Mchinji|Mulanje|Mwanza|Mzimba|Nkhata Bay|Nkhotakota|Nsanje|Ntcheu|Ntchisi|Phalombe|Rumphi|Salima|Thyolo|Zomba";
s_a[141] = "Johor|Kedah|Kelantan|Labuan|Melaka|Negeri Sembilan|Pahang|Perak|Perlis|Pulau Pinang|Sabah|Sarawak|Selangor|Terengganu|Wilayah Persekutuan";
s_a[142] = "Alifu|Baa|Dhaalu|Faafu|Gaafu Alifu|Gaafu Dhaalu|Gnaviyani|Haa Alifu|Haa Dhaalu|Kaafu|Laamu|Lhaviyani|Maale|Meemu|Noonu|Raa|Seenu|Shaviyani|Thaa|Vaavu";
s_a[143] = "Gao|Kayes|Kidal|Koulikoro|Mopti|Segou|Sikasso|Tombouctou";
s_a[144] = "Valletta";
s_a[145] = "Man, Isle of";
s_a[146] = "Ailinginae|Ailinglaplap|Ailuk|Arno|Aur|Bikar|Bikini|Bokak|Ebon|Enewetak|Erikub|Jabat|Jaluit|Jemo|Kili|Kwajalein|Lae|Lib|Likiep|Majuro|Maloelap|Mejit|Mili|Namorik|Namu|Rongelap|Rongrik|Toke|Ujae|Ujelang|Utirik|Wotho|Wotje";
s_a[147] = "Martinique";
s_a[148] = "Adrar|Assaba|Brakna|Dakhlet Nouadhibou|Gorgol|Guidimaka|Hodh Ech Chargui|Hodh El Gharbi|Inchiri|Nouakchott|Tagant|Tiris Zemmour|Trarza";
s_a[149] = "Agalega Islands|Black River|Cargados Carajos Shoals|Flacq|Grand Port|Moka|Pamplemousses|Plaines Wilhems|Port Louis|Riviere du Rempart|Rodrigues|Savanne";
s_a[150] = "Mayotte";
s_a[151] = "Aguascalientes|Baja California|Baja California Sur|Campeche|Chiapas|Chihuahua|Coahuila de Zaragoza|Colima|Distrito Federal|Durango|Guanajuato|Guerrero|Hidalgo|Jalisco|Mexico|Michoacan de Ocampo|Morelos|Nayarit|Nuevo Leon|Oaxaca|Puebla|Queretaro de Arteaga|Quintana Roo|San Luis Potosi|Sinaloa|Sonora|Tabasco|Tamaulipas|Tlaxcala|Veracruz-Llave|Yucatan|Zacatecas";
s_a[152] = "Chuuk (Truk)|Kosrae|Pohnpei|Yap";
s_a[153] = "Midway Islands";
s_a[154] = "Balti|Cahul|Chisinau|Chisinau|Dubasari|Edinet|Gagauzia|Lapusna|Orhei|Soroca|Tighina|Ungheni";
s_a[155] = "Fontvieille|La Condamine|Monaco-Ville|Monte-Carlo";
s_a[156] = "Arhangay|Bayan-Olgiy|Bayanhongor|Bulgan|Darhan|Dornod|Dornogovi|Dundgovi|Dzavhan|Erdenet|Govi-Altay|Hentiy|Hovd|Hovsgol|Omnogovi|Ovorhangay|Selenge|Suhbaatar|Tov|Ulaanbaatar|Uvs";
s_a[157] = "Saint Anthony|Saint Georges|Saint Peter's";
s_a[158] = "Agadir|Al Hoceima|Azilal|Ben Slimane|Beni Mellal|Boulemane|Casablanca|Chaouen|El Jadida|El Kelaa des Srarhna|Er Rachidia|Essaouira|Fes|Figuig|Guelmim|Ifrane|Kenitra|Khemisset|Khenifra|Khouribga|Laayoune|Larache|Marrakech|Meknes|Nador|Ouarzazate|Oujda|Rabat-Sale|Safi|Settat|Sidi Kacem|Tan-Tan|Tanger|Taounate|Taroudannt|Tata|Taza|Tetouan|Tiznit";
s_a[159] = "Cabo Delgado|Gaza|Inhambane|Manica|Maputo|Nampula|Niassa|Sofala|Tete|Zambezia";
s_a[160] = "Caprivi|Erongo|Hardap|Karas|Khomas|Kunene|Ohangwena|Okavango|Omaheke|Omusati|Oshana|Oshikoto|Otjozondjupa";
s_a[161] = "Aiwo|Anabar|Anetan|Anibare|Baiti|Boe|Buada|Denigomodu|Ewa|Ijuw|Meneng|Nibok|Uaboe|Yaren";
s_a[162] = "Bagmati|Bheri|Dhawalagiri|Gandaki|Janakpur|Karnali|Kosi|Lumbini|Mahakali|Mechi|Narayani|Rapti|Sagarmatha|Seti";
s_a[163] = "Drenthe|Flevoland|Friesland|Gelderland|Groningen|Limburg|Noord-Brabant|Noord-Holland|Overijssel|Utrecht|Zeeland|Zuid-Holland";
s_a[164] = "Netherlands Antilles";
s_a[165] = "Iles Loyaute|Nord|Sud";
s_a[166] = "Akaroa|Amuri|Ashburton|Bay of Islands|Bruce|Buller|Chatham Islands|Cheviot|Clifton|Clutha|Cook|Dannevirke|Egmont|Eketahuna|Ellesmere|Eltham|Eyre|Featherston|Franklin|Golden Bay|Great Barrier Island|Grey|Hauraki Plains|Hawera|Hawke's Bay|Heathcote|Hikurangi|Hobson|Hokianga|Horowhenua|Hurunui|Hutt|Inangahua|Inglewood|Kaikoura|Kairanga|Kiwitea|Lake|Mackenzie|Malvern|Manaia|Manawatu|Mangonui|Maniototo|Marlborough|Masterton|Matamata|Mount Herbert|Ohinemuri|Opotiki|Oroua|Otamatea|Otorohanga|Oxford|Pahiatua|Paparua|Patea|Piako|Pohangina|Raglan|Rangiora|Rangitikei|Rodney|Rotorua|Runanga|Saint Kilda|Silverpeaks|Southland|Stewart Island|Stratford|Strathallan|Taranaki|Taumarunui|Taupo|Tauranga|Thames-Coromandel|Tuapeka|Vincent|Waiapu|Waiheke|Waihemo|Waikato|Waikohu|Waimairi|Waimarino|Waimate|Waimate West|Waimea|Waipa|Waipawa|Waipukurau|Wairarapa South|Wairewa|Wairoa|Waitaki|Waitomo|Waitotara|Wallace|Wanganui|Waverley|Westland|Whakatane|Whangarei|Whangaroa|Woodville";
s_a[167] = "Atlantico Norte|Atlantico Sur|Boaco|Carazo|Chinandega|Chontales|Esteli|Granada|Jinotega|Leon|Madriz|Managua|Masaya|Matagalpa|Nueva Segovia|Rio San Juan|Rivas";
s_a[168] = "Agadez|Diffa|Dosso|Maradi|Niamey|Tahoua|Tillaberi|Zinder";
s_a[169] = "Abia|Abuja Federal Capital Territory|Adamawa|Akwa Ibom|Anambra|Bauchi|Bayelsa|Benue|Borno|Cross River|Delta|Ebonyi|Edo|Ekiti|Enugu|Gombe|Imo|Jigawa|Kaduna|Kano|Katsina|Kebbi|Kogi|Kwara|Lagos|Nassarawa|Niger|Ogun|Ondo|Osun|Oyo|Plateau|Rivers|Sokoto|Taraba|Yobe|Zamfara";
s_a[170] = "Niue";
s_a[171] = "Norfolk Island";
s_a[172] = "Northern Islands|Rota|Saipan|Tinian";
s_a[173] = "Akershus|Aust-Agder|Buskerud|Finnmark|Hedmark|Hordaland|More og Romsdal|Nord-Trondelag|Nordland|Oppland|Oslo|Ostfold|Rogaland|Sogn og Fjordane|Sor-Trondelag|Telemark|Troms|Vest-Agder|Vestfold";
s_a[174] = "Ad Dakhiliyah|Al Batinah|Al Wusta|Ash Sharqiyah|Az Zahirah|Masqat|Musandam|Zufar";
s_a[175] = "Balochistan|Federally Administered Tribal Areas|Islamabad Capital Territory|North-West Frontier Province|Punjab|Sindh";
s_a[176] = "Aimeliik|Airai|Angaur|Hatobohei|Kayangel|Koror|Melekeok|Ngaraard|Ngarchelong|Ngardmau|Ngatpang|Ngchesar|Ngeremlengui|Ngiwal|Palau Island|Peleliu|Sonsoral|Tobi";
s_a[177] = "Bocas del Toro|Chiriqui|Cocle|Colon|Darien|Herrera|Los Santos|Panama|San Blas|Veraguas";
s_a[178] = "Bougainville|Central|Chimbu|East New Britain|East Sepik|Eastern Highlands|Enga|Gulf|Madang|Manus|Milne Bay|Morobe|National Capital|New Ireland|Northern|Sandaun|Southern Highlands|West New Britain|Western|Western Highlands";
s_a[179] = "Alto Paraguay|Alto Parana|Amambay|Asuncion (city)|Boqueron|Caaguazu|Caazapa|Canindeyu|Central|Concepcion|Cordillera|Guaira|Itapua|Misiones|Neembucu|Paraguari|Presidente Hayes|San Pedro";
s_a[180] = "Amazonas|Ancash|Apurimac|Arequipa|Ayacucho|Cajamarca|Callao|Cusco|Huancavelica|Huanuco|Ica|Junin|La Libertad|Lambayeque|Lima|Loreto|Madre de Dios|Moquegua|Pasco|Piura|Puno|San Martin|Tacna|Tumbes|Ucayali";
s_a[181] = "Abra|Agusan del Norte|Agusan del Sur|Aklan|Albay|Angeles|Antique|Aurora|Bacolod|Bago|Baguio|Bais|Basilan|Basilan City|Bataan|Batanes|Batangas|Batangas City|Benguet|Bohol|Bukidnon|Bulacan|Butuan|Cabanatuan|Cadiz|Cagayan|Cagayan de Oro|Calbayog|Caloocan|Camarines Norte|Camarines Sur|Camiguin|Canlaon|Capiz|Catanduanes|Cavite|Cavite City|Cebu|Cebu City|Cotabato|Dagupan|Danao|Dapitan|Davao City Davao|Davao del Sur|Davao Oriental|Dipolog|Dumaguete|Eastern Samar|General Santos|Gingoog|Ifugao|Iligan|Ilocos Norte|Ilocos Sur|Iloilo|Iloilo City|Iriga|Isabela|Kalinga-Apayao|La Carlota|La Union|Laguna|Lanao del Norte|Lanao del Sur|Laoag|Lapu-Lapu|Legaspi|Leyte|Lipa|Lucena|Maguindanao|Mandaue|Manila|Marawi|Marinduque|Masbate|Mindoro Occidental|Mindoro Oriental|Misamis Occidental|Misamis Oriental|Mountain|Naga|Negros Occidental|Negros Oriental|North Cotabato|Northern Samar|Nueva Ecija|Nueva Vizcaya|Olongapo|Ormoc|Oroquieta|Ozamis|Pagadian|Palawan|Palayan|Pampanga|Pangasinan|Pasay|Puerto Princesa|Quezon|Quezon City|Quirino|Rizal|Romblon|Roxas|Samar|San Carlos (in Negros Occidental)|San Carlos (in Pangasinan)|San Jose|San Pablo|Silay|Siquijor|Sorsogon|South Cotabato|Southern Leyte|Sultan Kudarat|Sulu|Surigao|Surigao del Norte|Surigao del Sur|Tacloban|Tagaytay|Tagbilaran|Tangub|Tarlac|Tawitawi|Toledo|Trece Martires|Zambales|Zamboanga|Zamboanga del Norte|Zamboanga del Sur";
s_a[182] = "Pitcaim Islands";
s_a[183] = "Dolnoslaskie|Kujawsko-Pomorskie|Lodzkie|Lubelskie|Lubuskie|Malopolskie|Mazowieckie|Opolskie|Podkarpackie|Podlaskie|Pomorskie|Slaskie|Swietokrzyskie|Warminsko-Mazurskie|Wielkopolskie|Zachodniopomorskie";
s_a[184] = "Acores (Azores)|Aveiro|Beja|Braga|Braganca|Castelo Branco|Coimbra|Evora|Faro|Guarda|Leiria|Lisboa|Madeira|Portalegre|Porto|Santarem|Setubal|Viana do Castelo|Vila Real|Viseu";
s_a[185] = "Adjuntas|Aguada|Aguadilla|Aguas Buenas|Aibonito|Anasco|Arecibo|Arroyo|Barceloneta|Barranquitas|Bayamon|Cabo Rojo|Caguas|Camuy|Canovanas|Carolina|Catano|Cayey|Ceiba|Ciales|Cidra|Coamo|Comerio|Corozal|Culebra|Dorado|Fajardo|Florida|Guanica|Guayama|Guayanilla|Guaynabo|Gurabo|Hatillo|Hormigueros|Humacao|Isabela|Jayuya|Juana Diaz|Juncos|Lajas|Lares|Las Marias|Las Piedras|Loiza|Luquillo|Manati|Maricao|Maunabo|Mayaguez|Moca|Morovis|Naguabo|Naranjito|Orocovis|Patillas|Penuelas|Ponce|Quebradillas|Rincon|Rio Grande|Sabana Grande|Salinas|San German|San Juan|San Lorenzo|San Sebastian|Santa Isabel|Toa Alta|Toa Baja|Trujillo Alto|Utuado|Vega Alta|Vega Baja|Vieques|Villalba|Yabucoa|Yauco";
s_a[186] = "Ad Dawhah|Al Ghuwayriyah|Al Jumayliyah|Al Khawr|Al Wakrah|Ar Rayyan|Jarayan al Batinah|Madinat ash Shamal|Umm Salal";
s_a[187] = "Reunion";
s_a[188] = "Alba|Arad|Arges|Bacau|Bihor|Bistrita-Nasaud|Botosani|Braila|Brasov|Bucuresti|Buzau|Calarasi|Caras-Severin|Cluj|Constanta|Covasna|Dimbovita|Dolj|Galati|Giurgiu|Gorj|Harghita|Hunedoara|Ialomita|Iasi|Maramures|Mehedinti|Mures|Neamt|Olt|Prahova|Salaj|Satu Mare|Sibiu|Suceava|Teleorman|Timis|Tulcea|Vaslui|Vilcea|Vrancea";
s_a[189] = "Adygeya (Maykop)|Aginskiy Buryatskiy (Aginskoye)|Altay (Gorno-Altaysk)|Altayskiy (Barnaul)|Amurskaya (Blagoveshchensk)|Arkhangel'skaya|Astrakhanskaya|Bashkortostan (Ufa)|Belgorodskaya|Bryanskaya|Buryatiya (Ulan-Ude)|Chechnya (Groznyy)|Chelyabinskaya|Chitinskaya|Chukotskiy (Anadyr')|Chuvashiya (Cheboksary)|Dagestan (Makhachkala)|Evenkiyskiy (Tura)|Ingushetiya (Nazran')|Irkutskaya|Ivanovskaya|Kabardino-Balkariya (Nal'chik)|Kaliningradskaya|Kalmykiya (Elista)|Kaluzhskaya|Kamchatskaya (Petropavlovsk-Kamchatskiy)|Karachayevo-Cherkesiya (Cherkessk)|Kareliya (Petrozavodsk)|Kemerovskaya|Khabarovskiy|Khakasiya (Abakan)|Khanty-Mansiyskiy (Khanty-Mansiysk)|Kirovskaya|Komi (Syktyvkar)|Komi-Permyatskiy (Kudymkar)|Koryakskiy (Palana)|Kostromskaya|Krasnodarskiy|Krasnoyarskiy|Kurganskaya|Kurskaya|Leningradskaya|Lipetskaya|Magadanskaya|Mariy-El (Yoshkar-Ola)|Mordoviya (Saransk)|Moskovskaya|Moskva (Moscow)|Murmanskaya|Nenetskiy (Nar'yan-Mar)|Nizhegorodskaya|Novgorodskaya|Novosibirskaya|Omskaya|Orenburgskaya|Orlovskaya (Orel)|Penzenskaya|Permskaya|Primorskiy (Vladivostok)|Pskovskaya|Rostovskaya|Ryazanskaya|Sakha (Yakutsk)|Sakhalinskaya (Yuzhno-Sakhalinsk)|Samarskaya|Sankt-Peterburg (Saint Petersburg)|Saratovskaya|Severnaya Osetiya-Alaniya [North Ossetia] (Vladikavkaz)|Smolenskaya|Stavropol'skiy|Sverdlovskaya (Yekaterinburg)|Tambovskaya|Tatarstan (Kazan')|Taymyrskiy (Dudinka)|Tomskaya|Tul'skaya|Tverskaya|Tyumenskaya|Tyva (Kyzyl)|Udmurtiya (Izhevsk)|Ul'yanovskaya|Ust'-Ordynskiy Buryatskiy (Ust'-Ordynskiy)|Vladimirskaya|Volgogradskaya|Vologodskaya|Voronezhskaya|Yamalo-Nenetskiy (Salekhard)|Yaroslavskaya|Yevreyskaya";
s_a[190] = "Butare|Byumba|Cyangugu|Gikongoro|Gisenyi|Gitarama|Kibungo|Kibuye|Kigali Rurale|Kigali-ville|Ruhengeri|Umutara";
s_a[191] = "Ascension|Saint Helena|Tristan da Cunha";
s_a[192] = "Christ Church Nichola Town|Saint Anne Sandy Point|Saint George Basseterre|Saint George Gingerland|Saint James Windward|Saint John Capisterre|Saint John Figtree|Saint Mary Cayon|Saint Paul Capisterre|Saint Paul Charlestown|Saint Peter Basseterre|Saint Thomas Lowland|Saint Thomas Middle Island|Trinity Palmetto Point";
s_a[193] = "Anse-la-Raye|Castries|Choiseul|Dauphin|Dennery|Gros Islet|Laborie|Micoud|Praslin|Soufriere|Vieux Fort";
s_a[194] = "Miquelon|Saint Pierre";
s_a[195] = "Charlotte|Grenadines|Saint Andrew|Saint David|Saint George|Saint Patrick";
s_a[196] = "A'ana|Aiga-i-le-Tai|Atua|Fa'asaleleaga|Gaga'emauga|Gagaifomauga|Palauli|Satupa'itea|Tuamasaga|Va'a-o-Fonoti|Vaisigano";
s_a[197] = "Acquaviva|Borgo Maggiore|Chiesanuova|Domagnano|Faetano|Fiorentino|Monte Giardino|San Marino|Serravalle";
s_a[198] = "Principe|Sao Tome";
s_a[199] = "'Asir|Al Bahah|Al Hudud ash Shamaliyah|Al Jawf|Al Madinah|Al Qasim|Ar Riyad|Ash Sharqiyah (Eastern Province)|Ha'il|Jizan|Makkah|Najran|Tabuk";
s_a[200] = "Aberdeen City|Aberdeenshire|Angus|Argyll and Bute|City of Edinburgh|Clackmannanshire|Dumfries and Galloway|Dundee City|East Ayrshire|East Dunbartonshire|East Lothian|East Renfrewshire|Eilean Siar (Western Isles)|Falkirk|Fife|Glasgow City|Highland|Inverclyde|Midlothian|Moray|North Ayrshire|North Lanarkshire|Orkney Islands|Perth and Kinross|Renfrewshire|Shetland Islands|South Ayrshire|South Lanarkshire|Stirling|The Scottish Borders|West Dunbartonshire|West Lothian";
s_a[201] = "Dakar|Diourbel|Fatick|Kaolack|Kolda|Louga|Saint-Louis|Tambacounda|Thies|Ziguinchor";
s_a[202] = "Anse aux Pins|Anse Boileau|Anse Etoile|Anse Louis|Anse Royale|Baie Lazare|Baie Sainte Anne|Beau Vallon|Bel Air|Bel Ombre|Cascade|Glacis|Grand' Anse (on Mahe)|Grand' Anse (on Praslin)|La Digue|La Riviere Anglaise|Mont Buxton|Mont Fleuri|Plaisance|Pointe La Rue|Port Glaud|Saint Louis|Takamaka";
s_a[203] = "Eastern|Northern|Southern|Western";
s_a[204] = "Singapore";
s_a[205] = "Banskobystricky|Bratislavsky|Kosicky|Nitriansky|Presovsky|Trenciansky|Trnavsky|Zilinsky";
s_a[206] = "Ajdovscina|Beltinci|Bled|Bohinj|Borovnica|Bovec|Brda|Brezice|Brezovica|Cankova-Tisina|Celje|Cerklje na Gorenjskem|Cerknica|Cerkno|Crensovci|Crna na Koroskem|Crnomelj|Destrnik-Trnovska Vas|Divaca|Dobrepolje|Dobrova-Horjul-Polhov Gradec|Dol pri Ljubljani|Domzale|Dornava|Dravograd|Duplek|Gorenja Vas-Poljane|Gorisnica|Gornja Radgona|Gornji Grad|Gornji Petrovci|Grosuplje|Hodos Salovci|Hrastnik|Hrpelje-Kozina|Idrija|Ig|Ilirska Bistrica|Ivancna Gorica|Izola|Jesenice|Jursinci|Kamnik|Kanal|Kidricevo|Kobarid|Kobilje|Kocevje|Komen|Koper|Kozje|Kranj|Kranjska Gora|Krsko|Kungota|Kuzma|Lasko|Lenart|Lendava|Litija|Ljubljana|Ljubno|Ljutomer|Logatec|Loska Dolina|Loski Potok|Luce|Lukovica|Majsperk|Maribor|Medvode|Menges|Metlika|Mezica|Miren-Kostanjevica|Mislinja|Moravce|Moravske Toplice|Mozirje|Murska Sobota|Muta|Naklo|Nazarje|Nova Gorica|Novo Mesto|Odranci|Ormoz|Osilnica|Pesnica|Piran|Pivka|Podcetrtek|Podvelka-Ribnica|Postojna|Preddvor|Ptuj|Puconci|Race-Fram|Radece|Radenci|Radlje ob Dravi|Radovljica|Ravne-Prevalje|Ribnica|Rogasevci|Rogaska Slatina|Rogatec|Ruse|Semic|Sencur|Sentilj|Sentjernej|Sentjur pri Celju|Sevnica|Sezana|Skocjan|Skofja Loka|Skofljica|Slovenj Gradec|Slovenska Bistrica|Slovenske Konjice|Smarje pri Jelsah|Smartno ob Paki|Sostanj|Starse|Store|Sveti Jurij|Tolmin|Trbovlje|Trebnje|Trzic|Turnisce|Velenje|Velike Lasce|Videm|Vipava|Vitanje|Vodice|Vojnik|Vrhnika|Vuzenica|Zagorje ob Savi|Zalec|Zavrc|Zelezniki|Ziri|Zrece";
s_a[207] = "Bellona|Central|Choiseul (Lauru)|Guadalcanal|Honiara|Isabel|Makira|Malaita|Rennell|Temotu|Western";
s_a[208] = "Awdal|Bakool|Banaadir|Bari|Bay|Galguduud|Gedo|Hiiraan|Jubbada Dhexe|Jubbada Hoose|Mudug|Nugaal|Sanaag|Shabeellaha Dhexe|Shabeellaha Hoose|Sool|Togdheer|Woqooyi Galbeed";
s_a[209] = "Eastern Cape|Free State|Gauteng|KwaZulu-Natal|Mpumalanga|North-West|Northern Cape|Northern Province|Western Cape";
s_a[210] = "Bird Island|Bristol Island|Clerke Rocks|Montagu Island|Saunders Island|South Georgia|Southern Thule|Traversay Islands";
s_a[211] = "Andalucia|Aragon|Asturias|Baleares (Balearic Islands)|Canarias (Canary Islands)|Cantabria|Castilla y Leon|Castilla-La Mancha|Cataluna|Ceuta|Communidad Valencian|Extremadura|Galicia|Islas Chafarinas|La Rioja|Madrid|Melilla|Murcia|Navarra|Pais Vasco (Basque Country)|Penon de Alhucemas|Penon de Velez de la Gomera";
s_a[212] = "Spratly Islands";
s_a[213] = "Central|Eastern|North Central|North Eastern|North Western|Northern|Sabaragamuwa|Southern|Uva|Western";
s_a[214] = "A'ali an Nil|Al Bahr al Ahmar|Al Buhayrat|Al Jazirah|Al Khartum|Al Qadarif|Al Wahdah|An Nil al Abyad|An Nil al Azraq|Ash Shamaliyah|Bahr al Jabal|Gharb al Istiwa'iyah|Gharb Bahr al Ghazal|Gharb Darfur|Gharb Kurdufan|Janub Darfur|Janub Kurdufan|Junqali|Kassala|Nahr an Nil|Shamal Bahr al Ghazal|Shamal Darfur|Shamal Kurdufan|Sharq al Istiwa'iyah|Sinnar|Warab";
s_a[215] = "Brokopondo|Commewijne|Coronie|Marowijne|Nickerie|Para|Paramaribo|Saramacca|Sipaliwini|Wanica";
s_a[216] = "Barentsoya|Bjornoya|Edgeoya|Hopen|Kvitoya|Nordaustandet|Prins Karls Forland|Spitsbergen";
s_a[217] = "Hhohho|Lubombo|Manzini|Shiselweni";
s_a[218] = "Blekinge|Dalarnas|Gavleborgs|Gotlands|Hallands|Jamtlands|Jonkopings|Kalmar|Kronobergs|Norrbottens|Orebro|Ostergotlands|Skane|Sodermanlands|Stockholms|Uppsala|Varmlands|Vasterbottens|Vasternorrlands|Vastmanlands|Vastra Gotalands";
s_a[219] = "Aargau|Ausser-Rhoden|Basel-Landschaft|Basel-Stadt|Bern|Fribourg|Geneve|Glarus|Graubunden|Inner-Rhoden|Jura|Luzern|Neuchatel|Nidwalden|Obwalden|Sankt Gallen|Schaffhausen|Schwyz|Solothurn|Thurgau|Ticino|Uri|Valais|Vaud|Zug|Zurich";
s_a[220] = "Al Hasakah|Al Ladhiqiyah|Al Qunaytirah|Ar Raqqah|As Suwayda'|Dar'a|Dayr az Zawr|Dimashq|Halab|Hamah|Hims|Idlib|Rif Dimashq|Tartus";
s_a[221] = "Chang-hua|Chi-lung|Chia-i|Chia-i|Chung-hsing-hsin-ts'un|Hsin-chu|Hsin-chu|Hua-lien|I-lan|Kao-hsiung|Kao-hsiung|Miao-li|Nan-t'ou|P'eng-hu|P'ing-tung|T'ai-chung|T'ai-chung|T'ai-nan|T'ai-nan|T'ai-pei|T'ai-pei|T'ai-tung|T'ao-yuan|Yun-lin";
s_a[222] = "Viloyati Khatlon|Viloyati Leninobod|Viloyati Mukhtori Kuhistoni Badakhshon";
s_a[223] = "Arusha|Dar es Salaam|Dodoma|Iringa|Kagera|Kigoma|Kilimanjaro|Lindi|Mara|Mbeya|Morogoro|Mtwara|Mwanza|Pemba North|Pemba South|Pwani|Rukwa|Ruvuma|Shinyanga|Singida|Tabora|Tanga|Zanzibar Central/South|Zanzibar North|Zanzibar Urban/West";
s_a[224] = "Amnat Charoen|Ang Thong|Buriram|Chachoengsao|Chai Nat|Chaiyaphum|Chanthaburi|Chiang Mai|Chiang Rai|Chon Buri|Chumphon|Kalasin|Kamphaeng Phet|Kanchanaburi|Khon Kaen|Krabi|Krung Thep Mahanakhon (Bangkok)|Lampang|Lamphun|Loei|Lop Buri|Mae Hong Son|Maha Sarakham|Mukdahan|Nakhon Nayok|Nakhon Pathom|Nakhon Phanom|Nakhon Ratchasima|Nakhon Sawan|Nakhon Si Thammarat|Nan|Narathiwat|Nong Bua Lamphu|Nong Khai|Nonthaburi|Pathum Thani|Pattani|Phangnga|Phatthalung|Phayao|Phetchabun|Phetchaburi|Phichit|Phitsanulok|Phra Nakhon Si Ayutthaya|Phrae|Phuket|Prachin Buri|Prachuap Khiri Khan|Ranong|Ratchaburi|Rayong|Roi Et|Sa Kaeo|Sakon Nakhon|Samut Prakan|Samut Sakhon|Samut Songkhram|Sara Buri|Satun|Sing Buri|Sisaket|Songkhla|Sukhothai|Suphan Buri|Surat Thani|Surin|Tak|Trang|Trat|Ubon Ratchathani|Udon Thani|Uthai Thani|Uttaradit|Yala|Yasothon";
s_a[225] = "Tobago";
s_a[226] = "De La Kara|Des Plateaux|Des Savanes|Du Centre|Maritime";
s_a[227] = "Atafu|Fakaofo|Nukunonu";
s_a[228] = "Ha'apai|Tongatapu|Vava'u";
s_a[229] = "Arima|Caroni|Mayaro|Nariva|Port-of-Spain|Saint Andrew|Saint David|Saint George|Saint Patrick|San Fernando|Victoria";
s_a[230] = "Ariana|Beja|Ben Arous|Bizerte|El Kef|Gabes|Gafsa|Jendouba|Kairouan|Kasserine|Kebili|Mahdia|Medenine|Monastir|Nabeul|Sfax|Sidi Bou Zid|Siliana|Sousse|Tataouine|Tozeur|Tunis|Zaghouan";
s_a[231] = "Adana|Adiyaman|Afyon|Agri|Aksaray|Amasya|Ankara|Antalya|Ardahan|Artvin|Aydin|Balikesir|Bartin|Batman|Bayburt|Bilecik|Bingol|Bitlis|Bolu|Burdur|Bursa|Canakkale|Cankiri|Corum|Denizli|Diyarbakir|Duzce|Edirne|Elazig|Erzincan|Erzurum|Eskisehir|Gaziantep|Giresun|Gumushane|Hakkari|Hatay|Icel|Igdir|Isparta|Istanbul|Izmir|Kahramanmaras|Karabuk|Karaman|Kars|Kastamonu|Kayseri|Kilis|Kirikkale|Kirklareli|Kirsehir|Kocaeli|Konya|Kutahya|Malatya|Manisa|Mardin|Mugla|Mus|Nevsehir|Nigde|Ordu|Osmaniye|Rize|Sakarya|Samsun|Sanliurfa|Siirt|Sinop|Sirnak|Sivas|Tekirdag|Tokat|Trabzon|Tunceli|Usak|Van|Yalova|Yozgat|Zonguldak";
s_a[232] = "Ahal Welayaty|Balkan Welayaty|Dashhowuz Welayaty|Lebap Welayaty|Mary Welayaty";
s_a[233] = "Tuvalu";
s_a[234] = "Adjumani|Apac|Arua|Bugiri|Bundibugyo|Bushenyi|Busia|Gulu|Hoima|Iganga|Jinja|Kabale|Kabarole|Kalangala|Kampala|Kamuli|Kapchorwa|Kasese|Katakwi|Kibale|Kiboga|Kisoro|Kitgum|Kotido|Kumi|Lira|Luwero|Masaka|Masindi|Mbale|Mbarara|Moroto|Moyo|Mpigi|Mubende|Mukono|Nakasongola|Nebbi|Ntungamo|Pallisa|Rakai|Rukungiri|Sembabule|Soroti|Tororo";
s_a[235] = "Avtonomna Respublika Krym (Simferopol')|Cherkas'ka (Cherkasy)|Chernihivs'ka (Chernihiv)|Chernivets'ka (Chernivtsi)|Dnipropetrovs'ka (Dnipropetrovs'k)|Donets'ka (Donets'k)|Ivano-Frankivs'ka (Ivano-Frankivs'k)|Kharkivs'ka (Kharkiv)|Khersons'ka (Kherson)|Khmel'nyts'ka (Khmel'nyts'kyy)|Kirovohrads'ka (Kirovohrad)|Kyyiv|Kyyivs'ka (Kiev)|L'vivs'ka (L'viv)|Luhans'ka (Luhans'k)|Mykolayivs'ka (Mykolayiv)|Odes'ka (Odesa)|Poltavs'ka (Poltava)|Rivnens'ka (Rivne)|Sevastopol'|Sums'ka (Sumy)|Ternopil's'ka (Ternopil')|Vinnyts'ka (Vinnytsya)|Volyns'ka (Luts'k)|Zakarpats'ka (Uzhhorod)|Zaporiz'ka (Zaporizhzhya)|Zhytomyrs'ka (Zhytomyr)"
s_a[236] = "'Ajman|Abu Zaby (Abu Dhabi)|Al Fujayrah|Ash Shariqah (Sharjah)|Dubayy (Dubai)|Ra's al Khaymah|Umm al Qaywayn";
s_a[237] = "Barking and Dagenham|Barnet|Barnsley|Bath and North East Somerset|Bedfordshire|Bexley|Birmingham|Blackburn with Darwen|Blackpool|Bolton|Bournemouth|Bracknell Forest|Bradford|Brent|Brighton and Hove|Bromley|Buckinghamshire|Bury|Calderdale|Cambridgeshire|Camden|Cheshire|City of Bristol|City of Kingston upon Hull|City of London|Cornwall|Coventry|Croydon|Cumbria|Darlington|Derby|Derbyshire|Devon|Doncaster|Dorset|Dudley|Durham|Ealing|East Riding of Yorkshire|East Sussex|Enfield|Essex|Gateshead|Gloucestershire|Greenwich|Hackney|Halton|Hammersmith and Fulham|Hampshire|Haringey|Harrow|Hartlepool|Havering|Herefordshire|Hertfordshire|Hillingdon|Hounslow|Isle of Wight|Islington|Kensington and Chelsea|Kent|Kingston upon Thames|Kirklees|Knowsley|Lambeth|Lancashire|Leeds|Leicester|Leicestershire|Lewisham|Lincolnshire|Liverpool|Luton|Manchester|Medway|Merton|Middlesbrough|Milton Keynes|Newcastle upon Tyne|Newham|Norfolk|North East Lincolnshire|North Lincolnshire|North Somerset|North Tyneside|North Yorkshire|Northamptonshire|Northumberland|Nottingham|Nottinghamshire|Oldham|Oxfordshire|Peterborough|Plymouth|Poole|Portsmouth|Reading|Redbridge|Redcar and Cleveland|Richmond upon Thames|Rochdale|Rotherham|Rutland|Salford|Sandwell|Sefton|Sheffield|Shropshire|Slough|Solihull|Somerset|South Gloucestershire|South Tyneside|Southampton|Southend-on-Sea|Southwark|St. Helens|Staffordshire|Stockport|Stockton-on-Tees|Stoke-on-Trent|Suffolk|Sunderland|Surrey|Sutton|Swindon|Tameside|Telford and Wrekin|Thurrock|Torbay|Tower Hamlets|Trafford|Wakefield|Walsall|Waltham Forest|Wandsworth|Warrington|Warwickshire|West Berkshire|West Sussex|Westminster|Wigan|Wiltshire|Windsor and Maidenhead|Wirral|Wokingham|Wolverhampton|Worcestershire|York";
s_a[238] = "Artigas|Canelones|Cerro Largo|Colonia|Durazno|Flores|Florida|Lavalleja|Maldonado|Montevideo|Paysandu|Rio Negro|Rivera|Rocha|Salto|San Jose|Soriano|Tacuarembo|Treinta y Tres";
s_a[239] = "Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";
s_a[240] = "Andijon Wiloyati|Bukhoro Wiloyati|Farghona Wiloyati|Jizzakh Wiloyati|Khorazm Wiloyati (Urganch)|Namangan Wiloyati|Nawoiy Wiloyati|Qashqadaryo Wiloyati (Qarshi)|Qoraqalpoghiston (Nukus)|Samarqand Wiloyati|Sirdaryo Wiloyati (Guliston)|Surkhondaryo Wiloyati (Termiz)|Toshkent Shahri|Toshkent Wiloyati";
s_a[241] = "Malampa|Penama|Sanma|Shefa|Tafea|Torba";
s_a[242] = "Amazonas|Anzoategui|Apure|Aragua|Barinas|Bolivar|Carabobo|Cojedes|Delta Amacuro|Dependencias Federales|Distrito Federal|Falcon|Guarico|Lara|Merida|Miranda|Monagas|Nueva Esparta|Portuguesa|Sucre|Tachira|Trujillo|Vargas|Yaracuy|Zulia";
s_a[243] = "An Giang|Ba Ria-Vung Tau|Bac Giang|Bac Kan|Bac Lieu|Bac Ninh|Ben Tre|Binh Dinh|Binh Duong|Binh Phuoc|Binh Thuan|Ca Mau|Can Tho|Cao Bang|Da Nang|Dac Lak|Dong Nai|Dong Thap|Gia Lai|Ha Giang|Ha Nam|Ha Noi|Ha Tay|Ha Tinh|Hai Duong|Hai Phong|Ho Chi Minh|Hoa Binh|Hung Yen|Khanh Hoa|Kien Giang|Kon Tum|Lai Chau|Lam Dong|Lang Son|Lao Cai|Long An|Nam Dinh|Nghe An|Ninh Binh|Ninh Thuan|Phu Tho|Phu Yen|Quang Binh|Quang Nam|Quang Ngai|Quang Ninh|Quang Tri|Soc Trang|Son La|Tay Ninh|Thai Binh|Thai Nguyen|Thanh Hoa|Thua Thien-Hue|Tien Giang|Tra Vinh|Tuyen Quang|Vinh Long|Vinh Phuc|Yen Bai";
s_a[244] = "Saint Croix|Saint John|Saint Thomas";
s_a[245] = "Blaenau Gwent|Bridgend|Caerphilly|Cardiff|Carmarthenshire|Ceredigion|Conwy|Denbighshire|Flintshire|Gwynedd|Isle of Anglesey|Merthyr Tydfil|Monmouthshire|Neath Port Talbot|Newport|Pembrokeshire|Powys|Rhondda Cynon Taff|Swansea|The Vale of Glamorgan|Torfaen|Wrexham";
s_a[246] = "Alo|Sigave|Wallis";
s_a[247] = "West Bank";
s_a[248] = "Western Sahara";
s_a[249] = "'Adan|'Ataq|Abyan|Al Bayda'|Al Hudaydah|Al Jawf|Al Mahrah|Al Mahwit|Dhamar|Hadhramawt|Hajjah|Ibb|Lahij|Ma'rib|Sa'dah|San'a'|Ta'izz";
s_a[250] = "Kosovo|Montenegro|Serbia|Vojvodina";
s_a[251] = "Central|Copperbelt|Eastern|Luapula|Lusaka|North-Western|Northern|Southern|Western";
s_a[252] = "Bulawayo|Harare|ManicalandMashonaland Central|Mashonaland East|Mashonaland West|Masvingo|Matabeleland North|Matabeleland South|Midlands";

function populateCites(stateElementId, cityElementId) {

var selectedStateIndex = document.getElementById(stateElementId).selectedIndex;

var cityElement = document.getElementById(cityElementId);

cityElement.length = 0; // Fixed by Julian Woods
citylement.options[0] = new Option('Select Local Govt.', '');
cityElement.selectedIndex = 0;

var city_arr = s_a[selectedStateIndex].split("|");

for (var i = 0; i < city_arr.length; i++) {
    cityElement.options[cityElement.length] = new Option(city_arr[i], city_arr[i]);
    }
}

function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select State', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}



populateCountries("country", "state");
    </script>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>

    @include('sweetalert::alert')

    <script>
        @if (session('success'))
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
        @endif
    </script>
</body>

</html>