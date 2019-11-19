@extends('layouts/app')

@section('content')
    <section id="opening" class="content">
        <div class="container">
            <div class="flex">
                <div id="opening-txt" class="ease-in-left">
                    <h2>Barroc Intens<span class="yellow">.</span></h2>
                    <p>
                        De gebroeders Maarten en Joris Pulles hebben na het afronden van hun studie de gok gewaagd
                        om een onderneming te starten.
                        De liefde voor koffie ontstond toen Maarten tijdens een stage in Italië de vurige
                        passie van het Italiaanse volk voor koffie ervoer.
                        Zijn droom was om een brug te slaan tussen deze passie en de 'slappe koffie' cultuur die heerst
                        binnen de Nederlandse maatschappij.
                        Dat en de toeval dat zijn broer een onderzoek moest doen naar succesvolle ondernemingen
                        voor zijn opleiding als afstudeeronderzoek. Ze besloten samen de gok te wagen om de koffiemarkt in
                        Nederland te verbeteren met hun revolutionaire koffiemachines die op italiaanse wijzen koffie maken.
                    </p>
                    <span class="font-family">Barroc Intens, onw<span class="yellow">//</span>s lekkere koffie...-</span>
                </div>
                <div class="ease-in-right">
                   <div class="img-border"><img id="opening-img"  src="{{ asset('../images/beans3.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="about-us">
        <div class="container">
            <div class="flex">
                <div class="ease-in-left">
                    <div class="img-border img-right">
                        <img id="about-img" src="{{ asset('../logos/Logo2_groot.png') }}" alt="">
                    </div>
                </div>
                <div class="ease-in-right">
                    <div class="about-us">
                        <h2>About us<span class="yellow">.</span></h2>
                        <p>Wat we zoal doen; het verhuren en onderhouden van Koffie apparaten.
                            Ook installeren we de apparaten voor u.
                            Bij een goede koffie machine hoort goede bonen,
                            ook die bieden wij u aan.</p>
                    </div>

                </div>



            </div>
        </div>
    </section>

    <section class="content" id="products-home">
        <div class="container">
            <div class="flex">
                <div class="ease-in-left">
                    <h2>Products<span class="yellow">.</span></h2>
                    <div class=" img-right">
                        <img id="products-img" src="{{ asset('../images/bit-deluxe.png') }}" alt="">
                    </div>
                </div>
                <div class="ease-in-right">
                    <div class="about-us img-border">
                        <img id="products-img" src="{{ asset('../images/shopping.jpg') }}" alt="">
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="quotation-section">
        <div class="container-forms">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="topic">Onderwerp</label>
                    <input class="form-control" type="text" name="topic">
                </div>

                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <input class="form-control" type="text" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </section>
@endsection





