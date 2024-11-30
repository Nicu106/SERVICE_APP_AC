<!-- resources/view/home.blade.php -->

@extends('layout.base')

@section('title', 'Home | SkillSource')

@section('content')
<div class="home-container">
    <x-instagram-post
        username="Adrian Codreanu"
        profile-pic="{{ url('https://avatar.iran.liara.run/public/3') }}"
        job-title="Mecanic auto"
        post-image="{{ url('https://www.mg.co.uk/sites/default/files/2023-03/iStock-1347150429%201258%20x%20838.jpg') }}"
        description="Oferim servicii profesionale de reparații auto și detailing, asigurându-ne că vehiculul tău arată și funcționează impecabil. De la reparații mecanice la curățare și lustruire detaliată, ne dedicăm să îți readucem mașina la starea sa optimă."
        likes="138"
        price="500+ lei"
    />
    <x-instagram-post
        username="Eugen Stoica"
        profile-pic="{{ url('https://avatar.iran.liara.run/public/37') }}"
        job-title="Fotograf"
        post-image="{{ url('https://i.pinimg.com/736x/72/14/c6/7214c68027327e7ad7bc75e3d6933022.jpg') }}"
        description="Capturăm momentele tale speciale cu profesionalism și creativitate. Oferim servicii de fotografie pentru evenimente, portrete și peisaje, asigurându-ne că fiecare imagine spune o poveste unică."
        likes="947"
        price="€50/oră"
    />
    <x-instagram-post
        username="Gabriel Gheorghiu"
        profile-pic="{{ url('https://avatar.iran.liara.run/public/43') }}"
        job-title="Mecanic uși"
        post-image="{{ url('https://www.moneypit.com/wp-content/uploads/2017/08/repairing-a-door.jpg') }}"
        description="Oferim servicii specializate de reparare a ușilor, abordând o gamă variată de probleme, de la ajustarea balamalelor și înlocuirea încuietorilor, până la repararea sau înlocuirea panourilor deteriorate. Cu o experiență vastă și un angajament față de calitate, ne asigurăm că fiecare ușă funcționează perfect și se integrează estetic în spațiul tău."
        likes="85"
        price="300+ lei"
    />
    <x-instagram-post
        username="Horea Popescu"
        profile-pic="{{ url('https://avatar.iran.liara.run/public/41') }}"
        job-title="Consultant afaceri"
        post-image="{{ url('https://www.fsaa.org.au/wp-content/uploads/2024/01/AdobeStock_478175872-scaled-e1704434843137.jpeg') }}"
        description="Oferim servicii de consultanță în afaceri pentru a sprijini companiile în dezvoltarea strategiilor eficiente și inovatoare. Echipa noastră de experți colaborează îndeaproape cu clienții pentru a identifica oportunități de creștere, a optimiza procesele operaționale și a îmbunătăți performanța generală. Ne angajăm să oferim soluții personalizate care să răspundă nevoilor unice ale fiecărei afaceri."
        likes="47"
        price="200+ lei/oră"
    />
</div>

@endsection
