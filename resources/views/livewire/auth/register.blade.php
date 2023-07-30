<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Register page</h3>
                <form wire:submit.prevent="register">
                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('user.name') is-invalid @enderror" id="name" wire:model.lazy="user.name" autocomplete="off">
                        @error('user.name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('user.email') is-invalid @enderror" id="email" wire:model.lazy="user.email" autocomplete="off">
                        @error('user.email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('user.password') is-invalid @enderror" id="password" wire:model.lazy="user.password" autocomplete="off">
                        @error('user.password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
