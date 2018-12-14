@extends('layouts.app')
      @include('inc.carousel')
@section('content')
  <div id="title "class="mx-auto" style="width:100%">
    <h1 class="text-white shadow-lg p-4 mb-4">Home</h1>
  </div>


      <p>San Pablo, officially the City of San Pablo, (Tagalog: Lungsod ng San Pablo), or simply known as San Pablo City, is a 1st class city in the province of Laguna, Philippines. According to the 2015 census, it has a population of 266,068 people.[3]

  Located in the southern portion of Laguna province, it is one of the oldest cities in the Philippines. By land area, it is the largest in the province of Laguna. Its population ranks sixth within the province after the cities of Calamba, Santa Rosa, Biñan, San Pedro, and Cabuyao.

  The city is more popularly known as the "City of Seven Lakes" (Tagalog: Lungsod ng Pitong Lawa), referring to the Seven Lakes of San Pablo: Lake Sampaloc (or Sampalok), Lake Palakpakin, Lake Bunot, Lakes Pandin and Yambo, Lake Muhikap, and Lake Calibato.

  San Pablo was part of the Roman Catholic Archdiocese of Lipa since 1910. On November 28, 1967, it became an independent diocese and became the Roman Catholic Diocese of San Pablo.</p>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
@section('sidebar')
  <div class="buttonf">
   <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
     Fill Up Forms
   </button>
   <div class="dropdown-menu">
     <a class="dropdown-item" href="{{URL::asset('docs/BUSINESS PERMIT APPLICATION FORM.docx')}}" download>Download Business Registration Form</a>
     <a class="dropdown-item" href="form">Online BPLO Fill Up</a>
     {{-- <a class="dropdown-item" href="#">Link 3</a> --}}
   </div>
  </div>
  @parent
  {{-- <p>This is appended to the sidebar</p> --}}
@endsection
