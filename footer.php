 <footer class="footer" id="Aboutus">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 footerdiv">
                                    <div>
                                        <h3>ABOUT US</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ratione numquam. Laudantium, placeat corporis.

                                        </p>
                                    </div>
                                </div>
                                            <div class="col-lg-4 col-md-6 col-12 footerdiv text-center">
                                                <div>
                                                    <h3>NAVIGATION LINKS</h3>
                                                 <li><a href="">Home</a></li>
                                                <li><a href="">Services</a></li>
                                                <li><a href="">Price</a></li>
                                                <li><a href="">About</a></li>
                                                </div>
                                            </div>
                                                        <div class="col-lg-4 col-md-6 col-12 footerdiv">
                                                            <div>
                                                                <h3>NEWSLETTER</h3>
                                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ratione numquam. Laudantium,
                                                                    placeat corporis.
                                                        
                                                                </p>
                                                                <div class="container newsletterdiv">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-12">
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control news-letter" placeholder="Your Email"
                                                                                    aria-describedby="basic-addon2">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" id="basic-addon2">Subscribe</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                            </div>
                            <div class="mt-5 text-center">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, reiciendis.</p>
                            </div>
                            <div class="scrolltop float-right">
                                <i class="fa fa-arrow-up" onclick="topFunction()" id="btntop"></i>
                            </div>
                        </div>
                    </footer>


                                <!-- jquery links -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
         
         <script> 
           $('.count').counterUp({
               delay:10,
               time:3000
           })
              mybutton=document.getElementById('btntop');

              window.onscroll=function(){scrollFunction()};
              function scrollFunction(){
                  if(document.body.scrollTop>20||document.documentElement.scrollTop>20){
                      mybutton.style.display="block";

                  }else{
                      mybutton.style.display="none"
                  }
              }
              function topFunction(){
                  document.body.scrollTop=0;
                  document.documentElement.scrollTop=0;
              }

        </script>
  
        </body>
</body>
</html>