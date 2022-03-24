<div class="card-body">
    <div class="row">
      <div class="col-6">
          <label for="tracking_no">Tracking Number</label>

          <input type="number" name="tracking_no" id="tracking_no" class="form-control"
            value="{{ old('tracking_no') ?? $courier->tracking_no }}"
            >

          @error('tracking_no')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="company_logo">Barcode</label>

          <input type="file" name="company_logo" id="company_logo" class="form-control">

          @error('company_logo')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="sender_contact"> Sender Contact </label>

          <input type="text" name="sender_contact" id="sender_contact" class="form-control"
          value="{{ old('sender_contact') ?? $courier->sender_contact }}"
           >

          @error('sender_contact')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="sender_address">Sender Address</label>

          <input type="text" name="sender_address" id="sender_address" class="form-control"
          value="{{ old('sender_address') ?? $courier->sender_address }}"
           >

          @error('sender_address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="sender_city"> Sender City </label>

          <input type="text" name="sender_city" id="sender_city" class="form-control"
          value="{{ old('sender_city') ?? $courier->sender_city }}"
           >

          @error('sender_city')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="sender_state">Sender State</label>

          <input type="text" name="sender_state" id="sender_state" class="form-control"
          value="{{ old('sender_state') ?? $courier->sender_state }}"
           >

          @error('sender_state')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for=" sender_pin">Sender Pin</label>

          <input type="text" name="sender_pin" id="sender_pin" class="form-control"
          value="{{ old('sender_pin') ?? $courier->sender_pin }}"
           >

          @error('sender_pin')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="sender_country">Sender Country</label>

          <input type="text" name="sender_country" id="sender_country" class="form-control"
          value="{{ old('sender_country') ?? $courier->sender_country }}"
           >

          @error('sender_country')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="recipient_name">Recepient Name</label>

          <input type="text" name="recipient_name" id="recipient_name" class="form-control"
          value="{{ old('recipient_name') ?? $courier->recipient_name }}"
           >

          @error('recipient_name')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="recepient_contact">Recepient Contact</label>

          <input type="text" name="recepient_contact" id="recepient_contact" class="form-control"
          value="{{ old('recepient_contact') ?? $courier->recepient_contact }}"
           >

          @error('recepient_contact')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="recepient_address">Recepient Address</label>

          <input type="text" name="recepient_address" id="recepient_address" class="form-control"
          value="{{ old('recepient_address') ?? $courier->recepient_address }}"
           >

          @error('recepient_address')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="col-6">
          <label for="recipient_city">Recepient City</label>

          <input type="text" name="recipient_city" id="recipient_city" class="form-control"
          value="{{ old('recipient_city') ?? $courier->recipient_city }}"
           >

          @error('recipient_city')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="recipient_state">Recepient State</label>

          <input type="text" name="recipient_state" id="recipient_state" class="form-control"
          value="{{ old('recipient_state') ?? $courier->recipient_state }}"
           >

          @error('recipient_state')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="recepient_pin">Recepient Pin</label>

          <input type="text" name="recepient_pin" id="recepient_pin" class="form-control"
          value="{{ old('recepient_pin') ?? $courier->recepient_pin }}"
           >

          @error('recepient_pin')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="recepient_country">Recepient Country</label>

          <input type="text" name="recepient_country" id="recepient_country" class="form-control"
          value="{{ old('recepient_country') ?? $courier->recepient_country }}"
           >

          @error('recepient_country')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-3">
          <label for="weight">Weight</label>

          <input type="number" name="weight" id="weight" class="form-control"
          value="{{ old('weight') ?? $courier->weight }}"
           >

          @error('weight')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-3">
          <label for="length">length</label>

          <input type="number" name="length" id="length" class="form-control"
          value="{{ old('length') ?? $courier->length }}"
           >

          @error('length')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-3">
          <label for="breadth">breadth</label>

          <input type="number" name="breadth" id="breadth" class="form-control"
          value="{{ old('breadth') ?? $courier->breadth }}"
           >

          @error('breadth')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-3">
          <label for="height"> height</label>

          <input type="number" name="height" id="height" class="form-control"
          value="{{ old('height') ?? $courier->height }}"
           >

          @error('height')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="status">Status</label>

          <input type="text" name="status" id="status" class="form-control"
          value="{{ old('status') ?? $courier->status }}"
           >

          @error('status')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
      <div class="col-6">
          <label for="from_location"> From:</label>

          <input type="text" name="from_location" id="from_location" class="form-control"
          value="{{ old('from_location') ?? $courier->from_location }}"
           >

          @error('from_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>


      <div class="col-6">
          <label for="to_location"> To:</label>

          <input type="text" name="to_location" id="to_location" class="form-control"
          value="{{ old('to_location') ?? $courier->to_location }}"
           >

          @error('to_location')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>




      <div class="col-12 mt-3">
          <label for="courier_desc">Courier Description</label>
          <textarea name="courier_desc" id="courier_desc"  rows="4" class="form-control"
            
          >{{ old('courier_desc') ?? $courier->courier_desc }}</textarea>
          @error('courier_desc')
          <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

    </div>
</div>
