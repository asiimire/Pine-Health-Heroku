@if (session()->has('message'))

      <div class="alert alert-success" type="button" data-dismiss="alert">
        <button class="close">
            x
        </button>
        {{ session()->get('message') }}
      </div>
          
      @endif