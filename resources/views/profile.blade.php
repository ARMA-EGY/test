@if (LaravelLocalization::getCurrentLocale() == 'ar')
    @php
    $dir = 'rtl';
    $text = 'text-right';
    $float = 'float-left';
    @endphp
@elseif (LaravelLocalization::getCurrentLocale() == 'en')  
    @php
    $dir = 'ltr';
    $text = 'text-left';
    $float = 'float-right';
    @endphp
@endif

@extends('layouts.app') 


@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" rel="stylesheet">

<style>

  .username
  {
      position: relative;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-image: url(../images/aurora.jpg);
      background-size: auto;
      background-attachment: unset;
      animation: clouds-moving infinite 30s;
      animation-fill-mode: forwards;
      animation-play-state: running;
      animation-timing-function: linear;
      text-align: center;
      font-family: sans-serif;
  }

  .user_avatar
  {
      border-radius: 50%;
      box-shadow: 0 0 5px 1px rgb(0 0 0 / 50%);
      display: inline-block;width: 50px;
  }

  .count-card {
      margin: 10px;
      padding: 15px 10px;
      box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.15);
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 15px;
      transition: all 0.3s linear;
  }

  .counter {
      text-align: center;
      margin-top: 10px;
  }

  .icon {
      float: left;
      padding: 5px;
  }

  .fs-15-t {
      font-size: 15pt;
  }

  hr {
      border-top: none;
      background: linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);
      height: 2px;
  }

  .details_box {
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.15);
      border: 1px solid rgba(0, 0, 0, 0.15);
  }

  .details_icon, .name
  {
      font-family: Raleway, sans-serif;
  }

  h6 i {font-size: 14px;}

  .bg-default {
      background-color: #172b4d !important;
  }

  .shadow {
      box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
  }

  .card.shadow {
      border: 0 !important;
  }

  .table .thead-dark th {
      color: #4d7bca;
      background-color: #1c345d;
  }

  .card .table td, .card .table th {
      padding-right: 1.5rem;
      padding-left: 1.5rem;
  }

  .rounded-circle, .avatar.rounded-circle img {
      border-radius: 50% !important;
  }

  .avatar img {
      width: 100%;
  }

  .avatar {
      font-size: 1rem;
      display: inline-flex;
      width: 48px;
      height: 48px;
      color: #fff;
      border-radius: .375rem;
      background-color: #adb5bd;
      align-items: center;
      justify-content: center;
  }

  .table-dark th, .table-dark td, .table-dark thead th {
      border-color: #1f3a68;
  }

  .table thead th {
      font-size: .65rem;
      padding-top: .75rem;
      padding-bottom: .75rem;
      letter-spacing: 1px;
      text-transform: uppercase;
      border-bottom: 1px solid #e9ecef;
  }

  .table-dark {
      color: #f8f9fe;
      background-color: #172b4d;
  }

  .text-sm {
      font-size: .875rem !important;
  }

  .badge-dot {
      font-size: .875rem;
      font-weight: 400;
      padding-right: 0;
      padding-left: 0;
      text-transform: none;
      background: transparent;
  }

  .badge-dot i {
      display: inline-block;
      width: .375rem;
      height: .375rem;
      margin-right: .375rem;
      vertical-align: middle;
      border-radius: 50%;
  }

  .table td .progress {
      width: 120px;
      height: 3px;
      margin: 0;
  }

  .progress {
      overflow: hidden;
      font-size: .75rem;
      display: flex;
      border-radius: .25rem;
      background-color: #e9ecef;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
  }

  .progress-bar {
      height: auto;
      border-radius: 0;
      box-shadow: none;
      display: flex;
      overflow: hidden;
      flex-direction: column;
      transition: width .6s ease;
      text-align: center;
      white-space: nowrap;
      color: #fff;
      background-color: #5e72e4;
      justify-content: center;
  }

  .dataTables_filter, .dataTables_length{display: none;}

  .dataTables_info {margin: 0 10px;}

  .pagination
  {
      float: right;
      margin-right: 10px;
      margin-left: 10px;
  }

</style>


 <!--==============================  Navbar Section    ==============================--> 
   
 @include('include.navbar2')

<div class="py-5" style="height: 15vh; background:linear-gradient(-45deg, rgba(147,26,222,0.83) 0%, rgba(28,206,234,0.82) 100%);">


</div>



<div class="container {{$text}}" dir="{{$dir}}">
    <div class="row mb-4" dir="{{$dir}}">

        <div class="col-md-12 pt-4 text-center">
						
            <img class="m-2 user_avatar" width="50" src="{{ Auth::user()->avatar }}" alt=""> 

            <h4 class="font-weight-bold mb-1 username"> {{ Auth::user()->name }} </h4> 
            
            <span class="member_date"> {{__('core.member-since')}} {{__('core.'.Auth::user()->created_at->format('M'))}}{{ Auth::user()->created_at->format(', Y') }}</span>
            
        </div>


    </div>

    <div class="row justify-content-center my-4">

        <div class="col-lg-2 col-md-3 col-6 p-0 hvr-float-shadow">
           <div class="count-card">
             <h5 class="text-center text-secondary"><strong> {{__('core.orders')}} </strong></h5>
               <div class="counter">
                 <div class="icon">
                   <i class="fa fa-shopping-cart fs-15-t text-info"></i>
                 </div>
                 <span>  0  </span>
               </div>
           </div>
         </div>

        <div class="col-lg-2 col-md-3 col-6 p-0 hvr-float-shadow">
           <div class="count-card">
             <h5 class="text-center text-secondary"><strong> {{__('core.balance')}} </strong></h5>
               <div class="counter">
                 <div class="icon">
                   <i class="fas fa-coins fs-15-t text-success"></i>
                 </div>
                 <span>  {{ Auth::user()->balance }} {{__('core.egp')}}  </span>
               </div>
           </div>
         </div>

    </div>

    <hr>
    
    <div class="row my-4">
        <div class="col-md-3 text-center">
            <!-- =========  Details Box  =========  -->
                    
                <div class="my-3 details_box col-12 {{$text}}" dir="{{$dir}}">

                    <h6 class="details_row">
                        <i class="fas fa-id-card"></i>
                        <strong class="details_icon mb-1 text-secondary"> {{__('core.name')}} </strong>
                        <p class="mx-3 my-2 font-weight-bold">{{ Auth::user()->name }}</p> 
                    </h6>
                    <hr>

                    <h6 class="details_row">
                        <i class="fas fa-envelope-open-text"></i>
                        <strong class="details_icon mb-1 text-secondary"> {{__('core.email')}} </strong>
                        <p class="mx-3 my-2 font-weight-bold">{{ Auth::user()->email }}</p> 
                    </h6>
                    <hr>

                    <h6 class="details_row">
                        <i class="fa fa-mobile"></i>
                        <strong class="details_icon mb-1 text-secondary"> {{__('core.phone')}} </strong>
                        <i class="fa fa-edit pointer {{$float}} edit_info" data-toggle="modal" data-target="#editModal" data-name="{{__('core.phone')}}" data-token="{{ Auth::user()->remember_token }}" data-type="phone" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('user.phone')}}"></i>
                        <p class="mx-3 my-2 font-weight-bold userphone">@if(empty(Auth::user()->phone)) - @else {{ Auth::user()->phone }} @endif</p>
                    </h6>
                    <hr>
                
                    <h6 class="">
                        <i class="fas fa-building"></i>
                        <strong class="details_icon mb-1 text-secondary"> {{__('core.company')}}  </strong>
                        <i class="fa fa-edit pointer {{$float}} edit_info" data-toggle="modal" data-target="#editModal" data-name="{{__('core.company')}}" data-token="{{ Auth::user()->remember_token }}" data-type="company" data-lang="{{LaravelLocalization::getCurrentLocale()}}" data-url="{{route('user.company')}}"></i>
                        <p class="mx-3 my-2 font-weight-bold usercompany">@if(empty(Auth::user()->company)) - @else {{ Auth::user()->company }} @endif</p>
                        
                    </h6>

                </div>
                    
        </div>

        <div class="col-md-9">
            <div class="card bg-default shadow my-3">
              <div class="card-header bg-transparent border-0">
                <h4 class="text-white mb-0">{{__('core.orders')}}</h4>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush DataTable">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="sort" data-sort="name">Project</th>
                      <th scope="col" class="sort" data-sort="budget">Budget</th>
                      <th scope="col" class="sort" data-sort="status">Status</th>
                      <th scope="col" class="sort" data-sort="completion">Completion</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list">

                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Argon Design System</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        $2500 USD
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-warning"></i>
                          <span class="status">pending</span>
                        </span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="completion mr-2">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <div class="media align-items-center">
                            <div class="media-body">
                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                            </div>
                        </div>
                        </th>
                        <td class="budget">
                        $1800 USD
                        </td>
                        <td>
                        <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status">completed</span>
                        </span>
                        </td>
                        <td>
                        <div class="d-flex align-items-center">
                            <span class="completion mr-2">100%</span>
                            <div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                            </div>
                        </div>
                        </td>
                        <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
        </div>

    </div>

</div>




<!-- Edit Info Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content {{$text}}" dir="{{$dir}}">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">-</h5>
        <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form class="edit_info_form" data-lang="{{LaravelLocalization::getCurrentLocale()}}">
          @csrf
          <div class="modal-body text-center" id="get_edit_modal">
            
          </div>
          <div class="modal-footer">
            <input type="hidden" name="token" value="{{ Auth::user()->remember_token }}">
            <input type="hidden" name="url" id="form_url">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('core.close')}}</button>
            <button type="submit" class="btn btn-primary submit">{{__('core.save-changes')}}</button>
          </div>
      </form>
    </div>
  </div>
</div>
 
 <!--==============================  Footer Section    ==============================--> 

 @include('include.footer2')

@endsection



@section('script')

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


<script>
  $('.DataTable').DataTable( {
    "pagingType": "numbers"
  } );



  $('.edit_info').click(function()
  {

    var name   = $(this).attr('data-name');
    var token  = $(this).attr('data-token');
    var type   = $(this).attr('data-type');
    var lang   = $(this).attr('data-lang');
    var url    = $(this).attr('data-url');

    $('#editLabel').text(name);
    $('#form_url').val(url);

    $('#get_edit_modal').html('<img class="m-auto" src="/images/loading.gif" width="50">');

    $.ajax({
         url:"/ajax.php",
         type:"POST",
         dataType: 'text',
         data:   {user_token:token, type:type, get_user_info:1, lang:lang},
        success : function(response)
          {
            $('#get_edit_modal').html(response);
          }  
        })

  });



  $('#editModal').on("submit",".edit_info_form", function(e)
  {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');
        var lang 		= $(this).attr('data-lang');
        var url     = $('#form_url').val();
        var target  = '.'+$('.target').val();
        var value   = $('.field').val();

        if (lang == 'en')
            {
                var head1 	= 'Thank You';
                var title1 	= 'Your data changed successfully. ';
                var head2 	= 'Oops...';
                var title2 	= 'Something went wrong, please try again later.';
            }
        else
            {
                var head1 = 'شكرآ لك';
                var title1 = 'تم تغير البيانات بنجاح';
                var head2 	= 'عفوآ';
                var title2 	= 'هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق.';
            }

        $.ajax({
            url: 		url,
            method: 	'POST',
            dataType: 	'json',
            data:		$(this).serialize()	,
            success : function(data)
                {
                    $('.submit').prop('disabled', false);
                    
                    if (data['status'] == 'true')
                    {
                        Swal.fire(
                                head1,
                                title1,
                                'success'
                                )
                        $(target).text(value);
                        $('.modal').modal('hide');
                        $('.field').text('');
                        $('.field').val('');

                        
                    }
                    else if (data['status'] == 'false')
                    {
                        Swal.fire(
                                head2,
                                title2,
                                'error'
                                )
                    }
                },
                error : function(reject)
                {
                    $('.submit').prop('disabled', false);

                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val)
                    {
                       $('#'+ key + '_error').text(val[0]);

                        Swal.fire(
                                head2,
                                val[0],
                                'error'
                                )
                    });
                }
            
            
        });

  });


</script>

@endsection
