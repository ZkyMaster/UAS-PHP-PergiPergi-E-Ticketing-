<form action="" method="post">

          <div class="col-md-12">
              <h5>Subscribe Message</h5>
                
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Subject reply</label>
                        <input type="text" name="subject_reply" id="subject" class="form-control" placeholder="">
                      </div>
                </div>
                <div class="row form-group">
                      <div class="col-md-12">
                        <label for="subject">Message</label>
                        <textarea name="pesan_balas" id="message" cols="30" rows="10" class="form-control" placeholder=""></textarea>
                      </div>
                </div>
            </div>

            <div class="form-group text-center" style="padding-left: 900px;">
              <div class="col-md-12">

                <div class="col-md-6" style="">
                  <input type="submit" name="Reply" value="Reply" class="btn btn-primary btn-md">
                </div>
              </div>
            </div>
              <?php if(isset($_POST['Reply'])){
                    echo "<script>alert('Reply All Success');</script>";
                    }
              ?>
        </form>
