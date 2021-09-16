<div>
    <form wire:submit.prevent="submit" action="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of birth</label>
            <input type="text" class="form-control" id="date_of_birth" placeholder="Enter your date of birth" wire:model="date_of_birth">
            @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter your location" wire:model="location">
            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="timezone">Timezone</label>
            <input type="text" class="form-control" id="timezone" placeholder="Enter your timezone" wire:model="timezone">
            @error('timezone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter a username" wire:model="username">
            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>
