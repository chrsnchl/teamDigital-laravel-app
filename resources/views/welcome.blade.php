@extends('parent') @section('content')
<div class="container form-top">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
      <div class="panel panel-danger">
        <div class="panel-body">
          <img src="logo-td-invert-v2.png" />
          <br />
          <br />
          Something on your mind? Complete the form to let us know how we can
          help.<br />
          Fields marked with: <span class="req">*</span> are required.<br /><br />
          <form method="POST" action="/" id="contact_form">
            @csrf
            <div class="form-group">
              <label>First Name <span class="req">*</span></label>
              <input
                type="text"
                name="firstname"
                class="form-control"
                placeholder="Enter First Name"
                v-model="firstname"
              />
            </div>
            <div class="form-group">
              <label>Last Name <span class="req">*</span></label>
              <input
                type="text"
                name="lastname"
                class="form-control"
                placeholder="Enter Last  Name"
                v-model="lastname"
              />
            </div>
            <div class="form-group">
              <label>Email <span class="req">*</span></label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter Email"
                v-model="email"
              />
            </div>
            <div class="form-group">
              <label>Company Name</label>
              <input
                type="text"
                name="company"
                class="form-control"
                placeholder="Enter Company Name"
                v-model="company"
              />
            </div>

            <div class="form-group">
              <label>Industry</label><br />
              <select name="industry" style="color: black;" v-model="industry">
                <option value="">--- Please Select: ---</option>
                <option value="Advertising">Advertising</option>
                <option value="Corporate Strategy">Corporate Strategy</option>
                <option value="Motivational Speaker">
                  Motivational Speaker
                </option>
                <option value="Accounts Payable">Accounts Payable</option>
                <option value="Shipping">Shipping</option>
                <option value="Sales">Sales</option>
              </select>
            </div>
            <div class="form-group">
              <label>Message <span class="req">*</span></label>
              <textarea
                rows="3"
                name="message"
                class="form-control"
                placeholder="What's on your mind?"
                v-model="formMessage"
              ></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-raised btn-lg btn-warning" type="submit">
                Send
              </button>
            </div>
          </form>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <p>
          Vue.js data binding
              <ul>
                  <li>
                    First Name: @{{ firstname }}
                  </li>
                  <li>
                    Last Name: @{{ lastname }}
                  </li>
                  <li>
                    Email: @{{ email }}
                  </li>
                  <li>
                    Company: @{{ company }}
                  </li>
                  <li>
                    Industry: @{{ industry }}
                  </li>
                  <li>
                    Message: @{{ formMessage }}
                  </li>
              </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- VUE.js section -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

<script>
    let firstname   = '{{ old('firstname') }}';
    let lastname    = '{{ old('lastname') }}';
    let email       = '{{ old('email') }}';
    let company     = '{{ old('company') }}';
    let industry    = '{{ old('industry') }}';
    let formMessage = '{{ old('formMessage') }}';

    var app = new Vue({
    el: '#vue-app',
    data: {
        message: 'Hello from Vue!',
        firstname: firstname,
        lastname: lastname,
        email: email,
        company: company,
        industry: industry,
        formMessage: formMessage,
    }
    })
</script>
<!-- VUE -->
@stop
