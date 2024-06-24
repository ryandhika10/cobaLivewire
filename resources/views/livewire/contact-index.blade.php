<div class="table-responsive">

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>

    <div class="row">
        <div class="col">
            <select wire:model = "paginate" name="" id="" class="form-select form-select-sm w-auto mb-3">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" type="text" name="" id="" class="form-control form-control-sm" placeholder="Search">
        </div>
    </div>

    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope ="col">No</th>
                <th scope ="col">Name</th>
                <th scope ="col">Phone</th>
                <th scope ="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <button wire:click = "getContact({{ $contact->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                            <button wire:click = "destroy({{ $contact->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                        </td>       
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
