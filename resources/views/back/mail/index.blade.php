<x-app-layout>
<div class="main-content">
        <section class="section">
          <div class="section-body">
          
          
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Mail Setting</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{route('mail.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                  <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MAIL NAME</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select name="MAIL_FROM_NAME" class="form-control">
                                                <option value="{{ env('MAIL_FROM_NAME') }}">{{ env('MAIL_FROM_NAME') }}</option>
                                           
                                            </select>
                                        </div>
                                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MAILER</label>
                      <div class="col-sm-12 col-md-7">
                          <select name="MAIL_MAILER" class="form-control" >
                              <option value="{{ env('MAIL_MAILER') ?? ''}}">{{ env('MAIL_MAILER') ?? ''}}</option>
                          </select>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">HOST</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_HOST" value="{{ env('MAIL_HOST') ?? ''}}" >
                      </div>
                    </div>
                    
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PORT</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_PORT" value="{{ env('MAIL_PORT') ?? ''}}" >
                      </div>
                    </div>
                    
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">USERNAME</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_USERNAME" value="{{ env('MAIL_USERNAME') ?? ''}}" >
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PASSWORD</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="password" name="MAIL_PASSWORD" value="{{ env('MAIL_PASSWORD') ?? ''}}" >
                      </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ENCRYPTION</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_ENCRYPTION" value="{{ env('MAIL_ENCRYPTION') ?? ''}}" >
                      </div>
                    </div>
                    
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">FROM</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_FROM_ADDRESS" value="{{ env('MAIL_FROM_ADDRESS') ?? ''}}" >
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TO</label>
                      <div class="col-sm-12 col-md-7">
                      <input class="form-control" type="text" name="MAIL_To_ADDRESS" value="{{ env('MAIL_To_ADDRESS') ?? ''}}" >
                      </div>
                    </div>
                  

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary"  type="submit" >Update</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </section>
      
      </div>

</x-app-layout>