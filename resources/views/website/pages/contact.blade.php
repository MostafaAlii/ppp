@extends('website.layouts.website')
@section('pageTitle')
{{$title}} | Contact
@endsection

@section('css')
  <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div style="width:1000px;height:100%;margin:auto;font-family:Arial;font-size:12px;" bis_skin_checked="1">
     <div class="row align-items-center mt-5">
      <div class="col-md-6 col-12">
        <h1 class="page_title">contact us</h1>
        <form class="register-form p-0 m-0" id="contactForm">
          <div class="form-group">
            <input
              id="name"
              type="text"
              class="form-control"
              name="name"
              placeholder="Name"
              required
            />
          </div>
          <div class="form-group">
            <input
              id="email"
              type="email"
              class="form-control"
              name="email"
              placeholder="Email"
              required
            />
          </div>
          <div class="form-group">
            <input
              id="website"
              type="url"
              class="form-control"
              name="website"
              placeholder="Website"
            />
          </div>
          <div class="form-group">
            <input
              id="phone"
              type="tel"
              class="form-control"
              name="phone"
              placeholder="Phone"
            />
          </div>
          <div class="form-group">
            <textarea
              rows="5"
              id="message"
              class="form-control"
              name="message"
              placeholder="Message"
              required
            ></textarea>
          </div>
          <button type="submit" class="main_btn mx-auto">
            <span>submit</span>
          </button>
        </form>
      </div>
        <div class="col-md-6 col-12">
            <div align="right" bis_skin_checked="1">
                        <img src="{{ asset($contact->ImagePath()) }}" width="295" height="283">
                    </div>
         </div>  
    </div>
   
    <!--<table width="959" border="0">-->
    <!--    <tbody>-->
    <!--        <tr>-->
    <!--            <td width="658">-->
    <!--                {{--<iframe name="I1" src="http://artisticretouch.com/contact/contact.php" width="680" height="400" border="1" frameborder="1" marginwidth="1" marginheight="1" scrolling="no" align="center"></iframe>--}}-->
    <!--            </td>-->
    <!--            <td width="291">-->
    <!--                <div align="right" bis_skin_checked="1">-->
    <!--                    <img src="{{ asset($contact->ImagePath()) }}" width="295" height="283">-->
    <!--                </div>-->
    <!--            </td>-->
    <!--        </tr>-->
    <!--  </tbody>-->
    <!--</table>-->
</div>
@endsection

@section('js')
 <script>
      let contactForm = document.getElementById("contactForm");
      contactForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this);
        fetch("endpoint_url", {
          method: "POST",
          body: formData,
        })
          .then((response) => response.json())
          .then((data) => {
            contactForm.innerHTML = "<p>Thank you for your submission!</p>";
          })
          .catch((error) => {
            console.error("Error:", error);
          });
      });
    </script>
@endsection