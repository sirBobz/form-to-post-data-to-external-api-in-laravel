<div>
    @if(!empty($successMessage))
<div class="alert alert-success">
   {{ $successMessage }}
</div>

@endif
    <form wire:submit.prevent="submit" action="POST">
        <div class="row col-12">
            <div class="form-group col-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" wire:model="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row col-12">
        <div class="form-group col-6">
            <label for="date_of_birth">Date of birth</label>
            <input type="text" class="form-control" id="date_of_birth" placeholder="Enter your date of birth" wire:model="date_of_birth">
            @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group col-6">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter your location" wire:model="location">
            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row col-12">
        <div class="form-group col-6">
            <label for="timezone">Timezone</label>
            <input type="text" class="form-control" id="timezone" placeholder="Enter your timezone" wire:model="timezone">
            @error('timezone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group col-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter a username" wire:model="username">
            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row offset-9">
        <button type="submit" class="btn btn-primary btn-sm">Save employee</button>
    </div>
    </form>
</div>
