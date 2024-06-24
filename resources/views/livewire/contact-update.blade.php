<div>

    <form wire:submit.prevent="update" class="my-2">
        <input type="hidden" name = "" wire:model = "contactId">
        <div class="row">
            <div class="col">
                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" name="" id="" placeholder="Name">

                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="" id="" placeholder="Phone">

                @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
</div>

