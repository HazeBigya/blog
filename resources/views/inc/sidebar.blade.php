          
         <div class="col-md-3 blog-sidebar">
<div class="sidebarpd">
          <div class="sidebar-module sidebar-module-inset">

            <h4>About</h4>

            <p>Blooging <em>the Swiss Army knives of the internet</em>. Share your ideas and thoughs with the world and connect your audience. Grow the community to reach even greater viewer base.</p>

</div>
          </div> 
<div class="sidebarpd">
          <div class="sidebar-module sidebar-module-inset ">

            <h4>Archives</h4>

            <ol class="list-unstyled">
            @foreach($archives as $stats)
            
                <li>

                  {{ $stats['month'].' '.$stats['year'] }}

               

                </li>

               @endforeach
             </ol>
            </div>
           </div>

<div class="sidebarpd">
        

           <div class="sidebar-module sidebar-module-inset">
            
            <h4>Elsewhere</h4>

            <ol class="list-unstyled">

              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>

            </ol>
</div>
          </div>

      </div><!-- /.blog-sidebar -->