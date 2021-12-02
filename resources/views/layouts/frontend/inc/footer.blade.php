<section id="footer">
    <div class="container footer">
      <div class="row">
        <div class="col-md-4">
          <h2 class="head">Types Of Places</h2>
          @forelse ($placetypes as $placetype)
            <p><i class="fas fa-check"> </i>  <a href="{{ route('placetype.wise.place', $placetype->id) }}">{{ $placetype->name }}</a></p>
          @empty 
            <p class="text-center m-auto p-3 text-white bg-dark"><strong>No Placetype found right now</strong></p>
          @endforelse
        </div>
        <div class="col-md-4">
          <h2 class="head">Services</h2>
          <p><i class="fas fa-check"> </i> <a href="">Safety/Secure</a></p>
          <p><i class="fas fa-check"> </i> <a href="">Amazing Places</a></p>
           <p><i class="fas fa-check"> </i>  <a href="">Low Cost Packages</a></p>
           <p><i class="fas fa-check"> </i> <a href="">Amazing Places</a></p>
           <!--<p><i class="fas fa-check"> </i> <a href="">Secure</a></p>
           <p><i class="fas fa-check"> </i> <a href="">Talented Guides</a></p>-->
           <p><i class="fas fa-check"> </i> <a href="">24/7 Support</a></p>
        </div>

       
        <div class="col-md-4">
          <h2 class="head">Our Location</h2>
          <p> <i class="fas fa-map-marker-alt"></i> Mohammadpur, Dhaka</p>
          <p><i class="fas fa-phone"></i> +88 01308052703</p>
          <p><i class="fas fa-envelope"></i> zannat-183@gmail.com</p>
        </div>
      </div>
      <hr style="background-color: white;" class="pb-0">
      <p class="text-center p-3 mb-0"><b>Copyright <b> &copy;</b> Agency and contributors 2021 By Zannat</b></p>
    </div>
  </section>