 <!---modal--->
 <div class="modal formPopUp" id="requestCall" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
          <button type="button" class="close" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 left_block"></div>
              <div class="col-md-6">
                <form method="POST" action="#" accept-charset="UTF-8" name="contact-form" class="contact-form" id="reqCallForm" novalidate="novalidate" siq_id="autopick_2947"><input name="_token" type="hidden" value="1sCc30SSzdtfvHamFloF2qlk9dAhxXwtpX5fkuXN">
                <div class="text-center ">
                  <h3 class="mb-5">Apply Here</h3>
                  <p class="mb-5 POPUPP">We’ll help to achieve your goals and to grow business</p>
                </div>
                  <div id="reqCallForm-errors"></div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="mobile" placeholder="Enter Your Phone Number">

                  </div>
                  <div class="form-group">
                    
                    <select  class="form-control " type="text" name="Jobs" >
                    <option value="" disabled selected class="job-role">Enter Your Job Role</option>
                    <option value="Cloud Developer/ Engineer">Cloud Developer/ Engineer</option>
                    <option value="Devops Engineer">Devops Engineer</option>
                    <option value="QA Engineer">QA Engineer</option>
                    <option value="Front End Developer">Front End Developer</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Enter Your Email ID">

                  </div>
                  
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Enter Your Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-transparent" id="callback-submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
</div>

    <!---modal--->