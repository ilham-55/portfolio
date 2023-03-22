<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding-left:20px;>Welcome!</div>
                  <div class="card-body " style="padding:20px;">
                    <h3>Contact Message</h3>
                    <p>Name: {{ $data['name'] }}</p>
                    <p>Subject: {{ $data['subject'] }}</p>
                    <p>Email: {{ $data['email'] }}</p>
                    <p>Description: {{ $data['content'] }}</p>
               </div>
           </div>
       </div>
   </div>
</div>